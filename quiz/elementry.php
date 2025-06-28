<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry Periodic Table Quiz</title>
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

        /* Periodic Table Elements Background - LARGER SIZE */
        .element {
            position: fixed;
            font-size: 1.8rem; /* Increased from 1.2rem */
            font-weight: bold;
            width: 63px; /* Increased from 40px */
            height: 63px; /* Increased from 40px */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px; /* Slightly larger radius */
            opacity: 0.7;
            z-index: 0;
            animation: float 15s linear infinite;
            box-shadow: 0 0 20px currentColor; /* More pronounced glow */
            text-align: center;
            line-height: 1.2;
        }

        .element span {
            font-size: 0.8rem; /* Increased from 0.6rem */
            font-weight: normal;
        }

        /* Element Categories Colors */
        .alkali-metal { color: #FF6B6B; background-color: rgba(255, 107, 107, 0.15); } /* More visible background */
        .alkaline-earth { color: #FFD166; background-color: rgba(255, 209, 102, 0.15); }
        .transition-metal { color: #06D6A0; background-color: rgba(6, 214, 160, 0.15); }
        .post-transition { color: #118AB2; background-color: rgba(17, 138, 178, 0.15); }
        .metalloid { color: #073B4C; background-color: rgba(7, 59, 76, 0.15); }
        .nonmetal { color: #EF476F; background-color: rgba(239, 71, 111, 0.15); }
        .halogen { color: #FFD166; background-color: rgba(255, 209, 102, 0.15); }
        .noble-gas { color: #118AB2; background-color: rgba(17, 138, 178, 0.15); }
        .lanthanide { color: #06D6A0; background-color: rgba(6, 214, 160, 0.15); }
        .actinide { color: #073B4C; background-color: rgba(7, 59, 76, 0.15); }

        @keyframes float {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.7;
            }
            90% {
                opacity: 0.7;
            }
            100% {
                transform: translateY(-100vh) translateX(100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Rest of your existing CSS remains exactly the same */
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
            
            .element {
                font-size: 1.4rem; /* Adjusted for mobile */
                width: 50px; /* Adjusted for mobile */
                height: 50px; /* Adjusted for mobile */
            }
        }
    </style>
</head>
<body>
   
    <div id="elements-container"></div>

   
    <div class="content">
        <div class="lab-container">
            <h1>Chemistry Periodic Table Quiz</h1>
            
            <div class="level-timer-container">
                <div class="level-indicator">  LEVEL  :  ELEMENTARY</div>
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
                <button id="next-btn" class="btn" disabled>NEXT QUESTION →</button>
            </div>
            
            <div class="progress-container">
                <div class="progress-bar" id="progress-bar"></div>
            </div>
        </div>
    </div>

<script>
    // Create periodic table elements background
    function createElementsBackground() {
        const elements = [
            // Alkali Metals
            { symbol: 'H', name: 'Hydrogen', category: 'alkali-metal' },
            { symbol: 'Li', name: 'Lithium', category: 'alkali-metal' },
            { symbol: 'Na', name: 'Sodium', category: 'alkali-metal' },
            { symbol: 'K', name: 'Potassium', category: 'alkali-metal' },
            { symbol: 'Rb', name: 'Rubidium', category: 'alkali-metal' },
            { symbol: 'Cs', name: 'Cesium', category: 'alkali-metal' },
            { symbol: 'Fr', name: 'Francium', category: 'alkali-metal' },
            
            // Alkaline Earth Metals
            { symbol: 'Be', name: 'Beryllium', category: 'alkaline-earth' },
            { symbol: 'Mg', name: 'Magnesium', category: 'alkaline-earth' },
            { symbol: 'Ca', name: 'Calcium', category: 'alkaline-earth' },
            { symbol: 'Sr', name: 'Strontium', category: 'alkaline-earth' },
            { symbol: 'Ba', name: 'Barium', category: 'alkaline-earth' },
            { symbol: 'Ra', name: 'Radium', category: 'alkaline-earth' },
            
            // Transition Metals
            { symbol: 'Sc', name: 'Scandium', category: 'transition-metal' },
            { symbol: 'Ti', name: 'Titanium', category: 'transition-metal' },
            { symbol: 'V', name: 'Vanadium', category: 'transition-metal' },
            { symbol: 'Cr', name: 'Chromium', category: 'transition-metal' },
            { symbol: 'Mn', name: 'Manganese', category: 'transition-metal' },
            { symbol: 'Fe', name: 'Iron', category: 'transition-metal' },
            { symbol: 'Co', name: 'Cobalt', category: 'transition-metal' },
            { symbol: 'Ni', name: 'Nickel', category: 'transition-metal' },
            { symbol: 'Cu', name: 'Copper', category: 'transition-metal' },
            { symbol: 'Zn', name: 'Zinc', category: 'transition-metal' },
            { symbol: 'Y', name: 'Yttrium', category: 'transition-metal' },
            { symbol: 'Zr', name: 'Zirconium', category: 'transition-metal' },
            { symbol: 'Nb', name: 'Niobium', category: 'transition-metal' },
            { symbol: 'Mo', name: 'Molybdenum', category: 'transition-metal' },
            { symbol: 'Tc', name: 'Technetium', category: 'transition-metal' },
            { symbol: 'Ru', name: 'Ruthenium', category: 'transition-metal' },
            { symbol: 'Rh', name: 'Rhodium', category: 'transition-metal' },
            { symbol: 'Pd', name: 'Palladium', category: 'transition-metal' },
            { symbol: 'Ag', name: 'Silver', category: 'transition-metal' },
            { symbol: 'Cd', name: 'Cadmium', category: 'transition-metal' },
            { symbol: 'Hf', name: 'Hafnium', category: 'transition-metal' },
            { symbol: 'Ta', name: 'Tantalum', category: 'transition-metal' },
            { symbol: 'W', name: 'Tungsten', category: 'transition-metal' },
            { symbol: 'Re', name: 'Rhenium', category: 'transition-metal' },
            { symbol: 'Os', name: 'Osmium', category: 'transition-metal' },
            { symbol: 'Ir', name: 'Iridium', category: 'transition-metal' },
            { symbol: 'Pt', name: 'Platinum', category: 'transition-metal' },
            { symbol: 'Au', name: 'Gold', category: 'transition-metal' },
            { symbol: 'Hg', name: 'Mercury', category: 'transition-metal' },
            { symbol: 'Rf', name: 'Rutherfordium', category: 'transition-metal' },
            { symbol: 'Db', name: 'Dubnium', category: 'transition-metal' },
            { symbol: 'Sg', name: 'Seaborgium', category: 'transition-metal' },
            { symbol: 'Bh', name: 'Bohrium', category: 'transition-metal' },
            { symbol: 'Hs', name: 'Hassium', category: 'transition-metal' },
            { symbol: 'Mt', name: 'Meitnerium', category: 'transition-metal' },
            { symbol: 'Ds', name: 'Darmstadtium', category: 'transition-metal' },
            { symbol: 'Rg', name: 'Roentgenium', category: 'transition-metal' },
            { symbol: 'Cn', name: 'Copernicium', category: 'transition-metal' },
            
            // Post-transition Metals
            { symbol: 'Al', name: 'Aluminum', category: 'post-transition' },
            { symbol: 'Ga', name: 'Gallium', category: 'post-transition' },
            { symbol: 'In', name: 'Indium', category: 'post-transition' },
            { symbol: 'Sn', name: 'Tin', category: 'post-transition' },
            { symbol: 'Tl', name: 'Thallium', category: 'post-transition' },
            { symbol: 'Pb', name: 'Lead', category: 'post-transition' },
            { symbol: 'Bi', name: 'Bismuth', category: 'post-transition' },
            { symbol: 'Nh', name: 'Nihonium', category: 'post-transition' },
            { symbol: 'Fl', name: 'Flerovium', category: 'post-transition' },
            { symbol: 'Mc', name: 'Moscovium', category: 'post-transition' },
            { symbol: 'Lv', name: 'Livermorium', category: 'post-transition' },
            
            // Metalloids
            { symbol: 'B', name: 'Boron', category: 'metalloid' },
            { symbol: 'Si', name: 'Silicon', category: 'metalloid' },
            { symbol: 'Ge', name: 'Germanium', category: 'metalloid' },
            { symbol: 'As', name: 'Arsenic', category: 'metalloid' },
            { symbol: 'Sb', name: 'Antimony', category: 'metalloid' },
            { symbol: 'Te', name: 'Tellurium', category: 'metalloid' },
            { symbol: 'Po', name: 'Polonium', category: 'metalloid' },
            
            // Nonmetals
            { symbol: 'C', name: 'Carbon', category: 'nonmetal' },
            { symbol: 'N', name: 'Nitrogen', category: 'nonmetal' },
            { symbol: 'O', name: 'Oxygen', category: 'nonmetal' },
            { symbol: 'P', name: 'Phosphorus', category: 'nonmetal' },
            { symbol: 'S', name: 'Sulfur', category: 'nonmetal' },
            { symbol: 'Se', name: 'Selenium', category: 'nonmetal' },
            
            // Halogens
            { symbol: 'F', name: 'Fluorine', category: 'halogen' },
            { symbol: 'Cl', name: 'Chlorine', category: 'halogen' },
            { symbol: 'Br', name: 'Bromine', category: 'halogen' },
            { symbol: 'I', name: 'Iodine', category: 'halogen' },
            { symbol: 'At', name: 'Astatine', category: 'halogen' },
            { symbol: 'Ts', name: 'Tennessine', category: 'halogen' },
            
            // Noble Gases
            { symbol: 'He', name: 'Helium', category: 'noble-gas' },
            { symbol: 'Ne', name: 'Neon', category: 'noble-gas' },
            { symbol: 'Ar', name: 'Argon', category: 'noble-gas' },
            { symbol: 'Kr', name: 'Krypton', category: 'noble-gas' },
            { symbol: 'Xe', name: 'Xenon', category: 'noble-gas' },
            { symbol: 'Rn', name: 'Radon', category: 'noble-gas' },
            { symbol: 'Og', name: 'Oganesson', category: 'noble-gas' },
            
            // Lanthanides
            { symbol: 'La', name: 'Lanthanum', category: 'lanthanide' },
            { symbol: 'Ce', name: 'Cerium', category: 'lanthanide' },
            { symbol: 'Pr', name: 'Praseodymium', category: 'lanthanide' },
            { symbol: 'Nd', name: 'Neodymium', category: 'lanthanide' },
            { symbol: 'Pm', name: 'Promethium', category: 'lanthanide' },
            { symbol: 'Sm', name: 'Samarium', category: 'lanthanide' },
            { symbol: 'Eu', name: 'Europium', category: 'lanthanide' },
            { symbol: 'Gd', name: 'Gadolinium', category: 'lanthanide' },
            { symbol: 'Tb', name: 'Terbium', category: 'lanthanide' },
            { symbol: 'Dy', name: 'Dysprosium', category: 'lanthanide' },
            { symbol: 'Ho', name: 'Holmium', category: 'lanthanide' },
            { symbol: 'Er', name: 'Erbium', category: 'lanthanide' },
            { symbol: 'Tm', name: 'Thulium', category: 'lanthanide' },
            { symbol: 'Yb', name: 'Ytterbium', category: 'lanthanide' },
            { symbol: 'Lu', name: 'Lutetium', category: 'lanthanide' },
            
            // Actinides
            { symbol: 'Ac', name: 'Actinium', category: 'actinide' },
            { symbol: 'Th', name: 'Thorium', category: 'actinide' },
            { symbol: 'Pa', name: 'Protactinium', category: 'actinide' },
            { symbol: 'U', name: 'Uranium', category: 'actinide' },
            { symbol: 'Np', name: 'Neptunium', category: 'actinide' },
            { symbol: 'Pu', name: 'Plutonium', category: 'actinide' },
            { symbol: 'Am', name: 'Americium', category: 'actinide' },
            { symbol: 'Cm', name: 'Curium', category: 'actinide' },
            { symbol: 'Bk', name: 'Berkelium', category: 'actinide' },
            { symbol: 'Cf', name: 'Californium', category: 'actinide' },
            { symbol: 'Es', name: 'Einsteinium', category: 'actinide' },
            { symbol: 'Fm', name: 'Fermium', category: 'actinide' },
            { symbol: 'Md', name: 'Mendelevium', category: 'actinide' },
            { symbol: 'No', name: 'Nobelium', category: 'actinide' },
            { symbol: 'Lr', name: 'Lawrencium', category: 'actinide' }
        ];

        const container = document.getElementById('elements-container');
        
        // Create 60 elements (more would be too heavy)
        for (let i = 0; i < 60; i++) {
            const element = elements[Math.floor(Math.random() * elements.length)];
            const el = document.createElement('div');
            el.className = `element ${element.category}`;
            el.innerHTML = `${element.symbol}<span>${element.name}</span>`;
            
            // Random position and animation
            const startX = Math.random() * 100;
            const startY = Math.random() * 100 + 100; // Start below viewport
            const duration = 15 + Math.random() * 30; // 15-45 seconds
            const delay = Math.random() * -30; // Start at different times
            
            el.style.left = `${startX}%`;
            el.style.top = `${startY}%`;
            el.style.animationDuration = `${duration}s`;
            el.style.animationDelay = `${delay}s`;
            
            container.appendChild(el);
        }
    }

    // Initialize the background when page loads
    window.onload = createElementsBackground;

    // Updated Periodic Table MCQs
    const questions = [
        {
            question: "Which of the following elements is placed in the same group as oxygen in the modern periodic table?",
            options: ["Nitrogen", "Sulfur", "Fluorine", "Neon"],
            correctAnswer: "Sulfur"
        },
        {
            question: "What is the period number of the element with atomic number 15 (Phosphorus)?",
            options: ["2", "3", "4", "5"],
            correctAnswer: "3"
        },
        {
            question: "Which block of the periodic table do transition metals belong to?",
            options: ["s-block", "p-block", "d-block", "f-block"],
            correctAnswer: "d-block"
        },
        {
            question: "Which element in the periodic table has the highest electronegativity?",
            options: ["Oxygen", "Nitrogen", "Fluorine", "Chlorine"],
            correctAnswer: "Fluorine"
        },
        {
            question: "Which property increases across a period from left to right in the periodic table?",
            options: ["Atomic radius", "Metallic character", "Ionization energy", "Reactivity"],
            correctAnswer: "Ionization energy"
        },
        {
            question: "Which of the following elements has a complete octet in its natural form?",
            options: ["Helium", "Neon", "Oxygen", "Hydrogen"],
            correctAnswer: "Neon"
        },
        {
            question: "Which group contains the most reactive nonmetals?",
            options: ["Group 1", "Group 2", "Group 17", "Group 18"],
            correctAnswer: "Group 17"
        },
        {
            question: "What is the reason for placing Hydrogen separately in the periodic table?",
            options: ["It resembles alkali metals only", "It is a noble gas", "It has properties of both metals and nonmetals", "It forms covalent bonds only"],
            correctAnswer: "It has properties of both metals and nonmetals"
        },
        {
            question: "Which of the following pairs belong to the same period?",
            options: ["Li and Na", "O and S", "C and N", "Na and Cl"],
            correctAnswer: "Na and Cl"
        },
        {
            question: "What is the valency of Aluminum (Atomic Number = 13)?",
            options: ["1", "2", "3", "4"],
            correctAnswer: "3"
        },
        {
            question: "Which of these elements has the smallest atomic radius?",
            options: ["Sodium", "Magnesium", "Aluminum", "Chlorine"],
            correctAnswer: "Chlorine"
        },
        {
            question: "Which of the following statements is true for group 18 elements?",
            options: ["They are highly reactive", "They easily gain electrons", "They have completely filled outer shells", "They have 7 valence electrons"],
            correctAnswer: "They have completely filled outer shells"
        },
        {
            question: "What is the position of Lanthanides and Actinides in the periodic table?",
            options: ["Between groups 1 and 2", "In the f-block below the main table", "Along the leftmost side", "In the d-block"],
            correctAnswer: "In the f-block below the main table"
        },
        {
            question: "Which of the following elements is a metalloid?",
            options: ["Sulfur", "Boron", "Calcium", "Iodine"],
            correctAnswer: "Boron"
        },
        {
            question: "Which of the following trends decreases down a group?",
            options: ["Atomic size", "Electron affinity", "Metallic character", "Number of shells"],
            correctAnswer: "Electron affinity"
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

// Fetch 15 questions for quiz_id = 6
$quiz_id = 6;
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
    <title>Chemistry Periodic Table Quiz</title>
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

        /* Periodic Table Elements Background */
        #elements-container {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .element {
            position: absolute;
            font-size: 1.8rem;
            font-weight: bold;
            width: 63px;
            height: 63px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            opacity: 0.7;
            box-shadow: 0 0 20px currentColor;
            text-align: center;
            line-height: 1.2;
            animation: float 15s linear infinite;
        }

        .element span {
            font-size: 0.8rem;
            font-weight: normal;
        }

        /* Element Categories Colors */
        .alkali-metal { color: #FF6B6B; background-color: rgba(255, 107, 107, 0.15); }
        .alkaline-earth { color: #FFD166; background-color: rgba(255, 209, 102, 0.15); }
        .transition-metal { color: #06D6A0; background-color: rgba(6, 214, 160, 0.15); }
        .post-transition { color: #118AB2; background-color: rgba(17, 138, 178, 0.15); }
        .metalloid { color: #073B4C; background-color: rgba(7, 59, 76, 0.15); }
        .nonmetal { color: #EF476F; background-color: rgba(239, 71, 111, 0.15); }
        .halogen { color: #FFD166; background-color: rgba(255, 209, 102, 0.15); }
        .noble-gas { color: #118AB2; background-color: rgba(17, 138, 178, 0.15); }
        .lanthanide { color: #06D6A0; background-color: rgba(6, 214, 160, 0.15); }
        .actinide { color: #073B4C; background-color: rgba(7, 59, 76, 0.15); }

        @keyframes float {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
                opacity: 0.5;
            }
            10% {
                opacity: 0.7;
            }
            90% {
                opacity: 0.7;
            }
            100% {
                transform: translateY(-100vh) translateX(100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Quiz Container Styles */
        .content {
            width: 100%;
            padding-top: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            position: relative;
            z-index: 1;
        }

        .lab-container {
            background-color: rgba(18, 26, 43, 0.95);
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            width: 90%;
            max-width: 530px;
            padding: 25px;
            border: 1px solid rgba(0, 180, 255, 0.3);
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
            
            .element {
                font-size: 1.4rem;
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <!-- Periodic Table Elements Container -->
    <div id="elements-container"></div>
    
    <!-- MAIN QUIZ CONTAINER -->
    <div class="content">
        <div class="lab-container">
            <h1>Chemistry Periodic Table Quiz</h1>
            
            <div class="level-timer-container">
                <div class="level-indicator">LEVEL: ELEMENTARY</div>
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
        // Create periodic table elements background
        function createElementsBackground() {
            const elements = [
                // Alkali Metals
                { symbol: 'H', name: 'Hydrogen', category: 'alkali-metal' },
                { symbol: 'Li', name: 'Lithium', category: 'alkali-metal' },
                { symbol: 'Na', name: 'Sodium', category: 'alkali-metal' },
                { symbol: 'K', name: 'Potassium', category: 'alkali-metal' },
                { symbol: 'Rb', name: 'Rubidium', category: 'alkali-metal' },
                { symbol: 'Cs', name: 'Cesium', category: 'alkali-metal' },
                { symbol: 'Fr', name: 'Francium', category: 'alkali-metal' },
                
                // Alkaline Earth Metals
                { symbol: 'Be', name: 'Beryllium', category: 'alkaline-earth' },
                { symbol: 'Mg', name: 'Magnesium', category: 'alkaline-earth' },
                { symbol: 'Ca', name: 'Calcium', category: 'alkaline-earth' },
                { symbol: 'Sr', name: 'Strontium', category: 'alkaline-earth' },
                { symbol: 'Ba', name: 'Barium', category: 'alkaline-earth' },
                { symbol: 'Ra', name: 'Radium', category: 'alkaline-earth' },
                
                // Transition Metals
                { symbol: 'Sc', name: 'Scandium', category: 'transition-metal' },
                { symbol: 'Ti', name: 'Titanium', category: 'transition-metal' },
                { symbol: 'V', name: 'Vanadium', category: 'transition-metal' },
                { symbol: 'Cr', name: 'Chromium', category: 'transition-metal' },
                { symbol: 'Mn', name: 'Manganese', category: 'transition-metal' },
                { symbol: 'Fe', name: 'Iron', category: 'transition-metal' },
                { symbol: 'Co', name: 'Cobalt', category: 'transition-metal' },
                { symbol: 'Ni', name: 'Nickel', category: 'transition-metal' },
                { symbol: 'Cu', name: 'Copper', category: 'transition-metal' },
                { symbol: 'Zn', name: 'Zinc', category: 'transition-metal' },
                { symbol: 'Y', name: 'Yttrium', category: 'transition-metal' },
                { symbol: 'Zr', name: 'Zirconium', category: 'transition-metal' },
                { symbol: 'Nb', name: 'Niobium', category: 'transition-metal' },
                { symbol: 'Mo', name: 'Molybdenum', category: 'transition-metal' },
                { symbol: 'Tc', name: 'Technetium', category: 'transition-metal' },
                { symbol: 'Ru', name: 'Ruthenium', category: 'transition-metal' },
                { symbol: 'Rh', name: 'Rhodium', category: 'transition-metal' },
                { symbol: 'Pd', name: 'Palladium', category: 'transition-metal' },
                { symbol: 'Ag', name: 'Silver', category: 'transition-metal' },
                { symbol: 'Cd', name: 'Cadmium', category: 'transition-metal' },
                { symbol: 'Hf', name: 'Hafnium', category: 'transition-metal' },
                { symbol: 'Ta', name: 'Tantalum', category: 'transition-metal' },
                { symbol: 'W', name: 'Tungsten', category: 'transition-metal' },
                { symbol: 'Re', name: 'Rhenium', category: 'transition-metal' },
                { symbol: 'Os', name: 'Osmium', category: 'transition-metal' },
                { symbol: 'Ir', name: 'Iridium', category: 'transition-metal' },
                { symbol: 'Pt', name: 'Platinum', category: 'transition-metal' },
                { symbol: 'Au', name: 'Gold', category: 'transition-metal' },
                { symbol: 'Hg', name: 'Mercury', category: 'transition-metal' },
                
                // Post-transition Metals
                { symbol: 'Al', name: 'Aluminum', category: 'post-transition' },
                { symbol: 'Ga', name: 'Gallium', category: 'post-transition' },
                { symbol: 'In', name: 'Indium', category: 'post-transition' },
                { symbol: 'Sn', name: 'Tin', category: 'post-transition' },
                { symbol: 'Tl', name: 'Thallium', category: 'post-transition' },
                { symbol: 'Pb', name: 'Lead', category: 'post-transition' },
                { symbol: 'Bi', name: 'Bismuth', category: 'post-transition' },
                
                // Metalloids
                { symbol: 'B', name: 'Boron', category: 'metalloid' },
                { symbol: 'Si', name: 'Silicon', category: 'metalloid' },
                { symbol: 'Ge', name: 'Germanium', category: 'metalloid' },
                { symbol: 'As', name: 'Arsenic', category: 'metalloid' },
                { symbol: 'Sb', name: 'Antimony', category: 'metalloid' },
                { symbol: 'Te', name: 'Tellurium', category: 'metalloid' },
                
                // Nonmetals
                { symbol: 'C', name: 'Carbon', category: 'nonmetal' },
                { symbol: 'N', name: 'Nitrogen', category: 'nonmetal' },
                { symbol: 'O', name: 'Oxygen', category: 'nonmetal' },
                { symbol: 'P', name: 'Phosphorus', category: 'nonmetal' },
                { symbol: 'S', name: 'Sulfur', category: 'nonmetal' },
                { symbol: 'Se', name: 'Selenium', category: 'nonmetal' },
                
                // Halogens
                { symbol: 'F', name: 'Fluorine', category: 'halogen' },
                { symbol: 'Cl', name: 'Chlorine', category: 'halogen' },
                { symbol: 'Br', name: 'Bromine', category: 'halogen' },
                { symbol: 'I', name: 'Iodine', category: 'halogen' },
                { symbol: 'At', name: 'Astatine', category: 'halogen' },
                
                // Noble Gases
                { symbol: 'He', name: 'Helium', category: 'noble-gas' },
                { symbol: 'Ne', name: 'Neon', category: 'noble-gas' },
                { symbol: 'Ar', name: 'Argon', category: 'noble-gas' },
                { symbol: 'Kr', name: 'Krypton', category: 'noble-gas' },
                { symbol: 'Xe', name: 'Xenon', category: 'noble-gas' },
                { symbol: 'Rn', name: 'Radon', category: 'noble-gas' },
                
                // Lanthanides
                { symbol: 'La', name: 'Lanthanum', category: 'lanthanide' },
                { symbol: 'Ce', name: 'Cerium', category: 'lanthanide' },
                { symbol: 'Pr', name: 'Praseodymium', category: 'lanthanide' },
                { symbol: 'Nd', name: 'Neodymium', category: 'lanthanide' },
                { symbol: 'Pm', name: 'Promethium', category: 'lanthanide' },
                { symbol: 'Sm', name: 'Samarium', category: 'lanthanide' },
                { symbol: 'Eu', name: 'Europium', category: 'lanthanide' },
                { symbol: 'Gd', name: 'Gadolinium', category: 'lanthanide' },
                { symbol: 'Tb', name: 'Terbium', category: 'lanthanide' },
                { symbol: 'Dy', name: 'Dysprosium', category: 'lanthanide' },
                { symbol: 'Ho', name: 'Holmium', category: 'lanthanide' },
                { symbol: 'Er', name: 'Erbium', category: 'lanthanide' },
                { symbol: 'Tm', name: 'Thulium', category: 'lanthanide' },
                { symbol: 'Yb', name: 'Ytterbium', category: 'lanthanide' },
                { symbol: 'Lu', name: 'Lutetium', category: 'lanthanide' },
                
                // Actinides
                { symbol: 'Ac', name: 'Actinium', category: 'actinide' },
                { symbol: 'Th', name: 'Thorium', category: 'actinide' },
                { symbol: 'Pa', name: 'Protactinium', category: 'actinide' },
                { symbol: 'U', name: 'Uranium', category: 'actinide' },
                { symbol: 'Np', name: 'Neptunium', category: 'actinide' },
                { symbol: 'Pu', name: 'Plutonium', category: 'actinide' },
                { symbol: 'Am', name: 'Americium', category: 'actinide' },
                { symbol: 'Cm', name: 'Curium', category: 'actinide' },
                { symbol: 'Bk', name: 'Berkelium', category: 'actinide' },
                { symbol: 'Cf', name: 'Californium', category: 'actinide' },
                { symbol: 'Es', name: 'Einsteinium', category: 'actinide' },
                { symbol: 'Fm', name: 'Fermium', category: 'actinide' },
                { symbol: 'Md', name: 'Mendelevium', category: 'actinide' },
                { symbol: 'No', name: 'Nobelium', category: 'actinide' },
                { symbol: 'Lr', name: 'Lawrencium', category: 'actinide' }
            ];

            const container = document.getElementById('elements-container');
            
            // Create 60 elements (more would be too heavy)
            for (let i = 0; i < 60; i++) {
                const element = elements[Math.floor(Math.random() * elements.length)];
                const el = document.createElement('div');
                el.className = `element ${element.category}`;
                el.innerHTML = `${element.symbol}<span>${element.name}</span>`;
                
                // Random position and animation
                const startX = Math.random() * 100;
                const startY = Math.random() * 100 + 100; // Start below viewport
                const duration = 15 + Math.random() * 30; // 15-45 seconds
                const delay = Math.random() * -30; // Start at different times
                
                el.style.left = `${startX}%`;
                el.style.top = `${startY}%`;
                el.style.animationDuration = `${duration}s`;
                el.style.animationDelay = `${delay}s`;
                
                container.appendChild(el);
            }
        }

        // ===== TIMER IMPLEMENTATION =====
        let totalSeconds = 0;
        let timerInterval = null;
        
        function startTimer() {
            const savedTime = localStorage.getItem('quizTimerSeconds');
            totalSeconds = savedTime ? parseInt(savedTime) : 0;
            
            updateTimerDisplay();
            
            if (!timerInterval) {
                timerInterval = setInterval(() => {
                    totalSeconds++;
                    localStorage.setItem('quizTimerSeconds', totalSeconds);
                    updateTimerDisplay();
                }, 1000);
            }
        }
        
        function updateTimerDisplay() {
            const minutes = Math.floor(totalSeconds / 60).toString().padStart(2, '0');
            const seconds = (totalSeconds % 60).toString().padStart(2, '0');
            document.getElementById('timer-display').textContent = `${minutes}:${seconds}`;
        }
        
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
            document.querySelectorAll('.option').forEach(opt => {
                opt.classList.remove('selected', 'correct', 'wrong');
            });
            
            element.classList.add('selected');
            
            if (selectedLetter.toLowerCase() === correctLetter.toLowerCase()) {
                element.classList.add('correct');
            } else {
                element.classList.add('wrong');
                document.querySelectorAll('.option').forEach(opt => {
                    const optLetter = opt.textContent.trim().charAt(0).toLowerCase();
                    if (optLetter === correctLetter.toLowerCase()) {
                        opt.classList.add('correct');
                    }
                });
            }
            
            isQuestionAnswered = true;
            document.getElementById('next-btn').disabled = false;
        }

        // ===== NAVIGATION =====
        function nextQuestion() {
            const currentIndex = <?= $currentQuestionIndex ?>;
            if(currentIndex < 15) {
                localStorage.setItem('quizTimerSeconds', totalSeconds);
                window.location.href = `?q=${currentIndex + 1}`;
            } else {
                stopTimer();
                alert(`Quiz Complete! Time Taken: ${document.getElementById('timer-display').textContent}`);
                // window.location.href = 'results.php'; // Uncomment if needed
            }
        }

        // Initialize Quiz
        document.addEventListener('DOMContentLoaded', function() {
            // Create animated elements first
            createElementsBackground();
            
            // Then start the timer
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