@extends('layout.app')

@section('main')

    <div class="wm-project-milestones-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-milestones-page__header">

            <div class="wm-project-milestones-page__header-left">

                <nav class="wm-project-milestones-page__breadcrumb" aria-label="Breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Milestones</span>

                </nav>

                <div class="wm-project-milestones-page__title-row">

                    <div class="wm-project-milestones-page__title-icon">
                        <i class="ph ph-flag"></i>
                    </div>

                    <div>
                        <h1 class="wm-project-milestones-page__title">
                            Project Milestones
                        </h1>

                        <p class="wm-project-milestones-page__subtitle">
                            Track important goals, deliverables, and project checkpoints.
                        </p>
                    </div>

                </div>

            </div>

            <div class="wm-project-milestones-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light wm-project-milestones-page__header-button"
                    data-milestone-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="btn btn-primary wm-project-milestones-page__header-button"
                    data-milestone-header-action="create"
                >
                    <i class="ph ph-plus"></i>
                    Add Milestone
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-milestones-page__navigation">

            <nav class="wm-project-milestones-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item is-active"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-milestones-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-milestones-page__summary">

            <button
                type="button"
                class="wm-project-milestones-page__summary-card is-active"
                data-summary-filter="all"
            >
                <span class="wm-project-milestones-page__summary-icon wm-project-milestones-page__summary-icon--blue">
                    <i class="ph ph-flag"></i>
                </span>

                <span class="wm-project-milestones-page__summary-content">
                    <span>Total Milestones</span>
                    <strong>8</strong>
                    <small>All project milestones</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-milestones-page__summary-card"
                data-summary-filter="completed"
            >
                <span class="wm-project-milestones-page__summary-icon wm-project-milestones-page__summary-icon--green">
                    <i class="ph ph-check-circle"></i>
                </span>

                <span class="wm-project-milestones-page__summary-content">
                    <span>Completed</span>
                    <strong>5</strong>
                    <small>Successfully delivered</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-milestones-page__summary-card"
                data-summary-filter="progress"
            >
                <span class="wm-project-milestones-page__summary-icon wm-project-milestones-page__summary-icon--blue">
                    <i class="ph ph-spinner"></i>
                </span>

                <span class="wm-project-milestones-page__summary-content">
                    <span>In Progress</span>
                    <strong>1</strong>
                    <small>Currently active</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-milestones-page__summary-card"
                data-summary-filter="upcoming"
            >
                <span class="wm-project-milestones-page__summary-icon wm-project-milestones-page__summary-icon--purple">
                    <i class="ph ph-calendar-blank"></i>
                </span>

                <span class="wm-project-milestones-page__summary-content">
                    <span>Upcoming</span>
                    <strong>2</strong>
                    <small>Scheduled milestones</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-milestones-page__summary-card"
                data-summary-filter="overdue"
            >
                <span class="wm-project-milestones-page__summary-icon wm-project-milestones-page__summary-icon--red">
                    <i class="ph ph-warning-circle"></i>
                </span>

                <span class="wm-project-milestones-page__summary-content">
                    <span>Overdue</span>
                    <strong>0</strong>
                    <small>Need attention</small>
                </span>
            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-milestones-page__toolbar">

            <div class="wm-project-milestones-page__toolbar-left">

                <div class="wm-project-milestones-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="milestoneSearch"
                        placeholder="Search milestones..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-milestones-page__search-clear"
                        data-search-clear
                        aria-label="Clear search"
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>

                <button
                    type="button"
                    class="wm-project-milestones-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span class="wm-project-milestones-page__filter-count" data-filter-count>0</span>
                </button>

                <button
                    type="button"
                    class="wm-project-milestones-page__toolbar-button"
                    data-sort-toggle
                >
                    <i class="ph ph-sort-ascending"></i>
                    Sort
                </button>

            </div>


            <div class="wm-project-milestones-page__toolbar-right">

                <div class="wm-project-milestones-page__sort-menu" data-sort-menu>

                    <button type="button" data-sort-value="newest">
                        <i class="ph ph-sort-descending"></i>
                        Newest first
                    </button>

                    <button type="button" data-sort-value="oldest">
                        <i class="ph ph-sort-ascending"></i>
                        Oldest first
                    </button>

                    <button type="button" data-sort-value="due">
                        <i class="ph ph-calendar-blank"></i>
                        Due date
                    </button>

                    <button type="button" data-sort-value="status">
                        <i class="ph ph-chart-bar"></i>
                        Status
                    </button>

                </div>

                <div class="wm-project-milestones-page__view-switcher">

                    <button
                        type="button"
                        class="is-active"
                        data-view="list"
                        aria-label="List view"
                    >
                        <i class="ph ph-list"></i>
                    </button>

                    <button
                        type="button"
                        data-view="timeline"
                        aria-label="Timeline view"
                    >
                        <i class="ph ph-chart-line"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div class="wm-project-milestones-page__filter-panel" data-filter-panel>

            <div class="wm-project-milestones-page__filter-field">

                <label for="milestoneStatusFilter">
                    Status
                </label>

                <select id="milestoneStatusFilter">
                    <option value="">All Statuses</option>
                    <option value="completed">Completed</option>
                    <option value="progress">In Progress</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="overdue">Overdue</option>
                </select>

            </div>


            <div class="wm-project-milestones-page__filter-field">

                <label for="milestoneOwnerFilter">
                    Owner
                </label>

                <select id="milestoneOwnerFilter">
                    <option value="">All Owners</option>
                    <option value="sarah">Dr. Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>
                </select>

            </div>


            <div class="wm-project-milestones-page__filter-field">

                <label for="milestoneDateFilter">
                    Due Date
                </label>

                <select id="milestoneDateFilter">
                    <option value="">Any Date</option>
                    <option value="this-month">This Month</option>
                    <option value="next-month">Next Month</option>
                    <option value="later">Later</option>
                    <option value="overdue">Overdue</option>
                </select>

            </div>


            <button
                type="button"
                class="wm-project-milestones-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-milestones-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            List View
        ========================================================== --}}
        <div
            class="wm-project-milestones-page__list-view"
            data-list-view
        >

            <div class="wm-project-milestones-page__table-card">

                <div class="wm-project-milestones-page__table-wrapper">

                    <table class="wm-project-milestones-page__table">

                        <thead>

                        <tr>

                            <th>Milestone</th>
                            <th>Status</th>
                            <th>Progress</th>
                            <th>Owner</th>
                            <th>Due Date</th>
                            <th>Tasks</th>
                            <th></th>

                        </tr>

                        </thead>

                        <tbody data-milestone-list>


                        {{-- Milestone 1 --}}
                        <tr
                            data-milestone-row
                            data-milestone-status="completed"
                            data-milestone-owner="sarah"
                            data-milestone-date="later"
                            data-milestone-created="2026-09-02"
                        >

                            <td>

                                <div class="wm-project-milestones-page__milestone-cell">

                                    <span class="wm-project-milestones-page__milestone-icon wm-project-milestones-page__milestone-icon--green">
                                        <i class="ph ph-check"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.overview', 'climate-research') }}">
                                            Research Framework
                                        </a>

                                        <span>
                                            Project methodology and research framework
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__status wm-project-milestones-page__status--completed">
                                    <span></span>
                                    Completed
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__progress-cell">

                                    <div class="wm-project-milestones-page__progress-top">
                                        <span>100%</span>
                                    </div>

                                    <div class="wm-project-milestones-page__progress-track">
                                        <span style="width: 100%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__owner">

                                    <span class="wm-project-milestones-page__avatar">
                                        SW
                                    </span>

                                    <span>
                                        Dr. Sarah Wilson
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__date wm-project-milestones-page__date--completed">
                                    <i class="ph ph-check"></i>
                                    Sep 02, 2026
                                </span>

                            </td>

                            <td>
                                <span class="wm-project-milestones-page__task-count">
                                    6 / 6
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-milestones-page__row-actions">

                                    <button
                                        type="button"
                                        data-milestone-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-milestones-page__action-dropdown">

                                        <button data-milestone-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-milestone-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-milestone-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-milestone-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Milestone 2 --}}
                        <tr
                            data-milestone-row
                            data-milestone-status="completed"
                            data-milestone-owner="michael"
                            data-milestone-date="later"
                            data-milestone-created="2026-09-15"
                        >

                            <td>

                                <div class="wm-project-milestones-page__milestone-cell">

                                    <span class="wm-project-milestones-page__milestone-icon wm-project-milestones-page__milestone-icon--green">
                                        <i class="ph ph-check"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.overview', 'climate-research') }}">
                                            Data Collection
                                        </a>

                                        <span>
                                            Field data collection and validation
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__status wm-project-milestones-page__status--completed">
                                    <span></span>
                                    Completed
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__progress-cell">

                                    <div class="wm-project-milestones-page__progress-top">
                                        <span>100%</span>
                                    </div>

                                    <div class="wm-project-milestones-page__progress-track">
                                        <span style="width: 100%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__owner">

                                    <span class="wm-project-milestones-page__avatar wm-project-milestones-page__avatar--green">
                                        MJ
                                    </span>

                                    <span>
                                        Michael Johnson
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__date wm-project-milestones-page__date--completed">
                                    <i class="ph ph-check"></i>
                                    Sep 15, 2026
                                </span>

                            </td>

                            <td>
                                <span class="wm-project-milestones-page__task-count">
                                    8 / 8
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-milestones-page__row-actions">

                                    <button type="button" data-milestone-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-milestones-page__action-dropdown">

                                        <button data-milestone-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-milestone-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-milestone-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-milestone-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Milestone 3 --}}
                        <tr
                            data-milestone-row
                            data-milestone-status="progress"
                            data-milestone-owner="anna"
                            data-milestone-date="this-month"
                            data-milestone-created="2026-09-20"
                        >

                            <td>

                                <div class="wm-project-milestones-page__milestone-cell">

                                    <span class="wm-project-milestones-page__milestone-icon wm-project-milestones-page__milestone-icon--blue">
                                        <i class="ph ph-chart-line-up"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.overview', 'climate-research') }}">
                                            Data Analysis
                                        </a>

                                        <span>
                                            Analysis of coastal vulnerability datasets
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__status wm-project-milestones-page__status--progress">
                                    <span></span>
                                    In Progress
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__progress-cell">

                                    <div class="wm-project-milestones-page__progress-top">
                                        <span>68%</span>
                                    </div>

                                    <div class="wm-project-milestones-page__progress-track">
                                        <span style="width: 68%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__owner">

                                    <span class="wm-project-milestones-page__avatar wm-project-milestones-page__avatar--purple">
                                        AK
                                    </span>

                                    <span>
                                        Anna Kim
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__date">
                                    <i class="ph ph-calendar-blank"></i>
                                    Oct 12, 2026
                                </span>

                            </td>

                            <td>
                                <span class="wm-project-milestones-page__task-count">
                                    11 / 16
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-milestones-page__row-actions">

                                    <button type="button" data-milestone-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-milestones-page__action-dropdown">

                                        <button data-milestone-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-milestone-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-milestone-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-milestone-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Milestone 4 --}}
                        <tr
                            data-milestone-row
                            data-milestone-status="upcoming"
                            data-milestone-owner="sarah"
                            data-milestone-date="next-month"
                            data-milestone-created="2026-09-21"
                        >

                            <td>

                                <div class="wm-project-milestones-page__milestone-cell">

                                    <span class="wm-project-milestones-page__milestone-icon wm-project-milestones-page__milestone-icon--purple">
                                        <i class="ph ph-presentation-chart"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.overview', 'climate-research') }}">
                                            Stakeholder Review
                                        </a>

                                        <span>
                                            Review findings with research stakeholders
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__status wm-project-milestones-page__status--upcoming">
                                    <span></span>
                                    Upcoming
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__progress-cell">

                                    <div class="wm-project-milestones-page__progress-top">
                                        <span>25%</span>
                                    </div>

                                    <div class="wm-project-milestones-page__progress-track">
                                        <span style="width: 25%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__owner">

                                    <span class="wm-project-milestones-page__avatar">
                                        SW
                                    </span>

                                    <span>
                                        Dr. Sarah Wilson
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__date">
                                    <i class="ph ph-calendar-blank"></i>
                                    Oct 26, 2026
                                </span>

                            </td>

                            <td>
                                <span class="wm-project-milestones-page__task-count">
                                    2 / 8
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-milestones-page__row-actions">

                                    <button type="button" data-milestone-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-milestones-page__action-dropdown">

                                        <button data-milestone-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-milestone-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-milestone-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-milestone-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Milestone 5 --}}
                        <tr
                            data-milestone-row
                            data-milestone-status="upcoming"
                            data-milestone-owner="robert"
                            data-milestone-date="next-month"
                            data-milestone-created="2026-09-22"
                        >

                            <td>

                                <div class="wm-project-milestones-page__milestone-cell">

                                    <span class="wm-project-milestones-page__milestone-icon wm-project-milestones-page__milestone-icon--orange">
                                        <i class="ph ph-file-text"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.overview', 'climate-research') }}">
                                            Final Report
                                        </a>

                                        <span>
                                            Final research report and recommendations
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__status wm-project-milestones-page__status--upcoming">
                                    <span></span>
                                    Upcoming
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__progress-cell">

                                    <div class="wm-project-milestones-page__progress-top">
                                        <span>10%</span>
                                    </div>

                                    <div class="wm-project-milestones-page__progress-track">
                                        <span style="width: 10%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-milestones-page__owner">

                                    <span class="wm-project-milestones-page__avatar wm-project-milestones-page__avatar--orange">
                                        RB
                                    </span>

                                    <span>
                                        Robert Brown
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-milestones-page__date">
                                    <i class="ph ph-calendar-blank"></i>
                                    Nov 28, 2026
                                </span>

                            </td>

                            <td>
                                <span class="wm-project-milestones-page__task-count">
                                    1 / 10
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-milestones-page__row-actions">

                                    <button type="button" data-milestone-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-milestones-page__action-dropdown">

                                        <button data-milestone-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-milestone-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-milestone-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-milestone-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        </tbody>

                    </table>

                </div>


                {{-- Empty State --}}
                <div
                    class="wm-project-milestones-page__empty"
                    data-empty-state
                >

                    <div class="wm-project-milestones-page__empty-icon">
                        <i class="ph ph-flag"></i>
                    </div>

                    <h3>No milestones found</h3>

                    <p>
                        Try changing your search or filters to find matching milestones.
                    </p>

                    <button
                        type="button"
                        class="btn btn-light"
                        data-clear-filters
                    >
                        Clear Filters
                    </button>

                </div>


                {{-- Pagination --}}
                <div class="wm-project-milestones-page__pagination">

                    <span class="wm-project-milestones-page__pagination-info">
                        Showing <strong>1–5</strong> of <strong>8</strong> milestones
                    </span>

                    <div class="wm-project-milestones-page__pagination-controls">

                        <button
                            type="button"
                            disabled
                            aria-label="Previous page"
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

                        <button
                            type="button"
                            aria-label="Next page"
                        >
                            <i class="ph ph-caret-right"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Timeline View
        ========================================================== --}}
        <div
            class="wm-project-milestones-page__timeline-view"
            data-timeline-view
        >

            <div class="wm-project-milestones-page__timeline">

                <div class="wm-project-milestones-page__timeline-line"></div>


                <article
                    class="wm-project-milestones-page__timeline-item is-completed"
                    data-timeline-status="completed"
                >

                    <div class="wm-project-milestones-page__timeline-marker">
                        <i class="ph ph-check"></i>
                    </div>

                    <div class="wm-project-milestones-page__timeline-card">

                        <div class="wm-project-milestones-page__timeline-card-header">

                            <div>
                                <span class="wm-project-milestones-page__timeline-date">
                                    Sep 02, 2026
                                </span>

                                <h3>
                                    Research Framework
                                </h3>
                            </div>

                            <span class="wm-project-milestones-page__status wm-project-milestones-page__status--completed">
                                <span></span>
                                Completed
                            </span>

                        </div>

                        <p>
                            Project methodology, research questions, and overall framework
                            were finalized and approved.
                        </p>

                        <div class="wm-project-milestones-page__timeline-meta">

                            <span>
                                <i class="ph ph-user"></i>
                                Dr. Sarah Wilson
                            </span>

                            <span>
                                <i class="ph ph-check-square"></i>
                                6 / 6 tasks
                            </span>

                            <span>
                                <i class="ph ph-chart-line-up"></i>
                                100%
                            </span>

                        </div>

                    </div>

                </article>


                <article
                    class="wm-project-milestones-page__timeline-item is-completed"
                    data-timeline-status="completed"
                >

                    <div class="wm-project-milestones-page__timeline-marker">
                        <i class="ph ph-check"></i>
                    </div>

                    <div class="wm-project-milestones-page__timeline-card">

                        <div class="wm-project-milestones-page__timeline-card-header">

                            <div>
                                <span class="wm-project-milestones-page__timeline-date">
                                    Sep 15, 2026
                                </span>

                                <h3>
                                    Data Collection
                                </h3>
                            </div>

                            <span class="wm-project-milestones-page__status wm-project-milestones-page__status--completed">
                                <span></span>
                                Completed
                            </span>

                        </div>

                        <p>
                            Field data collection was completed across the selected
                            coastal communities.
                        </p>

                        <div class="wm-project-milestones-page__timeline-meta">

                            <span>
                                <i class="ph ph-user"></i>
                                Michael Johnson
                            </span>

                            <span>
                                <i class="ph ph-check-square"></i>
                                8 / 8 tasks
                            </span>

                            <span>
                                <i class="ph ph-chart-line-up"></i>
                                100%
                            </span>

                        </div>

                    </div>

                </article>


                <article
                    class="wm-project-milestones-page__timeline-item is-current"
                    data-timeline-status="progress"
                >

                    <div class="wm-project-milestones-page__timeline-marker">
                        <i class="ph ph-arrow-right"></i>
                    </div>

                    <div class="wm-project-milestones-page__timeline-card">

                        <div class="wm-project-milestones-page__timeline-card-header">

                            <div>
                                <span class="wm-project-milestones-page__timeline-date">
                                    Due Oct 12, 2026
                                </span>

                                <h3>
                                    Data Analysis
                                </h3>
                            </div>

                            <span class="wm-project-milestones-page__status wm-project-milestones-page__status--progress">
                                <span></span>
                                In Progress
                            </span>

                        </div>

                        <p>
                            Analyze collected datasets and identify the major
                            environmental risk patterns.
                        </p>

                        <div class="wm-project-milestones-page__timeline-progress">

                            <div>
                                <span>Progress</span>
                                <strong>68%</strong>
                            </div>

                            <div class="wm-project-milestones-page__progress-track">
                                <span style="width: 68%;"></span>
                            </div>

                        </div>

                        <div class="wm-project-milestones-page__timeline-meta">

                            <span>
                                <i class="ph ph-user"></i>
                                Anna Kim
                            </span>

                            <span>
                                <i class="ph ph-check-square"></i>
                                11 / 16 tasks
                            </span>

                        </div>

                    </div>

                </article>


                <article
                    class="wm-project-milestones-page__timeline-item"
                    data-timeline-status="upcoming"
                >

                    <div class="wm-project-milestones-page__timeline-marker">
                        <i class="ph ph-flag"></i>
                    </div>

                    <div class="wm-project-milestones-page__timeline-card">

                        <div class="wm-project-milestones-page__timeline-card-header">

                            <div>
                                <span class="wm-project-milestones-page__timeline-date">
                                    Due Oct 26, 2026
                                </span>

                                <h3>
                                    Stakeholder Review
                                </h3>
                            </div>

                            <span class="wm-project-milestones-page__status wm-project-milestones-page__status--upcoming">
                                <span></span>
                                Upcoming
                            </span>

                        </div>

                        <p>
                            Present preliminary findings and collect stakeholder
                            feedback before final recommendations.
                        </p>

                        <div class="wm-project-milestones-page__timeline-meta">

                            <span>
                                <i class="ph ph-user"></i>
                                Dr. Sarah Wilson
                            </span>

                            <span>
                                <i class="ph ph-check-square"></i>
                                2 / 8 tasks
                            </span>

                        </div>

                    </div>

                </article>


                <article
                    class="wm-project-milestones-page__timeline-item"
                    data-timeline-status="upcoming"
                >

                    <div class="wm-project-milestones-page__timeline-marker">
                        <i class="ph ph-flag"></i>
                    </div>

                    <div class="wm-project-milestones-page__timeline-card">

                        <div class="wm-project-milestones-page__timeline-card-header">

                            <div>
                                <span class="wm-project-milestones-page__timeline-date">
                                    Due Nov 28, 2026
                                </span>

                                <h3>
                                    Final Report
                                </h3>
                            </div>

                            <span class="wm-project-milestones-page__status wm-project-milestones-page__status--upcoming">
                                <span></span>
                                Upcoming
                            </span>

                        </div>

                        <p>
                            Complete the final research report, recommendations,
                            and project documentation.
                        </p>

                        <div class="wm-project-milestones-page__timeline-meta">

                            <span>
                                <i class="ph ph-user"></i>
                                Robert Brown
                            </span>

                            <span>
                                <i class="ph ph-check-square"></i>
                                1 / 10 tasks
                            </span>

                        </div>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Create Milestone Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-milestones-page__modal"
            id="createMilestoneModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Add Milestone
                            </h5>

                            <p>
                                Create an important project checkpoint or deliverable.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>

                    <div class="modal-body">

                        <form id="createMilestoneForm">

                            <div class="row g-3">

                                <div class="col-12">

                                    <label class="form-label">
                                        Milestone Name
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        name="milestone_name"
                                        placeholder="Enter milestone name"
                                        required
                                    >

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Description
                                    </label>

                                    <textarea
                                        class="form-control"
                                        name="description"
                                        rows="4"
                                        placeholder="Describe the milestone..."
                                    ></textarea>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Owner
                                    </label>

                                    <select
                                        class="form-select"
                                        name="owner"
                                    >
                                        <option value="">Select owner</option>
                                        <option value="sarah">Dr. Sarah Wilson</option>
                                        <option value="michael">Michael Johnson</option>
                                        <option value="anna">Anna Kim</option>
                                        <option value="robert">Robert Brown</option>
                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Due Date
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                        name="due_date"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select
                                        class="form-select"
                                        name="status"
                                    >
                                        <option value="upcoming" selected>
                                            Upcoming
                                        </option>
                                        <option value="progress">
                                            In Progress
                                        </option>
                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Target Progress
                                    </label>

                                    <div class="wm-project-milestones-page__range-field">

                                        <input
                                            type="range"
                                            name="progress"
                                            min="0"
                                            max="100"
                                            value="0"
                                            data-progress-range
                                        >

                                        <strong data-progress-value>
                                            0%
                                        </strong>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </button>

                        <button
                            type="button"
                            class="btn btn-primary"
                            data-create-milestone-submit
                        >
                            Add Milestone
                        </button>

                    </div>

                </div>

            </div>

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

            const $page = $('.wm-project-milestones-page');
            const $rows = $('[data-milestone-row]');
            const $search = $('#milestoneSearch');
            const $filterPanel = $('[data-filter-panel]');
            const $sortMenu = $('[data-sort-menu]');
            const $activeFilters = $('[data-active-filters]');
            const $emptyState = $('[data-empty-state]');

            let currentSort = 'newest';


            /*
            |--------------------------------------------------------------------------
            | Helpers
            |--------------------------------------------------------------------------
            */

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


            function getFilters() {

                return {
                    status: $('#milestoneStatusFilter').val(),
                    owner: $('#milestoneOwnerFilter').val(),
                    date: $('#milestoneDateFilter').val(),
                    search: $.trim($search.val()).toLowerCase()
                };

            }


            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;

                if (filters.status) count++;
                if (filters.owner) count++;
                if (filters.date) count++;

                $('[data-filter-count]').text(count);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                $activeFilters.empty();

                const labels = {
                    status: {
                        completed: 'Completed',
                        progress: 'In Progress',
                        upcoming: 'Upcoming',
                        overdue: 'Overdue'
                    },
                    owner: {
                        sarah: 'Dr. Sarah Wilson',
                        michael: 'Michael Johnson',
                        anna: 'Anna Kim',
                        robert: 'Robert Brown'
                    },
                    date: {
                        'this-month': 'This Month',
                        'next-month': 'Next Month',
                        later: 'Later',
                        overdue: 'Overdue'
                    }
                };

                $.each(['status', 'owner', 'date'], function (_, key) {

                    if (!filters[key]) {
                        return;
                    }

                    $activeFilters.append(`
                        <button
                            type="button"
                            class="wm-project-milestones-page__filter-chip"
                            data-remove-filter="${key}"
                        >
                            ${labels[key][filters[key]]}
                            <i class="ph ph-x"></i>
                        </button>
                    `);

                });

                if (filters.search) {

                    $activeFilters.prepend(`
                        <button
                            type="button"
                            class="wm-project-milestones-page__filter-chip"
                            data-remove-search
                        >
                            Search: "${$search.val()}"
                            <i class="ph ph-x"></i>
                        </button>
                    `);

                }

            }


            function matchesRow($row, filters) {

                const status = $row.data('milestone-status');
                const owner = $row.data('milestone-owner');
                const date = $row.data('milestone-date');
                const text = $row.text().toLowerCase();

                if (filters.status && status !== filters.status) {
                    return false;
                }

                if (filters.owner && owner !== filters.owner) {
                    return false;
                }

                if (filters.date && date !== filters.date) {
                    return false;
                }

                if (
                    filters.search &&
                    text.indexOf(filters.search) === -1
                ) {
                    return false;
                }

                return true;

            }


            function updateEmptyState(count) {

                $emptyState.toggleClass(
                    'is-visible',
                    count === 0
                );

                $('.wm-project-milestones-page__table')
                    .toggleClass(
                        'is-empty',
                        count === 0
                    );

            }


            function updatePagination(count) {

                $('.wm-project-milestones-page__pagination-info').html(
                    'Showing <strong>' +
                    (count > 0 ? '1–' + count : '0') +
                    '</strong> of <strong>8</strong> milestones'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Filtering
            |--------------------------------------------------------------------------
            */

            function applyFilters() {

                const filters = getFilters();

                let visibleCount = 0;

                $rows.each(function () {

                    const $row = $(this);

                    if (matchesRow($row, filters)) {

                        $row.removeClass('is-hidden');

                        visibleCount++;

                    } else {

                        $row.addClass('is-hidden');

                    }

                });

                updateFilterCount();
                updateActiveFilters();
                updateEmptyState(visibleCount);
                updatePagination(visibleCount);

            }


            /*
            |--------------------------------------------------------------------------
            | Sorting
            |--------------------------------------------------------------------------
            */

            function sortMilestones(sortValue) {

                currentSort = sortValue;

                const $tbody = $('[data-milestone-list]');
                const rows = $tbody.find('[data-milestone-row]').get();

                rows.sort(function (a, b) {

                    const $a = $(a);
                    const $b = $(b);

                    if (sortValue === 'status') {

                        const order = {
                            progress: 1,
                            overdue: 2,
                            upcoming: 3,
                            completed: 4
                        };

                        return (
                            order[$a.data('milestone-status')] || 99
                        ) - (
                            order[$b.data('milestone-status')] || 99
                        );

                    }

                    if (sortValue === 'due') {

                        const order = {
                            overdue: 1,
                            'this-month': 2,
                            'next-month': 3,
                            later: 4
                        };

                        return (
                            order[$a.data('milestone-date')] || 99
                        ) - (
                            order[$b.data('milestone-date')] || 99
                        );

                    }

                    const dateA = new Date(
                        $a.data('milestone-created')
                    );

                    const dateB = new Date(
                        $b.data('milestone-created')
                    );

                    return sortValue === 'oldest'
                        ? dateA - dateB
                        : dateB - dateA;

                });

                $.each(rows, function (_, row) {
                    $tbody.append(row);
                });

            }


            /*
            |--------------------------------------------------------------------------
            | View Switching
            |--------------------------------------------------------------------------
            */

            function switchView(view) {

                $('[data-view]')
                    .removeClass('is-active');

                $('[data-view="' + view + '"]')
                    .addClass('is-active');

                if (view === 'timeline') {

                    $('[data-list-view]')
                        .removeClass('is-visible');

                    $('[data-timeline-view]')
                        .addClass('is-visible');

                } else {

                    $('[data-timeline-view]')
                        .removeClass('is-visible');

                    $('[data-list-view]')
                        .addClass('is-visible');

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Create Modal
            |--------------------------------------------------------------------------
            */

            function openCreateModal() {

                const modalElement =
                    document.getElementById('createMilestoneModal');

                if (
                    modalElement &&
                    typeof bootstrap !== 'undefined'
                ) {

                    bootstrap.Modal
                        .getOrCreateInstance(modalElement)
                        .show();

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Initial
            |--------------------------------------------------------------------------
            */

            switchView('list');
            applyFilters();


            /*
            |--------------------------------------------------------------------------
            | Search
            |--------------------------------------------------------------------------
            */

            $search.on('input', function () {

                $('[data-search-clear]')
                    .toggleClass(
                        'is-visible',
                        $(this).val().length > 0
                    );

                applyFilters();

            });


            $(document).on(
                'click',
                '[data-search-clear]',
                function () {

                    $search.val('').trigger('input');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Filter Toggle
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-filter-toggle]',
                function (event) {

                    event.stopPropagation();

                    $sortMenu.removeClass('is-open');

                    $filterPanel.toggleClass('is-open');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Sort Toggle
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-sort-toggle]',
                function (event) {

                    event.stopPropagation();

                    $filterPanel.removeClass('is-open');

                    $sortMenu.toggleClass('is-open');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Filter Change
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'change',
                '#milestoneStatusFilter, #milestoneOwnerFilter, #milestoneDateFilter',
                function () {

                    applyFilters();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Summary Filters
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-summary-filter]',
                function () {

                    const filter =
                        $(this).data('summary-filter');

                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $(this).addClass('is-active');

                    $('#milestoneStatusFilter').val('');
                    $('#milestoneDateFilter').val('');

                    if (
                        filter === 'completed' ||
                        filter === 'progress' ||
                        filter === 'upcoming' ||
                        filter === 'overdue'
                    ) {

                        $('#milestoneStatusFilter')
                            .val(filter);

                    }

                    applyFilters();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Remove Filter
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data('remove-filter');

                    if (filter === 'status') {
                        $('#milestoneStatusFilter').val('');
                    }

                    if (filter === 'owner') {
                        $('#milestoneOwnerFilter').val('');
                    }

                    if (filter === 'date') {
                        $('#milestoneDateFilter').val('');
                    }

                    applyFilters();

                }
            );


            $(document).on(
                'click',
                '[data-remove-search]',
                function () {

                    $search.val('');

                    applyFilters();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Clear Filters
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    $('#milestoneStatusFilter').val('');
                    $('#milestoneOwnerFilter').val('');
                    $('#milestoneDateFilter').val('');

                    $search.val('');

                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $('[data-summary-filter="all"]')
                        .addClass('is-active');

                    $('[data-search-clear]')
                        .removeClass('is-visible');

                    applyFilters();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Sorting
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-sort-value]',
                function () {

                    const sortValue =
                        $(this).data('sort-value');

                    sortMilestones(sortValue);

                    $sortMenu.removeClass('is-open');

                    applyFilters();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | View Switcher
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-view]',
                function () {

                    switchView(
                        $(this).data('view')
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Milestone Menu
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-milestone-menu]',
                function (event) {

                    event.stopPropagation();

                    $('.wm-project-milestones-page__row-actions')
                        .removeClass('is-open');

                    $(this)
                        .closest(
                            '.wm-project-milestones-page__row-actions'
                        )
                        .toggleClass('is-open');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Milestone Actions
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-milestone-action]',
                function () {

                    const action =
                        $(this).data('milestone-action');

                    $('.wm-project-milestones-page__row-actions')
                        .removeClass('is-open');

                    if (action === 'delete') {

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Delete milestone?',
                                text: 'This action cannot be undone.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Delete Milestone',
                                cancelButtonText: 'Cancel',
                                confirmButtonColor: '#EF4444'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Milestone deleted',
                                        'The milestone has been removed.',
                                        'success'
                                    );

                                }

                            });

                        }

                        return;
                    }

                    const messages = {
                        view: 'The milestone detail view can be connected here.',
                        edit: 'The milestone editor can be opened here.',
                        duplicate: 'A duplicate milestone workflow can be opened here.'
                    };

                    showNotice(
                        action.charAt(0).toUpperCase() +
                        action.slice(1) +
                        ' Milestone',
                        messages[action] ||
                        'Milestone action ready for backend integration.'
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Header Actions
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-milestone-header-action]',
                function () {

                    const action =
                        $(this).data('milestone-header-action');

                    if (action === 'create') {

                        openCreateModal();

                        return;

                    }

                    if (action === 'export') {

                        showNotice(
                            'Export Milestones',
                            'The milestone export workflow can be connected to your backend.'
                        );

                    }

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Progress Range
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'input',
                '[data-progress-range]',
                function () {

                    $('[data-progress-value]')
                        .text($(this).val() + '%');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Create Milestone
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-create-milestone-submit]',
                function () {

                    const $form =
                        $('#createMilestoneForm');

                    if (!$form[0].checkValidity()) {

                        $form[0].reportValidity();

                        return;

                    }

                    const formData = {
                        name: $form
                            .find('[name="milestone_name"]')
                            .val(),

                        description: $form
                            .find('[name="description"]')
                            .val(),

                        owner: $form
                            .find('[name="owner"]')
                            .val(),

                        due_date: $form
                            .find('[name="due_date"]')
                            .val(),

                        status: $form
                            .find('[name="status"]')
                            .val(),

                        progress: $form
                            .find('[name="progress"]')
                            .val()
                    };

                    console.log(
                        'Create milestone:',
                        formData
                    );

                    const modalElement =
                        document.getElementById(
                            'createMilestoneModal'
                        );

                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(modalElement)
                            .hide();

                    }

                    $form[0].reset();

                    $('[data-progress-value]')
                        .text('0%');

                    showNotice(
                        'Milestone created',
                        'The milestone has been created successfully.',
                        'success'
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Outside Click
            |--------------------------------------------------------------------------
            */

            $(document).on('click', function () {

                $filterPanel.removeClass('is-open');
                $sortMenu.removeClass('is-open');

                $('.wm-project-milestones-page__row-actions')
                    .removeClass('is-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Escape
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        $filterPanel.removeClass('is-open');
                        $sortMenu.removeClass('is-open');

                        $('.wm-project-milestones-page__row-actions')
                            .removeClass('is-open');

                    }

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Prevent Dropdown Closing
            |--------------------------------------------------------------------------
            */

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

            $('.wm-project-milestones-page__row-actions').on(
                'click',
                function (event) {
                    event.stopPropagation();
                }
            );

        });
    </script>
@endpush
