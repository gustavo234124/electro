<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors\simple-line-icons\css\simple-line-icons.css">
  <link rel="stylesheet" href="vendors\flag-icon-css\css\flag-icon.min.css">
  <link rel="stylesheet" href="vendors\css\vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors\font-awesome\css\font-awesome.min.css">
  <link rel="stylesheet" href="vendors\jquery-bar-rating\fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css\style.css">
  <!-- endinject -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="shortcut icon" href="images\favicon.png">
  <style>
    .tooltip-button {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .tooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 10px;
        position: absolute;
        z-index: 1;
        top: 125%; /* Coloca la ventana emergente debajo del botón */
        left: 50%;
        margin-left: -100px; /* Usa la mitad del ancho (100px) para centrar la ventana emergente */
        opacity: 0;
        transition: opacity 0.3s;
    }

    .show {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-button i {
        color: red;
        font-size: 16px;
    }
    .fa-beat {
            animation: beat 1s infinite;
        }

        .fa-bounce {
            animation: bounce 1s infinite;
        }

        @keyframes beat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img style="height: 180px; width:200px;" src="images/logitpo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img  src="images\logo.png" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-envelope mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images\faces\face4.jpeg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images\faces\face2.jpeg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images\faces\face3.jpeg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked="">
                        Schedule meeting for next week
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked="">
                        Project review
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                </ul>
              </div>
              <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
              </div>
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
              </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
              <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
              </div>
              <ul class="chat-list">
                <li class="list active">
                  <div class="profile"><img src="images\faces\face1.jpeg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images\faces\face2.jpeg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <div class="wrapper d-flex">
                      <p>Catherine</p>
                    </div>
                    <p>Away</p>
                  </div>
                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                  <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images\faces\face3.jpeg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images\faces\face4.jpeg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images\faces\face5.jpeg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images\faces\face6.jpeg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">47 min</small>
                </li>
              </ul>
            </div>
            <!-- chat tab ends -->
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img style="margin-top: 280px;" src="images\faces\face10.jpeg" alt="image">
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name" style="margin-top: 300px;">
                  <p class="name">
                    Marina Michel
                  </p>
                  <p class="designation">
                    Super Admin
                  </p>
                </div>
              </div>
            </li>
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
             
            </li>
            <li class="nav-item">
              
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages\layout\boxed-layout.html">Boxed</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\layout\rtl-layout.html">RTL</a></li>
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages\layout\horizontal-menu.html">Horizontal Menu</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              
              </a>
              <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages\layout\compact-menu.html">Compact menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\layout\sidebar-collapsed.html">Icon menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\layout\sidebar-hidden.html">Sidebar Hidden</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\layout\sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\layout\sidebar-fixed.html">Sidebar Fixed</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
            
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                 
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                 
              </div>
            </li>
            <li class="nav-item">
              
                <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                 
                </ul>
              </div>
            </li>
            <li class="nav-item">
             
              <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                
                </ul>
              </div>
            </li>
          
              </a>
              <div class="collapse" id="charts">
              
                </div>
           

              
              <div class="">
              </div>
              
              <div class="">
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <div class="ml-3">
                
                    <p style="font-size: 20px;">
                        <b>Corriente Eficaz</b>
                        <span class="tooltip-button" id="tooltip-corriente-eficaz">
                            <i class="fa-solid fa-question"></i>
                            <span class="tooltiptext">Es el valor de una corriente alterna que genera el mismo calor o energía que una corriente continua del mismo valor.</span>
                        </span>
                    </p>
                    
                    </p>                      
                      <p class="text-center" style="color: green;margin-top:-10px;"><small>(al momento)</small></p>
                      <div id="dataContainer1"></div>
                    </span>

                    <script>
                      document.addEventListener('DOMContentLoaded', function () {
                          var tooltipButtons = document.querySelectorAll('.tooltip-button');
                  
                          tooltipButtons.forEach(function (button) {
                              var tooltipText = button.querySelector('.tooltiptext');
                  
                              button.addEventListener('click', function (event) {
                                  event.stopPropagation();
                                  tooltipText.classList.toggle('show');
                              });
                          });
                  
                          document.addEventListener('click', function () {
                              tooltipButtons.forEach(function (button) {
                                  var tooltipText = button.querySelector('.tooltiptext');
                                  tooltipText.classList.remove('show');
                              });
                          });
                      });
                  </script>
                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <div class="ml-3">
                    <p style="font-size: 20px;">
                        <b>Corriente pico</b>
                        <span class="tooltip-button" id="tooltip-corriente-eficaz">
                            <i class="fa-solid fa-question"></i>
                            <span class="tooltiptext">Es el valor de una corriente alterna que genera el mismo calor o energía que una corriente continua del mismo valor.</span>
                        </span>
                    </p>
                            <p class="text-center" style="color: green;margin-top:-10px;"><small>(al momento)</small></p>
                            <div id="dataContainer2"></div>
                            

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <div class="ml-3">
                    <p style="font-size: 20px;">
                        <b>Potencia en kw</b>
                        <span class="tooltip-button" id="tooltip-corriente-pico">
                          
                            <i class="fa-solid fa-question"></i>
                            <span class="tooltiptext">Es el valor de una corriente alterna que genera el mismo calor o energía que una corriente continua del mismo valor.</span>
                        </span>
                    </p>
                    
                    </p>     
                    <p class="text-center" style="color: green;margin-top:-10px;"><small>(al momento)</small></p>

                      <div id="dataContainer3"></div>
                      <script type="module">
                          // Import the functions you need from the SDKs you need
                          import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
                          import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-database.js";
                          import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";

                          // Your web app's Firebase configuration
                          const firebaseConfig = {
                              apiKey: "AIzaSyDlO_6TgPDXKr_E7Xx-gt_8hZUw2DZUO-4",
                              authDomain: "electrojordy-bb93b.firebaseapp.com",
                              databaseURL: "https://electrojordy-bb93b-default-rtdb.firebaseio.com",
                              projectId: "electrojordy-bb93b",
                              storageBucket: "electrojordy-bb93b.appspot.com",
                              messagingSenderId: "682247842148",
                              appId: "1:682247842148:web:70e06d8bf31659c79d3271",
                              measurementId: "G-86HEQ4TJF4"
                          };

                          // Initialize Firebase
                          const app = initializeApp(firebaseConfig);
                          const analytics = getAnalytics(app);
                          const database = getDatabase(app);

                          // Referencia a los datos que quieres obtener
                          const dataRef = ref(database, 'datos'); // Cambia 'ruta_a_tus_datos' por la ruta de tus datos en la base de datos

                          // Función para obtener datos y mostrarlos en los contenedores
                          onValue(dataRef, (snapshot) => {
                              const data = snapshot.val();
                              const dataContainer1 = document.getElementById('dataContainer1');
                              const dataContainer2 = document.getElementById('dataContainer2');
                              const dataContainer3 = document.getElementById('dataContainer3');

                              // Limpia los contenedores antes de mostrar nuevos datos
                              dataContainer1.innerHTML = '';
                              dataContainer2.innerHTML = '';
                              dataContainer3.innerHTML = '';

                              // Asigna los datos a los contenedores
                              let index = 0;
                              let corrienteEficaz = 0;
                              let corrientePico = 0;
                              let potencia = 0;

                              for (const key in data) {
                                  if (data.hasOwnProperty(key)) {
                                      const value = data[key];
                                      const dataElement = document.createElement('p');
                                      dataElement.textContent = `${value}`;

                                      // Asigna el dato al contenedor correspondiente
                                      if (index === 0) {
                                          corrienteEficaz = value;
                                          dataContainer1.appendChild(dataElement);
                                      } else if (index === 1) {
                                          corrientePico = value;
                                          dataContainer2.appendChild(dataElement);
                                      } else if (index === 2) {
                                          potencia = value;
                                          dataContainer3.appendChild(dataElement);
                                      }
                                      index++;
                                  }
                              }

                              // Calcular los kWh consumidos sumando las medidas
                              const kWhConsumidos = parseFloat(corrienteEficaz) + parseFloat(corrientePico) + parseFloat(potencia);

                              // Calcular el costo total basado en los kWh consumidos
                              const tarifaBasico = 0.793;
                              const tarifaIntermedio = 0.956;
                              const tarifaExcedente = 2.802;
                              let costoTotal = 0.0;
                              const kWhBasico = Math.min(kWhConsumidos, 75);
                              costoTotal += kWhBasico * tarifaBasico;

                              if (kWhConsumidos > 75) {
                                  const kWhIntermedio = Math.min(kWhConsumidos - 75, 65);
                                  costoTotal += kWhIntermedio * tarifaIntermedio;
                              }

                              if (kWhConsumidos > 140) {
                                  const kWhExcedente = kWhConsumidos - 140;
                                  costoTotal += kWhExcedente * tarifaExcedente;
                              }

                              // Mostrar el costo total en el HTML
                              const costoTotalElement = document.getElementById('costoTotal');
                              costoTotalElement.innerHTML = `$${costoTotal.toFixed(2)}`;
                          });
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <div class="ml-3">
                    <span class="tooltip-button" id="tooltip-corriente-pico">
                            <input style="border-radius: 10px;" class="inputDato" type="number" id="nuevoConsumoLimite" placeholder="Ingrese nuevo límite">
                        </span>
                    </p>
                    <button  class="btn btn-primary" onclick="establecerLimite()">Guardar</button>
                    <script>
    document.addEventListener("DOMContentLoaded", function() {
        verificarLimite();
    });

   
    function mostrarFormularioEstablecer() {
        document.getElementById('establecerLimiteSection').classList.remove('d-none');
        document.getElementById('mostrarLimiteSection').classList.add('d-none');
    }

    function mostrarLimite(consumoLimite) {
        document.getElementById('limiteActual').innerText = 'Límite: ' + consumoLimite;
        document.getElementById('mostrarLimiteSection').classList.remove('d-none');
        document.getElementById('establecerLimiteSection').classList.add('d-none');
    }

    function establecerLimite() {
        const nuevoConsumoLimite = document.getElementById('nuevoConsumoLimite').value;

        fetch('establecer_limite.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ consumo_limite: nuevoConsumoLimite })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Límite de consumo establecido correctamente.');
                mostrarLimite(nuevoConsumoLimite);
            } else {
                alert('Error al establecer el límite de consumo: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al establecer el límite de consumo.');
        });
    }
