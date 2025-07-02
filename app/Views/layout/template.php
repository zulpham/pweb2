<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;?></title>
    <style>
        body {
            background: linear-gradient(to bottom, #f5f5dc, #e0f7fa);
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container-fluid {
            max-width: 1200px;
            padding: 0 1rem;
        }
        .navbar {
          background-color: #004d40;
          box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          padding: 0.5rem 1rem;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .navbar-brand {
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin:0.8rem 0;
        }
        .nav-link{
          margin-left: 0.8rem;
          margin-right: 0.8rem;
          padding: 0.5rem 1rem;
          border-radius: 4px;
        }
        .nav-link:hover {
            color: #4db6ac !important;
            background-color: rgba(255,255,255,0.1);
            text-decoration: none;
            transform: translateY(-2px);
        }
        .navbar-brand {
            margin-left: 1rem;
        }
        .navbar-nav {
            margin-right: 1rem;
        }
        @media (max-width: 991.98px) {
            .navbar-nav {
                margin-right: 0;
            }
            .nav-link {
                margin: 0.5rem 0;
            }
        }
        .btn-outline-success {
            border-color: #004d40;
            color: #004d40;
        }
        .btn-outline-success:hover {
            background-color: #004d40;
            color: #fff;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004d40;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('Pages'); ?>">Aquatic Universe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url(''); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/Fish'); ?>">Fish</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/Tips'); ?>">Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/Contact'); ?>">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
  <div class="container_section" style="background: rgba(255, 255, 255, 0.8); border-radius: 12px; padding: 2rem; margin: 2rem auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; max-width: 1200px; overflow: hidden;"><?= $this->renderSection('content'); ?></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script>
    function previewImg() {
        const sampul = document.querySelector('#sampul');
        const sampulLabel = document.querySelector('.input-group-text');
        const imgPreview = document.querySelector('.img-preview');
        sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
</body>
</html>