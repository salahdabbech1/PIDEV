const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");
const captchaBox = document.querySelector(".captcha-box");


let questionCounter = 0;
let currentQuestion;
let availableQuestions=[];
let availableOptions=[];
let correctAnswers =0;
let attempt =0;

//push the questions into availableQuestions
function setAvailableQuestions(){
    const totalQuestion=quiz.length;
    for(let i=0; i<totalQuestion; i++){
        availableQuestions.push(quiz[i])
    }
    console.log(availableQuestions)
}
//set Q number and Q option
function getNewQuestion(){
    //set Q number
    questionText.innerHTML="Question "+ (questionCounter+1)+ " of "+quiz.length;
    //set Q text
    //random Q
    const questionIndex = availableQuestions[Math.floor(Math.random()*availableQuestions.length)]
    currentQuestion =questionIndex;
    questionNumber.innerHTML = currentQuestion.q;
    console.log(questionIndex);
    //posiotion of questionIndex from the avaibleQuestion
    const index1=availableQuestions.indexOf(questionIndex);
    //remove repetition (remove questionindex from avaiblequestion)
    availableQuestions.splice(index1,1);
    //console.log(questionIndex)
    //console.log(availableQuestions)
    //set options
    const optionLength= currentQuestion.options.length
    //push options into availableOptions
    for(let i=0; i<optionLength; i++){
        availableOptions.push(i)
    }
    optionContainer.innerHTML='';
    let animationDelay =0.15;
    //create option in twig
    for(let i=0; i<optionLength; i++){
        //random opt
        const optionIndex =availableOptions[Math.floor(Math.random()*availableOptions.length)];
        //get the potision of optionindex from the avaible options
        const index2 = availableOptions.indexOf(optionIndex);
        //remove repetition
        availableOptions.splice(index2,1);
        
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id=optionIndex;
        option.style.animationDelay = animationDelay+'s';
        animationDelay = animationDelay+ 0.15;
        option.className="option";
        optionContainer.appendChild(option);
        option.setAttribute("onclick","getResult(this)");
    }
    questionCounter++
}
//result of current attempt
function getResult(optionElement){
    const id= parseInt(optionElement.id);
    
    if(id===currentQuestion.answer){
        //put the green color to correct answer
        optionElement.classList.add("correct")
        //add the indicator ( circle) to correct mark
        updateAnswerIndicator("correct");
        correctAnswers++;
        console.log("correct "+correctAnswers);
    }
    else{
        //put the red color to correct answer
        optionElement.classList.add("wrong") 
          //add the indicator ( circle) to wrong mark
          updateAnswerIndicator("wrong");
        //if wrong answer show correct one
        const optionLength= optionContainer.children.length;
        for(let i=0 ; i<optionLength;i++){
            if(parseInt(optionContainer.children[i].id)===currentQuestion.answer){
                optionContainer.children[i].classList.add("correct")
            }
        }
    }
    attempt++;
    unclickableOptions();
}

//click only once
function unclickableOptions(){
    const optionLength=optionContainer.children.length;
    for(let i=0; i<optionLength;i++){
        optionContainer.children[i].classList.add("already-answered");  
    }
}
function answersIndicator(){
    answersIndicatorContainer.innerHTML='';
    const totalQuestion=quiz.length;
    for(let i=0; i<totalQuestion; i++){
        const indicator =document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}
function  updateAnswerIndicator(markType){
    answersIndicatorContainer.children[questionCounter-1].classList.add(markType)
}
function next(){
    if(questionCounter ===quiz.length){
        console.log("quiz over")
        quizOver();
    }
    else{
        getNewQuestion();
    }
}
function quizOver(){
    //hide quizbox
    quizBox.classList.add("hide");
    //show result box
    resultBox.classList.remove("hide");
    quizResult();
}
//get resultat
function quizResult(){
    resultBox.querySelector(".total-question").innerHTML=quiz.length;
    resultBox.querySelector(".total-attempt").innerHTML=attempt;
    resultBox.querySelector(".total-correct").innerHTML=correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML=attempt - correctAnswers;
    const percentage = (correctAnswers/quiz.length)*100;
    resultBox.querySelector(".percentage").innerHTML=percentage.toFixed(2)+"%";
    resultBox.querySelector(".total-score").innerHTML=correctAnswers+" / " +quiz.length;
}
function resetQuiz(){
     questionCounter = 0;
    
     correctAnswers =0;
     attempt =0;
}

function tryAgainQuiz(){
    //hide quiz
    resultBox.classList.add("hide");
    //show quiz
    quizBox.classList.remove("hide");
    resetQuiz();
    startQuiz();
}

function goToHome(){
    //hide resultBox
    resultBox.classList.add("hide");
    //show home result
    homeBox.classList.remove("hide");
    resetQuiz();
    startQuiz();
}
function startQuiz(){
   
    //hide home box
    homeBox.classList.add("hide");
    //show quiz box
    quizBox.classList.remove("hide");
    //we start by setting all questions avaible
    setAvailableQuestions();
    //then we call getNewQuestion();
    getNewQuestion();
    //create indicator of answers
    answersIndicator();
}
function submitCaptcha(){
   
    captchaBox.classList.add("hide");
    homeBox.classList.remove("hide");

}