</script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 d-flex flex-column">
              <div class="row flex-grow">
                <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Porcentaje</h6>
                      <div class="row">
                        <div class="col-12 text-center">
                          <div class="row">
                            <div class="col-6 border-right">
                              <h4>63%</h4>
                              <p>Consumido</p>
                            </div>
                            <div class="col-6">
                              <h4>20%</h4>
                              <p>Libre</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-column align-items-center mt-3">
                        <div id="growth-chart">
                            7, 10, 11, 9, 11, 16, 12, 15, 13, 8, 12, 10, 13, 10, 16, 15, 12, 8, 10, 7, 16, 12, 8, 9, 7, 12
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                  <div class="card bg-info">
                    <div class="text-white py-3 px-4">
                      <h6 class="card-title text-white mb-0">Page View</h6>
                      <p>3669.25</p>
                      <div class="chart-container">
                        <canvas class="w-100 h-100" id="dashboard-lineChart-2" height="50"></canvas>
                      </div>
                      <small class="text-white">View Details</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                  <div class="card bg-success">
                    <div class="text-white py-3 px-4">
                    <h6 class="card-title text-white mb-0">Costo total</h6>
                         <p id="costoTotal">$0.00</p>
                      <div class="chart-container">
                        <canvas class="w-100 h-100" id="dashboard-lineChart-3" height="50"></canvas>
                      </div>
                      <small class="text-white">View Details</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                <h3 class="text-center">Porcentaje de consumo</h3>

      
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electroJordy";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

