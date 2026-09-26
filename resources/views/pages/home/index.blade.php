@extends('layout.landing')

@section('title', 'WorkManagement — The workspace for modern teams')

@section('main')

    <div class="wm-landing-page">

        {{-- =========================================================
            HEADER
        ========================================================== --}}
        <header class="wm-landing-page__header">

            <div class="wm-landing-page__nav-container">

                <a href="{{ route('home') }}" class="wm-landing-page__logo">
                <span class="wm-landing-page__logo-mark">
                    <i class="ph ph-kanban"></i>
                </span>

                    <span class="wm-landing-page__logo-text">
                    WorkManagement
                </span>
                </a>

                <nav class="wm-landing-page__desktop-nav">

                    <a href="#product" class="wm-landing-page__nav-link">
                        Product
                    </a>

                    <a href="#features" class="wm-landing-page__nav-link">
                        Features
                    </a>

                    <a href="#solutions" class="wm-landing-page__nav-link">
                        Solutions
                    </a>

                    <a href="#pricing" class="wm-landing-page__nav-link">
                        Pricing
                    </a>

                    <a href="#faq" class="wm-landing-page__nav-link">
                        Resources
                    </a>

                </nav>

                <div class="wm-landing-page__nav-actions">

                    <a href="{{ route('login') }}"
                       class="wm-landing-page__sign-in">
                        Sign in
                    </a>

                    <a href="{{ route('register') }}"
                       class="wm-landing-page__nav-button">
                        Start free
                        <i class="ph ph-arrow-up-right"></i>
                    </a>

                </div>

                <button type="button"
                        class="wm-landing-page__mobile-toggle"
                        aria-label="Toggle navigation"
                        aria-expanded="false">

                    <i class="ph ph-list"></i>

                </button>

            </div>

            <div class="wm-landing-page__mobile-menu">

                <a href="#product" class="wm-landing-page__mobile-link">
                    Product
                </a>

                <a href="#features" class="wm-landing-page__mobile-link">
                    Features
                </a>

                <a href="#solutions" class="wm-landing-page__mobile-link">
                    Solutions
                </a>

                <a href="#pricing" class="wm-landing-page__mobile-link">
                    Pricing
                </a>

                <a href="#faq" class="wm-landing-page__mobile-link">
                    Resources
                </a>

                <div class="wm-landing-page__mobile-actions">

                    <a href="{{ route('login') }}"
                       class="wm-landing-page__mobile-login">
                        Sign in
                    </a>

                    <a href="{{ route('register') }}"
                       class="wm-landing-page__mobile-button">
                        Start free
                    </a>

                </div>

            </div>

        </header>


        {{-- =========================================================
            HERO
        ========================================================== --}}
        <main>

            <section class="wm-landing-page__hero"
                     id="product">

                <div class="wm-landing-page__hero-grid"></div>

                <div class="wm-landing-page__hero-glow wm-landing-page__hero-glow--one"></div>
                <div class="wm-landing-page__hero-glow wm-landing-page__hero-glow--two"></div>

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__hero-content">

                        <a href="#features"
                           class="wm-landing-page__announcement">

                            <span class="wm-landing-page__announcement-dot"></span>

                            A smarter workspace for modern teams

                            <i class="ph ph-arrow-right"></i>

                        </a>

                        <h1 class="wm-landing-page__hero-title">

                            Your team's work,
                            <span>finally in one place.</span>

                        </h1>

                        <p class="wm-landing-page__hero-description">

                            Plan projects, manage tasks, collaborate with your team,
                            and understand progress without jumping between tools.

                            <strong>
                                WorkManagement keeps everything connected.
                            </strong>

                        </p>

                        <div class="wm-landing-page__hero-actions">

                            <a href="{{ route('register') }}"
                               class="wm-landing-page__primary-button">

                                Start for free

                                <i class="ph ph-arrow-right"></i>

                            </a>

                            <a href="#product-preview"
                               class="wm-landing-page__secondary-button">

                            <span>
                                <i class="ph-fill ph-play"></i>
                            </span>

                                See how it works

                            </a>

                        </div>

                        <div class="wm-landing-page__hero-note">

                        <span>
                            <i class="ph-fill ph-check-circle"></i>
                            No credit card required
                        </span>

                            <span>
                            <i class="ph-fill ph-check-circle"></i>
                            Free plan available
                        </span>

                            <span>
                            <i class="ph-fill ph-check-circle"></i>
                            Setup in minutes
                        </span>

                        </div>

                    </div>


                    {{-- HERO PRODUCT --}}
                    <div class="wm-landing-page__hero-product"
                         id="product-preview">

                        <div class="wm-landing-page__browser">

                            <div class="wm-landing-page__browser-bar">

                                <div class="wm-landing-page__browser-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="wm-landing-page__browser-address">
                                    app.workmanagement.com
                                </div>

                                <div class="wm-landing-page__browser-action">
                                    <i class="ph ph-lock-simple"></i>
                                </div>

                            </div>

                            <div class="wm-landing-page__dashboard">

                                {{-- Sidebar --}}
                                <aside class="wm-landing-page__dashboard-sidebar">

                                    <div class="wm-landing-page__dashboard-brand">

                                    <span>
                                        <i class="ph ph-kanban"></i>
                                    </span>

                                        <strong>
                                            WorkManagement
                                        </strong>

                                    </div>

                                    <div class="wm-landing-page__dashboard-label">
                                        Workspace
                                    </div>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav is-active">

                                        <i class="ph ph-squares-four"></i>
                                        Dashboard

                                    </a>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav">

                                        <i class="ph ph-folder-simple"></i>
                                        Projects

                                        <small>12</small>

                                    </a>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav">

                                        <i class="ph ph-check-square"></i>
                                        Tasks

                                    </a>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav">

                                        <i class="ph ph-calendar-blank"></i>
                                        Calendar

                                    </a>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav">

                                        <i class="ph ph-users-three"></i>
                                        Team

                                    </a>

                                    <div class="wm-landing-page__dashboard-label">
                                        Manage
                                    </div>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav">

                                        <i class="ph ph-chart-line-up"></i>
                                        Reports

                                    </a>

                                    <a href="#"
                                       class="wm-landing-page__dashboard-nav">

                                        <i class="ph ph-gear"></i>
                                        Settings

                                    </a>

                                    <div class="wm-landing-page__dashboard-user">

                                    <span class="wm-landing-page__dashboard-avatar">
                                        AO
                                    </span>

                                        <div>
                                            <strong>Ashraful Oli</strong>
                                            <small>Admin</small>
                                        </div>

                                    </div>

                                </aside>


                                {{-- Dashboard content --}}
                                <div class="wm-landing-page__dashboard-content">

                                    <div class="wm-landing-page__dashboard-header">

                                        <div>

                                        <span>
                                            Monday, September 24
                                        </span>

                                            <h3>
                                                Good morning, Ashraful
                                            </h3>

                                        </div>

                                        <div class="wm-landing-page__dashboard-actions">

                                            <button type="button">
                                                <i class="ph ph-magnifying-glass"></i>
                                            </button>

                                            <button type="button">
                                                <i class="ph ph-bell"></i>
                                                <span></span>
                                            </button>

                                            <div>
                                                AO
                                            </div>

                                        </div>

                                    </div>


                                    {{-- Stats --}}
                                    <div class="wm-landing-page__dashboard-stats">

                                        <div class="wm-landing-page__dashboard-stat">

                                            <div class="wm-landing-page__stat-icon">
                                                <i class="ph ph-folder-simple"></i>
                                            </div>

                                            <div>
                                                <span>Active projects</span>
                                                <strong>24</strong>
                                            </div>

                                            <small>
                                                +12.5%
                                            </small>

                                        </div>

                                        <div class="wm-landing-page__dashboard-stat">

                                            <div class="wm-landing-page__stat-icon wm-landing-page__stat-icon--green">
                                                <i class="ph ph-check-circle"></i>
                                            </div>

                                            <div>
                                                <span>Completed tasks</span>
                                                <strong>184</strong>
                                            </div>

                                            <small>
                                                +18.2%
                                            </small>

                                        </div>

                                        <div class="wm-landing-page__dashboard-stat">

                                            <div class="wm-landing-page__stat-icon wm-landing-page__stat-icon--orange">
                                                <i class="ph ph-clock"></i>
                                            </div>

                                            <div>
                                                <span>Tracked hours</span>
                                                <strong>842</strong>
                                            </div>

                                            <small>
                                                +8.4%
                                            </small>

                                        </div>

                                    </div>


                                    {{-- Dashboard widgets --}}
                                    <div class="wm-landing-page__dashboard-grid">

                                        <div class="wm-landing-page__dashboard-card">

                                            <div class="wm-landing-page__card-heading">

                                                <div>
                                                    <strong>
                                                        Project progress
                                                    </strong>

                                                    <span>
                                                    Current workspace overview
                                                </span>
                                                </div>

                                                <a href="#">
                                                    View all
                                                </a>

                                            </div>

                                            <div class="wm-landing-page__project-item">

                                                <div class="wm-landing-page__project-info">

                                                    <span class="wm-landing-page__project-dot"></span>

                                                    <div>
                                                        <strong>
                                                            Website Redesign
                                                        </strong>

                                                        <small>
                                                            18 tasks remaining
                                                        </small>
                                                    </div>

                                                </div>

                                                <div class="wm-landing-page__project-progress">

                                                    <div>
                                                        <span style="width: 78%;"></span>
                                                    </div>

                                                    <strong>
                                                        78%
                                                    </strong>

                                                </div>

                                            </div>

                                            <div class="wm-landing-page__project-item">

                                                <div class="wm-landing-page__project-info">

                                                    <span class="wm-landing-page__project-dot wm-landing-page__project-dot--green"></span>

                                                    <div>
                                                        <strong>
                                                            Mobile Application
                                                        </strong>

                                                        <small>
                                                            9 tasks remaining
                                                        </small>
                                                    </div>

                                                </div>

                                                <div class="wm-landing-page__project-progress">

                                                    <div>
                                                        <span style="width: 64%;"></span>
                                                    </div>

                                                    <strong>
                                                        64%
                                                    </strong>

                                                </div>

                                            </div>

                                            <div class="wm-landing-page__project-item">

                                                <div class="wm-landing-page__project-info">

                                                    <span class="wm-landing-page__project-dot wm-landing-page__project-dot--purple"></span>

                                                    <div>
                                                        <strong>
                                                            Marketing Campaign
                                                        </strong>

                                                        <small>
                                                            24 tasks remaining
                                                        </small>
                                                    </div>

                                                </div>

                                                <div class="wm-landing-page__project-progress">

                                                    <div>
                                                        <span style="width: 42%;"></span>
                                                    </div>

                                                    <strong>
                                                        42%
                                                    </strong>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="wm-landing-page__dashboard-card">

                                            <div class="wm-landing-page__card-heading">

                                                <div>
                                                    <strong>
                                                        Team activity
                                                    </strong>

                                                    <span>
                                                    Latest updates
                                                </span>
                                                </div>

                                                <button type="button">
                                                    <i class="ph ph-dots-three"></i>
                                                </button>

                                            </div>

                                            <div class="wm-landing-page__activity-item">

                                                <span>AM</span>

                                                <div>
                                                    <strong>
                                                        Alex Morgan
                                                    </strong>

                                                    <small>
                                                        Completed a task
                                                    </small>
                                                </div>

                                                <time>
                                                    2m
                                                </time>

                                            </div>

                                            <div class="wm-landing-page__activity-item">

                                            <span class="wm-landing-page__activity-avatar--green">
                                                JS
                                            </span>

                                                <div>
                                                    <strong>
                                                        John Smith
                                                    </strong>

                                                    <small>
                                                        Added a comment
                                                    </small>
                                                </div>

                                                <time>
                                                    14m
                                                </time>

                                            </div>

                                            <div class="wm-landing-page__activity-item">

                                            <span class="wm-landing-page__activity-avatar--purple">
                                                RK
                                            </span>

                                                <div>
                                                    <strong>
                                                        Rachel Kim
                                                    </strong>

                                                    <small>
                                                        Created milestone
                                                    </small>
                                                </div>

                                                <time>
                                                    32m
                                                </time>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                SOCIAL PROOF
            ========================================================== --}}
            <section class="wm-landing-page__trust-section">

                <div class="wm-landing-page__container">

                    <p class="wm-landing-page__trust-title">
                        Built for teams that want less busywork and more progress
                    </p>

                    <div class="wm-landing-page__trust-list">

                    <span>
                        <i class="ph ph-buildings"></i>
                        Northstar
                    </span>

                        <span>
                        <i class="ph ph-cube"></i>
                        Vertex
                    </span>

                        <span>
                        <i class="ph ph-circles-four"></i>
                        Lumio
                    </span>

                        <span>
                        <i class="ph ph-hexagon"></i>
                        Orbit
                    </span>

                        <span>
                        <i class="ph ph-aperture"></i>
                        Arcadia
                    </span>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                FEATURES
            ========================================================== --}}
            <section id="features"
                     class="wm-landing-page__features-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__section-heading">

                    <span class="wm-landing-page__eyebrow">
                        One connected workspace
                    </span>

                        <h2>
                            Everything your team needs
                            <span>to move work forward.</span>
                        </h2>

                        <p>
                            Replace scattered tools and disconnected workflows
                            with one simple workspace designed around the way
                            modern teams actually work.
                        </p>

                    </div>


                    <div class="wm-landing-page__feature-grid">

                        <article class="wm-landing-page__feature-card">

                            <div class="wm-landing-page__feature-icon">
                                <i class="ph ph-kanban"></i>
                            </div>

                            <span>
                            PROJECTS
                        </span>

                            <h3>
                                Plan work with clarity.
                            </h3>

                            <p>
                                Organize projects, milestones, deadlines and
                                ownership without losing the bigger picture.
                            </p>

                            <a href="#">
                                Explore projects
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>


                        <article class="wm-landing-page__feature-card">

                            <div class="wm-landing-page__feature-icon wm-landing-page__feature-icon--green">
                                <i class="ph ph-check-square-offset"></i>
                            </div>

                            <span>
                            TASKS
                        </span>

                            <h3>
                                Make priorities obvious.
                            </h3>

                            <p>
                                Give every task an owner, priority, deadline and
                                clear next step.
                            </p>

                            <a href="#">
                                Explore tasks
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>


                        <article class="wm-landing-page__feature-card">

                            <div class="wm-landing-page__feature-icon wm-landing-page__feature-icon--purple">
                                <i class="ph ph-users-three"></i>
                            </div>

                            <span>
                            COLLABORATION
                        </span>

                            <h3>
                                Keep conversations connected.
                            </h3>

                            <p>
                                Comments, mentions, files and activity stay close
                                to the work they belong to.
                            </p>

                            <a href="#">
                                Explore collaboration
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>


                        <article class="wm-landing-page__feature-card">

                            <div class="wm-landing-page__feature-icon wm-landing-page__feature-icon--orange">
                                <i class="ph ph-chart-line-up"></i>
                            </div>

                            <span>
                            REPORTING
                        </span>

                            <h3>
                                See what is happening.
                            </h3>

                            <p>
                                Understand project health, workload and progress
                                with clear reports and useful insights.
                            </p>

                            <a href="#">
                                Explore reports
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>


                        <article class="wm-landing-page__feature-card">

                            <div class="wm-landing-page__feature-icon wm-landing-page__feature-icon--cyan">
                                <i class="ph ph-calendar-check"></i>
                            </div>

                            <span>
                            PLANNING
                        </span>

                            <h3>
                                See what is coming next.
                            </h3>

                            <p>
                                Manage timelines, deadlines and team schedules
                                from a single workspace.
                            </p>

                            <a href="#">
                                Explore planning
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>


                        <article class="wm-landing-page__feature-card">

                            <div class="wm-landing-page__feature-icon wm-landing-page__feature-icon--pink">
                                <i class="ph ph-shield-check"></i>
                            </div>

                            <span>
                            CONTROL
                        </span>

                            <h3>
                                Manage access with confidence.
                            </h3>

                            <p>
                                Roles and permissions help your organization keep
                                the right people connected to the right work.
                            </p>

                            <a href="#">
                                Explore permissions
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                FEATURE SHOWCASE
            ========================================================== --}}
            <section class="wm-landing-page__showcase-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__showcase-row">

                        <div class="wm-landing-page__showcase-content">

                        <span class="wm-landing-page__eyebrow">
                            Project visibility
                        </span>

                            <h2>
                                Know exactly where
                                <span>every project stands.</span>
                            </h2>

                            <p>
                                Give project managers and team members a shared
                                view of progress, milestones, ownership and risks.
                            </p>

                            <ul class="wm-landing-page__check-list">

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Project health at a glance
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Milestones and deadlines
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Clear task ownership
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Team activity in context
                                </li>

                            </ul>

                            <a href="{{ route('register') }}"
                               class="wm-landing-page__text-button">

                                Start organizing your work

                                <i class="ph ph-arrow-right"></i>

                            </a>

                        </div>


                        <div class="wm-landing-page__showcase-visual">

                            <div class="wm-landing-page__project-window">

                                <div class="wm-landing-page__project-window-header">

                                    <div>

                                    <span>
                                        Project
                                    </span>

                                        <strong>
                                            Website Redesign
                                        </strong>

                                    </div>

                                    <span class="wm-landing-page__project-status">
                                    On track
                                </span>

                                </div>

                                <div class="wm-landing-page__project-window-progress">

                                    <div>
                                    <span>
                                        Overall progress
                                    </span>

                                        <strong>
                                            78%
                                        </strong>
                                    </div>

                                    <div>
                                        <span style="width: 78%;"></span>
                                    </div>

                                </div>

                                <div class="wm-landing-page__project-metrics">

                                    <div>
                                        <span>Tasks</span>
                                        <strong>42</strong>
                                    </div>

                                    <div>
                                        <span>Completed</span>
                                        <strong>33</strong>
                                    </div>

                                    <div>
                                        <span>Members</span>
                                        <strong>08</strong>
                                    </div>

                                    <div>
                                        <span>Days left</span>
                                        <strong>12</strong>
                                    </div>

                                </div>

                                <div class="wm-landing-page__project-timeline">

                                    <div class="wm-landing-page__timeline-item is-complete">

                                    <span>
                                        <i class="ph ph-check"></i>
                                    </span>

                                        <div>
                                            <strong>
                                                Discovery
                                            </strong>

                                            <small>
                                                Completed
                                            </small>
                                        </div>

                                    </div>

                                    <div class="wm-landing-page__timeline-item is-complete">

                                    <span>
                                        <i class="ph ph-check"></i>
                                    </span>

                                        <div>
                                            <strong>
                                                Design system
                                            </strong>

                                            <small>
                                                Completed
                                            </small>
                                        </div>

                                    </div>

                                    <div class="wm-landing-page__timeline-item is-active">

                                    <span>
                                        <i class="ph ph-minus"></i>
                                    </span>

                                        <div>
                                            <strong>
                                                Development
                                            </strong>

                                            <small>
                                                In progress
                                            </small>
                                        </div>

                                    </div>

                                    <div class="wm-landing-page__timeline-item">

                                    <span>
                                        <i class="ph ph-circle"></i>
                                    </span>

                                        <div>
                                            <strong>
                                                QA & launch
                                            </strong>

                                            <small>
                                                Upcoming
                                            </small>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="wm-landing-page__showcase-row wm-landing-page__showcase-row--reverse">

                        <div class="wm-landing-page__showcase-content">

                        <span class="wm-landing-page__eyebrow">
                            Team collaboration
                        </span>

                            <h2>
                                Keep your team aligned
                                <span>without more meetings.</span>
                            </h2>

                            <p>
                                Give your team one place to discuss work, share
                                updates and see what changed.
                            </p>

                            <ul class="wm-landing-page__check-list">

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Comments and mentions
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Activity history
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    File sharing
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Team notifications
                                </li>

                            </ul>

                            <a href="{{ route('register') }}"
                               class="wm-landing-page__text-button">

                                Bring your team together

                                <i class="ph ph-arrow-right"></i>

                            </a>

                        </div>


                        <div class="wm-landing-page__showcase-visual">

                            <div class="wm-landing-page__comments-window">

                                <div class="wm-landing-page__comments-header">

                                    <div>
                                        <strong>
                                            Project discussion
                                        </strong>

                                        <span>
                                        8 comments
                                    </span>
                                    </div>

                                    <button type="button">
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                </div>

                                <div class="wm-landing-page__comment">

                                <span>
                                    AM
                                </span>

                                    <div>
                                        <strong>
                                            Alex Morgan
                                        </strong>

                                        <small>
                                            12 minutes ago
                                        </small>

                                        <p>
                                            The latest homepage design is ready
                                            for review. I also attached the
                                            updated components.
                                        </p>
                                    </div>

                                </div>

                                <div class="wm-landing-page__comment">

                                <span class="wm-landing-page__comment-avatar--green">
                                    RK
                                </span>

                                    <div>
                                        <strong>
                                            Rachel Kim
                                        </strong>

                                        <small>
                                            5 minutes ago
                                        </small>

                                        <p>
                                            Looks great. I'll review the mobile
                                            states this afternoon.
                                        </p>
                                    </div>

                                </div>

                                <div class="wm-landing-page__comment-input">

                                <span>
                                    AO
                                </span>

                                    <div>
                                        Write a comment...
                                    </div>

                                    <button type="button">
                                        <i class="ph ph-paper-plane-right"></i>
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                WORKFLOW
            ========================================================== --}}
            <section class="wm-landing-page__workflow-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__section-heading">

                    <span class="wm-landing-page__eyebrow">
                        Simple by design
                    </span>

                        <h2>
                            From idea to
                            <span>done.</span>
                        </h2>

                        <p>
                            A straightforward workflow keeps your team focused
                            on the work that actually matters.
                        </p>

                    </div>

                    <div class="wm-landing-page__workflow-grid">

                        <div class="wm-landing-page__workflow-item">

                        <span class="wm-landing-page__workflow-number">
                            01
                        </span>

                            <div class="wm-landing-page__workflow-icon">
                                <i class="ph ph-lightbulb"></i>
                            </div>

                            <h3>
                                Plan
                            </h3>

                            <p>
                                Define goals, milestones, deadlines and ownership.
                            </p>

                        </div>

                        <div class="wm-landing-page__workflow-item">

                        <span class="wm-landing-page__workflow-number">
                            02
                        </span>

                            <div class="wm-landing-page__workflow-icon">
                                <i class="ph ph-list-checks"></i>
                            </div>

                            <h3>
                                Organize
                            </h3>

                            <p>
                                Break projects into clear, actionable tasks.
                            </p>

                        </div>

                        <div class="wm-landing-page__workflow-item">

                        <span class="wm-landing-page__workflow-number">
                            03
                        </span>

                            <div class="wm-landing-page__workflow-icon">
                                <i class="ph ph-users-three"></i>
                            </div>

                            <h3>
                                Collaborate
                            </h3>

                            <p>
                                Keep conversations, files and updates connected.
                            </p>

                        </div>

                        <div class="wm-landing-page__workflow-item">

                        <span class="wm-landing-page__workflow-number">
                            04
                        </span>

                            <div class="wm-landing-page__workflow-icon">
                                <i class="ph ph-rocket-launch"></i>
                            </div>

                            <h3>
                                Deliver
                            </h3>

                            <p>
                                Track progress and turn plans into outcomes.
                            </p>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                SOLUTIONS
            ========================================================== --}}
            <section id="solutions"
                     class="wm-landing-page__solutions-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__section-heading">

                    <span class="wm-landing-page__eyebrow">
                        Built for your team
                    </span>

                        <h2>
                            One workspace.
                            <span>Many ways to work.</span>
                        </h2>

                        <p>
                            Flexible enough for different teams while keeping
                            everyone connected to the same source of truth.
                        </p>

                    </div>

                    <div class="wm-landing-page__solutions-grid">

                        <article class="wm-landing-page__solution-card">

                            <div class="wm-landing-page__solution-icon">
                                <i class="ph ph-code"></i>
                            </div>

                            <span>
                            PRODUCT & ENGINEERING
                        </span>

                            <h3>
                                Build better products.
                            </h3>

                            <p>
                                Manage roadmaps, sprints, features and delivery
                                from one connected workspace.
                            </p>

                            <a href="#">
                                Explore solution
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>

                        <article class="wm-landing-page__solution-card">

                            <div class="wm-landing-page__solution-icon wm-landing-page__solution-icon--green">
                                <i class="ph ph-flask"></i>
                            </div>

                            <span>
                            RESEARCH & LABS
                        </span>

                            <h3>
                                Move research forward.
                            </h3>

                            <p>
                                Organize research projects, milestones, teams
                                and deliverables in one place.
                            </p>

                            <a href="#">
                                Explore solution
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>

                        <article class="wm-landing-page__solution-card">

                            <div class="wm-landing-page__solution-icon wm-landing-page__solution-icon--purple">
                                <i class="ph ph-megaphone"></i>
                            </div>

                            <span>
                            MARKETING
                        </span>

                            <h3>
                                Make campaigns move.
                            </h3>

                            <p>
                                Coordinate campaigns, content, launches and
                                creative work without unnecessary complexity.
                            </p>

                            <a href="#">
                                Explore solution
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>

                        <article class="wm-landing-page__solution-card">

                            <div class="wm-landing-page__solution-icon wm-landing-page__solution-icon--orange">
                                <i class="ph ph-buildings"></i>
                            </div>

                            <span>
                            OPERATIONS
                        </span>

                            <h3>
                                Run work at scale.
                            </h3>

                            <p>
                                Standardize processes, assign ownership and
                                monitor operational progress.
                            </p>

                            <a href="#">
                                Explore solution
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </article>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                STATS
            ========================================================== --}}
            <section class="wm-landing-page__stats-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__stats-grid">

                        <div class="wm-landing-page__stat-item">

                            <strong data-counter="2500">
                                0
                            </strong>

                            <span>
                            teams
                        </span>

                            <small>
                                organized around one workspace
                            </small>

                        </div>

                        <div class="wm-landing-page__stat-item">

                            <strong data-counter="120000">
                                0
                            </strong>

                            <span>
                            projects
                        </span>

                            <small>
                                managed from one platform
                            </small>

                        </div>

                        <div class="wm-landing-page__stat-item">

                            <strong data-counter="98">
                                0
                            </strong>

                            <span>
                            %
                        </span>

                            <small>
                                team satisfaction
                            </small>

                        </div>

                        <div class="wm-landing-page__stat-item">

                            <strong data-counter="24">
                                0
                            </strong>

                            <span>
                            countries
                        </span>

                            <small>
                                teams working together
                            </small>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                TESTIMONIAL
            ========================================================== --}}
            <section class="wm-landing-page__testimonial-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__testimonial">

                        <div class="wm-landing-page__testimonial-icon">
                            <i class="ph-fill ph-quotes"></i>
                        </div>

                        <blockquote>
                            “WorkManagement gave our team one clear place to see
                            what matters, what is next and who owns it.”
                        </blockquote>

                        <div class="wm-landing-page__testimonial-author">

                        <span>
                            AM
                        </span>

                            <div>
                                <strong>
                                    Alex Morgan
                                </strong>

                                <small>
                                    Head of Product
                                </small>
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                PRICING
            ========================================================== --}}
            <section id="pricing"
                     class="wm-landing-page__pricing-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__section-heading">

                    <span class="wm-landing-page__eyebrow">
                        Simple pricing
                    </span>

                        <h2>
                            Start free.
                            <span>Scale when ready.</span>
                        </h2>

                        <p>
                            Choose a plan that fits your team today and upgrade
                            when you need more.
                        </p>

                        <div class="wm-landing-page__pricing-toggle">

                            <button type="button"
                                    class="is-active"
                                    data-plan="monthly">
                                Monthly
                            </button>

                            <button type="button"
                                    data-plan="yearly">
                                Yearly

                                <span>
                                Save 20%
                            </span>
                            </button>

                        </div>

                    </div>


                    <div class="wm-landing-page__pricing-grid">

                        {{-- Starter --}}
                        <article class="wm-landing-page__pricing-card">

                            <div class="wm-landing-page__pricing-top">

                            <span class="wm-landing-page__pricing-name">
                                Starter
                            </span>

                                <span class="wm-landing-page__pricing-description">
                                For individuals and small teams.
                            </span>

                            </div>

                            <div class="wm-landing-page__price">

                                <strong>
                                    $<span data-monthly="0"
                                           data-yearly="0">0</span>
                                </strong>

                                <small>
                                    / month
                                </small>

                            </div>

                            <p class="wm-landing-page__pricing-copy">
                                Essential tools to organize everyday work.
                            </p>

                            <a href="{{ route('register') }}"
                               class="wm-landing-page__pricing-button">
                                Get started free
                            </a>

                            <div class="wm-landing-page__pricing-divider"></div>

                            <span class="wm-landing-page__pricing-includes">
                            Includes:
                        </span>

                            <ul>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Up to 5 members
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Unlimited projects
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Task management
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Basic reports
                                </li>

                            </ul>

                        </article>


                        {{-- Professional --}}
                        <article class="wm-landing-page__pricing-card wm-landing-page__pricing-card--featured">

                            <div class="wm-landing-page__popular">
                                Most popular
                            </div>

                            <div class="wm-landing-page__pricing-top">

                            <span class="wm-landing-page__pricing-name">
                                Professional
                            </span>

                                <span class="wm-landing-page__pricing-description">
                                For growing teams that need more.
                            </span>

                            </div>

                            <div class="wm-landing-page__price">

                                <strong>
                                    $<span data-monthly="12"
                                           data-yearly="9.6">12</span>
                                </strong>

                                <small>
                                    / user / month
                                </small>

                            </div>

                            <p class="wm-landing-page__pricing-copy">
                                Advanced tools for growing teams and projects.
                            </p>

                            <a href="{{ route('register') }}"
                               class="wm-landing-page__pricing-button wm-landing-page__pricing-button--primary">
                                Start free trial
                                <i class="ph ph-arrow-right"></i>
                            </a>

                            <div class="wm-landing-page__pricing-divider"></div>

                            <span class="wm-landing-page__pricing-includes">
                            Everything in Starter, plus:
                        </span>

                            <ul>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Unlimited members
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Advanced project views
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Timeline & Gantt
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Advanced reports
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Roles & permissions
                                </li>

                            </ul>

                        </article>


                        {{-- Enterprise --}}
                        <article class="wm-landing-page__pricing-card">

                            <div class="wm-landing-page__pricing-top">

                            <span class="wm-landing-page__pricing-name">
                                Enterprise
                            </span>

                                <span class="wm-landing-page__pricing-description">
                                For organizations with complex needs.
                            </span>

                            </div>

                            <div class="wm-landing-page__price wm-landing-page__price--custom">

                                <strong>
                                    Let's talk
                                </strong>

                            </div>

                            <p class="wm-landing-page__pricing-copy">
                                Flexible solutions for larger organizations.
                            </p>

                            <a href="#contact"
                               class="wm-landing-page__pricing-button">
                                Contact sales
                            </a>

                            <div class="wm-landing-page__pricing-divider"></div>

                            <span class="wm-landing-page__pricing-includes">
                            Everything in Professional, plus:
                        </span>

                            <ul>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Advanced security
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    SSO & SAML
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Audit logs
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Dedicated support
                                </li>

                                <li>
                                    <i class="ph-fill ph-check-circle"></i>
                                    Custom onboarding
                                </li>

                            </ul>

                        </article>

                    </div>

                    <div class="wm-landing-page__pricing-note">

                        <i class="ph ph-shield-check"></i>

                        <span>
                        All plans include secure cloud storage, regular updates
                        and workspace-level access controls.
                    </span>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                FAQ
            ========================================================== --}}
            <section id="faq"
                     class="wm-landing-page__faq-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__faq-layout">

                        <div class="wm-landing-page__faq-intro">

                        <span class="wm-landing-page__eyebrow">
                            Frequently asked questions
                        </span>

                            <h2>
                                Questions?
                                <span>We've got answers.</span>
                            </h2>

                            <p>
                                Everything you need to know before getting started
                                with WorkManagement.
                            </p>

                            <a href="#contact"
                               class="wm-landing-page__text-button">
                                Talk to our team
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </div>


                        <div class="wm-landing-page__faq-list">

                            <div class="wm-landing-page__faq-item is-open">

                                <button type="button"
                                        class="wm-landing-page__faq-question">

                                <span>
                                    Can I try WorkManagement for free?
                                </span>

                                    <i class="ph ph-minus"></i>

                                </button>

                                <div class="wm-landing-page__faq-answer">

                                    <p>
                                        Yes. You can start with the free plan and
                                        explore the core project and task management
                                        features without entering payment details.
                                    </p>

                                </div>

                            </div>


                            <div class="wm-landing-page__faq-item">

                                <button type="button"
                                        class="wm-landing-page__faq-question">

                                <span>
                                    Can I invite my entire team?
                                </span>

                                    <i class="ph ph-plus"></i>

                                </button>

                                <div class="wm-landing-page__faq-answer">

                                    <p>
                                        Yes. You can invite team members and manage
                                        workspace access using roles and permissions.
                                    </p>

                                </div>

                            </div>


                            <div class="wm-landing-page__faq-item">

                                <button type="button"
                                        class="wm-landing-page__faq-question">

                                <span>
                                    Can I upgrade my plan later?
                                </span>

                                    <i class="ph ph-plus"></i>

                                </button>

                                <div class="wm-landing-page__faq-answer">

                                    <p>
                                        Absolutely. You can upgrade your workspace
                                        whenever your team needs additional
                                        capabilities.
                                    </p>

                                </div>

                            </div>


                            <div class="wm-landing-page__faq-item">

                                <button type="button"
                                        class="wm-landing-page__faq-question">

                                <span>
                                    Is there a yearly billing option?
                                </span>

                                    <i class="ph ph-plus"></i>

                                </button>

                                <div class="wm-landing-page__faq-answer">

                                    <p>
                                        Yes. The yearly option is available for
                                        teams that prefer annual billing.
                                    </p>

                                </div>

                            </div>


                            <div class="wm-landing-page__faq-item">

                                <button type="button"
                                        class="wm-landing-page__faq-question">

                                <span>
                                    Can I manage team permissions?
                                </span>

                                    <i class="ph ph-plus"></i>

                                </button>

                                <div class="wm-landing-page__faq-answer">

                                    <p>
                                        Yes. Workspace administrators can assign
                                        roles and permissions based on each
                                        member's responsibilities.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                FINAL CTA
            ========================================================== --}}
            <section id="contact"
                     class="wm-landing-page__cta-section">

                <div class="wm-landing-page__container">

                    <div class="wm-landing-page__cta">

                        <div class="wm-landing-page__cta-decoration"></div>

                        <div class="wm-landing-page__cta-content">

                        <span class="wm-landing-page__cta-eyebrow">
                            <i class="ph ph-sparkle"></i>
                            Start working better
                        </span>

                            <h2>
                                Your next project
                                <span>starts here.</span>
                            </h2>

                            <p>
                                Bring your projects, tasks and team together
                                in one workspace built for progress.
                            </p>

                            <div class="wm-landing-page__cta-actions">

                                <a href="{{ route('register') }}"
                                   class="wm-landing-page__cta-button">

                                    Start for free

                                    <i class="ph ph-arrow-right"></i>

                                </a>

                                <a href="#pricing"
                                   class="wm-landing-page__cta-link">
                                    View pricing
                                </a>

                            </div>

                            <small>
                                No credit card required · Set up your workspace in minutes
                            </small>

                        </div>

                    </div>

                </div>

            </section>

        </main>


        {{-- =========================================================
            FOOTER
        ========================================================== --}}
        <footer class="wm-landing-page__footer">

            <div class="wm-landing-page__container">

                <div class="wm-landing-page__footer-grid">

                    <div class="wm-landing-page__footer-brand">

                        <a href="{{ route('home') }}"
                           class="wm-landing-page__logo">

                        <span class="wm-landing-page__logo-mark">
                            <i class="ph ph-kanban"></i>
                        </span>

                            <span class="wm-landing-page__logo-text">
                            WorkManagement
                        </span>

                        </a>

                        <p>
                            A simpler way to plan, organize and deliver
                            meaningful work.
                        </p>

                        <div class="wm-landing-page__socials">

                            <a href="#" aria-label="LinkedIn">
                                <i class="ph ph-linkedin-logo"></i>
                            </a>

                            <a href="#" aria-label="GitHub">
                                <i class="ph ph-github-logo"></i>
                            </a>

                            <a href="#" aria-label="Twitter">
                                <i class="ph ph-twitter-logo"></i>
                            </a>

                        </div>

                    </div>


                    <div class="wm-landing-page__footer-column">

                        <strong>
                            Product
                        </strong>

                        <a href="#product">
                            Overview
                        </a>

                        <a href="#features">
                            Features
                        </a>

                        <a href="#pricing">
                            Pricing
                        </a>

                        <a href="#">
                            Integrations
                        </a>

                    </div>


                    <div class="wm-landing-page__footer-column">

                        <strong>
                            Solutions
                        </strong>

                        <a href="#solutions">
                            Product teams
                        </a>

                        <a href="#solutions">
                            Research teams
                        </a>

                        <a href="#solutions">
                            Marketing teams
                        </a>

                        <a href="#solutions">
                            Operations
                        </a>

                    </div>


                    <div class="wm-landing-page__footer-column">

                        <strong>
                            Resources
                        </strong>

                        <a href="#">
                            Documentation
                        </a>

                        <a href="#">
                            Help center
                        </a>

                        <a href="#">
                            API
                        </a>

                        <a href="#faq">
                            FAQ
                        </a>

                    </div>


                    <div class="wm-landing-page__footer-column">

                        <strong>
                            Company
                        </strong>

                        <a href="#">
                            About
                        </a>

                        <a href="#">
                            Careers
                        </a>

                        <a href="#contact">
                            Contact
                        </a>

                        <a href="#">
                            Blog
                        </a>

                    </div>

                </div>


                <div class="wm-landing-page__footer-bottom">

                <span>
                    © {{ date('Y') }} WorkManagement. All rights reserved.
                </span>

                    <div>

                        <a href="#">
                            Privacy
                        </a>

                        <a href="#">
                            Terms
                        </a>

                        <a href="#">
                            Security
                        </a>

                    </div>

                </div>

            </div>

        </footer>

    </div>

