@extends('layout.app')

@section('main')

    <div class="wm-team-member-page">

        {{-- ============================================================
            Page Header
        ============================================================= --}}
        <div class="wm-team-member-page__header">

            <div class="wm-team-member-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-team-member-page__breadcrumb-link"
                >
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <a
                    href="{{ route('team.index') }}"
                    class="wm-team-member-page__breadcrumb-link"
                >
                    Team
                </a>

                <i class="ph ph-caret-right"></i>

                <span class="wm-team-member-page__breadcrumb-current">
                Olivia Martin
            </span>

            </div>


            <a
                href="{{ route('team.index') }}"
                class="wm-team-member-page__back"
            >
                <i class="ph ph-arrow-left"></i>
                <span>Back to Team</span>
            </a>

        </div>


        {{-- ============================================================
            Profile Header
        ============================================================= --}}
        <div class="wm-team-member-page__profile-card">

            <div class="wm-team-member-page__profile-main">

                <div class="wm-team-member-page__avatar">
                    OM
                </div>

                <div class="wm-team-member-page__profile-content">

                    <div class="wm-team-member-page__name-row">

                        <h1 class="wm-team-member-page__name">
                            Olivia Martin
                        </h1>

                        <span class="wm-team-member-page__status wm-team-member-page__status--active">
                        <span></span>
                        Active
                    </span>

                    </div>

                    <p class="wm-team-member-page__role">
                        Workspace Administrator
                    </p>

                    <p class="wm-team-member-page__email">
                        <i class="ph ph-envelope-simple"></i>
                        olivia@researchlab.com
                    </p>

                    <p class="wm-team-member-page__joined">
                        <i class="ph ph-calendar-blank"></i>
                        Joined March 12, 2024
                    </p>

                </div>

            </div>


            <div class="wm-team-member-page__profile-actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    data-member-action="message"
                >
                    <i class="ph ph-chat-circle"></i>
                    <span>Message</span>
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    data-member-action="edit"
                >
                    <i class="ph ph-pencil-simple"></i>
                    <span>Edit Member</span>
                </button>

                <div class="wm-team-member-page__more">

                    <button
                        type="button"
                        class="wm-team-member-page__more-btn"
                        data-member-menu
                        aria-label="More actions"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                    <div class="wm-team-member-page__more-menu">

                        <button data-member-action="change-role">
                            <i class="ph ph-shield-check"></i>
                            Change Role
                        </button>

                        <button data-member-action="deactivate">
                            <i class="ph ph-user-minus"></i>
                            Deactivate Member
                        </button>

                        <div class="wm-team-member-page__menu-divider"></div>

                        <button
                            class="is-danger"
                            data-member-action="remove"
                        >
                            <i class="ph ph-trash"></i>
                            Remove Member
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Quick Stats
        ============================================================= --}}
        <div class="wm-team-member-page__stats">

            <div class="wm-team-member-page__stat-card">

                <div class="wm-team-member-page__stat-icon wm-team-member-page__stat-icon--blue">
                    <i class="ph ph-folder-simple"></i>
                </div>

                <div>
                <span class="wm-team-member-page__stat-label">
                    Projects
                </span>

                    <strong class="wm-team-member-page__stat-value">
                        6
                    </strong>
                </div>

            </div>


            <div class="wm-team-member-page__stat-card">

                <div class="wm-team-member-page__stat-icon wm-team-member-page__stat-icon--green">
                    <i class="ph ph-check-square"></i>
                </div>

                <div>
                <span class="wm-team-member-page__stat-label">
                    Completed Tasks
                </span>

                    <strong class="wm-team-member-page__stat-value">
                        42
                    </strong>
                </div>

            </div>


            <div class="wm-team-member-page__stat-card">

                <div class="wm-team-member-page__stat-icon wm-team-member-page__stat-icon--orange">
                    <i class="ph ph-clock"></i>
                </div>

                <div>
                <span class="wm-team-member-page__stat-label">
                    Pending Tasks
                </span>

                    <strong class="wm-team-member-page__stat-value">
                        8
                    </strong>
                </div>

            </div>


            <div class="wm-team-member-page__stat-card">

                <div class="wm-team-member-page__stat-icon wm-team-member-page__stat-icon--purple">
                    <i class="ph ph-chart-line-up"></i>
                </div>

                <div>
                <span class="wm-team-member-page__stat-label">
                    Completion Rate
                </span>

                    <strong class="wm-team-member-page__stat-value">
                        84%
                    </strong>
                </div>

            </div>

        </div>


        {{-- ============================================================
            Main Layout
        ============================================================= --}}
        <div class="wm-team-member-page__layout">

            {{-- ========================================================
                Main Column
            ========================================================= --}}
            <div class="wm-team-member-page__main">


                {{-- ====================================================
                    Tabs
                ===================================================== --}}
                <div class="wm-team-member-page__tabs">

                    <button
                        type="button"
                        class="wm-team-member-page__tab is-active"
                        data-member-tab="overview"
                    >
                        Overview
                    </button>

                    <button
                        type="button"
                        class="wm-team-member-page__tab"
                        data-member-tab="projects"
                    >
                        Projects
                        <span>6</span>
                    </button>

                    <button
                        type="button"
                        class="wm-team-member-page__tab"
                        data-member-tab="tasks"
                    >
                        Tasks
                        <span>50</span>
                    </button>

                    <button
                        type="button"
                        class="wm-team-member-page__tab"
                        data-member-tab="activity"
                    >
                        Activity
                    </button>

                </div>


                {{-- ====================================================
                    Overview
                ===================================================== --}}
                <div
                    class="wm-team-member-page__tab-content is-active"
                    data-tab-content="overview"
                >

                    {{-- About --}}
                    <section class="wm-team-member-page__section">

                        <div class="wm-team-member-page__section-header">

                            <div>
                                <h2 class="wm-team-member-page__section-title">
                                    About
                                </h2>

                                <p class="wm-team-member-page__section-subtitle">
                                    Personal information and professional details.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="wm-team-member-page__section-action"
                                data-member-action="edit"
                            >
                                <i class="ph ph-pencil-simple"></i>
                                Edit
                            </button>

                        </div>


                        <div class="wm-team-member-page__about">

                            <div class="wm-team-member-page__about-item">

                            <span class="wm-team-member-page__about-label">
                                Full Name
                            </span>

                                <span class="wm-team-member-page__about-value">
                                Olivia Martin
                            </span>

                            </div>


                            <div class="wm-team-member-page__about-item">

                            <span class="wm-team-member-page__about-label">
                                Job Title
                            </span>

                                <span class="wm-team-member-page__about-value">
                                Research Program Administrator
                            </span>

                            </div>


                            <div class="wm-team-member-page__about-item">

                            <span class="wm-team-member-page__about-label">
                                Department
                            </span>

                                <span class="wm-team-member-page__about-value">
                                Research Operations
                            </span>

                            </div>


                            <div class="wm-team-member-page__about-item">

                            <span class="wm-team-member-page__about-label">
                                Location
                            </span>

                                <span class="wm-team-member-page__about-value">
                                Boston, MA
                            </span>

                            </div>


                            <div class="wm-team-member-page__about-item wm-team-member-page__about-item--full">

                            <span class="wm-team-member-page__about-label">
                                Bio
                            </span>

                                <p class="wm-team-member-page__about-value">
                                    Research program administrator focused on coordinating
                                    multidisciplinary projects, supporting research teams,
                                    and keeping project operations organized.
                                </p>

                            </div>

                        </div>

                    </section>


                    {{-- Current Projects --}}
                    <section class="wm-team-member-page__section">

                        <div class="wm-team-member-page__section-header">

                            <div>
                                <h2 class="wm-team-member-page__section-title">
                                    Current Projects
                                </h2>

                                <p class="wm-team-member-page__section-subtitle">
                                    Projects currently assigned to Olivia.
                                </p>
                            </div>

                            <a
                                href="{{ route('projects.index') }}"
                                class="wm-team-member-page__section-link"
                            >
                                View all
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </div>


                        <div class="wm-team-member-page__projects">

                            <div class="wm-team-member-page__project">

                                <div class="wm-team-member-page__project-icon wm-team-member-page__project-icon--blue">
                                    AR
                                </div>

                                <div class="wm-team-member-page__project-content">

                                    <a
                                        href="{{ route('projects.overview', 'atlas') }}"
                                        class="wm-team-member-page__project-name"
                                    >
                                        Atlas Research
                                    </a>

                                    <span class="wm-team-member-page__project-meta">
                                    Research & Development
                                </span>

                                </div>

                                <div class="wm-team-member-page__project-progress">

                                    <div class="wm-team-member-page__progress-label">
                                        <span>78%</span>
                                    </div>

                                    <div class="wm-team-member-page__progress">
                                        <span style="width: 78%;"></span>
                                    </div>

                                </div>

                                <span class="wm-team-member-page__project-status wm-team-member-page__project-status--active">
                                Active
                            </span>

                            </div>


                            <div class="wm-team-member-page__project">

                                <div class="wm-team-member-page__project-icon wm-team-member-page__project-icon--purple">
                                    NI
                                </div>

                                <div class="wm-team-member-page__project-content">

                                    <a
                                        href="{{ route('projects.overview', 'neuro') }}"
                                        class="wm-team-member-page__project-name"
                                    >
                                        Neuro Imaging
                                    </a>

                                    <span class="wm-team-member-page__project-meta">
                                    Medical Research
                                </span>

                                </div>

                                <div class="wm-team-member-page__project-progress">

                                    <div class="wm-team-member-page__progress-label">
                                        <span>64%</span>
                                    </div>

                                    <div class="wm-team-member-page__progress">
                                        <span style="width: 64%;"></span>
                                    </div>

                                </div>

                                <span class="wm-team-member-page__project-status wm-team-member-page__project-status--active">
                                Active
                            </span>

                            </div>


                            <div class="wm-team-member-page__project">

                                <div class="wm-team-member-page__project-icon wm-team-member-page__project-icon--green">
                                    CS
                                </div>

                                <div class="wm-team-member-page__project-content">

                                    <a
                                        href="{{ route('projects.overview', 'climate') }}"
                                        class="wm-team-member-page__project-name"
                                    >
                                        Climate Study
                                    </a>

                                    <span class="wm-team-member-page__project-meta">
                                    Environmental Research
                                </span>

                                </div>

                                <div class="wm-team-member-page__project-progress">

                                    <div class="wm-team-member-page__progress-label">
                                        <span>51%</span>
                                    </div>

                                    <div class="wm-team-member-page__progress">
                                        <span style="width: 51%;"></span>
                                    </div>

                                </div>

                                <span class="wm-team-member-page__project-status wm-team-member-page__project-status--active">
                                Active
                            </span>

                            </div>

                        </div>

                    </section>


                    {{-- Recent Tasks --}}
                    <section class="wm-team-member-page__section">

                        <div class="wm-team-member-page__section-header">

                            <div>
                                <h2 class="wm-team-member-page__section-title">
                                    Recent Tasks
                                </h2>

                                <p class="wm-team-member-page__section-subtitle">
                                    Latest tasks assigned to this member.
                                </p>
                            </div>

                            <a
                                href="{{ route('tasks.index') }}"
                                class="wm-team-member-page__section-link"
                            >
                                View all
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </div>


                        <div class="wm-team-member-page__tasks">

                            <div
                                class="wm-team-member-page__task"
                                data-task
                            >

                                <label class="wm-team-member-page__task-check">

                                    <input
                                        type="checkbox"
                                        data-task-check
                                    >

                                    <span></span>

                                </label>

                                <div class="wm-team-member-page__task-content">

                                    <a
                                        href="{{ route('tasks.detail', 'review-methodology') }}"
                                        class="wm-team-member-page__task-title"
                                    >
                                        Review research methodology
                                    </a>

                                    <span class="wm-team-member-page__task-meta">
                                    Atlas Research
                                </span>

                                </div>

                                <span class="wm-team-member-page__task-priority wm-team-member-page__task-priority--high">
                                High
                            </span>

                                <span class="wm-team-member-page__task-due">
                                Sep 25
                            </span>

                            </div>


                            <div
                                class="wm-team-member-page__task"
                                data-task
                            >

                                <label class="wm-team-member-page__task-check">

                                    <input
                                        type="checkbox"
                                        data-task-check
                                    >

                                    <span></span>

                                </label>

                                <div class="wm-team-member-page__task-content">

                                    <a
                                        href="{{ route('tasks.detail', 'update-project-plan') }}"
                                        class="wm-team-member-page__task-title"
                                    >
                                        Update project plan
                                    </a>

                                    <span class="wm-team-member-page__task-meta">
                                    Neuro Imaging
                                </span>

                                </div>

                                <span class="wm-team-member-page__task-priority wm-team-member-page__task-priority--medium">
                                Medium
                            </span>

                                <span class="wm-team-member-page__task-due">
                                Sep 27
                            </span>

                            </div>


                            <div
                                class="wm-team-member-page__task"
                                data-task
                            >

                                <label class="wm-team-member-page__task-check">

                                    <input
                                        type="checkbox"
                                        data-task-check
                                    >

                                    <span></span>

                                </label>

                                <div class="wm-team-member-page__task-content">

                                    <a
                                        href="{{ route('tasks.detail', 'prepare-report') }}"
                                        class="wm-team-member-page__task-title"
                                    >
                                        Prepare quarterly report
                                    </a>

                                    <span class="wm-team-member-page__task-meta">
                                    Climate Study
                                </span>

                                </div>

                                <span class="wm-team-member-page__task-priority wm-team-member-page__task-priority--low">
                                Low
                            </span>

                                <span class="wm-team-member-page__task-due">
                                Oct 02
                            </span>

                            </div>

                        </div>

                    </section>

                </div>


                {{-- ====================================================
                    Projects Tab
                ===================================================== --}}
                <div
                    class="wm-team-member-page__tab-content"
                    data-tab-content="projects"
                >

                    <section class="wm-team-member-page__section">

                        <div class="wm-team-member-page__section-header">

                            <div>
                                <h2 class="wm-team-member-page__section-title">
                                    Assigned Projects
                                </h2>

                                <p class="wm-team-member-page__section-subtitle">
                                    All projects assigned to Olivia Martin.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="wm-btn wm-btn--secondary wm-btn--small"
                                data-member-action="assign-project"
                            >
                                <i class="ph ph-plus"></i>
                                Assign Project
                            </button>

                        </div>


                        <div class="wm-team-member-page__project-table-wrap">

                            <table class="wm-team-member-page__project-table">

                                <thead>

                                <tr>
                                    <th>Project</th>
                                    <th>Role</th>
                                    <th>Progress</th>
                                    <th>Tasks</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>

                                <tr>

                                    <td>
                                        <div class="wm-team-member-page__table-project">

                                            <div class="wm-team-member-page__project-icon wm-team-member-page__project-icon--blue">
                                                AR
                                            </div>

                                            <div>
                                                <strong>Atlas Research</strong>
                                                <span>Research & Development</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        Project Admin
                                    </td>

                                    <td>
                                        <div class="wm-team-member-page__table-progress">

                                            <div>
                                                <span>78%</span>
                                            </div>

                                            <div class="wm-team-member-page__progress">
                                                <span style="width: 78%;"></span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        18 / 24
                                    </td>

                                    <td>
                                        <span class="wm-team-member-page__project-status wm-team-member-page__project-status--active">
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="wm-team-member-page__table-action"
                                            data-member-action="project-menu"
                                        >
                                            <i class="ph ph-dots-three"></i>
                                        </button>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <div class="wm-team-member-page__table-project">

                                            <div class="wm-team-member-page__project-icon wm-team-member-page__project-icon--purple">
                                                NI
                                            </div>

                                            <div>
                                                <strong>Neuro Imaging</strong>
                                                <span>Medical Research</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        Project Admin
                                    </td>

                                    <td>
                                        <div class="wm-team-member-page__table-progress">

                                            <div>
                                                <span>64%</span>
                                            </div>

                                            <div class="wm-team-member-page__progress">
                                                <span style="width: 64%;"></span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        14 / 22
                                    </td>

                                    <td>
                                        <span class="wm-team-member-page__project-status wm-team-member-page__project-status--active">
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="wm-team-member-page__table-action"
                                            data-member-action="project-menu"
                                        >
                                            <i class="ph ph-dots-three"></i>
                                        </button>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <div class="wm-team-member-page__table-project">

                                            <div class="wm-team-member-page__project-icon wm-team-member-page__project-icon--green">
                                                CS
                                            </div>

                                            <div>
                                                <strong>Climate Study</strong>
                                                <span>Environmental Research</span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        Coordinator
                                    </td>

                                    <td>
                                        <div class="wm-team-member-page__table-progress">

                                            <div>
                                                <span>51%</span>
                                            </div>

                                            <div class="wm-team-member-page__progress">
                                                <span style="width: 51%;"></span>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        10 / 20
                                    </td>

                                    <td>
                                        <span class="wm-team-member-page__project-status wm-team-member-page__project-status--active">
                                            Active
                                        </span>
                                    </td>

                                    <td>
                                        <button
                                            type="button"
                                            class="wm-team-member-page__table-action"
                                            data-member-action="project-menu"
                                        >
                                            <i class="ph ph-dots-three"></i>
                                        </button>
                                    </td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </section>

                </div>


                {{-- ====================================================
                    Tasks Tab
                ===================================================== --}}
                <div
                    class="wm-team-member-page__tab-content"
                    data-tab-content="tasks"
                >

                    <section class="wm-team-member-page__section">

                        <div class="wm-team-member-page__section-header">

                            <div>
                                <h2 class="wm-team-member-page__section-title">
                                    Assigned Tasks
                                </h2>

                                <p class="wm-team-member-page__section-subtitle">
                                    Tasks currently assigned to Olivia Martin.
                                </p>
                            </div>

                            <a
                                href="{{ route('tasks.index') }}"
                                class="wm-team-member-page__section-link"
                            >
                                Open Tasks
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </div>


                        <div class="wm-team-member-page__task-summary">

                            <div>
                                <span>Completed</span>
                                <strong>42</strong>
                            </div>

                            <div>
                                <span>In Progress</span>
                                <strong>6</strong>
                            </div>

                            <div>
                                <span>Pending</span>
                                <strong>8</strong>
                            </div>

                            <div>
                                <span>Overdue</span>
                                <strong>2</strong>
                            </div>

                        </div>


                        <div class="wm-team-member-page__task-list">

                            <div class="wm-team-member-page__task task-complete">

                                <label class="wm-team-member-page__task-check">

                                    <input
                                        type="checkbox"
                                        checked
                                        data-task-check
                                    >

                                    <span></span>

                                </label>

                                <div class="wm-team-member-page__task-content">

                                    <a
                                        href="{{ route('tasks.detail', 'literature-review') }}"
                                        class="wm-team-member-page__task-title"
                                    >
                                        Complete literature review
                                    </a>

                                    <span class="wm-team-member-page__task-meta">
                                    Atlas Research
                                </span>

                                </div>

                                <span class="wm-team-member-page__task-status">
                                Completed
                            </span>

                            </div>


                            <div class="wm-team-member-page__task">

                                <label class="wm-team-member-page__task-check">

                                    <input
                                        type="checkbox"
                                        data-task-check
                                    >

                                    <span></span>

                                </label>

                                <div class="wm-team-member-page__task-content">

                                    <a
                                        href="{{ route('tasks.detail', 'review-methodology') }}"
                                        class="wm-team-member-page__task-title"
                                    >
                                        Review research methodology
                                    </a>

                                    <span class="wm-team-member-page__task-meta">
                                    Atlas Research
                                </span>

                                </div>

                                <span class="wm-team-member-page__task-priority wm-team-member-page__task-priority--high">
                                High
                            </span>

                            </div>


                            <div class="wm-team-member-page__task">

                                <label class="wm-team-member-page__task-check">

                                    <input
                                        type="checkbox"
                                        data-task-check
                                    >

                                    <span></span>

                                </label>

                                <div class="wm-team-member-page__task-content">

                                    <a
                                        href="{{ route('tasks.detail', 'update-project-plan') }}"
                                        class="wm-team-member-page__task-title"
                                    >
                                        Update project plan
                                    </a>

                                    <span class="wm-team-member-page__task-meta">
                                    Neuro Imaging
                                </span>

                                </div>

                                <span class="wm-team-member-page__task-priority wm-team-member-page__task-priority--medium">
                                Medium
                            </span>

                            </div>

                        </div>

                    </section>

                </div>


                {{-- ====================================================
                    Activity Tab
                ===================================================== --}}
                <div
                    class="wm-team-member-page__tab-content"
                    data-tab-content="activity"
                >

                    <section class="wm-team-member-page__section">

                        <div class="wm-team-member-page__section-header">

                            <div>
                                <h2 class="wm-team-member-page__section-title">
                                    Activity
                                </h2>

                                <p class="wm-team-member-page__section-subtitle">
                                    Recent activity from this team member.
                                </p>
                            </div>

                        </div>


                        <div class="wm-team-member-page__activity">

                            <div class="wm-team-member-page__activity-item">

                                <div class="wm-team-member-page__activity-icon wm-team-member-page__activity-icon--blue">
                                    <i class="ph ph-pencil-simple"></i>
                                </div>

                                <div class="wm-team-member-page__activity-content">

                                    <p>
                                        Updated the
                                        <strong>Atlas Research</strong>
                                        project plan.
                                    </p>

                                    <span>
                                    Today at 10:42 AM
                                </span>

                                </div>

                            </div>


                            <div class="wm-team-member-page__activity-item">

                                <div class="wm-team-member-page__activity-icon wm-team-member-page__activity-icon--green">
                                    <i class="ph ph-check"></i>
                                </div>

                                <div class="wm-team-member-page__activity-content">

                                    <p>
                                        Completed
                                        <strong>Literature review</strong>.
                                    </p>

                                    <span>
                                    Today at 9:36 AM
                                </span>

                                </div>

                            </div>


                            <div class="wm-team-member-page__activity-item">

                                <div class="wm-team-member-page__activity-icon wm-team-member-page__activity-icon--purple">
                                    <i class="ph ph-user-plus"></i>
                                </div>

                                <div class="wm-team-member-page__activity-content">

                                    <p>
                                        Added
                                        <strong>Sarah Thompson</strong>
                                        to Atlas Research.
                                    </p>

                                    <span>
                                    Yesterday at 3:18 PM
                                </span>

                                </div>

                            </div>


                            <div class="wm-team-member-page__activity-item">

                                <div class="wm-team-member-page__activity-icon wm-team-member-page__activity-icon--orange">
                                    <i class="ph ph-chat-circle"></i>
                                </div>

                                <div class="wm-team-member-page__activity-content">

                                    <p>
                                        Commented on
                                        <strong>Neuro Imaging</strong>.
                                    </p>

                                    <span>
                                    Yesterday at 1:42 PM
                                </span>

                                </div>

                            </div>


                            <div class="wm-team-member-page__activity-item">

                                <div class="wm-team-member-page__activity-icon wm-team-member-page__activity-icon--gray">
                                    <i class="ph ph-sign-in"></i>
                                </div>

                                <div class="wm-team-member-page__activity-content">

                                    <p>
                                        Signed in to the workspace.
                                    </p>

                                    <span>
                                    Yesterday at 9:08 AM
                                </span>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>


            {{-- ========================================================
                Sidebar
            ========================================================= --}}
            <aside class="wm-team-member-page__sidebar">


                {{-- Contact --}}
                <div class="wm-team-member-page__side-card">

                    <div class="wm-team-member-page__side-header">

                        <h3>
                            Contact Information
                        </h3>

                        <button
                            type="button"
                            data-member-action="edit"
                        >
                            <i class="ph ph-pencil-simple"></i>
                        </button>

                    </div>


                    <div class="wm-team-member-page__contact-list">

                        <div class="wm-team-member-page__contact-item">

                            <div class="wm-team-member-page__contact-icon">
                                <i class="ph ph-envelope-simple"></i>
                            </div>

                            <div>
                                <span>Email</span>
                                <a href="mailto:olivia@researchlab.com">
                                    olivia@researchlab.com
                                </a>
                            </div>

                        </div>


                        <div class="wm-team-member-page__contact-item">

                            <div class="wm-team-member-page__contact-icon">
                                <i class="ph ph-phone"></i>
                            </div>

                            <div>
                                <span>Phone</span>
                                <a href="tel:+16175550128">
                                    +1 (617) 555-0128
                                </a>
                            </div>

                        </div>


                        <div class="wm-team-member-page__contact-item">

                            <div class="wm-team-member-page__contact-icon">
                                <i class="ph ph-map-pin"></i>
                            </div>

                            <div>
                                <span>Location</span>
                                <strong>
                                    Boston, Massachusetts
                                </strong>
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Role --}}
                <div class="wm-team-member-page__side-card">

                    <div class="wm-team-member-page__side-header">

                        <h3>
                            Role & Permissions
                        </h3>

                        <button
                            type="button"
                            data-member-action="change-role"
                        >
                            <i class="ph ph-pencil-simple"></i>
                        </button>

                    </div>


                    <div class="wm-team-member-page__role-box">

                        <div class="wm-team-member-page__role-icon">
                            <i class="ph ph-shield-star"></i>
                        </div>

                        <div>

                            <strong>
                                Administrator
                            </strong>

                            <span>
                            Full workspace access
                        </span>

                        </div>

                    </div>


                    <div class="wm-team-member-page__permission-list">

                        <div>
                            <span>Projects</span>
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div>
                            <span>Tasks</span>
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div>
                            <span>Team Management</span>
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div>
                            <span>Billing</span>
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div>
                            <span>Workspace Settings</span>
                            <i class="ph ph-check-circle"></i>
                        </div>

                    </div>


                    <button
                        type="button"
                        class="wm-team-member-page__permissions-link"
                        data-member-action="view-permissions"
                    >
                        View all permissions
                        <i class="ph ph-arrow-right"></i>
                    </button>

                </div>


                {{-- Skills --}}
                <div class="wm-team-member-page__side-card">

                    <div class="wm-team-member-page__side-header">

                        <h3>
                            Skills & Expertise
                        </h3>

                        <button
                            type="button"
                            data-member-action="edit-skills"
                        >
                            <i class="ph ph-pencil-simple"></i>
                        </button>

                    </div>


                    <div class="wm-team-member-page__tags">

                        <span>Research Operations</span>
                        <span>Project Management</span>
                        <span>Data Analysis</span>
                        <span>Team Coordination</span>
                        <span>Documentation</span>
                        <span>Reporting</span>

                    </div>

                </div>


                {{-- Account --}}
                <div class="wm-team-member-page__side-card">

                    <div class="wm-team-member-page__side-header">

                        <h3>
                            Account
                        </h3>

                    </div>


                    <div class="wm-team-member-page__account-list">

                        <div>

                        <span>
                            Account Status
                        </span>

                            <strong class="wm-team-member-page__account-status">
                                Active
                            </strong>

                        </div>


                        <div>

                        <span>
                            Last Active
                        </span>

                            <strong>
                                Today, 10:42 AM
                            </strong>

                        </div>


                        <div>

                        <span>
                            Two-factor Authentication
                        </span>

                            <strong class="wm-team-member-page__security-status">
                                Enabled
                            </strong>

                        </div>

                    </div>

                </div>

            </aside>

        </div>

    </div>

