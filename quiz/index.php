<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry Lab Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
            position: relative;
            overflow-x: hidden;
        }
        /* Lab Elements */
        .lab-element {
            position: fixed;
            font-size: 4rem;
            opacity: 0.25;
            z-index: 0;
            filter: drop-shadow(0 0 12px currentColor);
            animation: float 8s ease-in-out infinite;
        }

        /* Original Icons */
        .flask-icon {
            top: 40%;
            left: 5%;
            color: #00e0ff;
            animation-delay: 0s;
        }

        .atom-icon {
            bottom: 8%;
            left: 10%;
            color: #ff6b00;
            animation-delay: 1.5s;
        }

        .microscope-icon {
            bottom: 50%;
            right: 20%;
            color: #00ffaa;
            animation-delay: 2.3s;
        }

        .vial-icon {
            top: 30%;
            right: 8%;
            color: #ff00ff;
            animation-delay: 0.7s;
        }

        .burner-icon {
            bottom: 28%;
            left: 12%;
            color: #ff5555;
            animation-delay: 1.8s;
        }

        .ph-scale-icon {
            top: 65%;
            right: 12%;
            color: #9c27b0;
            animation-delay: 3s;
            font-size: 5rem;
        }

        .test-tube-icon {
            top: 85%;
            left: 20%;
            color: #4caf50;
            animation-delay: 0.9s;
        }

        .molecule-icon {
            top: 30%;
            left: 20%;
            color: #2196f3;
            animation-delay: 1.2s;
        }
        
        .funnel-icon {
            top: 85%;
            right: 24%;
            color: #ff9800;
            animation-delay: 2.5s;
            font-size: 4.5rem;
        }
        
        /* Left beaker */
        .beaker-left {
            top: 12%;
            left: 12%;
            color: #e91e63;
            animation-delay: 0.5s;
        }
        
        /* Right beaker */
        .beaker-right {
            top: 15%;
            right: 15%;
            color: #ff5722;
            animation-delay: 0.8s;
        }

        /* New Additional Icons */
        .funnel-icon-2 {
            top: 50%;
            right: 5%;
            color: #FFC107;
            animation-delay: 1.2s;
            font-size: 4rem;
        }

        .ph-scale-icon-2 {
            bottom: 25%;
            right: 25%;
            color: #673AB7;
            animation-delay: 2s;
            font-size: 4.5rem;
        }

        .microscope-icon-2 {
            top: 20%;
            left: 25%;
            color: #4CAF50;
            animation-delay: 0.5s;
        }

        .atom-icon-2 {
            top: 60%;
            left: 20%;
            color: #FF5722;
            animation-delay: 1.8s;
        }

        .microscope-icon-3 {
            bottom: 7%;
            right: 5%;
            color: #00BCD4;
            animation-delay: 2.7s;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0) rotate(0deg) translateX(0);
            }
            25% { 
                transform: translateY(-15px) rotate(2deg) translateX(5px);
            }
            50% { 
                transform: translateY(-10px) rotate(-2deg) translateX(-5px);
            }
            75% { 
                transform: translateY(-12px) rotate(3deg) translateX(3px);
            }
        }

        /* Rest of your CSS remains exactly the same */
        .content {
            width: 100%;
            padding-top: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        .lab-container {
            background-color: rgba(18, 26, 43, 0.95);
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            width: 90%;
            max-width: 530px;
            padding: 25px;
            border: 1px solid rgba(0, 180, 255, 0.3);
            position: relative;
            z-index: 1;
            margin: 20px 0;
        }

        h1 {
            color: #00e0ff;
            margin: 0 0 20px 0;
            font-size: 26px;
            text-align: center;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-shadow: 0 0 10px rgba(0, 224, 255, 0.4);
        }

        .level-timer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .level-indicator {
            background: linear-gradient(135deg, rgba(0, 149, 255, 0.3), rgba(0, 149, 255, 0.1));
            color: #a6e1ff;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            border: 1px solid rgba(0, 149, 255, 0.5);
            box-shadow: 0 3px 10px rgba(0, 149, 255, 0.2);
        }

        .timer {
            background: linear-gradient(135deg, rgba(255, 107, 0, 0.3), rgba(255, 107, 0, 0.1));
            color: #ffcc99;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            border: 1px solid rgba(255, 107, 0, 0.5);
            box-shadow: 0 3px 10px rgba(255, 107, 0, 0.2);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            background: rgba(0, 80, 160, 0.2);
            padding: 12px 15px;
            border-radius: 8px;
            border-left: 4px solid #ff6b00;
            box-shadow: 0 3px 10px rgba(0, 80, 160, 0.1);
        }

        .question-number {
            font-weight: bold;
            color: #00e0ff;
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        .question-count {
            color: #a6e1ff;
            font-size: 14px;
        }

        .question {
            font-size: 19px;
            margin-bottom: 25px;
            line-height: 1.4;
            font-weight: 500;
            color: #ffffff;
            padding: 0 10px;
            text-align: center;
        }

        .options-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 25px;
        }

        .option {
            background: rgba(0, 60, 120, 0.3);
            border: 1px solid rgba(0, 180, 255, 0.4);
            border-radius: 8px;
            padding: 12px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            font-size: 15px;
            position: relative;
            min-height: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #ffffff;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }

        .option:hover {
            background: rgba(0, 100, 200, 0.4);
           transform: translateY(-5px) scale(1.02);
            box-shadow: 0 5px 15px rgba(0, 149, 255, 0.3);
        }

        .option-label {
            position: absolute;
            top: -10px;
            left: 10px;
            background: #ff6b00;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .option.correct {
            background: rgba(0, 200, 100, 0.3);
            border-color: #00ff88;
            color: #aaffdd;
            box-shadow: 0 3px 12px rgba(0, 200, 100, 0.3);
        }

        .option.wrong {
            background: rgba(255, 80, 80, 0.3);
            border-color: #ff5555;
            color: #ffbbbb;
            box-shadow: 0 3px 12px rgba(255, 80, 80, 0.3);
        }

        .navigation {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            background: linear-gradient(135deg, #0095ff, #00e0ff);
            color: #002240;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 149, 255, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(0, 149, 255, 0.6);
        }

        .btn:disabled {
            background: #455a64;
            color: #cfd8dc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .progress-container {
            margin-top: 25px;
            background: rgba(0, 60, 120, 0.3);
            border-radius: 8px;
            height: 6px;
            overflow: hidden;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #00e0ff, #0095ff);
            width: 0%;
            transition: width 0.5s ease;
        }

        @media (max-width: 768px) {
            .lab-element {
                font-size: 3rem;
            }
            
            .ph-scale-icon, .funnel-icon, .ph-scale-icon-2, .funnel-icon-2 {
                font-size: 4rem;
            }
        }

        @media (max-width: 480px) {
            .options-grid {
                grid-template-columns: 1fr;
            }
            
            .question {
                font-size: 17px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .lab-container {
                padding: 20px;
            }
            
            .lab-element {
                font-size: 2.5rem;
                opacity: 0.15;
            }
            
            .ph-scale-icon, .funnel-icon, .ph-scale-icon-2, .funnel-icon-2 {
                font-size: 3rem;
            }
            
            /* Mobile positions for new icons */
            .funnel-icon-2 { top: 25%; right: 20%; }
            .ph-scale-icon-2 { bottom: 15%; right: 20%; }
            .microscope-icon-2 { top: 20%; left: 20%; }
            .atom-icon-2 { top: 60%; left: 12%; }
            .microscope-icon-3 { bottom: 35%; right: 25%; }
        }
    </style>
</head>
<body>

    <i class="lab-element flask-icon fas fa-flask"></i>
    <i class="lab-element atom-icon fas fa-atom"></i>
    <i class="lab-element microscope-icon fas fa-microscope"></i>
    <i class="lab-element vial-icon fas fa-vial"></i>
    <i class="lab-element burner-icon fas fa-burn"></i>
    <i class="lab-element ph-scale-icon fas fa-vial-virus"></i>
    <i class="lab-element test-tube-icon fas fa-vial"></i>
    <i class="lab-element molecule-icon fas fa-atom"></i>
    <i class="lab-element funnel-icon fas fa-filter"></i>
    <i class="lab-element beaker-left fas fa-flask"></i>
    <i class="lab-element beaker-right fas fa-flask"></i>

    <i class="lab-element funnel-icon-2 fas fa-filter"></i>
    <i class="lab-element ph-scale-icon-2 fas fa-vial-virus"></i>
    <i class="lab-element microscope-icon-2 fas fa-microscope"></i>
    <i class="lab-element atom-icon-2 fas fa-atom"></i>
    <i class="lab-element microscope-icon-3 fas fa-microscope"></i>

    
    <div class="content">
        <div class="lab-container">
            <h1>CHEMISTRY LAB QUIZ</h1>
            
            <div class="level-timer-container">
                <div class="level-indicator">EXPERIMENT LEVEL: BASIC</div>
                <div class="timer">⏱️ 00:00</div>
            </div>
            
            <div class="question-header">
                <div class="question-number">QUESTION <span id="current-question">1</span></div>
                <div class="question-count">TOTAL: <span id="total-questions">15</span></div>
            </div>
            
            <div class="question" id="question-text"></div>
            
            <div class="options-grid" id="options-container">
                
            </div>
            
            <div class="navigation">
                <button id="next-btn" class="btn" disabled>NEXT EXPERIMENT →</button>
            </div>
            
            <div class="progress-container">
                <div class="progress-bar" id="progress-bar"></div>
            </div>
        </div>
    </div>

    <script>
        // Chemistry MCQs
        const questions = [
            {
                question: "The chemical symbol for Gold comes from which Latin word?",
                options: ["Aurum", "Argentum", "Ferrum", "Plumbum"],
                correctAnswer: "Aurum"
            },
            {
                question: "Which gas makes up about 78% of Earth's atmosphere?",
                options: ["Oxygen", "Carbon Dioxide", "Nitrogen", "Argon"],
                correctAnswer: "Nitrogen"
            },
            {
                question: "What is the pH value of pure water at 25°C?",
                options: ["5", "6", "7", "8"],
                correctAnswer: "7"
            },
            {
                question: "Which of these is NOT one of the classical states of matter?",
                options: ["Solid", "Liquid", "Gas", "Energy"],
                correctAnswer: "Energy"
            },
            {
                question: "What is the smallest unit of an element that retains its properties?",
                options: ["Molecule", "Atom", "Proton", "Electron"],
                correctAnswer: "Atom"
            },
            {
                question: "Which scientist is credited with proposing the atomic theory?",
                options: ["Einstein", "Dalton", "Newton", "Bohr"],
                correctAnswer: "Dalton"
            },
            {
                question: "What is the chemical formula for water?",
                options: ["H2O", "HO2", "H2O2", "H3O"],
                correctAnswer: "H2O"
            },
            {
                question: "Which of these elements is a noble gas?",
                options: ["Oxygen", "Chlorine", "Neon", "Nitrogen"],
                correctAnswer: "Neon"
            },
            {
                question: "What is the primary process plants use to convert sunlight into chemical energy?",
                options: ["Respiration", "Photosynthesis", "Transpiration", "Oxidation"],
                correctAnswer: "Photosynthesis"
            },
            {
                question: "Which acid gives vinegar its characteristic sour taste?",
                options: ["Hydrochloric acid", "Sulfuric acid", "Acetic acid", "Citric acid"],
                correctAnswer: "Acetic acid"
            },
            {
                question: "How many protons does a carbon atom have in its nucleus?",
                options: ["6", "12", "14", "16"],
                correctAnswer: "6"
            },
            {
                question: "Which of these processes represents a chemical change?",
                options: ["Melting ice", "Boiling water", "Burning wood", "Dissolving salt"],
                correctAnswer: "Burning wood"
            },
            {
                question: "What is the common name for sodium chloride (NaCl)?",
                options: ["Baking soda", "Table salt", "Sugar", "Bleach"],
                correctAnswer: "Table salt"
            },
            {
                question: "Which metallic element is liquid at standard room temperature?",
                options: ["Iron", "Mercury", "Gold", "Aluminum"],
                correctAnswer: "Mercury"
            },
            {
                question: "What is the primary component of natural gas?",
                options: ["Ethane", "Propane", "Butane", "Methane"],
                correctAnswer: "Methane"
            }
        ];

        let currentQuestionIndex = 0;
        let selectedOption = null;
        let answerSubmitted = false;
        let seconds = 0;
        let timerInterval;

        // DOM Elements
        const questionText = document.getElementById('question-text');
        const optionsContainer = document.getElementById('options-container');
        const nextBtn = document.getElementById('next-btn');
        const currentQuestionDisplay = document.getElementById('current-question');
        const totalQuestionsDisplay = document.getElementById('total-questions');
        const progressBar = document.getElementById('progress-bar');
        const timerDisplay = document.querySelector('.timer');

        // Timer function
        function startTimer() {
            seconds = 0;
            updateTimerDisplay();
            timerInterval = setInterval(() => {
                seconds++;
                updateTimerDisplay();
            }, 1000);
        }

        function updateTimerDisplay() {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            timerDisplay.textContent = `⏱️ ${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
        }

        function stopTimer() {
            clearInterval(timerInterval);
        }

        // Initialize the quiz
        function loadQuestion() {
            answerSubmitted = false;
            const currentQuestion = questions[currentQuestionIndex];
            questionText.textContent = currentQuestion.question;
            optionsContainer.innerHTML = '';
            
            const labels = ['A', 'B', 'C', 'D'];
            
            currentQuestion.options.forEach((option, index) => {
                const optionElement = document.createElement('div');
                optionElement.classList.add('option');
                
                // Add label
                const labelElement = document.createElement('div');
                labelElement.classList.add('option-label');
                labelElement.textContent = labels[index];
                optionElement.appendChild(labelElement);
                
                // Add option text
                optionElement.innerHTML += option;
                
                optionElement.addEventListener('click', () => {
                    if (!answerSubmitted) {
                        selectOption(optionElement, option, currentQuestion.correctAnswer);
                    }
                });
                optionsContainer.appendChild(optionElement);
            });
            
            currentQuestionDisplay.textContent = currentQuestionIndex + 1;
            totalQuestionsDisplay.textContent = questions.length;
            updateProgressBar();
            nextBtn.disabled = true;
        }

        function selectOption(optionElement, selectedOption, correctAnswer) {
            // Highlight selected option
            optionElement.classList.add('selected');
            
            // Check if answer is correct
            if (selectedOption === correctAnswer) {
                optionElement.classList.add('correct');
            } else {
                optionElement.classList.add('wrong');
                // Also highlight the correct answer
                document.querySelectorAll('.option').forEach((opt, idx) => {
                    const optText = opt.textContent.replace(/^[A-D]/, '').trim();
                    if (optText === correctAnswer) {
                        opt.classList.add('correct');
                    }
                });
            }
            
            answerSubmitted = true;
            nextBtn.disabled = false;
        }

        function nextQuestion() {
            if (currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++;
                loadQuestion();
            } else {
                // Quiz completed
                stopTimer();
                alert(`Experiment complete! Time taken: ${timerDisplay.textContent}`);
            }
        }

        function updateProgressBar() {
            const progress = ((currentQuestionIndex + 1) / questions.length) * 100;
            progressBar.style.width = `${progress}%`;
        }

        // Event Listeners
        nextBtn.addEventListener('click', nextQuestion);

        // Start the quiz
        loadQuestion();
        startTimer();
    </script>
</body>
</html> -->










































































<?php
// ==================== DATABASE CONNECTION ====================
include('include/connection.php');

// Fetch 15 questions for quiz_id = 5
$quiz_id = 5;
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
    <title>Chemistry Lab Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
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
            position: relative;
            overflow-x: hidden;
        }
        /* Lab Elements */
        .lab-element {
            position: fixed;
            font-size: 4rem;
            opacity: 0.25;
            z-index: 0;
            filter: drop-shadow(0 0 12px currentColor);
            animation: float 8s ease-in-out infinite;
        }

        /* Original Icons */
        .flask-icon {
            top: 40%;
            left: 5%;
            color: #00e0ff;
            animation-delay: 0s;
        }

        .atom-icon {
            bottom: 8%;
            left: 10%;
            color: #ff6b00;
            animation-delay: 1.5s;
        }

        .microscope-icon {
            bottom: 50%;
            right: 20%;
            color: #00ffaa;
            animation-delay: 2.3s;
        }

        .vial-icon {
            top: 30%;
            right: 8%;
            color: #ff00ff;
            animation-delay: 0.7s;
        }

        .burner-icon {
            bottom: 28%;
            left: 12%;
            color: #ff5555;
            animation-delay: 1.8s;
        }

        .ph-scale-icon {
            top: 65%;
            right: 12%;
            color: #9c27b0;
            animation-delay: 3s;
            font-size: 5rem;
        }

        .test-tube-icon {
            top: 85%;
            left: 20%;
            color: #4caf50;
            animation-delay: 0.9s;
        }

        .molecule-icon {
            top: 30%;
            left: 20%;
            color: #2196f3;
            animation-delay: 1.2s;
        }
        
        .funnel-icon {
            top: 85%;
            right: 24%;
            color: #ff9800;
            animation-delay: 2.5s;
            font-size: 4.5rem;
        }
        
        /* Left beaker */
        .beaker-left {
            top: 12%;
            left: 12%;
            color: #e91e63;
            animation-delay: 0.5s;
        }
        
        /* Right beaker */
        .beaker-right {
            top: 15%;
            right: 15%;
            color: #ff5722;
            animation-delay: 0.8s;
        }

        /* New Additional Icons */
        .funnel-icon-2 {
            top: 50%;
            right: 5%;
            color: #FFC107;
            animation-delay: 1.2s;
            font-size: 4rem;
        }

        .ph-scale-icon-2 {
            bottom: 25%;
            right: 25%;
            color: #673AB7;
            animation-delay: 2s;
            font-size: 4.5rem;
        }

        .microscope-icon-2 {
            top: 20%;
            left: 25%;
            color: #4CAF50;
            animation-delay: 0.5s;
        }

        .atom-icon-2 {
            top: 60%;
            left: 20%;
            color: #FF5722;
            animation-delay: 1.8s;
        }

        .microscope-icon-3 {
            bottom: 7%;
            right: 5%;
            color: #00BCD4;
            animation-delay: 2.7s;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0) rotate(0deg) translateX(0);
            }
            25% { 
                transform: translateY(-15px) rotate(2deg) translateX(5px);
            }
            50% { 
                transform: translateY(-10px) rotate(-2deg) translateX(-5px);
            }
            75% { 
                transform: translateY(-12px) rotate(3deg) translateX(3px);
            }
        }

        /* Rest of your CSS remains exactly the same */
        .content {
            width: 100%;
            padding-top: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        .lab-container {
            background-color: rgba(18, 26, 43, 0.95);
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            width: 90%;
            max-width: 530px;
            padding: 25px;
            border: 1px solid rgba(0, 180, 255, 0.3);
            position: relative;
            z-index: 1;
            margin: 20px 0;
        }

        h1 {
            color: #00e0ff;
            margin: 0 0 20px 0;
            font-size: 26px;
            text-align: center;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-shadow: 0 0 10px rgba(0, 224, 255, 0.4);
        }

        .level-timer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .level-indicator {
            background: linear-gradient(135deg, rgba(0, 149, 255, 0.3), rgba(0, 149, 255, 0.1));
            color: #a6e1ff;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            border: 1px solid rgba(0, 149, 255, 0.5);
            box-shadow: 0 3px 10px rgba(0, 149, 255, 0.2);
        }

        .timer {
            background: linear-gradient(135deg, rgba(255, 107, 0, 0.3), rgba(255, 107, 0, 0.1));
            color: #ffcc99;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            border: 1px solid rgba(255, 107, 0, 0.5);
            box-shadow: 0 3px 10px rgba(255, 107, 0, 0.2);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            background: rgba(0, 80, 160, 0.2);
            padding: 12px 15px;
            border-radius: 8px;
            border-left: 4px solid #ff6b00;
            box-shadow: 0 3px 10px rgba(0, 80, 160, 0.1);
        }

        .question-number {
            font-weight: bold;
            color: #00e0ff;
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        .question-count {
            color: #a6e1ff;
            font-size: 14px;
        }

        .question {
            font-size: 19px;
            margin-bottom: 25px;
            line-height: 1.4;
            font-weight: 500;
            color: #ffffff;
            padding: 0 10px;
            text-align: center;
        }

        .options-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 25px;
        }

        .option {
            background: rgba(0, 60, 120, 0.3);
            border: 1px solid rgba(0, 180, 255, 0.4);
            border-radius: 8px;
            padding: 12px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            font-size: 15px;
            position: relative;
            min-height: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #ffffff;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }

        .option:hover {
            background: rgba(0, 100, 200, 0.4);
           transform: translateY(-5px) scale(1.02);
            box-shadow: 0 5px 15px rgba(0, 149, 255, 0.3);
        }

        .option-label {
            position: absolute;
            top: -10px;
            left: 10px;
            background: #ff6b00;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .option.correct {
            background: rgba(0, 200, 100, 0.3);
            border-color: #00ff88;
            color: #aaffdd;
            box-shadow: 0 3px 12px rgba(0, 200, 100, 0.3);
        }

        .option.wrong {
            background: rgba(255, 80, 80, 0.3);
            border-color: #ff5555;
            color: #ffbbbb;
            box-shadow: 0 3px 12px rgba(255, 80, 80, 0.3);
        }

        .navigation {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            background: linear-gradient(135deg, #0095ff, #00e0ff);
            color: #002240;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 149, 255, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(0, 149, 255, 0.6);
        }

        .btn:disabled {
            background: #455a64;
            color: #cfd8dc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .progress-container {
            margin-top: 25px;
            background: rgba(0, 60, 120, 0.3);
            border-radius: 8px;
            height: 6px;
            overflow: hidden;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #00e0ff, #0095ff);
            width: 0%;
            transition: width 0.5s ease;
        }

        @media (max-width: 768px) {
            .lab-element {
                font-size: 3rem;
            }
            
            .ph-scale-icon, .funnel-icon, .ph-scale-icon-2, .funnel-icon-2 {
                font-size: 4rem;
            }
        }

        @media (max-width: 480px) {
            .options-grid {
                grid-template-columns: 1fr;
            }
            
            .question {
                font-size: 17px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .lab-container {
                padding: 20px;
            }
            
            .lab-element {
                font-size: 2.5rem;
                opacity: 0.15;
            }
            
            .ph-scale-icon, .funnel-icon, .ph-scale-icon-2, .funnel-icon-2 {
                font-size: 3rem;
            }
            
            /* Mobile positions for new icons */
            .funnel-icon-2 { top: 25%; right: 20%; }
            .ph-scale-icon-2 { bottom: 15%; right: 20%; }
            .microscope-icon-2 { top: 20%; left: 20%; }
            .atom-icon-2 { top: 60%; left: 12%; }
            .microscope-icon-3 { bottom: 35%; right: 25%; }
        }
    </style>
</head>
<body>
    <!-- ALL LAB ICONS -->
    <i class="lab-element flask-icon fas fa-flask"></i>
    <i class="lab-element atom-icon fas fa-atom"></i>
    <i class="lab-element microscope-icon fas fa-microscope"></i>
    <i class="lab-element vial-icon fas fa-vial"></i>
    <i class="lab-element burner-icon fas fa-burn"></i>
    <i class="lab-element ph-scale-icon fas fa-vial-virus"></i>
    <i class="lab-element test-tube-icon fas fa-vial"></i>
    <i class="lab-element molecule-icon fas fa-atom"></i>
    <i class="lab-element funnel-icon fas fa-filter"></i>
    <i class="lab-element beaker-left fas fa-flask"></i>
    <i class="lab-element beaker-right fas fa-flask"></i>
    <i class="lab-element funnel-icon-2 fas fa-filter"></i>
    <i class="lab-element ph-scale-icon-2 fas fa-vial-virus"></i>
    <i class="lab-element microscope-icon-2 fas fa-microscope"></i>
    <i class="lab-element atom-icon-2 fas fa-atom"></i>
    <i class="lab-element microscope-icon-3 fas fa-microscope"></i>

    <!-- MAIN QUIZ CONTAINER -->
    <div class="content">
        <div class="lab-container">
            <h1>CHEMISTRY LAB QUIZ</h1>
            
            <div class="level-timer-container">
                <div class="level-indicator">EXPERIMENT LEVEL: BASIC</div>
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
                    <?= ($currentQuestionIndex >= 15) ? 'COMPLETE EXPERIMENT' : 'NEXT EXPERIMENT →' ?>
                </button>
            </div>
            
            <div class="progress-container">
                <div class="progress-bar" id="progress-bar" 
                     style="width: <?= (($currentQuestionIndex)/15)*100 ?>%"></div>
            </div>
        </div>
    </div>

    <script>
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