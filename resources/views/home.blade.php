<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: #f8f9fa;
      padding: 100px 0;
    }
    .section-title {
      font-size: 2rem;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>

  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">MyPortfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Hero Section --}}
  <section class="hero text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Hi, I'm John Doe</h1>
      <p class="lead text-muted">Web Developer & Designer</p>
      <a href="#projects" class="btn btn-primary mt-3">See My Work</a>
    </div>
  </section>

  {{-- About --}}
  <section id="about" class="py-5"> 
  <div class="container"> 
    <h2 class="section-title text-center">About Me</h2> 
    @foreach($abouts as $about)
      <p class="text-center">{{ $about->description }}</p> 
      <ul class="list-unstyled text-center"> 
        <li><strong>Name:</strong> {{ $about->name }}</li> 
        <li><strong>Major:</strong> {{ $about->major }}</li> 
        <li><strong>Phone:</strong> {{ $about->phone }}</li> 
      </ul> 
    @endforeach 
  </div> 
</section>
  {{-- Skills --}}
  <section id="skills" class="bg-light py-5"> 
    <div class="container"> 
        <h2 class="section-title text-center">Skills</h2> 
        <div class="row text-center"> 
            @foreach($skills as $skill) 
            <div class="col-md-3 mb-3"> 
                <div class="p-3 border rounded">{{ $skill->name }}</div> 
            </div> 
            @endforeach 
        </div> 
    </div> 
</section>
  {{-- Education--}}
  <section id="education" class="py-5"> 
    <div class="container"> 
        <h2 class="section-title text-center">Education</h2> 
        <div class="row"> 
            @foreach($educations as $edu) 
            <div class="col-md-6 mb-3"> 
                <div class="border p-3 rounded"> 
                    <h5>{{ $edu->institution }}</h5> 
                    <p>{{ $edu->major }} ({{ $edu->year }})</p> 
                </div> 
            </div> 
            @endforeach 
        </div> 
    </div> 
</section>

{{-- Experience --}}
<section id="experience" class="bg-light py-5"> 
    <div class="container"> 
        <h2 class="section-title text-center">Experience</h2> 
        <div class="row"> @foreach($experiences as $exp) 
            <div class="col-md-6 mb-3"> 
                <div class="border p-3 rounded"> 
                    <h5>{{ $exp->company }}</h5> 
                    <p>{{ $exp->position }} - {{ $exp->year }}</p> 
                    <p>{{ $exp->description }}</p> 
                </div> 
            </div> 
            @endforeach 
        </div> 
    </div> 
</section>

  {{-- Contact --}}
  
  <section id="contact" class="py-5"> 
    <div class="container"> 
        <h2 class="section-title text-center">Contact</h2> 
        <form action="{{ route('contact.store') }}" method="POST" class="col-md-8 mx-auto"> 
            @csrf 
            <div class="mb-3"> 
                <input type="text" name="name" class="form-control" placeholder="Your Name" required> 
            </div> 
            <div class="mb-3"> 
                <input type="email" name="email" class="form-control" placeholder="Your Email" required> 
            </div> 
            <div class="mb-3"> 
                <textarea name="message" rows="4" class="form-control" placeholder="Message" required></textarea> 
            </div> 
            <button type="submit" class="btn btn-primary w-100">Send Message</button> 
        </form> 
    </div> 
</section>

  <footer class="text-center py-4">
    <p class="text-muted mb-0">&copy; 2025 MyPortfolio. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
