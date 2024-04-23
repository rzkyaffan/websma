/*=============== SHOW MENU ===============*/
let showMenu = (toggleId, navId) =>{
  let toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

  toggle.addEventListener('click', () =>{
      // Add show-menu class to nav menu
      nav.classList.toggle('show-menu')

      // Add show-icon to show and hide the menu icon
      toggle.classList.toggle('show-icon')
  })
  console.log(toggle);
  console.log(nav);
}

showMenu('nav-toggle','nav-menu');

/*=============== AUTO ACTIVE MENU ===============*/
let section = document.querySelectorAll('section');
let navAct = document.querySelectorAll('nav a');

window.onscroll = () => {
  section.forEach(sect => {
    let top = window.scrollY;
    let offset = sect.offsetTop - 100;
    let height = sect.offsetHeight;
    let id = sect.getAttribute('id');

    if (top >= offset && top < offset + height) {
      navAct.forEach(links => {
        links.classList.remove('actived');
        document.querySelector('nav a[href*=' + id + ']').classList.add('actived');
      }); 
    }
  });
}
