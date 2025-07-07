

<?php
// ==================== DATABASE CONNECTION ====================
include('include/connection.php');

// Fetch 15 questions for quiz_id = 7
$quiz_id = 7;
$sql = "SELECT * FROM questions WHERE quiz_id = $quiz_id LIMIT 15";
$result = mysqli_query($connection, $sql);

if(!$result) {
    die("Query failed: " . mysqli_error($connection));
}

$questions = mysqli_fetch_all($result, MYSQLI_ASSOC);
$totalQuestions = count($questions);

$currentQuestionIndex = isset($_GET['q']) ? (int)$_GET['q'] : 1;
$arrayIndex = $currentQuestionIndex - 1;

if($arrayIndex < 0 || $arrayIndex >= $totalQuestions) {
    $arrayIndex = 0;
    $currentQuestionIndex = 1;
}

$currentQuestion = $questions[$arrayIndex] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Chemistry Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Base Styles - Optimized for 320px */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #121a2b;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        color: #ffffff;
        position: fixed; /* Prevent scrolling */
        width: 100%;
        height: 100%;
        overflow: hidden; /* Disable scrolling */
    }
    
    #reaction-animation {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        opacity: 0.2;
        pointer-events: none;
    }

    .content {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 1;
        padding: 10px;
        box-sizing: border-box;
    }

    .lab-container {
        background-color: rgba(18, 26, 43, 0.95);
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 300px;
        padding: 12px;
        border: 1px solid rgba(0, 180, 255, 0.3);
        box-sizing: border-box;
        max-height: 100%;
        overflow-y: auto; /* Only scroll inside container if needed */
    }

    h1 {
        color: #00e0ff;
        margin: 0 0 10px 0;
        font-size: 18px;
        text-align: center;
        font-weight: 700;
        text-shadow: 0 0 5px rgba(0, 224, 255, 0.4);
    }

    .level-timer-container {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 10px;
    }

    .level-indicator, .timer {
        padding: 5px 8px;
        border-radius: 12px;
        font-size: 11px;
        text-align: center;
        width: 100%;
        box-sizing: border-box;
    }

    .level-indicator {
        background: rgba(0, 149, 255, 0.2);
        color: #a6e1ff;
        border: 1px solid rgba(0, 149, 255, 0.3);
    }

    .timer {
        background: rgba(255, 107, 0, 0.2);
        color: #ffcc99;
        border: 1px solid rgba(255, 107, 0, 0.3);
    }

    .question-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        padding: 6px 8px;
        font-size: 11px;
    }

    .question-number {
        color: #00e0ff;
        font-weight: bold;
    }

    .question-count {
        color: #a6e1ff;
    }

    .question {
        font-size: 14px;
        margin-bottom: 12px;
        line-height: 1.3;
        padding: 0 5px;
        text-align: center;
    }

    .options-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 8px;
        margin-bottom: 12px;
    }

    .option {
        padding: 8px;
        font-size: 12px;
        min-height: 40px;
        border-radius: 6px;
    }

    .option-label {
        width: 18px;
        height: 18px;
        font-size: 10px;
        top: -6px;
        left: 6px;
    }

    .navigation {
        margin-top: 10px;
    }

    .btn {
        padding: 6px 12px;
        font-size: 12px;
        width: 100%;
    }

    .progress-container {
        margin-top: 10px;
        height: 3px;
    }

    /* Responsive Adjustments */
    @media (min-width: 375px) {
        .lab-container {
            max-width: 340px;
            padding: 15px;
        }
        
        h1 {
            font-size: 20px;
        }
        
        .question {
            font-size: 15px;
        }
        
        .option {
            font-size: 13px;
        }
    }

    @media (min-width: 425px) {
        .level-timer-container {
            flex-direction: row;
        }
        
        .level-indicator, .timer {
            width: auto;
            font-size: 12px;
        }
    }

    @media (min-width: 600px) {
        .lab-container {
            max-width: 500px;
            padding: 20px;
        }
        
        .options-grid {
            grid-template-columns: 1fr 1fr;
        }
        
        h1 {
            font-size: 22px;
        }
    }
