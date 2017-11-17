var newFormButton = document.getElementById('add-factsheet-button');
var formContainer = document.getElementById('add-form');

//MINING ELEMENTS

var switchMinable = document.getElementById('minable-switch');
var proofOfWorkSwitch = document.getElementById('input-proof-of-work-coin');
var proofOfStakeSwitch = document.getElementById('input-proof-of-stake-coin')
var devMiningSwitch = document.getElementById('input-dev-mining-coin');
var premineSwitch = document.getElementById('input-premine-coin');
var blockTimeInput = document.getElementById('input-block-time-coin');

switchMinable.addEventListener('change', function () {
    proofOfWorkSwitch.classList.toggle('hidden');
    proofOfStakeSwitch.classList.toggle('hidden');
    devMiningSwitch.classList.toggle('hidden');
    premineSwitch.classList.toggle('hidden');
    blockTimeInput.classList.toggle('hidden');
});	


var switchPOW = document.getElementById('work-coin');
var powTokens = document.getElementById('input-block-reward-pow-coin');
switchPOW.addEventListener('change', function () {
    powTokens.classList.toggle('hidden');
});	


var switchPOS = document.getElementById('stake-coin');
var posTokens = document.getElementById('input-block-reward-pos-coin');
switchPOS.addEventListener('change', function () {
    posTokens.classList.toggle('hidden');
});	


var switchShare = document.getElementById('share-coin');
var shareTokens = document.getElementById('input-dev-revenue-coin');

	switchShare.addEventListener('change', function () {
    shareTokens.classList.toggle('hidden');
});	


var switchPremine = document.getElementById('premine-coin');
var premineTokens = document.getElementById('input-total-premine-coin');

	switchPremine.addEventListener('change', function () {
    premineTokens.classList.toggle('hidden');
});	

//ICO ELEMENTS
var switchICO = document.getElementById('ico-switch');
var icoTotalTokens = document.getElementById('input-total-ico-tokens-coin');
var icoTokensInvestors = document.getElementById('input-percentage-share-ico-investors-tokens-coin');
var icoPrice = document.getElementById('input-ico-price-coin');


switchICO.addEventListener('change', function () {
    icoTotalTokens.classList.toggle('hidden');
    icoTokensInvestors.classList.toggle('hidden');
    icoPrice.classList.toggle('hidden'); 
});	

var switchDevShare = document.getElementById('ico-devshare');
var icoDevShare = document.getElementById('input-percentage-share-ico-tokens-coin');

switchDevShare.addEventListener('change', function () {
    icoDevShare.classList.toggle('hidden');
});	


//DEV TEAM
var devTeamSwich = document.getElementById('dev-switch');
var devTeam = document.getElementById('div-team');

devTeamSwich.addEventListener('change', function () {
    devTeam.classList.toggle('hidden');
});	


//ADVISORS TEAM 
var advisorTeamSwich = document.getElementById('advisor-switch');
var advisorTeam = document.getElementById('div-advisors');

advisorTeamSwich.addEventListener('change', function () {
    advisorTeam.classList.toggle('hidden');
}); 


//TEAM MEMBERS
var devOne = document.getElementById('team-member-one');
var devTwo = document.getElementById('team-member-two');  
var devThree = document.getElementById('team-member-three');
var devFour = document.getElementById('team-member-four');
var devFive = document.getElementById('team-member-five');

var addDevTwoButton = document.getElementById('add-new-team-member-button-two');
var addDevThreeButton = document.getElementById('add-new-team-member-button-three');
var addDevFourButton = document.getElementById('add-new-team-member-button-four');
var addDevFiveButton = document.getElementById('add-new-team-member-button-five');

var deleteDevTwoButton = document.getElementById('delete-new-team-member-button-two');
var deleteDevThreeButton = document.getElementById('delete-new-team-member-button-three');
var deleteDevFourButton = document.getElementById('delete-new-team-member-button-four');
var deleteDevFiveButton = document.getElementById('delete-new-team-member-button-five');

addDevTwoButton.addEventListener('click', function(){
   addDevTwoButton.classList.toggle('hidden'); 
   //devTwo.classList.toggle('hidden');
    $('#team-member-two').slideDown(1000, function(){});   
});

addDevThreeButton.addEventListener('click', function(){
   addDevThreeButton.classList.toggle('hidden'); 
   //devThree.classList.toggle('hidden');
   $('#team-member-three').slideDown(1000, function(){}); 
});

addDevFourButton.addEventListener('click', function(){
   addDevFourButton.classList.toggle('hidden'); 
   //devFour.classList.toggle('hidden');
   $('#team-member-four').slideDown(1000, function(){}); 
});

addDevFiveButton.addEventListener('click', function(){
    addDevFiveButton.classList.toggle('hidden'); 
    //devFive.classList.toggle('hidden');
    $('#team-member-five').slideDown(1000, function(){}); 
});

deleteDevTwoButton.addEventListener('click', function(){
   addDevTwoButton.classList.toggle('hidden'); 
   //devTwo.classList.toggle('hidden');
   $('#team-member-two').slideUp(1000, function(){}); 
});

deleteDevThreeButton.addEventListener('click', function(){
   addDevThreeButton.classList.toggle('hidden'); 
   //devThree.classList.toggle('hidden');
   $('#team-member-three').slideUp(1000, function(){});
});

deleteDevFourButton.addEventListener('click', function(){
   addDevFourButton.classList.toggle('hidden'); 
   //devFour.classList.toggle('hidden');
   $('#team-member-four').slideUp(1000, function(){});
});

deleteDevFiveButton.addEventListener('click', function(){
   addDevFiveButton.classList.toggle('hidden'); 
   //devFive.classList.toggle('hidden');
   $('#team-member-five').slideUp(1000, function(){});
});


//Advisory TEAM MEMBERS
var advisorOne = document.getElementById('advisory-team-member-one');
var advisorTwo = document.getElementById('advisory-team-member-two');  
var advisorThree = document.getElementById('advisory-team-member-three');

var addAdvisorTwoButton = document.getElementById('add-new-advisory-team-member-button-two');
var addAdvisorThreeButton = document.getElementById('add-new-advisory-team-member-button-three');

var deleteAdvisorTwoButton = document.getElementById('delete-new-advsiory-team-member-button-two');
var deleteAdvisorThreeButton = document.getElementById('delete-new-advisory-team-member-button-three');

addAdvisorTwoButton.addEventListener('click', function(){
    addAdvisorTwoButton.classList.toggle('hidden'); 
   //devTwo.classList.toggle('hidden');
    $('#advisory-team-member-two').slideDown(1000, function(){});   
});




//The FORM pops up when the button 'START ADDING' is clicked.
newFormButton.addEventListener('click', function(){
	formContainer.classList.remove('hidden');
});





