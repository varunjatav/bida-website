window.addEventListener("load", () => fetchNews("bundelkhand")); function reload() { window.location.reload() }



console.log(mainWebsiteAdminPath);

async function fetchNews(query) {
  try {
   
    const response = await fetch(`${mainWebsiteAdminPath}/core/getNews.core.php`);
    
  
    if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const newsData = await response.json();
  
    
    bindData(newsData.data);
} catch (error) {
    // Catch and log any errors that occur during fetch or JSON parsing
    console.error('Error fetching data:', error);
}
}



function bindData(articles) {
 
  const cardsContainer = document.getElementById("cards-container"); 
  const newsCardTemplate = document.getElementById("template-news-card"); 
  if (!cardsContainer || !newsCardTemplate) {
       return 
    }
  cardsContainer.innerHTML = ""; 
  articles.forEach((article) =>{ 
    const articleData = JSON.parse(article.News);


    // Skip articles without images
    if (!articleData.urlToImage) return;
    
  const cardClone = newsCardTemplate.content.cloneNode(!0); 
  // console.log("single article", article.News)
  fillDataInCard(cardClone, articleData); 
  cardsContainer.appendChild(cardClone) 
}
)
}
function fillDataInCard(cardClone, article) { 
  const newsImg = cardClone.querySelector("#news-img"); 
  const newsTitle = cardClone.querySelector("#news-title"); 
  const newsSource = cardClone.querySelector("#news-source"); 
  const newsDesc = cardClone.querySelector("#news-desc"); 
  newsImg.src = article.urlToImage; 
  newsTitle.innerHTML = article.title;
  newsDesc.innerHTML = article.description; 
  const date = new Date(article.publishedAt).
  toLocaleString("en-US", { timeZone: "Asia/Jakarta", });
   newsSource.innerHTML = `${article.source.name} · ${date}`; 
   cardClone.firstElementChild.addEventListener("click", () => { window.open(article.url, "_blank") }) 
  }