@endsection


@push('script')

    <script>
        $(document).ready(function () {

            'use strict';


            // ============================================================
            // Elements
            // ============================================================

            const $tabs =
                $('[data-member-tab]');

            const $tabContents =
                $('[data-tab-content]');

            const $memberActions =
                $('[data-member-action]');


            // ============================================================
            // Functions
            // ============================================================

            function closeMenus() {

                $('.wm-team-member-page__more')
                    .removeClass('is-open');

            }


            function showTab(tabName) {

                $tabs.removeClass('is-active');

                $tabs
                    .filter('[data-member-tab="' + tabName + '"]')
                    .addClass('is-active');


                $tabContents.removeClass('is-active');

                $tabContents
                    .filter('[data-tab-content="' + tabName + '"]')
                    .addClass('is-active');

            }


            function handleAction(action) {

                console.log(
                    'Team member action:',
                    action
                );

            }


            // ============================================================
            // Tabs
            // ============================================================

            $(document).on(
                'click',
                '[data-member-tab]',
                function () {

                    const tab =
                        $(this).data('member-tab');


                    showTab(tab);

                }
            );


            // ============================================================
            // More Menu
            // ============================================================

            $(document).on(
                'click',
                '[data-member-menu]',
                function (event) {

                    event.stopPropagation();


                    const $menu =
                        $(this).closest(
                            '.wm-team-member-page__more'
                        );


                    $('.wm-team-member-page__more')
                        .not($menu)
                        .removeClass('is-open');


                    $menu.toggleClass('is-open');

                }
            );


            // ============================================================
            // Member Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-member-action]',
                function (event) {

                    event.stopPropagation();


                    const action =
                        $(this).data('member-action');


                    closeMenus();

                    handleAction(action);

                }
            );


            // ============================================================
            // Task Checkbox
            // ============================================================

            $(document).on(
                'change',
                '[data-task-check]',
                function () {

                    const $task =
                        $(this).closest(
                            '.wm-team-member-page__task'
                        );


                    if ($(this).is(':checked')) {

                        $task.addClass(
                            'is-completed'
                        );

                    } else {

                        $task.removeClass(
                            'is-completed'
                        );

                    }

                }
            );


            // ============================================================
            // Project Row
            // ============================================================

            $(document).on(
                'click',
                '.wm-team-member-page__project-name',
                function () {

                    console.log(
                        'Open project:',
                        $(this).text().trim()
                    );

                }
            );


            // ============================================================
            // Outside Click
            // ============================================================

            $(document).on(
                'click',
                function () {

                    closeMenus();

                }
            );


            // ============================================================
            // Escape
            // ============================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeMenus();

                    }

                }
            );


            // ============================================================
            // Initial
            // ============================================================

            showTab('overview');

        });
    </script>

@endpush
