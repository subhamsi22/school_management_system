// ==================== DOM Elements ====================
const mainContainer = document.querySelector(".main_c2");
const toggleBall = document.querySelector(".ball");
const deleteSection = document.querySelector(".deletbut");
const divider = document.getElementById("op");

const mainContent = document.querySelector(".main-content");
const usersContent = document.querySelector(".main_content2");
const examContent = document.querySelector(".mainforexam");
const resultcontent = document.querySelector(".resultsection");


// Navigation items
const navItems = {
  dashboard: document.getElementById("d"),
  users: document.getElementById("u"),
  exams: document.getElementById("e"),
  results: document.getElementById("r"),
  settings: document.getElementById("s"),
  logout: document.getElementById("l")
};

// Data visualization elements
const studentGraph = document.querySelector(".dataaa");
const teacherGraph = document.querySelector(".dataaaa");

// Table elements
const studentTable = document.getElementById("jst");
const studentHeader = document.querySelector(".hg");
const teacherTable = document.getElementById("jst2");
const teacherHeader = document.querySelector(".hg2");

// Delete buttons
const deleteStudentBtn = document.getElementById("delet");
const deleteTeacherBtn = document.querySelector(".tech");

// Form button
const submitBtn = document.getElementById("sub");
const examBtn = document.getElementById("exm");

// ==================== Constants ====================
const ACTIVE_FONT_SIZE = "20px";
const INACTIVE_FONT_SIZE = "17px";
const ANIMATION_DURATION = 1;
const ANIMATION_EASE = "power2.out";

// ==================== Toggle Add Form ====================
toggleBall.addEventListener("click", () => {
  const isOpen = toggleBall.style.transform === "translateX(30px)";
  
  if (isOpen) {
    toggleBall.style.transform = "translateX(0px)";
    mainContainer.style.display = "none";
    deleteSection.style.display = "block";
    divider.style.display = "block";
  } else {
    toggleBall.style.transform = "translateX(30px)";
    mainContainer.style.display = "flex";
    deleteSection.style.display = "none";
    divider.style.display = "none";
  }
});

// ==================== Data Visualization ====================
function animateGraph(element, dataValue) {
  const total = dataValue * 2;
  const height = 100 - total;
  
  gsap.to(element, {
    height: `${height}%`,
    duration: ANIMATION_DURATION + 0.5,
    ease: ANIMATION_EASE
  });
}

const studentData = typeof phpdata !== 'undefined' ? phpdata : [];
animateGraph(studentGraph, studentData);

const teacherData = typeof ph2 !== 'undefined' ? ph2 : [];
animateGraph(teacherGraph, teacherData);
// ==================== Navigation ====================
const navigationMap = [
  { id: navItems.dashboard, section: mainContent, others: [usersContent, examContent, resultcontent] },
  { id: navItems.users, section: usersContent, others: [mainContent, examContent, resultcontent] },
  { id: navItems.exams, section: examContent, others: [mainContent, usersContent, resultcontent] },
  { id: navItems.results, section: resultcontent, others: [mainContent, usersContent, examContent] },
  { id: navItems.settings, section: null, others: [mainContent, usersContent, examContent] },
  { id: navItems.logout, section: null, others: [mainContent, usersContent, examContent] }
];
var sidebar = document.querySelector(".sidebar");
navigationMap.forEach(nav => {
  nav.id.addEventListener("click", () => {
    // Update font sizes
    Object.values(navItems).forEach(item => { 
      item.style.fontSize = INACTIVE_FONT_SIZE;
    });
    nav.id.style.fontSize = ACTIVE_FONT_SIZE;
    
    // Show/hide sections
    if (nav.section) {
      nav.section.style.display = "block";
      if(nav.section === examContent) {
        sidebar.style.height = "auto";
      } else {
        sidebar.style.height = "100vh";
      }
    }
    nav.others.forEach(section => {
      section.style.display = "none";
    });

  });
});

// ==================== Table Toggle ====================
function createTableToggle(header, table, otherTable, otherHeader) {
  header.addEventListener("click", () => {
    const isVisible = table.style.display === "block";
    
    if (isVisible) {
      gsap.to(table, { x: 0, duration: ANIMATION_DURATION, ease: ANIMATION_EASE });
      table.style.display = "none";
      header.style.backgroundColor = "#fff";
    } else {
      gsap.to(table, { x: 40, duration: ANIMATION_DURATION, ease: ANIMATION_EASE });
      table.style.display = "block";
      header.style.backgroundColor = "lightblue";
      
      // Hide the other table
      otherTable.style.display = "none";
      otherHeader.style.backgroundColor = "#fff";
    }
  });
}

createTableToggle(studentHeader, studentTable, teacherTable, teacherHeader);
createTableToggle(teacherHeader, teacherTable, studentTable, studentHeader);

// ==================== Delete Buttons ====================
deleteStudentBtn.addEventListener("click", () => {
  if (confirm("Are you sure you want to delete all student data?")) {
    window.location.href = "delete.php";
  }
});

deleteTeacherBtn.addEventListener("click", () => {
  if (confirm("Are you sure you want to delete this teacher data?")) {
    window.location.href = "deletetech.php";
  }
});

// ==================== Form Submission ====================
submitBtn.addEventListener("click", () => {
  examBtn.style.display = "block";
});