// Obtener consumo límite
$sql = "SELECT consumo_limite FROM consumo LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$consumoLimite = $row['consumo_limite'];
} else {
$consumoLimite = "No disponible";
}

$conn->close();

// Supongamos que obtienes estos valores de algún sensor o entrada
$potencia = 2.0; // Potencia en kW (por ejemplo)
$corrienteEficaz = 20.0; // Corriente eficaz en A (por ejemplo)

if ($consumoLimite !== "No disponible") {
// Calcular el porcentaje consumido
$porcentajeConsumido = ($potencia / $consumoLimite) * 100;
} else {
$porcentajeConsumido = "No disponible";
}
?>

<?php
                        if ($consumoLimite === "No disponible" || $porcentajeConsumido === "No disponible") {
                            echo '<p>No hay datos disponibles</p>';
                        }
                        ?>
                    </div>
                    <div class="wrapper">
                        <h3 class="text-center">kW Gastados</h3>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Consumo Límite</th>
                                    <th>kW Gastados</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($consumoLimite !== "No disponible" && $porcentajeConsumido !== "No disponible") {
                                    echo "<tr>
                                            <td>{$consumoLimite} KW</td>
                                            <td>{$potencia} KW</td>
                                          </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const porcentaje = <?php echo $porcentajeConsumido; ?>;
                        const tbody = document.querySelector('tbody');

                        if (porcentaje !== "No disponible") {
                            var audio = new Audio();
                            if (porcentaje < 70) {
                                audio.src = "alerta.mp3";
                            } else {
                                audio.src = "good.mp3";
                            }
                            if (audio.src !== "") {
                                audio.play();
                            }

                            const porcentajeRow = document.createElement('tr');
                            porcentajeRow.innerHTML = `
                                <td colspan="2" style="font-size:30px;color: ${porcentaje < 70 ? 'green' : 'red'};">
                                    ${porcentaje.toFixed(2)}%
                                    ${porcentaje < 70 ? '<i class="fa-solid fa-circle-check fa-bounce" style="color: #558a15;"></i><p style="font-size:1.5rem;">Consumo Normal, estás dentro del límite</p>' : '<i class="fa-solid fa-triangle-exclamation fa-beat" style="color: #e82626;"></i><p style="font-size:1.5rem;">Estás a punto de llegar al límite establecido</p>'}
                                </td>
                            `;
                            tbody.appendChild(porcentajeRow);
                        }
                    });
                </script>
                    
                    </div>
                  </div>
                  
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
         
            
          </div>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted text-center d-block text-center text-sm-left d-sm-inline-block">Copyright © 2024 <a href="#">Electro Jordys</a>. Todos los derechos reservados.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors\js\vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors\jquery-bar-rating\jquery.barrating.min.js"></script>
  <script src="vendors\chart.js\Chart.min.js"></script>
  <script src="vendors\raphael\raphael.min.js"></script>
  <script src="vendors\morris.js\morris.min.js"></script>
  <script src="vendors\jquery-sparkline\jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js\off-canvas.js"></script>
  <script src="js\hoverable-collapse.js"></script>
  <script src="js\misc.js"></script>
  <script src="js\settings.js"></script>
  <script src="js\todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js\dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