</style>
</head>
<body>
    <!-- Reaction Mechanism Animation Canvas -->
    <canvas id="reaction-animation"></canvas>
    
    <!-- Main Content -->
    <div class="content">
        <div class="lab-container">
            <h1>Chemistry Reaction-Based Quiz</h1>
            
            <div class="level-timer-container">
                <div class="level-indicator">LEVEL: ADVANCED</div>
                <div class="timer">⏱️ <span id="timer-display">00:00</span></div>
            </div>
            
            <div class="question-header">
                <div class="question-number">QUESTION <span id="current-question"><?= $currentQuestionIndex ?></span></div>
                <div class="question-count">TOTAL: <span>15</span></div>
            </div>
            
            <div class="question" id="question-text"><?= htmlspecialchars($currentQuestion['question_text']) ?></div>
            
            <div class="options-grid" id="options-container">
                <?php 
                $labels = ['A', 'B', 'C', 'D'];
                $optionLetters = ['a', 'b', 'c', 'd'];
                foreach($optionLetters as $index => $letter): 
                    if(!empty($currentQuestion['option_'.$letter])):
                ?>
                    <div class="option" 
                         onclick="selectOption(this, '<?= $letter ?>', '<?= strtolower($currentQuestion['correct_option']) ?>')">
                        <div class="option-label"><?= $labels[$index] ?></div>
                        <?= htmlspecialchars($currentQuestion['option_'.$letter]) ?>
                    </div>
                <?php endif; endforeach; ?>
            </div>
            
            <div class="navigation">
                <button id="next-btn" class="btn" onclick="nextQuestion()" 
                    <?= ($currentQuestionIndex >= 15) ? 'disabled' : '' ?>>
                    <?= ($currentQuestionIndex >= 15) ? 'COMPLETE QUIZ' : 'NEXT QUESTION →' ?>
                </button>
            </div>
            
            <div class="progress-container">
                <div class="progress-bar" id="progress-bar" 
                     style="width: <?= (($currentQuestionIndex)/15)*100 ?>%"></div>
            </div>
        </div>
    </div>

    <script>
        // Reaction Mechanism Animation (unchanged)
        const canvas = document.getElementById('reaction-animation');
        const ctx = canvas.getContext('2d');
    // Set canvas size
        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);
        
        // Molecule class
        class Molecule {
            constructor() {
                this.reset();
                this.size = 5 + Math.random() * 10;
                this.color = `hsl(${Math.random() * 60 + 180}, 80%, 60%)`;
                this.bonds = [];
                this.bondCooldown = 0;
            }
            
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.vx = (Math.random() - 0.5) * 2;
                this.vy = (Math.random() - 0.5) * 2;
                this.reactionTimer = 0;
            }
            
            update() {
                // Movement
                this.x += this.vx;
                this.y += this.vy;
                
                // Bounce off walls
                if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
                
                // Random direction changes
                if (Math.random() < 0.02) {
                    this.vx += (Math.random() - 0.5) * 0.5;
                    this.vy += (Math.random() - 0.5) * 0.5;
                }
                
                // Limit speed
                const speed = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
                if (speed > 2) {
                    this.vx = (this.vx / speed) * 2;
                    this.vy = (this.vy / speed) * 2;
                }
                
                // Update reaction timer
                if (this.reactionTimer > 0) this.reactionTimer--;
                if (this.bondCooldown > 0) this.bondCooldown--;
            }
            
            draw() {
                // Draw bonds first (behind molecules)
                ctx.strokeStyle = 'rgba(100, 255, 218, 0.3)';
                ctx.lineWidth = 1;
                this.bonds.forEach(bond => {
                    ctx.beginPath();
                    ctx.moveTo(this.x, this.y);
                    ctx.lineTo(bond.x, bond.y);
                    ctx.stroke();
                });
                
                // Draw molecule
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
                
                // Reaction glow
                if (this.reactionTimer > 0) {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size * 2, 0, Math.PI * 2);
                    const gradient = ctx.createRadialGradient(
                        this.x, this.y, this.size,
                        this.x, this.y, this.size * 2
                    );
                    gradient.addColorStop(0, this.color);
                    gradient.addColorStop(1, 'rgba(100, 255, 218, 0)');
                    ctx.fillStyle = gradient;
                    ctx.fill();
                }
            }
            
            checkCollision(other) {
                const dx = this.x - other.x;
                const dy = this.y - other.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                const minDist = this.size + other.size;
                
                if (distance < minDist + 20 && this.reactionTimer === 0 && other.reactionTimer === 0) {
                    // Reaction occurs
                    this.reactionTimer = 30;
                    other.reactionTimer = 30;
                    
                    // Change directions
                    const angle = Math.atan2(dy, dx);
                    const speed1 = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
                    const speed2 = Math.sqrt(other.vx * other.vx + other.vy * other.vy);
                    
                    this.vx = Math.cos(angle) * speed2 * 1.2;
                    this.vy = Math.sin(angle) * speed2 * 1.2;
                    other.vx = -Math.cos(angle) * speed1 * 1.2;
                    other.vy = -Math.sin(angle) * speed1 * 1.2;
                    
                    // Bond formation/breaking
                    if (this.bondCooldown === 0 && other.bondCooldown === 0) {
                        if (Math.random() < 0.3 && !this.bonds.includes(other)) {
                            this.bonds.push(other);
                            other.bonds.push(this);
                            this.bondCooldown = 120;
                            other.bondCooldown = 120;
                        } else if (this.bonds.includes(other)) {
                            this.bonds = this.bonds.filter(m => m !== other);
                            other.bonds = other.bonds.filter(m => m !== this);
                        }
                    }
                    
                    return true;
                }
                return false;
            }
        }
        
        // Create molecules
        const molecules = [];
        for (let i = 0; i < 20; i++) {
            molecules.push(new Molecule());
        }
        
        // Animation loop
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            // Draw faint grid
            ctx.strokeStyle = 'rgba(100, 255, 218, 0.05)';
            ctx.lineWidth = 1;
            for (let x = 0; x < canvas.width; x += 50) {
                ctx.beginPath();
                ctx.moveTo(x, 0);
                ctx.lineTo(x, canvas.height);
                ctx.stroke();
            }
            for (let y = 0; y < canvas.height; y += 50) {
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(canvas.width, y);
                ctx.stroke();
            }
            
            // Update and draw molecules
            molecules.forEach(molecule => molecule.update());
            
            // Check collisions
            for (let i = 0; i < molecules.length; i++) {
                for (let j = i + 1; j < molecules.length; j++) {
                    molecules[i].checkCollision(molecules[j]);
                }
                molecules[i].draw();
            }
            
            requestAnimationFrame(animate);
        }
        
        animate();


        // ===== FIXED TIMER IMPLEMENTATION =====
        let totalSeconds = 0;
        let timerInterval = null;
        
        // Start or resume the timer
        function startTimer() {
            // Load saved time if exists
            const savedTime = localStorage.getItem('quizTimerSeconds');
            totalSeconds = savedTime ? parseInt(savedTime) : 0;
            
            // Update display immediately
            updateTimerDisplay();
            
            // Start the timer if not already running
            if (!timerInterval) {
                timerInterval = setInterval(() => {
                    totalSeconds++;
                    localStorage.setItem('quizTimerSeconds', totalSeconds);
                    updateTimerDisplay();
                }, 1000);
            }
        }
        
        // Update the timer display
        function updateTimerDisplay() {
            const minutes = Math.floor(totalSeconds / 60).toString().padStart(2, '0');
            const seconds = (totalSeconds % 60).toString().padStart(2, '0');
            document.getElementById('timer-display').textContent = `${minutes}:${seconds}`;
        }
        
        // Clean up timer when quiz completes
        function stopTimer() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
            }
            localStorage.removeItem('quizTimerSeconds');
        }

        // ===== OPTION SELECTION =====
        let isQuestionAnswered = false;

        function selectOption(element, selectedLetter, correctLetter) {
            // Reset all options
            document.querySelectorAll('.option').forEach(opt => {
                opt.classList.remove('selected', 'correct', 'wrong');
            });
            
            // Mark selected option
            element.classList.add('selected');
            
            // Check answer
            if (selectedLetter.toLowerCase() === correctLetter.toLowerCase()) {
                element.classList.add('correct');
            } else {
                element.classList.add('wrong');
                // Highlight correct answer
                document.querySelectorAll('.option').forEach(opt => {
                    const optLetter = opt.textContent.trim().charAt(0).toLowerCase();
                    if (optLetter === correctLetter.toLowerCase()) {
                        opt.classList.add('correct');
                    }
                });
            }
            
            // Enable the next button
            isQuestionAnswered = true;
            document.getElementById('next-btn').disabled = false;
        }

        // ===== NAVIGATION =====
        function nextQuestion() {
            const currentIndex = <?= $currentQuestionIndex ?>;
            if(currentIndex < 15) {
                // Save time before moving to next question
                localStorage.setItem('quizTimerSeconds', totalSeconds);
                window.location.href = `?q=${currentIndex + 1}`;
            } else {
                // Quiz Complete - Stop Timer & Clear Storage
                stopTimer();
                alert(`Quiz Complete! Time Taken: ${document.getElementById('timer-display').textContent}`);
                // window.location.href = 'results.php'; // Uncomment if needed
            }
        }

        // Initialize Quiz
        document.addEventListener('DOMContentLoaded', function() {
            // Start the timer when page loads
            startTimer();
            
            // Disable Next Button Initially if not answered
            const currentIndex = <?= $currentQuestionIndex ?>;
            if (currentIndex < 15) {
                document.getElementById('next-btn').disabled = true;
            }
        });
    </script>
</body>
</html>