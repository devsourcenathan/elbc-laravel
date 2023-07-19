<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau de bord</title>

    <link rel="stylesheet" href="{{asset("admin/assets/css/main/app.css")}}" />
    <link rel="stylesheet" href="{{asset("admin/assets/css/main/app-dark.css")}}" />
    <link
      rel="shortcut icon"
      href="{{asset("admin/assets/images/logo/favicon.svg")}}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{asset("admin/assets/images/logo/favicon.png")}}"
      type="image/png"
    />

    <link rel="stylesheet" href="{{asset("admin/assets/css/shared/iconly.css")}}" />
    <link
      rel="stylesheet"
      href="{{asset("admin/assets/extensions/simple-datatables/style.css")}}"
    />
    <link rel="stylesheet" href="{{asset("admin/assets/css/pages/simple-datatables.css")}}" />
  </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="/dashboard">Admin</a>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-item">
                  <a href="/dashboard" class="sidebar-link">
                      <i class="bi bi-grid-fill"></i>
                      <span>Accueil</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/admin/blog" class="sidebar-link">
                      <i class="bi bi-collection-fill"></i>
                      <span>Blog</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/admin/formations" class="sidebar-link">
                      <i class="bi bi-pentagon-fill"></i>
                      <span>Formations</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/admin/projects" class="sidebar-link">
                      <i class="bi bi-cash"></i>
                      <span>Projets</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/admin/donations" class="sidebar-link">
                      <i class="bi bi-bar-chart-fill"></i>
                      <span>Dons</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/admin/users" class="sidebar-link">
                      <i class="bi bi-journal-check"></i>
                      <span>Utilisateurs</span>
                  </a>
              </li>
          </ul>
          </div>
        </div>
      </div>
      <div id="main">