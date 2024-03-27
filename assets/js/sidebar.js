const sidebarToggle = document.getElementById('sidebar-toggle')

sidebarToggle.addEventListener('click', function () {
  document.getElementById('sidebar').classList.toggle('collapsed')
})
