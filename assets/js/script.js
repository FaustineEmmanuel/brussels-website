// Brussels Website - Custom JavaScript

$(document).ready(function() {
    
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
    
    // Navbar scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#mainNav').addClass('scrolled');
        } else {
            $('#mainNav').removeClass('scrolled');
        }
        
        // Show/hide scroll to top button
        if ($(this).scrollTop() > 300) {
            $('#scrollTopBtn').addClass('show');
        } else {
            $('#scrollTopBtn').removeClass('show');
        }
    });
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if(target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Scroll to top button
    $('#scrollTopBtn').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    
    // Lightbox configuration
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': 'Image %1 of %2',
        'fadeDuration': 300,
        'imageFadeDuration': 300
    });
    
    // Counter animation for statistics
    $('.stat-number').each(function() {
        var $this = $(this);
        var countTo = $this.attr('data-count');
        
        if (countTo) {
            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        }
    });
    
    // Gallery filter (if needed)
    $('.gallery-filter button').click(function() {
        var filterValue = $(this).attr('data-filter');
        
        $('.gallery-filter button').removeClass('active');
        $(this).addClass('active');
        
        if (filterValue === '*') {
            $('.gallery-item').fadeIn(500);
        } else {
            $('.gallery-item').hide();
            $(filterValue).fadeIn(500);
        }
    });
    
    // Form validation
    $('form').submit(function(e) {
        var isValid = true;
        
        $(this).find('input[required], textarea[required]').each(function() {
            if ($(this).val() === '') {
                $(this).addClass('is-invalid');
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        
        // Email validation
        var emailField = $(this).find('input[type="email"]');
        if (emailField.length > 0) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailField.val())) {
                emailField.addClass('is-invalid');
                isValid = false;
            }
        }
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields correctly.');
        }
    });
    
    // Remove invalid class on input
    $('input, textarea').on('input', function() {
        $(this).removeClass('is-invalid');
    });
    
    // Parallax effect for hero section
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        $('.hero-section').css('background-position', 'center ' + (scrolled * 0.5) + 'px');
    });
    
    // Mobile menu close on link click
    $('.navbar-nav>li>a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });
    
    // Hover effect for cards
    $('.card-custom').hover(
        function() {
            $(this).find('.card-img-top').css('transform', 'scale(1.1)');
        },
        function() {
            $(this).find('.card-img-top').css('transform', 'scale(1)');
        }
    );
    
    // Loading animation
    $(window).on('load', function() {
        $('body').addClass('loaded');
    });
    
    // Tooltips initialization
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Popovers initialization
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
});

// Preloader (if needed)
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.style.display = 'none';
    }
});
