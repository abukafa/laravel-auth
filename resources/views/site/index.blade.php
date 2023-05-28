@extends('layouts.main')

@section('container')
<h1>Products and Services</h1>
<div class="album py-2">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">
        <img src="https://plus.unsplash.com/premium_photo-1663047716627-e0b6c878761e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" srcset="">
        <div class="card-body">
            <h5>Website Development</h5>
            <p class="card-text">Building custom websites from scratch or using content management systems (CMS) like WordPress, Drupal, or Joomla.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
        <div class="card-body">
            <h5>E-commerce Development</h5>
            <p class="card-text">Creating online stores and shopping cart systems, integrating payment gateways, and managing product catalogs.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" srcset="">
        <div class="card-body">
            <h5>Web Application Development</h5>
            <p class="card-text">Building dynamic web applications with interactive features, user authentication, and database integration.</p>
        </div>
        </div>
    </div>

    <div class="col">
        <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" srcset="">
        <div class="card-body">
            <h5>Custom Web Design</h5>
            <p class="card-text">Designing unique and visually appealing website layouts, considering branding, user experience (UX), and responsiveness.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
        <div class="card-body">
            <h5>Website Maintenance and Support</h5>
            <p class="card-text">Providing ongoing website updates, bug fixes, security patches, and technical support.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
        <img src="https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
        <div class="card-body">
            <h5>Responsive Web Design</h5>
            <p class="card-text">Optimizing websites to be mobile-friendly, ensuring seamless user experience across different devices and screen sizes.</p>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection