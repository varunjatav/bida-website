let isReading=!1;let audio;document.addEventListener("DOMContentLoaded",function(){document.getElementByClass("bod-text").addEventListener("click",toggleSpeechBod)});function toggleSpeechBod(){if(isReading){stopSpeech();document.getElementById("read-text-button-bod").innerHTML='<img src="img/play.svg" alt="">Read Text';document.getElementById("read-text-button-container").style="background:green"}else{startSpeech();document.getElementById("read-text-button-bod").innerHTML='<img src="img/stop.png" alt="">Stop';document.getElementById("read-text-button-container").style="background:red"}
isReading=!isReading}
function startSpeech(){var text=document.querySelector(".bod-text").innerText;let languageCode=detectLanguage(text);console.log(languageCode)
let voiceName=getVoiceName(languageCode);const apiKey='AIzaSyDP-yAaUIRSG3cpep-JpJ4vvLG_JPd2AI4';const url=`https://texttospeech.googleapis.com/v1/text:synthesize?key=${apiKey}`;const data={'input':{'text':text},'voice':{'languageCode':languageCode,'name':voiceName,'ssmlGender':'FEMALE'},'audioConfig':{'audioEncoding':'MP3'}};const otherparam={headers:{"Content-Type":"application/json; charset=UTF-8"},body:JSON.stringify(data),method:"POST"};fetch(url,otherparam).then(response=>response.json()).then(data=>{const audioContent=atob(data.audioContent);audio=new Audio();audio.src='data:audio/mp3;base64,'+data.audioContent;audio.play()}).catch(error=>{console.error('Error:',error)})}
function stopSpeech(){if(audio){audio.pause();audio.currentTime=0}}
function detectLanguage(text){if(/[a-zA-Z]/.test(text)){return'en-US'}else{return'ar-XA'}}
function getVoiceName(languageCode){if(languageCode==='en-US'){return'en-US-Studio-O'}else if(languageCode==='ar-XA'){return'ar-XA-Standard-A'}else{return'en-US-Studio-O'}}