document.addEventListener("DOMContentLoaded", function () {
  const wheel = document.getElementById("wheel");
   const shapesGroup = document.getElementById("shapes"); 
   let currentRotation = 98; 
   let activeShapeIndex = 0; 
   let angleIncrement = 0; 
   const updateRotation = () => { 
    wheel.style.transition = "transform 0.5s ease-out";
   wheel.style.transform = `rotate(${currentRotation}deg)` }; 
   const rotateUp = () => {
    const desiredRotation = -290; 
    const shapesCount = shapes.length; 
    const anglePerShape = 360 / shapesCount; activeShapeIndex = (activeShapeIndex + 1) % shapesCount; 
    const targetRotation = desiredRotation - anglePerShape * activeShapeIndex; 
    let rotationNeeded = targetRotation - currentRotation; 
    if (rotationNeeded < -180) { rotationNeeded += 360 } 
    else if (rotationNeeded > 180) { rotationNeeded -= 360 }
    currentRotation += rotationNeeded; updateRotation(); updateActiveClass()
  }; const rotateDown = () => {
    const desiredRotation = -290; const shapesCount = shapes.length; const anglePerShape = 360 / shapesCount; activeShapeIndex = (activeShapeIndex - 1 + shapesCount) % shapesCount; const targetRotation = desiredRotation - anglePerShape * activeShapeIndex; let rotationNeeded = targetRotation - currentRotation; if (rotationNeeded < -180) { rotationNeeded += 360 } else if (rotationNeeded > 180) { rotationNeeded -= 360 }
    currentRotation += rotationNeeded; updateRotation(); updateActiveClass()
  }; const updateTextContent = () => {
    const activeShape = document.querySelector(".wheel-wrapper .wheel-container .active"); const shapeTitle = activeShape.querySelector(".ellipsis").innerText; let paraone = ""; let paratwo = ""; let parathree = ""; if (shapeTitle === "Land Acquisition and Management System (LAMS)") {
      paraone = "land-acquisition.php"; paratwo = `•  Time Efficiency: LAMS drastically cuts down the time required for managing land-related documents and access, accelerating business processes.
                •  Document Accuracy & Timeliness: Ensures documents are accurate and readily available when needed, minimising delays.
                •  Consolidated Data Reporting: Provides comprehensive reports and data consolidation, making information management smoother.
                •  Real-Time Integration with GIS: Offers up-to-the-minute updates on industrial estates, plots, allotment status, transfers, reconstitution, changes in product, cancellation status, and company status (e.g., under construction, in production).
                •  Customizable MIS Reports: Allows for the generation of MIS reports based on various plot criteria, enhancing decision-making.
                
                `; parathree = `Key features of LAMS enhance user experience and operational effectiveness. These include plot map visualisation, monitoring of the land acquisition process, analysis of owner and family trees, valuation of plots and assets, detection of encroachments, and tracking of legal litigations.`
    } else if (shapeTitle === "E-Tendering / E-RFP") {
      parathree = `  BIDA's E-Tendering Management System offers a comprehensive online solution that streamlines the tendering and procurement process, making it efficient and transparent for suppliers and buyers alike`; paraone = "e-tendering.php"; paratwo = `•  Vendor/Supplier Registration
                •  Approval Workflow
                •  Auto Extraction Of Boq List From Excel
                •  Integrated Contract Management (Coming Soon)
                •  RFP Or Tender Creation, Revision, Extension
                •  Tender Activity Tracking And Reporting
                •  Suppliers Portal
                •  RFB Publishing
                •  Clarification Module
                •  RFP responding
                `} else if (shapeTitle === "Property Management") {
      parathree = `BIDA Property Management System - your digital gateway to a seamless property handling experience! Imagine a system so advanced, it transforms the way you manage plots, houses, and properties with just a few clicks.`; paraone = "property-managment.php"; paratwo = `• Mortgage Permissions Made Easy: Whether you’re an allottee or a sub-allottee, managing mortgage permissions is a breeze.
          • Simply Transferable: Changing addresses or transferring properties? Consider it done with minimal fuss.
          • Document Security: Change of constitution, lease deeds, no dues certificates - manage all your vital documents securely and efficiently.
          • Flexible Payments: From one-time payments to time extensions, financial flexibility is at the heart of what we do.
    
    `} else if (shapeTitle === "Integrated Financial Accounting Management System (IFMS)") {
      parathree = `Financial Management Information Systems (FMIS) stand as critical tools to ensure efficient, transparent, and effective management of financial resources.`; paraone = "integrated-financial.php"; paratwo = `Benefits:
                •  Data Collection: An ideal FMIS ensures the accuracy, timeliness, and reliability of financial information, forming the bedrock of trust in governmental decisions.
                •  Management Reporting: It provides precise reports necessary for strategic decision-making, guiding the direction and policies of the government.
                •  Policy Support: With FMIS, policy decisions are substantiated with solid data, fostering informed policymaking and superior governance.
                •  Budgeting Facilitation: Essential to governmental operations, FMIS streamlines the budgeting process, from preparation to execution, ensuring financial discipline and accountability.
                `} else if (shapeTitle === "Allottee's Online Services Management System") {
      parathree = `Designed for urban services users, real estate allottees, and BIDA property owners, this Allottee’s Online Services Management System presents a comprehensive solution, aiming to enhance convenience, improve operational efficiency, and ensure user satisfaction through its multifaceted features and benefits. `; paraone = "urban-citizen.php"; paratwo = `•  Offers a streamlined and paperless application process.
                •  Real-time updates and communication improve the user experience.
                •  Integration with analytical tools provides valuable service insights.
                •  Comprehensive range of services, from property management to urban service requests.
                •  Enhances transaction security and user convenience with online payments and notifications.           
                `} else if (shapeTitle === "eCitizen payment /IPS") {
      parathree = `The eCitizen Payment Management System serves as a pivotal innovation in streamlining governmental and municipal service payments.  `; paraone = "e-services.php"; paratwo = `•  Enhanced management of cash, debt and liabilities
                •  Ability to use historical information to provide better budget modelling proces
                •  Reduced cost for financial transactions
                •  Increased decision-making efficiency
                `} else if (shapeTitle === "E-BG (Bank Guarantees)") {
      parathree = `e-BG is the Guarantee issued by the banks on behalf of their customers in digital form. The issuance of electronic bank guarantees completely eliminates papers in the process. `; paraone = "e-bg.php"; paratwo = `•  Reduce delays
                •  Notification from NeSL on issuance and for any subsequent status change
                •  Ease of verification, access, search, trail/history
                •  Initiate invocation request/ discharge letter electronically
                •  Notifications/alerts before expiry (future development)
                •  API based automation for eBG access (future development)
                `} else if (shapeTitle === "Tax and Legal Notice Management System (TLMS)") {
      parathree = `By adopting BIDA’s Integrated SCM Software approach, partnering organisations can significantly benefit from the orchestration of goods and information flow, ensuring a seamless, efficient, and responsive supply chain.`; paraone = "tax.php"; paratwo = `•  Powerful tracking
                •  Seamless updates
                •  Notifications
                •  Document storage and management
                •  Leverage the ability of Cloud to upload and store all the associated documents under a certain matter in a particular place for sustainable use.
                •  Manage and validate legal budget
                •  Generate on-demand reports
                `} else if (shapeTitle === "Supply Chain Management System") {
      parathree = `By adopting BIDA’s Integrated SCM Software approach, partnering organisations can significantly benefit from the orchestration of goods and information flow, ensuring a seamless, efficient, and responsive supply chain.`; paraone = "supply-chain.php"; paratwo = `•  Reduced costs
                •  Improved inventory management
                •  Enhanced visibility & forecasting
                •  Boosted operational efficiency
                •  Faster deliveries & customer satisfaction
                •  Minimized disruptions & risk mitigation
                •  Smarter purchasing & supplier collaboration
                •  Increased agility & scalability
                •  Improved data-driven decision making
                
                `} else if (shapeTitle === "Grievance Management System") {
      parathree = `The Grievance Management System serves the dual purpose of democratising the process of raising grievances and institutionalising the process of resolving them. By doing so, it ensures that grievances are handled in a systematic, fair, and unbiased manner, leading to satisfactory outcomes for all parties involved.`; paraone = "grievance.php"; paratwo = `Acknowledgment: Notify the employee that their grievance has been received and is being reviewed.
                Investigation: Conduct a thorough, impartial, and objective investigation into the grievance.
                Resolution: Communicate the findings and resolutions to the involved parties in a clear and respectful manner.
                Feedback: Encourage citizens / Organizations to provide feedback on the resolution process and overall satisfaction.
                `}
    updateText(shapeTitle, paraone, paratwo, parathree)
  }; const updateText = (h2Text, paraone, paratwo, parathree) => { document.querySelector(".wheel-wrapper h2").innerText = h2Text; document.querySelector(".wheel-wrapper #paraone").href = paraone; document.querySelector(".wheel-wrapper #paratwo").innerText = paratwo; document.querySelector(".wheel-wrapper #parathree").innerText = parathree }; const upBtn = document.querySelector(".upBtn"); const downBtn = document.querySelector(".downBtn"); upBtn.addEventListener("click", rotateUp); downBtn.addEventListener("click", rotateDown); setInterval(() => { rotateUp() }, 900000); const shapes = document.querySelectorAll("#shapes > g"); shapes.forEach((shape, index) => { shape.addEventListener("click", function () { const clickedDeg = parseInt(shape.getAttribute("data-deg")); const rotationNeeded = 70 - clickedDeg; document.getElementById("wheel").style.transform = `rotate(${rotationNeeded}deg)`; activeShapeIndex = index; updateActiveClass() }) }); const updateActiveClass = () => { shapes.forEach((shape, index) => { shape.classList.remove("active", "left-side"); if (index === activeShapeIndex) { shape.classList.add("active", "left-side") } }); updateTextContent() }; const popupButton2 = document.getElementById("popupButton2"); const popupContainer2 = document.getElementById("popupContainer2"); const closeButton2 = document.getElementById("closeButton2"); popupButton2.addEventListener("click", function () { popupContainer2.style.display = "flex" }); closeButton2.addEventListener("click", function () { popupContainer2.style.display = "none" }); document.addEventListener("click", function (event) { if (event.target === popupContainer2) { popupContainer2.style.display = "none" } }); const popupButton3 = document.getElementById("popupButton3"); const popupContainer3 = document.getElementById("popupContainer3"); const closeButton3 = document.getElementById("closeButton3"); closeButton3.addEventListener("click", function () { popupContainer3.style.display = "none" }); document.addEventListener("click", function (event) { if (event.target === popupContainer3) { popupContainer3.style.display = "none" } }); const boxLeftText = document.getElementById("box-left-text"); const leftTab = document.querySelector(".left-tab"); const closeTabButton = document.querySelector(".close-tab"); leftTab.style.display = "none"; boxLeftText.addEventListener("click", function () { leftTab.style.display = leftTab.style.display === "none" ? "block" : "none" }); closeTabButton.addEventListener("click", function (event) { event.preventDefault(); leftTab.style.display = "none" }); $("body").on("click", ".view_map_detail", function () { var curr = $(this); var map_url = curr.attr("map_url"); var name = curr.attr("map_name"); var dataString = "name=" + name; $.ajax({ url: "ajax/map_details.php", type: "GET", data: dataString, cache: !1, success: function (data) { var parse_data = JSON.parse(data); var map_url = parse_data.map_url; var title = parse_data.title; var gram_panchayat = parse_data.gram_panchayat ? parse_data.gram_panchayat : "--"; var district = parse_data.district ? parse_data.district : "--"; var area = parse_data.area ? parse_data.area : "--"; var total_population = parse_data.total_population ? parse_data.total_population : "--"; var desc = parse_data.desc; $("#popupContainer3").css("display", "flex"); $("#popupContainer3").find("iframe").attr("src", map_url); $("#popupContainer3").find(".dev_desc").text(desc); $("#popupContainer3").find(".dev_title").text(title); $("#popupContainer3").find(".dev_gp").text(gram_panchayat); $("#popupContainer3").find(".dev_disc").text(district); $("#popupContainer3").find(".dev_area").text(area); $("#popupContainer3").find(".dev_popu").text(total_population) }, }) })
}); var isSpeaking = !1; var speech; function toggleSpeech(elementId, idToChangeText) { if (!isSpeaking) { startSpeech(elementId, idToChangeText) } else { stopSpeech(elementId, idToChangeText) } }
function startSpeech(elementId, idToChangeText) {
  var text = document.getElementById(elementId).innerText; var speech = new SpeechSynthesisUtterance(); speech.text = text; speech.lang = "en-IN"; speech.volume = 1; speech.rate = 1; speech.pitch = 1; var voices = speechSynthesis.getVoices(); var selectedVoice = voices.find(function (voice) { return voice.lang === "en-IN" && voice.name.includes("female") }); if (!selectedVoice) { selectedVoice = voices[0] }
  speech.voice = selectedVoice; window.speechSynthesis.speak(speech); isSpeaking = !0; document.getElementById(idToChangeText).innerText = "Stop"
}
function stopSpeech(elementId, idToChangeText) { window.speechSynthesis.cancel(); isSpeaking = !1; document.getElementById(idToChangeText).innerText = "Read Text" }
document.addEventListener("DOMContentLoaded", function () { const sec1Elements = document.querySelectorAll(".sec1"); const mainClassElements = document.querySelectorAll(".main_class"); sec1Elements.forEach(function (sec1, index) { sec1.addEventListener("click", function () { sec1Elements.forEach(function (mainClass) { mainClass.classList.remove("active-sec1") }); this.classList.add("active-sec1"); mainClassElements.forEach(function (mainClass) { mainClass.style.display = "none"; mainClass.classList.remove("active-main") }); const targetId = sec1.getAttribute("data-target"); const targetDiv = document.getElementById(targetId); if (targetDiv) { targetDiv.style.display = "flex"; targetDiv.classList.add("active-main") } }) }) })