@endsection


@push('script')

    <script>
        $(document).ready(function () {

            'use strict';

            const $page = $('.wm-landing-page');

            if (!$page.length) {
                return;
            }


            /* =========================================================
               HEADER
            ========================================================== */

            const $header = $page.find('.wm-landing-page__header');

            function updateHeader() {

                if ($(window).scrollTop() > 24) {
                    $header.addClass('is-scrolled');
                } else {
                    $header.removeClass('is-scrolled');
                }

            }

            updateHeader();

            $(window).on('scroll', updateHeader);


            /* =========================================================
               MOBILE NAVIGATION
            ========================================================== */

            const $mobileToggle =
                $page.find('.wm-landing-page__mobile-toggle');

            const $mobileMenu =
                $page.find('.wm-landing-page__mobile-menu');

            $mobileToggle.on('click', function () {

                const $button = $(this);

                const isOpen =
                    $header.hasClass('is-menu-open');

                $header.toggleClass(
                    'is-menu-open',
                    !isOpen
                );

                $button.attr(
                    'aria-expanded',
                    isOpen ? 'false' : 'true'
                );

                $button.find('i').attr(
                    'class',
                    isOpen
                        ? 'ph ph-list'
                        : 'ph ph-x'
                );

            });


            $mobileMenu.find('a').on(
                'click',
                function () {

                    $header.removeClass('is-menu-open');

                    $mobileToggle
                        .attr('aria-expanded', 'false')
                        .find('i')
                        .attr(
                            'class',
                            'ph ph-list'
                        );

                }
            );


            $(window).on('resize', function () {

                if ($(window).width() > 991) {

                    $header.removeClass('is-menu-open');

                    $mobileToggle
                        .attr('aria-expanded', 'false')
                        .find('i')
                        .attr(
                            'class',
                            'ph ph-list'
                        );

                }

            });


            /* =========================================================
               SMOOTH SCROLL
            ========================================================== */

            $page.find('a[href^="#"]').on(
                'click',
                function (event) {

                    const target =
                        $(this).attr('href');

                    if (!target || target === '#') {
                        return;
                    }

                    const $target =
                        $(target);

                    if (!$target.length) {
                        return;
                    }

                    event.preventDefault();

                    const headerHeight =
                        $header.outerHeight() || 0;

                    $('html, body').animate(
                        {
                            scrollTop:
                                $target.offset().top -
                                headerHeight -
                                24
                        },
                        650
                    );

                }
            );


            /* =========================================================
               FAQ
            ========================================================== */

            const $faqItems =
                $page.find('.wm-landing-page__faq-item');

            $faqItems.each(function () {

                const $item = $(this);

                const $answer =
                    $item.find('.wm-landing-page__faq-answer');

                if ($item.hasClass('is-open')) {
                    $answer.show();
                } else {
                    $answer.hide();
                }

            });


            $page.find('.wm-landing-page__faq-question').on(
                'click',
                function () {

                    const $button = $(this);

                    const $item =
                        $button.closest(
                            '.wm-landing-page__faq-item'
                        );

                    const $answer =
                        $item.find(
                            '.wm-landing-page__faq-answer'
                        );

                    const $icon =
                        $button.find('i');


                    if ($item.hasClass('is-open')) {

                        $item.removeClass('is-open');

                        $answer
                            .stop(true, true)
                            .slideUp(240);

                        $icon.attr(
                            'class',
                            'ph ph-plus'
                        );

                        return;
                    }


                    $faqItems
                        .removeClass('is-open')
                        .find('.wm-landing-page__faq-answer')
                        .stop(true, true)
                        .slideUp(240);


                    $page
                        .find('.wm-landing-page__faq-question i')
                        .attr(
                            'class',
                            'ph ph-plus'
                        );


                    $item.addClass('is-open');

                    $answer
                        .stop(true, true)
                        .slideDown(240);

                    $icon.attr(
                        'class',
                        'ph ph-minus'
                    );

                }
            );


            /* =========================================================
               PRICING TOGGLE
            ========================================================== */

            const $pricingButtons =
                $page.find(
                    '.wm-landing-page__pricing-toggle button'
                );

            $pricingButtons.on(
                'click',
                function () {

                    const $button = $(this);

                    const plan =
                        $button.data('plan');


                    $pricingButtons.removeClass(
                        'is-active'
                    );

                    $button.addClass(
                        'is-active'
                    );


                    $page
                        .find('[data-monthly][data-yearly]')
                        .each(function () {

                            const $price =
                                $(this);

                            const value =
                                plan === 'yearly'
                                    ? $price.data('yearly')
                                    : $price.data('monthly');


                            $price
                                .stop(true, true)
                                .fadeOut(120, function () {

                                    $price.text(value);

                                    $price.fadeIn(160);

                                });

                        });

                }
            );


            /* =========================================================
               COUNTERS
            ========================================================== */

            let countersStarted = false;

            function startCounters() {

                if (countersStarted) {
                    return;
                }

                const $section =
                    $page.find(
                        '.wm-landing-page__stats-section'
                    );

                if (!$section.length) {
                    return;
                }

                const sectionTop =
                    $section.offset().top;

                const viewportBottom =
                    $(window).scrollTop() +
                    $(window).height();


                if (
                    viewportBottom <
                    sectionTop + 100
                ) {
                    return;
                }


                countersStarted = true;


                $section
                    .find('[data-counter]')
                    .each(function () {

                        const $counter =
                            $(this);

                        const target =
                            parseInt(
                                $counter.data('counter'),
                                10
                            );


                        $({
                            value: 0
                        }).animate(
                            {
                                value: target
                            },
                            {
                                duration: 1600,

                                easing: 'swing',

                                step: function (now) {

                                    let value =
                                        Math.floor(now)
                                            .toLocaleString();

                                    if (target === 98) {
                                        value += '%';
                                    } else {
                                        value += '+';
                                    }

                                    $counter.text(value);

                                },

                                complete: function () {

                                    let value =
                                        target.toLocaleString();

                                    if (target === 98) {
                                        value += '%';
                                    } else {
                                        value += '+';
                                    }

                                    $counter.text(value);

                                }

                            }
                        );

                    });

            }


            $(window).on(
                'scroll',
                startCounters
            );

            startCounters();


            /* =========================================================
               SCROLL REVEAL
            ========================================================== */

            const $revealItems =
                $page.find(
                    '.wm-landing-page__feature-card, ' +
                    '.wm-landing-page__showcase-row, ' +
                    '.wm-landing-page__workflow-item, ' +
                    '.wm-landing-page__solution-card, ' +
                    '.wm-landing-page__pricing-card, ' +
                    '.wm-landing-page__testimonial'
                );


            $revealItems.addClass(
                'wm-landing-page__reveal'
            );


            function revealItems() {

                const viewportBottom =
                    $(window).scrollTop() +
                    $(window).height();


                $revealItems.each(function () {

                    const $item =
                        $(this);

                    if ($item.hasClass('is-visible')) {
                        return;
                    }

                    const itemTop =
                        $item.offset().top;


                    if (
                        viewportBottom >
                        itemTop + 80
                    ) {

                        $item.addClass(
                            'is-visible'
                        );

                    }

                });

            }


            $(window).on(
                'scroll',
                revealItems
            );

            revealItems();


            /* =========================================================
               ESCAPE
            ========================================================== */

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key !== 'Escape') {
                        return;
                    }

                    $header.removeClass(
                        'is-menu-open'
                    );

                    $mobileToggle
                        .attr(
                            'aria-expanded',
                            'false'
                        )
                        .find('i')
                        .attr(
                            'class',
                            'ph ph-list'
                        );

                }
            );

        });
    </script>

@endpush
