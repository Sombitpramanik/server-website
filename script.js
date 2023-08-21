

// <<<<<<<<<<<<<<<<<<<<< Start of the Blur System >>>>>>>>>>>>>>>>>>>>>>> 
const popup = document.getElementById("popup");

window.onload = function() {
  // Display the popup when the page loads
  popup.style.display = "block";
}

function closePopup() {
  // Close the popup and remove the blur effect
  popup.style.display = "none";
  document.querySelector(".blur-background").classList.remove("blur-background");
}
//  <<<<<<<<<<<<<<<<<<<<< End of Blur system >>>>>>>>>>>>>>.

// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Auto typing text >>>>>>>>>>>
const keywords = [
  "best pricing in industry",
  "Upto 95.83% uptime",
  "Flexible Server Option",
  "Manual Caching (on/Off)",
  "Development Server available"
  
];

const typingContainer = document.getElementById("typing-container");

function typeEffect(text, index, delay, callback) {
  if (index < text.length) {
    typingContainer.textContent += text.charAt(index);
    setTimeout(() => typeEffect(text, index + 1, delay, callback), delay);
  } else {
    setTimeout(callback, 1000); // Pause before removing text
  }
}

function deleteEffect(callback) {
  const text = typingContainer.textContent;
  if (text.length > 0) {
    typingContainer.textContent = text.slice(0, -1);
    setTimeout(() => deleteEffect(callback), 30);
  } else {
    setTimeout(callback, 1000); // Pause before starting next keyword
  }
}

function startTyping() {
  let currentIndex = 0;

  function typeAndDeleteNextKeyword() {
    if (currentIndex < keywords.length) {
      const currentKeyword = keywords[currentIndex];
      typeEffect(currentKeyword, 0, 50, () => {
        setTimeout(() => {
          deleteEffect(() => {
            currentIndex++;
            typeAndDeleteNextKeyword();
          });
        }, 1000); // Pause before deleting
      });
    } else {
      currentIndex = 0;
      typeAndDeleteNextKeyword(); // Loop back to the beginning
    }
  }

  typeAndDeleteNextKeyword();
}

window.addEventListener("load", startTyping);
// <<<<<<<<<<< End of code for auto typing text >>>>>>>>>>>>>>
