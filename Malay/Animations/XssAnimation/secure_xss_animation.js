// HEADER STUFF ANIMATION

gsap.from(".headerStuff", {
    y: -50,
    opacity: 0,
    duration: 2,
    stagger: 0.2,
    ease: "power4.out",
})

// XSS PAGE ANIMATION

gsap.from(".xssPageSection", {
    opacity: 0,
    duration: 2,
    ease: "power4.out",
})

// POPUP TEXT ANIMATION

    // POPUP1 TEXT ANIMATION

    const textElement1 = document.querySelector(".popupText1");

    const text1 = textElement1.textContent;
    textElement1.textContent = "";

    text1.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement1.appendChild(span);
    });

    gsap.from(
      textElement1.children,
      {
        display: "none",
        stagger: 0.05, 
        duration: 0.5,
        ease: "power4.out", 
        scrollTrigger: {
          trigger: ".popupText1",
          start: "top 40%",
        }
      }
    );

    // POPUP2 TEXT ANIMATION

    const textElement2 = document.querySelector(".popupText2");

    const text2 = textElement2.textContent;
    textElement2.textContent = "";

    text2.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement2.appendChild(span);
    });

    gsap.from(
      textElement2.children,
      {
        display: "none",
        delay: 0.5,
        stagger: 0.05,
        duration: 1,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText2",
          start: "top 40%",
        }
      }
    );

    // POPUP3 TEXT ANIMATION

    const textElement3 = document.querySelector(".popupText3");

    const text3 = textElement3.textContent;
    textElement3.textContent = "";

    text3.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement3.appendChild(span);
    });

    gsap.from(
      textElement3.children,
      {
        display: "none",
        delay: 0.8,
        stagger: 0.05,
        duration: 1.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText3",
          start: "top 40%",
        }
      }
    );

    // POPUP4 TEXT ANIMATION

    const textElement4 = document.querySelector(".popupText4");

    const text4 = textElement4.textContent;
    textElement4.textContent = "";

    text4.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement4.appendChild(span);
    });

    gsap.from(
      textElement4.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText4",
          start: "top 40%",
        }
      }
    );

    // POPUP5 TEXT ANIMATION

    const textElement5 = document.querySelector(".popupText5");

    const text5 = textElement5.textContent;
    textElement5.textContent = "";

    text5.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement5.appendChild(span);
    });

    gsap.from(
      textElement5.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText5",
          start: "top 40%",
        }
      }
    );

    // POPUP6 TEXT ANIMATION

    const textElement6 = document.querySelector(".popupText6");

    const text6 = textElement6.textContent;
    textElement6.textContent = "";

    text6.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement6.appendChild(span);
    });

    gsap.from(
      textElement6.children,
      {
        display: "none",
        delay: 4.5,
        stagger: 0.05,
        duration: 3,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText6",
          start: "top 40%",
        }
      }
    );



// NAME INPUT TEXT ANIMATION
const nameInput = document.getElementById("name");

nameInput.addEventListener("click", () => {
  
    // POPUP TEXT ANIMATION

    // POPUP1 TEXT ANIMATION

    const textElement1 = document.querySelector(".popupText1");

    const text1 = "Enter your name, ";
    textElement1.textContent = "";

    text1.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement1.appendChild(span);
    });

    gsap.from(
      textElement1.children,
      {
        display: "none",
        stagger: 0.05, 
        duration: 0.5,
        ease: "power4.out", 
        scrollTrigger: {
          trigger: ".popupText1",
          start: "top 40%",
        }
      }
    );

    // POPUP2 TEXT ANIMATION

    const textElement2 = document.querySelector(".popupText2");

    const text2 = "";
    textElement2.textContent = "";

    text2.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement2.appendChild(span);
    });

    gsap.from(
      textElement2.children,
      {
        display: "none",
        delay: 0.5,
        stagger: 0.05,
        duration: 1,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText2",
          start: "top 40%",
        }
      }
    );

    // POPUP3 TEXT ANIMATION

    const textElement3 = document.querySelector(".popupText3");

    const text3 = "you're about to make history...";
    textElement3.textContent = "";

    text3.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement3.appendChild(span);
    });

    gsap.from(
      textElement3.children,
      {
        display: "none",
        delay: 0.8,
        stagger: 0.05,
        duration: 1.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText3",
          start: "top 40%",
        }
      }
    );

    // POPUP4 TEXT ANIMATION

    const textElement4 = document.querySelector(".popupText4");

    const text4 = "";
    textElement4.textContent = "";

    text4.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement4.appendChild(span);
    });

    gsap.from(
      textElement4.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText4",
          start: "top 40%",
        }
      }
    );

    // POPUP5 TEXT ANIMATION

    const textElement5 = document.querySelector(".popupText5");

    const text5 = "";
    textElement5.textContent = "";

    text5.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement5.appendChild(span);
    });

    gsap.from(
      textElement5.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText5",
          start: "top 40%",
        }
      }
    );

    // POPUP6 TEXT ANIMATION

    const textElement6 = document.querySelector(".popupText6");

    const text6 = " or at least, a popup!";
    textElement6.textContent = "";

    text6.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement6.appendChild(span);
    });

    gsap.from(
      textElement6.children,
      {
        display: "none",
        delay: 4.5,
        stagger: 0.05,
        duration: 3,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText6",
          start: "top 40%",
        }
      }
    );


});

