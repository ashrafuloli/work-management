@extends('layout.app')

@section('main')

    <div class="wm-project-activity-page">

        {{-- =========================================================
            Header
        ========================================================== --}}
        <div class="wm-project-activity-page__header">

            <div class="wm-project-activity-page__header-left">

                <nav class="wm-project-activity-page__breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Activity</span>

                </nav>

                <div class="wm-project-activity-page__title-row">

                    <div class="wm-project-activity-page__title-icon">
                        <i class="ph ph-activity"></i>
                    </div>

                    <div>

                        <h1 class="wm-project-activity-page__title">
                            Project Activity
                        </h1>

                        <p class="wm-project-activity-page__subtitle">
                            Track project updates, team actions, and important changes.
                        </p>

                    </div>

                </div>

            </div>

            <div class="wm-project-activity-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="mark-read"
                >
                    <i class="ph ph-checks"></i>
                    Mark All Read
                </button>

                <button
                    type="button"
                    class="btn btn-primary"
                    data-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export Activity
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-activity-page__navigation">

            <nav class="wm-project-activity-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item is-active"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-activity-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-activity-page__summary">

            <button
                type="button"
                class="wm-project-activity-page__summary-card is-active"
                data-summary-filter="all"
            >

            <span class="wm-project-activity-page__summary-icon wm-project-activity-page__summary-icon--blue">
                <i class="ph ph-activity"></i>
            </span>

                <span class="wm-project-activity-page__summary-content">
                <span>Total Activity</span>
                <strong>128</strong>
                <small>All project events</small>
            </span>

            </button>


            <button
                type="button"
                class="wm-project-activity-page__summary-card"
                data-summary-filter="task"
            >

            <span class="wm-project-activity-page__summary-icon wm-project-activity-page__summary-icon--green">
                <i class="ph ph-check-square"></i>
            </span>

                <span class="wm-project-activity-page__summary-content">
                <span>Task Updates</span>
                <strong>64</strong>
                <small>Task activity</small>
            </span>

            </button>


            <button
                type="button"
                class="wm-project-activity-page__summary-card"
                data-summary-filter="team"
            >

            <span class="wm-project-activity-page__summary-icon wm-project-activity-page__summary-icon--purple">
                <i class="ph ph-users-three"></i>
            </span>

                <span class="wm-project-activity-page__summary-content">
                <span>Team Actions</span>
                <strong>32</strong>
                <small>Member activity</small>
            </span>

            </button>


            <button
                type="button"
                class="wm-project-activity-page__summary-card"
                data-summary-filter="project"
            >

            <span class="wm-project-activity-page__summary-icon wm-project-activity-page__summary-icon--orange">
                <i class="ph ph-kanban"></i>
            </span>

                <span class="wm-project-activity-page__summary-content">
                <span>Project Updates</span>
                <strong>32</strong>
                <small>Project changes</small>
            </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-activity-page__toolbar">

            <div class="wm-project-activity-page__toolbar-left">

                <div class="wm-project-activity-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="activitySearch"
                        placeholder="Search activity..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        data-search-clear
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>


                <button
                    type="button"
                    class="wm-project-activity-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-activity-page__toolbar-right">

                <div class="wm-project-activity-page__sort">

                    <button
                        type="button"
                        class="wm-project-activity-page__toolbar-button"
                        data-sort-toggle
                    >
                        <i class="ph ph-sort-descending"></i>
                        Sort
                        <i class="ph ph-caret-down"></i>
                    </button>

                    <div
                        class="wm-project-activity-page__sort-menu"
                        data-sort-menu
                    >

                        <button type="button" data-sort="newest">
                            <i class="ph ph-arrow-down"></i>
                            Newest First
                        </button>

                        <button type="button" data-sort="oldest">
                            <i class="ph ph-arrow-up"></i>
                            Oldest First
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div
            class="wm-project-activity-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-activity-page__filter-field">

                <label for="activityTypeFilter">
                    Activity Type
                </label>

                <select id="activityTypeFilter">

                    <option value="">All Activity</option>
                    <option value="task">Tasks</option>
                    <option value="team">Team</option>
                    <option value="project">Project</option>
                    <option value="file">Files</option>
                    <option value="comment">Comments</option>
                    <option value="milestone">Milestones</option>

                </select>

            </div>


            <div class="wm-project-activity-page__filter-field">

                <label for="activityMemberFilter">
                    Member
                </label>

                <select id="activityMemberFilter">

                    <option value="">All Members</option>
                    <option value="sarah">Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>
                    <option value="james">James Miller</option>

                </select>

            </div>


            <div class="wm-project-activity-page__filter-field">

                <label for="activityDateFilter">
                    Date
                </label>

                <select id="activityDateFilter">

                    <option value="">All Dates</option>
                    <option value="today">Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="older">Older</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-activity-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-activity-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            Activity Content
        ========================================================== --}}
        <div
            class="wm-project-activity-page__content"
            data-activity-content
        >

            {{-- =====================================================
                Today
            ====================================================== --}}
            <section
                class="wm-project-activity-page__group"
                data-activity-group
            >

                <div class="wm-project-activity-page__group-header">

                    <h2>Today</h2>

                    <span>September 24, 2026</span>

                </div>


                <div class="wm-project-activity-page__timeline">


                    {{-- Task Completed --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="task"
                        data-member="michael"
                        data-date="today"
                        data-time="10:24"
                        data-search="Michael Johnson completed Field Survey Data Collection task"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-task">
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Michael Johnson
                                    </strong>

                                    <span>
                                    completed a task
                                </span>

                                </div>

                                <time>
                                    10:24 AM
                                </time>

                            </div>

                            <p>
                                Completed
                                <a href="#">Field Survey Data Collection</a>
                                and marked it as complete.
                            </p>

                            <div class="wm-project-activity-page__activity-meta">

                            <span>
                                <i class="ph ph-check-square"></i>
                                Task
                            </span>

                                <span>
                                <i class="ph ph-folder-simple"></i>
                                Field Data Collection
                            </span>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="task">
                                    <i class="ph ph-check-square"></i>
                                    View Task
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- Comment --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="comment"
                        data-member="anna"
                        data-date="today"
                        data-time="09:48"
                        data-search="Anna Kim commented on climate data analysis"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-comment">
                            <i class="ph ph-chat-circle"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Anna Kim
                                    </strong>

                                    <span>
                                    added a comment
                                </span>

                                </div>

                                <time>
                                    9:48 AM
                                </time>

                            </div>

                            <p>
                                Added a comment to
                                <a href="#">Climate Data Analysis</a>.
                            </p>

                            <div class="wm-project-activity-page__comment">

                                <i class="ph ph-quotes"></i>

                                <span>
                                The latest dataset has been cleaned and is ready for the next analysis phase.
                            </span>

                            </div>

                            <div class="wm-project-activity-page__activity-meta">

                            <span>
                                <i class="ph ph-chat-circle"></i>
                                Comment
                            </span>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="comment">
                                    <i class="ph ph-chat-circle"></i>
                                    View Comment
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- File --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="file"
                        data-member="sarah"
                        data-date="today"
                        data-time="08:32"
                        data-search="Sarah Wilson uploaded field survey report PDF"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-file">
                            <i class="ph ph-upload-simple"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Sarah Wilson
                                    </strong>

                                    <span>
                                    uploaded a file
                                </span>

                                </div>

                                <time>
                                    8:32 AM
                                </time>

                            </div>

                            <p>
                                Uploaded a new project document.
                            </p>

                            <div class="wm-project-activity-page__file">

                                <div class="wm-project-activity-page__file-icon">
                                    <i class="ph ph-file-pdf"></i>
                                </div>

                                <div class="wm-project-activity-page__file-info">

                                    <strong>
                                        field-survey-report.pdf
                                    </strong>

                                    <span>
                                    PDF · 4.8 MB
                                </span>

                                </div>

                                <button
                                    type="button"
                                    data-file-action="preview"
                                >
                                    <i class="ph ph-eye"></i>
                                </button>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="file">
                                    <i class="ph ph-file"></i>
                                    View File
                                </button>

                            </div>

                        </div>

                    </article>

                </div>

            </section>


            {{-- =====================================================
                Yesterday
            ====================================================== --}}
            <section
                class="wm-project-activity-page__group"
                data-activity-group
            >

                <div class="wm-project-activity-page__group-header">

                    <h2>Yesterday</h2>

                    <span>September 23, 2026</span>

                </div>


                <div class="wm-project-activity-page__timeline">


                    {{-- Member --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="team"
                        data-member="robert"
                        data-date="yesterday"
                        data-time="16:12"
                        data-search="Robert Brown joined project team"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-team">
                            <i class="ph ph-user-plus"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Robert Brown
                                    </strong>

                                    <span>
                                    updated team activity
                                </span>

                                </div>

                                <time>
                                    4:12 PM
                                </time>

                            </div>

                            <p>
                                Joined the
                                <strong>Climate Change Research Initiative</strong>
                                project team.
                            </p>

                            <div class="wm-project-activity-page__activity-meta">

                            <span>
                                <i class="ph ph-users-three"></i>
                                Team
                            </span>

                                <span>
                                <i class="ph ph-user"></i>
                                Postdoc
                            </span>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="profile">
                                    <i class="ph ph-user"></i>
                                    View Profile
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- Milestone --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="milestone"
                        data-member="sarah"
                        data-date="yesterday"
                        data-time="14:36"
                        data-search="Sarah Wilson updated Field Research milestone"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-milestone">
                            <i class="ph ph-flag"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Sarah Wilson
                                    </strong>

                                    <span>
                                    updated a milestone
                                </span>

                                </div>

                                <time>
                                    2:36 PM
                                </time>

                            </div>

                            <p>
                                Marked
                                <a href="#">Field Research Complete</a>
                                as <strong>completed</strong>.
                            </p>

                            <div class="wm-project-activity-page__progress">

                                <div class="wm-project-activity-page__progress-label">

                                <span>
                                    Milestone progress
                                </span>

                                    <strong>
                                        100%
                                    </strong>

                                </div>

                                <div class="wm-project-activity-page__progress-track">
                                    <span style="width: 100%;"></span>
                                </div>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="milestone">
                                    <i class="ph ph-flag"></i>
                                    View Milestone
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- Status --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="project"
                        data-member="michael"
                        data-date="yesterday"
                        data-time="11:20"
                        data-search="Michael Johnson changed project status active"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-project">
                            <i class="ph ph-arrows-clockwise"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Michael Johnson
                                    </strong>

                                    <span>
                                    changed project status
                                </span>

                                </div>

                                <time>
                                    11:20 AM
                                </time>

                            </div>

                            <p>
                                Project status changed from
                                <span class="wm-project-activity-page__status-text is-on-hold">
                                On Hold
                            </span>
                                to
                                <span class="wm-project-activity-page__status-text is-active">
                                Active
                            </span>.
                            </p>

                            <div class="wm-project-activity-page__activity-meta">

                            <span>
                                <i class="ph ph-kanban"></i>
                                Project
                            </span>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="project">
                                    <i class="ph ph-kanban"></i>
                                    View Project
                                </button>

                            </div>

                        </div>

                    </article>

                </div>

            </section>


            {{-- =====================================================
                September 22
            ====================================================== --}}
            <section
                class="wm-project-activity-page__group"
                data-activity-group
            >

                <div class="wm-project-activity-page__group-header">

                    <h2>September 22</h2>

                    <span>September 22, 2026</span>

                </div>


                <div class="wm-project-activity-page__timeline">


                    {{-- Task Created --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="task"
                        data-member="james"
                        data-date="older"
                        data-time="15:44"
                        data-search="James Miller created task Climate Model Validation"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-task">
                            <i class="ph ph-plus-circle"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        James Miller
                                    </strong>

                                    <span>
                                    created a task
                                </span>

                                </div>

                                <time>
                                    3:44 PM
                                </time>

                            </div>

                            <p>
                                Created
                                <a href="#">Climate Model Validation</a>
                                and assigned it to himself.
                            </p>

                            <div class="wm-project-activity-page__activity-meta">

                            <span>
                                <i class="ph ph-check-square"></i>
                                Task
                            </span>

                                <span>
                                <i class="ph ph-circle"></i>
                                Medium Priority
                            </span>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="task">
                                    <i class="ph ph-check-square"></i>
                                    View Task
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- Priority --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="task"
                        data-member="anna"
                        data-date="older"
                        data-time="13:18"
                        data-search="Anna Kim changed task priority high data analysis"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-priority">
                            <i class="ph ph-warning"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Anna Kim
                                    </strong>

                                    <span>
                                    changed task priority
                                </span>

                                </div>

                                <time>
                                    1:18 PM
                                </time>

                            </div>

                            <p>
                                Changed the priority of
                                <a href="#">Climate Data Analysis</a>
                                from Medium to High.
                            </p>

                            <div class="wm-project-activity-page__priority-change">

                            <span>
                                Medium
                            </span>

                                <i class="ph ph-arrow-right"></i>

                                <strong>
                                    High
                                </strong>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="task">
                                    <i class="ph ph-check-square"></i>
                                    View Task
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- Project Update --}}
                    <article
                        class="wm-project-activity-page__activity"
                        data-activity-item
                        data-type="project"
                        data-member="sarah"
                        data-date="older"
                        data-time="10:05"
                        data-search="Sarah Wilson updated project description research objectives"
                    >

                        <div class="wm-project-activity-page__activity-line"></div>

                        <div class="wm-project-activity-page__activity-icon is-project">
                            <i class="ph ph-pencil-simple"></i>
                        </div>

                        <div class="wm-project-activity-page__activity-body">

                            <div class="wm-project-activity-page__activity-top">

                                <div>

                                    <strong>
                                        Sarah Wilson
                                    </strong>

                                    <span>
                                    updated project details
                                </span>

                                </div>

                                <time>
                                    10:05 AM
                                </time>

                            </div>

                            <p>
                                Updated the project description and research objectives.
                            </p>

                            <div class="wm-project-activity-page__activity-meta">

                            <span>
                                <i class="ph ph-kanban"></i>
                                Project
                            </span>

                            </div>

                        </div>

                        <div class="wm-project-activity-page__activity-action">

                            <button
                                type="button"
                                data-activity-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-activity-page__action-menu"
                                data-activity-menu
                            >

                                <button data-activity-action="view">
                                    <i class="ph ph-eye"></i>
                                    View Activity
                                </button>

                                <button data-activity-action="project">
                                    <i class="ph ph-kanban"></i>
                                    View Project
                                </button>

                            </div>

                        </div>

                    </article>

                </div>

            </section>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}
        <div
            class="wm-project-activity-page__empty"
            data-empty-state
        >

            <div class="wm-project-activity-page__empty-icon">
                <i class="ph ph-activity"></i>
            </div>

            <h3>
                No activity found
            </h3>

            <p>
                Try changing your search or filters to find other project activity.
            </p>

            <button
                type="button"
                class="btn btn-light"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Footer
        ========================================================== --}}
        <div class="wm-project-activity-page__footer">

        <span>
            Showing <strong data-visible-count>9</strong> activities
        </span>

            <div class="wm-project-activity-page__pagination">

                <button
                    type="button"
                    disabled
                >
                    <i class="ph ph-caret-left"></i>
                </button>

                <button
                    type="button"
                    class="is-active"
                >
                    1
                </button>

                <button type="button">
                    2
                </button>

                <button type="button">
                    3
                </button>

                <button type="button">
                    <i class="ph ph-caret-right"></i>
                </button>

            </div>

        </div>

    </div>

@endsection


@push('script')
    <script>

        $(document).ready(function () {

            'use strict';


            // ---------------------------------------------------------
            // Elements
            // ---------------------------------------------------------

            const $search =
                $('#activitySearch');

            const $filterPanel =
                $('[data-filter-panel]');

            const $sortMenu =
                $('[data-sort-menu]');

            const $activeFilters =
                $('[data-active-filters]');

            const $emptyState =
                $('[data-empty-state]');


            // ---------------------------------------------------------
            // Labels
            // ---------------------------------------------------------

            const typeLabels = {

                task: 'Tasks',

                team: 'Team',

                project: 'Project',

                file: 'Files',

                comment: 'Comments',

                milestone: 'Milestones'

            };


            const memberLabels = {

                sarah: 'Sarah Wilson',

                michael: 'Michael Johnson',

                anna: 'Anna Kim',

                robert: 'Robert Brown',

                james: 'James Miller'

            };


            const dateLabels = {

                today: 'Today',

                yesterday: 'Yesterday',

                older: 'Older'

            };


            // ---------------------------------------------------------
            // Notice
            // ---------------------------------------------------------

            function showNotice(
                title,
                text,
                icon
            ) {

                if (
                    typeof Swal !== 'undefined'
                ) {

                    Swal.fire({

                        title: title,

                        text: text,

                        icon: icon || 'info',

                        confirmButtonColor: '#2563EB'

                    });

                    return;

                }

                alert(
                    title +
                    '\n\n' +
                    text
                );

            }


            // ---------------------------------------------------------
            // Filters
            // ---------------------------------------------------------

            function getFilters() {

                return {

                    type:
                        $('#activityTypeFilter').val(),

                    member:
                        $('#activityMemberFilter').val(),

                    date:
                        $('#activityDateFilter').val(),

                    search:
                        $.trim(
                            $search.val()
                        ).toLowerCase()

                };

            }


            function updateFilterCount() {

                const filters =
                    getFilters();

                let count = 0;


                if (filters.type) {
                    count++;
                }


                if (filters.member) {
                    count++;
                }


                if (filters.date) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);

            }


            function updateActiveFilters() {

                const filters =
                    getFilters();


                $activeFilters.empty();


                if (filters.search) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-activity-page__filter-chip"
                        data-remove-search
                    >

                        Search: "${$search.val()}"

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.type) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-activity-page__filter-chip"
                        data-remove-filter="type"
                    >

                        ${typeLabels[filters.type]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.member) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-activity-page__filter-chip"
                        data-remove-filter="member"
                    >

                        ${memberLabels[filters.member]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.date) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-activity-page__filter-chip"
                        data-remove-filter="date"
                    >

                        ${dateLabels[filters.date]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }

            }


            // ---------------------------------------------------------
            // Match Activity
            // ---------------------------------------------------------

            function matchesActivity(
                $item,
                filters
            ) {

                const type =
                    $item.data('type');

                const member =
                    $item.data('member');

                const date =
                    $item.data('date');

                const searchText =
                    (
                        $item.data('search') || ''
                    )
                        .toString()
                        .toLowerCase();


                if (
                    filters.type &&
                    type !== filters.type
                ) {

                    return false;

                }


                if (
                    filters.member &&
                    member !== filters.member
                ) {

                    return false;

                }


                if (
                    filters.date &&
                    date !== filters.date
                ) {

                    return false;

                }


                if (
                    filters.search &&
                    searchText.indexOf(
                        filters.search
                    ) === -1
                ) {

                    return false;

                }


                return true;

            }


            // ---------------------------------------------------------
            // Apply Filters
            // ---------------------------------------------------------

            function applyFilters() {

                const filters =
                    getFilters();

                let visibleCount = 0;


                $('[data-activity-item]')
                    .each(function () {

                        const $item =
                            $(this);


                        const visible =
                            matchesActivity(
                                $item,
                                filters
                            );


                        $item.toggleClass(
                            'is-hidden',
                            !visible
                        );


                        if (visible) {
                            visibleCount++;
                        }

                    });


                $('[data-activity-group]')
                    .each(function () {

                        const $group =
                            $(this);

                        const visibleItems =
                            $group.find(
                                '[data-activity-item]:not(.is-hidden)'
                            ).length;


                        $group.toggleClass(
                            'is-hidden',
                            visibleItems === 0
                        );

                    });


                $('[data-visible-count]')
                    .text(
                        visibleCount
                    );


                $emptyState.toggleClass(
                    'is-visible',
                    visibleCount === 0
                );


                updateFilterCount();

                updateActiveFilters();

            }


            // ---------------------------------------------------------
            // Search
            // ---------------------------------------------------------

            $search.on(
                'input',
                function () {

                    $('[data-search-clear]')
                        .toggleClass(
                            'is-visible',
                            $(this).val().length > 0
                        );


                    applyFilters();

                }
            );


            $(document).on(
                'click',
                '[data-search-clear]',
                function () {

                    $search
                        .val('')
                        .trigger('input');

                }
            );


            $(document).on(
                'click',
                '[data-remove-search]',
                function () {

                    $search
                        .val('')
                        .trigger('input');

                }
            );


            // ---------------------------------------------------------
            // Filter Toggle
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-filter-toggle]',
                function (event) {

                    event.stopPropagation();

                    $filterPanel
                        .toggleClass(
                            'is-open'
                        );

                }
            );


            // ---------------------------------------------------------
            // Filter Changes
            // ---------------------------------------------------------

            $(document).on(
                'change',
                '#activityTypeFilter, #activityMemberFilter, #activityDateFilter',
                function () {

                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Remove Filter
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data(
                            'remove-filter'
                        );


                    if (
                        filter === 'type'
                    ) {

                        $('#activityTypeFilter')
                            .val('');

                    }


                    if (
                        filter === 'member'
                    ) {

                        $('#activityMemberFilter')
                            .val('');

                    }


                    if (
                        filter === 'date'
                    ) {

                        $('#activityDateFilter')
                            .val('');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Clear Filters
            // ---------------------------------------------------------

            function clearFilters() {

                $('#activityTypeFilter')
                    .val('');

                $('#activityMemberFilter')
                    .val('');

                $('#activityDateFilter')
                    .val('');

                $search
                    .val('');

                $('[data-search-clear]')
                    .removeClass(
                        'is-visible'
                    );


                $('[data-summary-filter]')
                    .removeClass(
                        'is-active'
                    );

                $('[data-summary-filter="all"]')
                    .addClass(
                        'is-active'
                    );


                applyFilters();

            }


            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    clearFilters();

                }
            );


            // ---------------------------------------------------------
            // Summary Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-summary-filter]',
                function () {

                    const filter =
                        $(this).data(
                            'summary-filter'
                        );


                    $('[data-summary-filter]')
                        .removeClass(
                            'is-active'
                        );


                    $(this)
                        .addClass(
                            'is-active'
                        );


                    $('#activityTypeFilter')
                        .val('');


                    $('#activityMemberFilter')
                        .val('');

                    $('#activityDateFilter')
                        .val('');


                    if (
                        filter === 'task'
                    ) {

                        $('#activityTypeFilter')
                            .val('task');

                    }


                    if (
                        filter === 'team'
                    ) {

                        $('#activityTypeFilter')
                            .val('team');

                    }


                    if (
                        filter === 'project'
                    ) {

                        $('#activityTypeFilter')
                            .val('project');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Sort
            // ---------------------------------------------------------

            function sortActivities(
                direction
            ) {

                const $groups =
                    $('[data-activity-group]');


                $groups.each(function () {

                    const $group =
                        $(this);


                    const $timeline =
                        $group.find(
                            '.wm-project-activity-page__timeline'
                        );


                    const items =
                        $timeline
                            .find('[data-activity-item]')
                            .get();


                    items.sort(
                        function (a, b) {

                            const timeA =
                                String(
                                    $(a).data('time')
                                );

                            const timeB =
                                String(
                                    $(b).data('time')
                                );


                            const result =
                                timeA.localeCompare(
                                    timeB
                                );


                            return direction === 'newest'
                                ? -result
                                : result;

                        }
                    );


                    $.each(
                        items,
                        function (_, item) {

                            $timeline.append(item);

                        }
                    );

                });


                $sortMenu
                    .removeClass(
                        'is-open'
                    );

            }


            $(document).on(
                'click',
                '[data-sort-toggle]',
                function (event) {

                    event.stopPropagation();

                    $sortMenu
                        .toggleClass(
                            'is-open'
                        );

                }
            );


            $(document).on(
                'click',
                '[data-sort]',
                function () {

                    sortActivities(
                        $(this).data('sort')
                    );

                }
            );


            // ---------------------------------------------------------
            // Activity Action Menu
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-activity-menu-toggle]',
                function (event) {

                    event.stopPropagation();


                    const $menu =
                        $(this)
                            .siblings(
                                '[data-activity-menu]'
                            );


                    $('[data-activity-menu]')
                        .not($menu)
                        .removeClass(
                            'is-open'
                        );


                    $menu.toggleClass(
                        'is-open'
                    );

                }
            );


            // ---------------------------------------------------------
            // Activity Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-activity-action]',
                function () {

                    const action =
                        $(this).data(
                            'activity-action'
                        );


                    const $activity =
                        $(this).closest(
                            '[data-activity-item]'
                        );


                    const member =
                        $activity.find(
                            '.wm-project-activity-page__activity-top strong'
                        ).first().text().trim();


                    $('[data-activity-menu]')
                        .removeClass(
                            'is-open'
                        );


                    if (
                        action === 'view'
                    ) {

                        showNotice(
                            'Activity Details',
                            `Viewing the activity created by ${member}.`
                        );

                        return;

                    }


                    if (
                        action === 'task'
                    ) {

                        showNotice(
                            'Task',
                            'Opening the related project task.'
                        );

                        return;

                    }


                    if (
                        action === 'comment'
                    ) {

                        showNotice(
                            'Comment',
                            'Opening the related comment.'
                        );

                        return;

                    }


                    if (
                        action === 'file'
                    ) {

                        showNotice(
                            'File',
                            'Opening the uploaded file.'
                        );

                        return;

                    }


                    if (
                        action === 'milestone'
                    ) {

                        showNotice(
                            'Milestone',
                            'Opening the related milestone.'
                        );

                        return;

                    }


                    if (
                        action === 'project'
                    ) {

                        showNotice(
                            'Project',
                            'Opening the project overview.'
                        );

                        return;

                    }


                    if (
                        action === 'profile'
                    ) {

                        showNotice(
                            'Profile',
                            `Opening ${member}'s profile.`
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // File Preview
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-file-action="preview"]',
                function () {

                    showNotice(
                        'File Preview',
                        'The file preview is ready to connect.'
                    );

                }
            );


            // ---------------------------------------------------------
            // Header Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-header-action]',
                function () {

                    const action =
                        $(this).data(
                            'header-action'
                        );


                    if (
                        action === 'export'
                    ) {

                        showNotice(
                            'Export Activity',
                            'The activity export is ready to connect.'
                        );

                        return;

                    }


                    if (
                        action === 'mark-read'
                    ) {

                        showNotice(
                            'Activity Updated',
                            'All project activity has been marked as read.',
                            'success'
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // Outside Click
            // ---------------------------------------------------------

            $(document).on(
                'click',
                function () {

                    $filterPanel
                        .removeClass(
                            'is-open'
                        );


                    $sortMenu
                        .removeClass(
                            'is-open'
                        );


                    $('[data-activity-menu]')
                        .removeClass(
                            'is-open'
                        );

                }
            );


            $filterPanel.on(
                'click',
                function (event) {

                    event.stopPropagation();

                }
            );


            $sortMenu.on(
                'click',
                function (event) {

                    event.stopPropagation();

                }
            );


            $(document).on(
                'click',
                '[data-activity-menu]',
                function (event) {

                    event.stopPropagation();

                }
            );


            // ---------------------------------------------------------
            // Escape
            // ---------------------------------------------------------

            $(document).on(
                'keydown',
                function (event) {

                    if (
                        event.key === 'Escape'
                    ) {

                        $filterPanel
                            .removeClass(
                                'is-open'
                            );


                        $sortMenu
                            .removeClass(
                                'is-open'
                            );


                        $('[data-activity-menu]')
                            .removeClass(
                                'is-open'
                            );

                    }

                }
            );


            // ---------------------------------------------------------
            // Initial
            // ---------------------------------------------------------

            applyFilters();

        });

    </script>
@endpush
