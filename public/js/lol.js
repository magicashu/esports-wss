// const add = document.querySelector(".add-button");
// const addfifa = document.querySelector(".add-fifa");
// const list = document.querySelector(".addList")
// const valorant = document.querySelector(".valorant");
// const fifa = document.querySelector(".fifa");
// add.addEventListener("click", raada);
// addfifa.addEventListener("click",fifs);

// function raada(event) {
//   event.preventDefault();

//   const val = document.createElement("tr");
//   // val.innerHTML = '<form action="/create" method="POST"></form>';
//   val.classList.add("valorant");

//   const form = document.createElement("form");
//   form.action = "/create";
//   form.method = "POST";
//   // val.innerHTML = '<form action="/create" method="POST"></form>';
//   val.appendChild(form);

//   const username = document.createElement("td");
//   username.innerHTML = '<label name="username"><input type="text" name="username" placeholder="Username"id="username" ></input></label>';
//   form.insertAdjacentElement('afterbegin',username);

//   const kills = document.createElement("td");
//   kills.innerHTML = '<label name="kills"><input type="number" name="kills" placeholder="Kills"id="kills" ></input></label>';
//   form.insertAdjacentElement('afterbegin',kills);

//   const deaths = document.createElement("td");
//   deaths.innerHTML = '<label name="deaths"><input type="number" name="deaths" placeholder="Deaths"id="deaths" ></input></label>';
//   form.insertAdjacentElement('afterbegin',deaths);

//   const kdratio = document.createElement("td");
//   kdratio.innerHTML = '<label name="kdratio"><input type="text" name="kdratio" placeholder="kdratio"id="kdratio"></input></label>';
//   form.insertAdjacentElement('afterbegin',kdratio);

//   const badge = document.createElement("td");
//   badge.innerHTML = '<span class="badge badge-success">Alive</span>';
//   form.insertAdjacentElement('afterbegin',badge);
//  console.log("bhai fast fast nipta le");

//  valorant.appendChild(form);
// }

// function fifs(e){
//   e.preventDefault();

//   const fif = document.createElement("tr");
//   fif.appendChild
//   fif.classList.add("fifa");

//   const username = document.createElement("td");
//   username.innerHTML = '<label name="username"><input type="text" name="username" placeholder="Username"id="username" ></input></label>';
//   fif.appendChild(username);

//   const teams = document.createElement("td");
//   teams.innerHTML = '<label name="teams"><select name="teams" class="teams"><option value"">Select your teams</option><option value="FCB">FC Barcelona</option><option value="RMA">Real Madrid</option><option value="Chelsea">Chelsea</option><option value="ManU">Man. United</option></select></label>';
//   fif.appendChild(teams);

//   const goals = document.createElement("td");
//   goals.innerHTML = '<label name="goals"><input type="number" name="goals" placeholder="goals"id="goals" ></input></label>';
//   fif.appendChild(goals);

//   const cards = document.createElement("td");
//   cards.innerHTML = '<label name="cards"><select name="cards" class="cards"><option class="yes">Yes </option><option class="no">No </option></select></label>';
//   fif.appendChild(cards);

//   const fouls = document.createElement("td");
//   fouls.innerHTML = '<label name="fouls"><input type="number" name="fouls" placeholder="fouls"id="fouls" ></input></label>';
//   fif.appendChild(fouls);
//  console.log("bhai fast fast nipta le");
//  fifa.appendChild(fif);

// }

// function myFunction() {
//   var x = document.querySelector(".lol");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }
// // $(document).ready(function() {
// //   $('.nav-tabs > li > a').click(function(event){
// //   event.preventDefault();//stop browser to take action for clicked anchor
// //
// //   //get displaying tab content jQuery selector
// //   var active_tab_selector = $('.nav-tabs > li.active > a').attr('href');
// //
// //   //find actived navigation and remove 'active' css
// //   var actived_nav = $('.nav-tabs > li.active');
// //   actived_nav.removeClass('active');
// //
// //   //add 'active' css into clicked navigation
// //   $(this).parents('li').addClass('active');
// //
// //   //hide displaying tab content
// //   $(active_tab_selector).removeClass('active');
// //   $(active_tab_selector).addClass('hide');
// //
// //   //show target tab content
// //   var target_tab_selector = $(this).attr('href');
// //   $(target_tab_selector).removeClass('hide');
// //   $(target_tab_selector).addClass('active');
// //    });
// // });
