var index = 0;

function dropdown() {
  index++;
  console.log(index);
  if (index % 2 == 0) {
    document.getElementById("myDropdown").style.display = "none";
  } else {
    document.getElementById("myDropdown").style.display = "block";
  }
}

// Close the dropdown menu if the user clicks outside of it
//   window.onclick = function(event) {
//     if (!event.target.matches('.dropbtn')) {
//       var dropdowns = document.getElementsByClassName("dropdown-content");
//       var i;
//     //   console.log(dropdowns);
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('show')) {
//           openDropdown.classList.remove('show');
//         }
//       }
//     }
//   }