// COMMENT INPUT TEXT ANIMATION
const commentInput = document.getElementById("comment");

commentInput.addEventListener("click", () => {
  
    // POPUP TEXT ANIMATION

    // POPUP1 TEXT ANIMATION

    const textElement1 = document.querySelector(".popupText1");

    const text1 = "Say something devastating, wrapped in a ";
    textElement1.textContent = "";

    text1.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement1.appendChild(span);
    });

    gsap.from(
      textElement1.children,
      {
        display: "none",
        stagger: 0.05, 
        duration: 0.5,
        ease: "power4.out", 
        scrollTrigger: {
          trigger: ".popupText1",
          start: "top 40%",
        }
      }
    );

    // POPUP2 TEXT ANIMATION

    const textElement2 = document.querySelector(".popupText2");

    const text2 = "<script> tag! ";
    textElement2.textContent = "";

    text2.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement2.appendChild(span);
    });

    gsap.from(
      textElement2.children,
      {
        display: "none",
        delay: 1.5,
        stagger: 0.05,
        duration: 1,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText2",
          start: "top 40%",
        }
      }
    );

    // POPUP3 TEXT ANIMATION

    const textElement3 = document.querySelector(".popupText3");

    const text3 = "";
    textElement3.textContent = "";

    text3.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement3.appendChild(span);
    });

    gsap.from(
      textElement3.children,
      {
        display: "none",
        delay: 1.5,
        stagger: 0.05,
        duration: 1.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText3",
          start: "top 40%",
        }
      }
    );

    // POPUP4 TEXT ANIMATION

    const textElement4 = document.querySelector(".popupText4");

    const text4 = "";
    textElement4.textContent = "";

    text4.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement4.appendChild(span);
    });

    gsap.from(
      textElement4.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText4",
          start: "top 40%",
        }
      }
    );

    // POPUP5 TEXT ANIMATION

    const textElement5 = document.querySelector(".popupText5");

    const text5 = "";
    textElement5.textContent = "";

    text5.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement5.appendChild(span);
    });

    gsap.from(
      textElement5.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText5",
          start: "top 40%",
        }
      }
    );

    // POPUP6 TEXT ANIMATION

    const textElement6 = document.querySelector(".popupText6");

    const text6 = "Look at the examples below...";
    textElement6.textContent = "";

    text6.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement6.appendChild(span);
    });

    gsap.from(
      textElement6.children,
      {
        display: "none",
        delay: 4.5,
        stagger: 0.05,
        duration: 3,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText6",
          start: "top 40%",
        }
      }
    );


});

const postComment = document.getElementById("postComment");

postComment.addEventListener("click", () => {

    // POPUP TEXT ANIMATION

    // POPUP1 TEXT ANIMATION

    const textElement1 = document.querySelector(".popupText1");

    const text1 = "That payload just crashed";
    textElement1.textContent = "";

    text1.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement1.appendChild(span);
    });

    gsap.from(
      textElement1.children,
      {
        display: "none",
        stagger: 0.05, 
        duration: 0.5,
        ease: "power4.out", 
        scrollTrigger: {
          trigger: ".popupText1",
          start: "top 40%",
        }
      }
    );

    // POPUP2 TEXT ANIMATION

    const textElement2 = document.querySelector(".popupText2");

    const text2 = "";
    textElement2.textContent = "";

    text2.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement2.appendChild(span);
    });

    gsap.from(
      textElement2.children,
      {
        display: "none",
        delay: 1.5,
        stagger: 0.05,
        duration: 1,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText2",
          start: "top 40%",
        }
      }
    );

    // POPUP3 TEXT ANIMATION

    const textElement3 = document.querySelector(".popupText3");

    const text3 = "on a wall called ";
    textElement3.textContent = "";

    text3.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement3.appendChild(span);
    });

    gsap.from(
      textElement3.children,
      {
        display: "none",
        delay: 1.5,
        stagger: 0.05,
        duration: 1.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText3",
          start: "top 40%",
        }
      }
    );

    // POPUP4 TEXT ANIMATION

    const textElement4 = document.querySelector(".popupText4");

    const text4 = "";
    textElement4.textContent = "";

    text4.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement4.appendChild(span);
    });

    gsap.from(
      textElement4.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText4",
          start: "top 40%",
        }
      }
    );

    // POPUP5 TEXT ANIMATION

    const textElement5 = document.querySelector(".popupText5");

    const text5 = "'Best Practices'";
    textElement5.textContent = "";

    text5.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement5.appendChild(span);
    });

    gsap.from(
      textElement5.children,
      {
        display: "none",
        delay: 2,
        stagger: 0.05,
        duration: 2.5,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText5",
          start: "top 40%",
        }
      }
    );

    // POPUP6 TEXT ANIMATION

    const textElement6 = document.querySelector(".popupText6");

    const text6 = "";
    textElement6.textContent = "";

    text6.split("").forEach(char => {
      const span = document.createElement("span");
      span.textContent = char;
      textElement6.appendChild(span);
    });

    gsap.from(
      textElement6.children,
      {
        display: "none",
        delay: 4.5,
        stagger: 0.05,
        duration: 3,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".popupText6",
          start: "top 40%",
        }
      }
    );

});