@extends('layout.app')

@section('main')

    <div class="wm-project-overview-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-overview-page__header">

            <div class="wm-project-overview-page__header-left">

                <nav class="wm-project-overview-page__breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Climate Change Research Initiative</span>
                </nav>

                <div class="wm-project-overview-page__title-row">

                    <div class="wm-project-overview-page__project-icon">
                        <i class="ph ph-flask"></i>
                    </div>

                    <div class="wm-project-overview-page__title-content">

                        <div class="wm-project-overview-page__title-line">

                            <h1 class="wm-project-overview-page__title">
                                Climate Change Research Initiative
                            </h1>

                            <span class="wm-project-overview-page__status wm-project-overview-page__status--active">
                            <span></span>
                            Active
                        </span>

                        </div>

                        <p class="wm-project-overview-page__subtitle">
                            Investigating climate adaptation strategies and environmental
                            resilience across coastal communities.
                        </p>

                        <div class="wm-project-overview-page__meta">

                        <span>
                            <i class="ph ph-hash"></i>
                            CLM-2026-001
                        </span>

                            <span>
                            <i class="ph ph-calendar-blank"></i>
                            Jan 15, 2026 — Dec 20, 2026
                        </span>

                            <span>
                            <i class="ph ph-user-circle"></i>
                            Dr. Sarah Wilson
                        </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="wm-project-overview-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light wm-project-overview-page__action"
                    data-project-action="share"
                >
                    <i class="ph ph-share-network"></i>
                    Share
                </button>

                <button
                    type="button"
                    class="btn btn-light wm-project-overview-page__action"
                    data-project-action="edit"
                >
                    <i class="ph ph-pencil-simple"></i>
                    Edit
                </button>

                <div class="wm-project-overview-page__action-menu">

                    <button
                        type="button"
                        class="btn btn-light wm-project-overview-page__action"
                        data-project-menu-toggle
                        aria-expanded="false"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                    <div class="wm-project-overview-page__dropdown" data-project-menu>

                        <button type="button" data-project-action="duplicate">
                            <i class="ph ph-copy"></i>
                            Duplicate Project
                        </button>

                        <button type="button" data-project-action="archive">
                            <i class="ph ph-archive"></i>
                            Archive Project
                        </button>

                        <div class="wm-project-overview-page__dropdown-divider"></div>

                        <button
                            type="button"
                            class="is-danger"
                            data-project-action="delete"
                        >
                            <i class="ph ph-trash"></i>
                            Delete Project
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-overview-page__navigation">

            <nav class="wm-project-overview-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item is-active"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-overview-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Stats
        ========================================================== --}}
        <div class="wm-project-overview-page__stats">

            <div class="wm-project-overview-page__stat-card">

                <div class="wm-project-overview-page__stat-icon wm-project-overview-page__stat-icon--blue">
                    <i class="ph ph-chart-line-up"></i>
                </div>

                <div class="wm-project-overview-page__stat-content">
                <span class="wm-project-overview-page__stat-label">
                    Overall Progress
                </span>

                    <strong class="wm-project-overview-page__stat-value">
                        68%
                    </strong>

                    <div class="wm-project-overview-page__stat-progress">
                        <span style="width: 68%;"></span>
                    </div>
                </div>

            </div>


            <div class="wm-project-overview-page__stat-card">

                <div class="wm-project-overview-page__stat-icon wm-project-overview-page__stat-icon--green">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-project-overview-page__stat-content">
                <span class="wm-project-overview-page__stat-label">
                    Tasks
                </span>

                    <strong class="wm-project-overview-page__stat-value">
                        24 / 36
                    </strong>

                    <span class="wm-project-overview-page__stat-meta">
                    12 remaining
                </span>
                </div>

            </div>


            <div class="wm-project-overview-page__stat-card">

                <div class="wm-project-overview-page__stat-icon wm-project-overview-page__stat-icon--purple">
                    <i class="ph ph-flag"></i>
                </div>

                <div class="wm-project-overview-page__stat-content">
                <span class="wm-project-overview-page__stat-label">
                    Milestones
                </span>

                    <strong class="wm-project-overview-page__stat-value">
                        5 / 8
                    </strong>

                    <span class="wm-project-overview-page__stat-meta">
                    3 upcoming
                </span>
                </div>

            </div>


            <div class="wm-project-overview-page__stat-card">

                <div class="wm-project-overview-page__stat-icon wm-project-overview-page__stat-icon--orange">
                    <i class="ph ph-users-three"></i>
                </div>

                <div class="wm-project-overview-page__stat-content">
                <span class="wm-project-overview-page__stat-label">
                    Team Members
                </span>

                    <strong class="wm-project-overview-page__stat-value">
                        12
                    </strong>

                    <span class="wm-project-overview-page__stat-meta">
                    2 pending invites
                </span>
                </div>

            </div>

        </div>


        {{-- =========================================================
            Main Grid
        ========================================================== --}}
        <div class="wm-project-overview-page__grid">

            <div class="wm-project-overview-page__main">


                {{-- =====================================================
                    Project Progress
                ====================================================== --}}
                <section class="wm-project-overview-page__card">

                    <div class="wm-project-overview-page__card-header">

                        <div>
                            <h2 class="wm-project-overview-page__card-title">
                                Project Progress
                            </h2>

                            <p class="wm-project-overview-page__card-description">
                                Current progress across project activities.
                            </p>
                        </div>

                        <button
                            type="button"
                            class="wm-project-overview-page__text-button"
                            data-project-action="view-progress"
                        >
                            View Details
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                    <div class="wm-project-overview-page__progress">

                        <div class="wm-project-overview-page__progress-header">

                            <div>
                                <strong>68%</strong>
                                <span>completed</span>
                            </div>

                            <span>
                            12 of 18 workstreams completed
                        </span>

                        </div>

                        <div class="wm-project-overview-page__progress-track">
                            <span style="width: 68%;"></span>
                        </div>

                        <div class="wm-project-overview-page__progress-footer">

                            <div>
                                <span class="wm-project-overview-page__legend-dot wm-project-overview-page__legend-dot--completed"></span>
                                Completed
                                <strong>68%</strong>
                            </div>

                            <div>
                                <span class="wm-project-overview-page__legend-dot wm-project-overview-page__legend-dot--progress"></span>
                                In Progress
                                <strong>22%</strong>
                            </div>

                            <div>
                                <span class="wm-project-overview-page__legend-dot wm-project-overview-page__legend-dot--remaining"></span>
                                Remaining
                                <strong>10%</strong>
                            </div>

                        </div>

                    </div>

                </section>


                {{-- =====================================================
                    Upcoming Tasks
                ====================================================== --}}
                <section class="wm-project-overview-page__card">

                    <div class="wm-project-overview-page__card-header">

                        <div>
                            <h2 class="wm-project-overview-page__card-title">
                                Upcoming Tasks
                            </h2>

                            <p class="wm-project-overview-page__card-description">
                                Tasks that need attention soon.
                            </p>
                        </div>

                        <a
                            href="{{ route('projects.tasks', 'climate-research') }}"
                            class="wm-project-overview-page__text-button"
                        >
                            View All
                            <i class="ph ph-arrow-right"></i>
                        </a>

                    </div>

                    <div class="wm-project-overview-page__task-list">

                        <div class="wm-project-overview-page__task">

                            <label class="wm-project-overview-page__task-check">
                                <input
                                    type="checkbox"
                                    data-task-check
                                >
                                <span></span>
                            </label>

                            <div class="wm-project-overview-page__task-content">

                                <strong>
                                    Analyze coastal vulnerability data
                                </strong>

                                <div class="wm-project-overview-page__task-meta">

                                <span class="wm-project-overview-page__priority wm-project-overview-page__priority--high">
                                    High
                                </span>

                                    <span>
                                    <i class="ph ph-calendar-blank"></i>
                                    Sep 26, 2026
                                </span>

                                </div>

                            </div>

                            <div class="wm-project-overview-page__task-assignee">
                            <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--sm">
                                SW
                            </span>
                            </div>

                            <button
                                type="button"
                                class="wm-project-overview-page__task-menu"
                                data-task-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>


                        <div class="wm-project-overview-page__task">

                            <label class="wm-project-overview-page__task-check">
                                <input
                                    type="checkbox"
                                    data-task-check
                                >
                                <span></span>
                            </label>

                            <div class="wm-project-overview-page__task-content">

                                <strong>
                                    Review field survey results
                                </strong>

                                <div class="wm-project-overview-page__task-meta">

                                <span class="wm-project-overview-page__priority wm-project-overview-page__priority--medium">
                                    Medium
                                </span>

                                    <span>
                                    <i class="ph ph-calendar-blank"></i>
                                    Sep 28, 2026
                                </span>

                                </div>

                            </div>

                            <div class="wm-project-overview-page__task-assignee">
                            <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--sm wm-project-overview-page__avatar--green">
                                MJ
                            </span>
                            </div>

                            <button
                                type="button"
                                class="wm-project-overview-page__task-menu"
                                data-task-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>


                        <div class="wm-project-overview-page__task">

                            <label class="wm-project-overview-page__task-check">
                                <input
                                    type="checkbox"
                                    data-task-check
                                >
                                <span></span>
                            </label>

                            <div class="wm-project-overview-page__task-content">

                                <strong>
                                    Prepare stakeholder interview guide
                                </strong>

                                <div class="wm-project-overview-page__task-meta">

                                <span class="wm-project-overview-page__priority wm-project-overview-page__priority--low">
                                    Low
                                </span>

                                    <span>
                                    <i class="ph ph-calendar-blank"></i>
                                    Sep 30, 2026
                                </span>

                                </div>

                            </div>

                            <div class="wm-project-overview-page__task-assignee">
                            <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--sm wm-project-overview-page__avatar--purple">
                                AK
                            </span>
                            </div>

                            <button
                                type="button"
                                class="wm-project-overview-page__task-menu"
                                data-task-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>

                    </div>

                </section>


                {{-- =====================================================
                    Milestones
                ====================================================== --}}
                <section class="wm-project-overview-page__card">

                    <div class="wm-project-overview-page__card-header">

                        <div>
                            <h2 class="wm-project-overview-page__card-title">
                                Milestones
                            </h2>

                            <p class="wm-project-overview-page__card-description">
                                Key project goals and deliverables.
                            </p>
                        </div>

                        <a
                            href="{{ route('projects.milestones', 'climate-research') }}"
                            class="wm-project-overview-page__text-button"
                        >
                            View All
                            <i class="ph ph-arrow-right"></i>
                        </a>

                    </div>

                    <div class="wm-project-overview-page__milestones">

                        <div class="wm-project-overview-page__milestone is-completed">

                            <div class="wm-project-overview-page__milestone-icon">
                                <i class="ph ph-check"></i>
                            </div>

                            <div class="wm-project-overview-page__milestone-content">

                                <strong>
                                    Research Framework
                                </strong>

                                <span>
                                Completed Sep 02, 2026
                            </span>

                            </div>

                            <span class="wm-project-overview-page__milestone-status">
                            Completed
                        </span>

                        </div>


                        <div class="wm-project-overview-page__milestone is-completed">

                            <div class="wm-project-overview-page__milestone-icon">
                                <i class="ph ph-check"></i>
                            </div>

                            <div class="wm-project-overview-page__milestone-content">

                                <strong>
                                    Data Collection
                                </strong>

                                <span>
                                Completed Sep 15, 2026
                            </span>

                            </div>

                            <span class="wm-project-overview-page__milestone-status">
                            Completed
                        </span>

                        </div>


                        <div class="wm-project-overview-page__milestone is-current">

                            <div class="wm-project-overview-page__milestone-icon">
                                <i class="ph ph-arrow-right"></i>
                            </div>

                            <div class="wm-project-overview-page__milestone-content">

                                <strong>
                                    Data Analysis
                                </strong>

                                <span>
                                Due Oct 12, 2026
                            </span>

                            </div>

                            <span class="wm-project-overview-page__milestone-status">
                            In Progress
                        </span>

                        </div>


                        <div class="wm-project-overview-page__milestone">

                            <div class="wm-project-overview-page__milestone-icon">
                                <i class="ph ph-flag"></i>
                            </div>

                            <div class="wm-project-overview-page__milestone-content">

                                <strong>
                                    Final Report
                                </strong>

                                <span>
                                Due Nov 28, 2026
                            </span>

                            </div>

                            <span class="wm-project-overview-page__milestone-status">
                            Upcoming
                        </span>

                        </div>

                    </div>

                </section>


                {{-- =====================================================
                    Team
                ====================================================== --}}
                <section class="wm-project-overview-page__card">

                    <div class="wm-project-overview-page__card-header">

                        <div>
                            <h2 class="wm-project-overview-page__card-title">
                                Project Team
                            </h2>

                            <p class="wm-project-overview-page__card-description">
                                Members currently working on this project.
                            </p>
                        </div>

                        <a
                            href="{{ route('projects.team', 'climate-research') }}"
                            class="wm-project-overview-page__text-button"
                        >
                            View Team
                            <i class="ph ph-arrow-right"></i>
                        </a>

                    </div>

                    <div class="wm-project-overview-page__team">

                        <div class="wm-project-overview-page__member">

                        <span class="wm-project-overview-page__avatar">
                            SW
                        </span>

                            <div>
                                <strong>Dr. Sarah Wilson</strong>
                                <span>Principal Investigator</span>
                            </div>

                            <span class="wm-project-overview-page__member-status is-online"></span>

                        </div>


                        <div class="wm-project-overview-page__member">

                        <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--green">
                            MJ
                        </span>

                            <div>
                                <strong>Michael Johnson</strong>
                                <span>Researcher</span>
                            </div>

                            <span class="wm-project-overview-page__member-status is-online"></span>

                        </div>


                        <div class="wm-project-overview-page__member">

                        <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--purple">
                            AK
                        </span>

                            <div>
                                <strong>Anna Kim</strong>
                                <span>Data Scientist</span>
                            </div>

                            <span class="wm-project-overview-page__member-status"></span>

                        </div>


                        <div class="wm-project-overview-page__member">

                        <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--orange">
                            RB
                        </span>

                            <div>
                                <strong>Robert Brown</strong>
                                <span>Research Assistant</span>
                            </div>

                            <span class="wm-project-overview-page__member-status"></span>

                        </div>

                    </div>

                </section>

            </div>


            {{-- =========================================================
                Sidebar
            ========================================================== --}}
            <aside class="wm-project-overview-page__sidebar">


                {{-- Project Details --}}
                <section class="wm-project-overview-page__sidebar-card">

                    <div class="wm-project-overview-page__sidebar-header">
                        <h2>Project Details</h2>

                        <button
                            type="button"
                            data-project-action="edit-details"
                        >
                            <i class="ph ph-pencil-simple"></i>
                        </button>
                    </div>

                    <div class="wm-project-overview-page__details">

                        <div>
                            <span>Owner</span>

                            <strong>
                            <span class="wm-project-overview-page__avatar wm-project-overview-page__avatar--xs">
                                SW
                            </span>
                                Dr. Sarah Wilson
                            </strong>
                        </div>

                        <div>
                            <span>Priority</span>

                            <strong class="wm-project-overview-page__detail-priority">
                                <i class="ph ph-warning-circle"></i>
                                High
                            </strong>
                        </div>

                        <div>
                            <span>Start Date</span>
                            <strong>Jan 15, 2026</strong>
                        </div>

                        <div>
                            <span>End Date</span>
                            <strong>Dec 20, 2026</strong>
                        </div>

                        <div>
                            <span>Duration</span>
                            <strong>11 months</strong>
                        </div>

                        <div>
                            <span>Department</span>
                            <strong>Environmental Science</strong>
                        </div>

                    </div>

                </section>


                {{-- Recent Activity --}}
                <section class="wm-project-overview-page__sidebar-card">

                    <div class="wm-project-overview-page__sidebar-header">

                        <h2>Recent Activity</h2>

                        <a
                            href="{{ route('projects.activity', 'climate-research') }}"
                        >
                            View All
                        </a>

                    </div>

                    <div class="wm-project-overview-page__activity-list">

                        <div class="wm-project-overview-page__activity">

                        <span class="wm-project-overview-page__activity-icon wm-project-overview-page__activity-icon--blue">
                            <i class="ph ph-check-circle"></i>
                        </span>

                            <div>
                                <p>
                                    <strong>Michael Johnson</strong>
                                    completed a task.
                                </p>

                                <span>18 minutes ago</span>
                            </div>

                        </div>


                        <div class="wm-project-overview-page__activity">

                        <span class="wm-project-overview-page__activity-icon wm-project-overview-page__activity-icon--green">
                            <i class="ph ph-user-plus"></i>
                        </span>

                            <div>
                                <p>
                                    <strong>Anna Kim</strong>
                                    joined the project.
                                </p>

                                <span>2 hours ago</span>
                            </div>

                        </div>


                        <div class="wm-project-overview-page__activity">

                        <span class="wm-project-overview-page__activity-icon wm-project-overview-page__activity-icon--purple">
                            <i class="ph ph-file-plus"></i>
                        </span>

                            <div>
                                <p>
                                    <strong>Sarah Wilson</strong>
                                    uploaded a document.
                                </p>

                                <span>Yesterday</span>
                            </div>

                        </div>


                        <div class="wm-project-overview-page__activity">

                        <span class="wm-project-overview-page__activity-icon wm-project-overview-page__activity-icon--orange">
                            <i class="ph ph-flag"></i>
                        </span>

                            <div>
                                <p>
                                    <strong>Data Collection</strong>
                                    milestone completed.
                                </p>

                                <span>Sep 15, 2026</span>
                            </div>

                        </div>

                    </div>

                </section>


                {{-- Quick Actions --}}
                <section class="wm-project-overview-page__sidebar-card">

                    <div class="wm-project-overview-page__sidebar-header">
                        <h2>Quick Actions</h2>
                    </div>

                    <div class="wm-project-overview-page__quick-actions">

                        <button
                            type="button"
                            data-project-action="new-task"
                        >
                        <span>
                            <i class="ph ph-plus"></i>
                        </span>
                            Create Task
                        </button>

                        <button
                            type="button"
                            data-project-action="new-milestone"
                        >
                        <span>
                            <i class="ph ph-flag"></i>
                        </span>
                            Add Milestone
                        </button>

                        <button
                            type="button"
                            data-project-action="upload-file"
                        >
                        <span>
                            <i class="ph ph-upload-simple"></i>
                        </span>
                            Upload File
                        </button>

                        <button
                            type="button"
                            data-project-action="invite-member"
                        >
                        <span>
                            <i class="ph ph-user-plus"></i>
                        </span>
                            Invite Member
                        </button>

                    </div>

                </section>

            </aside>

        </div>

    </div>

@endsection

@push('script')
    <script>
        $(document).ready(function () {

            'use strict';

            /*
            |--------------------------------------------------------------------------
            | Elements
            |--------------------------------------------------------------------------
            */

            const $page = $('.wm-project-overview-page');
            const $dropdown = $('[data-project-menu]');
            const $taskMenus = $('[data-task-menu]');


            /*
            |--------------------------------------------------------------------------
            | Functions
            |--------------------------------------------------------------------------
            */

            function closeProjectMenu() {
                $dropdown.removeClass('is-open');

                $('[data-project-menu-toggle]')
                    .attr('aria-expanded', 'false');
            }


            function showNotice(title, text, icon = 'info') {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: icon,
                        confirmButtonText: 'Okay',
                        confirmButtonColor: '#2563EB'
                    });

                    return;
                }

                alert(title + '\n\n' + text);
            }


            function handleProjectAction(action) {

                switch (action) {

                    case 'share':

                        if (navigator.clipboard) {

                            navigator.clipboard.writeText(window.location.href)
                                .then(function () {

                                    showNotice(
                                        'Project link copied',
                                        'The project URL has been copied to your clipboard.',
                                        'success'
                                    );

                                });

                        } else {

                            showNotice(
                                'Share Project',
                                'Project sharing is ready for backend integration.'
                            );

                        }

                        break;


                    case 'edit':
                    case 'edit-details':

                        showNotice(
                            'Edit Project',
                            'The project editor can be connected to the project update route.'
                        );

                        break;


                    case 'duplicate':

                        showNotice(
                            'Duplicate Project',
                            'A duplicate project workflow can be connected here.'
                        );

                        break;


                    case 'archive':

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Archive project?',
                                text: 'This project will be moved to your archived projects.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Archive Project',
                                cancelButtonText: 'Cancel',
                                confirmButtonColor: '#2563EB'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Project archived',
                                        'The project has been archived successfully.',
                                        'success'
                                    );

                                }

                            });

                        }

                        break;


                    case 'delete':

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Delete project?',
                                text: 'This action cannot be undone.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Delete Project',
                                cancelButtonText: 'Cancel',
                                confirmButtonColor: '#EF4444'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Project deleted',
                                        'The project has been removed.',
                                        'success'
                                    );

                                }

                            });

                        }

                        break;


                    case 'view-progress':

                        showNotice(
                            'Project Progress',
                            'Detailed progress reporting can be connected here.'
                        );

                        break;


                    case 'new-task':

                        showNotice(
                            'Create Task',
                            'The task creation modal can be opened here.'
                        );

                        break;


                    case 'new-milestone':

                        showNotice(
                            'Add Milestone',
                            'The milestone creation modal can be opened here.'
                        );

                        break;


                    case 'upload-file':

                        showNotice(
                            'Upload File',
                            'The file upload workflow can be connected here.'
                        );

                        break;


                    case 'invite-member':

                        showNotice(
                            'Invite Member',
                            'The member invitation workflow can be connected here.'
                        );

                        break;

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Project Menu
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-project-menu-toggle]', function (event) {

                event.stopPropagation();

                const $button = $(this);

                $dropdown.toggleClass('is-open');

                $button.attr(
                    'aria-expanded',
                    $dropdown.hasClass('is-open') ? 'true' : 'false'
                );

            });


            /*
            |--------------------------------------------------------------------------
            | Project Actions
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-project-action]', function () {

                const action = $(this).data('project-action');

                closeProjectMenu();

                handleProjectAction(action);

            });


            /*
            |--------------------------------------------------------------------------
            | Task Checkbox
            |--------------------------------------------------------------------------
            */

            $(document).on('change', '[data-task-check]', function () {

                const $task = $(this).closest(
                    '.wm-project-overview-page__task'
                );

                $task.toggleClass('is-completed', this.checked);

            });


            /*
            |--------------------------------------------------------------------------
            | Task Menu
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-task-menu-toggle]', function (event) {

                event.stopPropagation();

                $('.wm-project-overview-page__task')
                    .removeClass('is-menu-open');

                $(this)
                    .closest('.wm-project-overview-page__task')
                    .toggleClass('is-menu-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Navigation
            |--------------------------------------------------------------------------
            */

            $('.wm-project-overview-page__nav-item').on('click', function () {

                $('.wm-project-overview-page__nav-item')
                    .removeClass('is-active');

                $(this).addClass('is-active');

            });


            /*
            |--------------------------------------------------------------------------
            | Outside Click
            |--------------------------------------------------------------------------
            */

            $(document).on('click', function () {

                closeProjectMenu();

                $('.wm-project-overview-page__task')
                    .removeClass('is-menu-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Escape
            |--------------------------------------------------------------------------
            */

            $(document).on('keydown', function (event) {

                if (event.key === 'Escape') {

                    closeProjectMenu();

                    $('.wm-project-overview-page__task')
                        .removeClass('is-menu-open');

                }

            });


            /*
            |--------------------------------------------------------------------------
            | Initial
            |--------------------------------------------------------------------------
            */

            if ($page.length) {
                $page.addClass('is-ready');
            }

        });
    </script>
@endpush
