@extends('layout.app')

@section('main')

    <div class="wm-project-workstreams-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-workstreams-page__header">

            <div class="wm-project-workstreams-page__header-left">

                <nav class="wm-project-workstreams-page__breadcrumb" aria-label="Breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Workstreams</span>

                </nav>

                <div class="wm-project-workstreams-page__title-row">

                    <div class="wm-project-workstreams-page__title-icon">
                        <i class="ph ph-tree-structure"></i>
                    </div>

                    <div>

                        <h1 class="wm-project-workstreams-page__title">
                            Project Workstreams
                        </h1>

                        <p class="wm-project-workstreams-page__subtitle">
                            Organize project work into focused streams with clear ownership and progress.
                        </p>

                    </div>

                </div>

            </div>


            <div class="wm-project-workstreams-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="btn btn-primary"
                    data-header-action="create"
                >
                    <i class="ph ph-plus"></i>
                    Create Workstream
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-workstreams-page__navigation">

            <nav class="wm-project-workstreams-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item is-active"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-workstreams-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-workstreams-page__summary">

            <button
                type="button"
                class="wm-project-workstreams-page__summary-card is-active"
                data-summary-filter="all"
            >

                <span class="wm-project-workstreams-page__summary-icon wm-project-workstreams-page__summary-icon--blue">
                    <i class="ph ph-tree-structure"></i>
                </span>

                <span class="wm-project-workstreams-page__summary-content">

                    <span>Total Workstreams</span>

                    <strong>6</strong>

                    <small>Active project streams</small>

                </span>

            </button>


            <button
                type="button"
                class="wm-project-workstreams-page__summary-card"
                data-summary-filter="active"
            >

                <span class="wm-project-workstreams-page__summary-icon wm-project-workstreams-page__summary-icon--green">
                    <i class="ph ph-play-circle"></i>
                </span>

                <span class="wm-project-workstreams-page__summary-content">

                    <span>Active</span>

                    <strong>4</strong>

                    <small>Currently in progress</small>

                </span>

            </button>


            <button
                type="button"
                class="wm-project-workstreams-page__summary-card"
                data-summary-filter="completed"
            >

                <span class="wm-project-workstreams-page__summary-icon wm-project-workstreams-page__summary-icon--purple">
                    <i class="ph ph-check-circle"></i>
                </span>

                <span class="wm-project-workstreams-page__summary-content">

                    <span>Completed</span>

                    <strong>1</strong>

                    <small>Finished streams</small>

                </span>

            </button>


            <button
                type="button"
                class="wm-project-workstreams-page__summary-card"
                data-summary-filter="at-risk"
            >

                <span class="wm-project-workstreams-page__summary-icon wm-project-workstreams-page__summary-icon--orange">
                    <i class="ph ph-warning"></i>
                </span>

                <span class="wm-project-workstreams-page__summary-content">

                    <span>At Risk</span>

                    <strong>1</strong>

                    <small>Needs attention</small>

                </span>

            </button>


            <button
                type="button"
                class="wm-project-workstreams-page__summary-card"
                data-summary-filter="tasks"
            >

                <span class="wm-project-workstreams-page__summary-icon wm-project-workstreams-page__summary-icon--cyan">
                    <i class="ph ph-check-square"></i>
                </span>

                <span class="wm-project-workstreams-page__summary-content">

                    <span>Total Tasks</span>

                    <strong>36</strong>

                    <small>Across all streams</small>

                </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-workstreams-page__toolbar">

            <div class="wm-project-workstreams-page__toolbar-left">

                <div class="wm-project-workstreams-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="projectWorkstreamsSearch"
                        placeholder="Search workstreams..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-workstreams-page__search-clear"
                        data-search-clear
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>


                <button
                    type="button"
                    class="wm-project-workstreams-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-workstreams-page__toolbar-right">

                <div class="wm-project-workstreams-page__sort">

                    <button
                        type="button"
                        class="wm-project-workstreams-page__toolbar-button"
                        data-sort-toggle
                    >
                        <i class="ph ph-sort-ascending"></i>
                        Sort
                        <i class="ph ph-caret-down"></i>
                    </button>

                    <div
                        class="wm-project-workstreams-page__sort-menu"
                        data-sort-menu
                    >

                        <button
                            type="button"
                            data-sort="name"
                        >
                            <i class="ph ph-text-aa"></i>
                            Name
                        </button>

                        <button
                            type="button"
                            data-sort="progress"
                        >
                            <i class="ph ph-chart-line-up"></i>
                            Progress
                        </button>

                        <button
                            type="button"
                            data-sort="priority"
                        >
                            <i class="ph ph-flag"></i>
                            Priority
                        </button>

                        <button
                            type="button"
                            data-sort="tasks"
                        >
                            <i class="ph ph-check-square"></i>
                            Task Count
                        </button>

                    </div>

                </div>


                <div class="wm-project-workstreams-page__view-switcher">

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
                        data-view="grid"
                        aria-label="Grid view"
                    >
                        <i class="ph ph-squares-four"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div
            class="wm-project-workstreams-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-workstreams-page__filter-field">

                <label for="workstreamStatusFilter">
                    Status
                </label>

                <select id="workstreamStatusFilter">

                    <option value="">All Statuses</option>
                    <option value="active">Active</option>
                    <option value="completed">Completed</option>
                    <option value="at-risk">At Risk</option>
                    <option value="planned">Planned</option>

                </select>

            </div>


            <div class="wm-project-workstreams-page__filter-field">

                <label for="workstreamOwnerFilter">
                    Owner
                </label>

                <select id="workstreamOwnerFilter">

                    <option value="">All Owners</option>
                    <option value="sarah">Dr. Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>

                </select>

            </div>


            <div class="wm-project-workstreams-page__filter-field">

                <label for="workstreamPriorityFilter">
                    Priority
                </label>

                <select id="workstreamPriorityFilter">

                    <option value="">All Priorities</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-workstreams-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-workstreams-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            List View
        ========================================================== --}}
        <div
            class="wm-project-workstreams-page__list-view is-visible"
            data-list-view
        >

            <div class="wm-project-workstreams-page__table-card">

                <div class="wm-project-workstreams-page__table-wrap">

                    <table class="wm-project-workstreams-page__table">

                        <thead>

                        <tr>

                            <th>Workstream</th>

                            <th>Owner</th>

                            <th>Tasks</th>

                            <th>Progress</th>

                            <th>Priority</th>

                            <th>Status</th>

                            <th>Due Date</th>

                            <th></th>

                        </tr>

                        </thead>

                        <tbody data-workstream-list>


                        {{-- Research Planning --}}
                        <tr
                            data-workstream
                            data-name="Research Planning"
                            data-owner="sarah"
                            data-status="completed"
                            data-priority="high"
                            data-progress="100"
                            data-tasks="6"
                        >

                            <td>

                                <div class="wm-project-workstreams-page__workstream">

                                        <span class="wm-project-workstreams-page__workstream-icon is-blue">
                                            <i class="ph ph-notebook"></i>
                                        </span>

                                    <div class="wm-project-workstreams-page__workstream-info">

                                        <strong>
                                            Research Planning
                                        </strong>

                                        <span>
                                                Research design, methodology and planning
                                            </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__owner">

                                        <span class="wm-project-workstreams-page__avatar">
                                            SW
                                        </span>

                                    <span>
                                            Dr. Sarah Wilson
                                        </span>

                                </div>

                            </td>


                            <td>
                                <strong>6</strong>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__progress">

                                    <div class="wm-project-workstreams-page__progress-top">

                                        <span>100%</span>

                                    </div>

                                    <div class="wm-project-workstreams-page__progress-track">

                                            <span
                                                style="width: 100%;"
                                                class="is-complete"
                                            ></span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__priority is-high">
                                        High
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__status is-completed">
                                        <i class="ph ph-check-circle"></i>
                                        Completed
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__date">
                                        Sep 10, 2026
                                    </span>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                        aria-label="Workstream actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-workstreams-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-workstream-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Field Data Collection --}}
                        <tr
                            data-workstream
                            data-name="Field Data Collection"
                            data-owner="michael"
                            data-status="active"
                            data-priority="high"
                            data-progress="82"
                            data-tasks="8"
                        >

                            <td>

                                <div class="wm-project-workstreams-page__workstream">

                                        <span class="wm-project-workstreams-page__workstream-icon is-green">
                                            <i class="ph ph-map-pin"></i>
                                        </span>

                                    <div class="wm-project-workstreams-page__workstream-info">

                                        <strong>
                                            Field Data Collection
                                        </strong>

                                        <span>
                                                Coastal field observations and sample collection
                                            </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__owner">

                                        <span class="wm-project-workstreams-page__avatar is-green">
                                            MJ
                                        </span>

                                    <span>
                                            Michael Johnson
                                        </span>

                                </div>

                            </td>


                            <td>
                                <strong>8</strong>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__progress">

                                    <div class="wm-project-workstreams-page__progress-top">
                                        <span>82%</span>
                                    </div>

                                    <div class="wm-project-workstreams-page__progress-track">

                                            <span
                                                style="width: 82%;"
                                            ></span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__priority is-high">
                                        High
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__status is-active">
                                        <i class="ph ph-play-circle"></i>
                                        Active
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__date">
                                        Sep 28, 2026
                                    </span>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-workstreams-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-workstream-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Data Analysis --}}
                        <tr
                            data-workstream
                            data-name="Data Analysis"
                            data-owner="anna"
                            data-status="active"
                            data-priority="high"
                            data-progress="68"
                            data-tasks="7"
                        >

                            <td>

                                <div class="wm-project-workstreams-page__workstream">

                                        <span class="wm-project-workstreams-page__workstream-icon is-purple">
                                            <i class="ph ph-chart-line-up"></i>
                                        </span>

                                    <div class="wm-project-workstreams-page__workstream-info">

                                        <strong>
                                            Data Analysis
                                        </strong>

                                        <span>
                                                Statistical analysis and research modeling
                                            </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__owner">

                                        <span class="wm-project-workstreams-page__avatar is-purple">
                                            AK
                                        </span>

                                    <span>
                                            Anna Kim
                                        </span>

                                </div>

                            </td>


                            <td>
                                <strong>7</strong>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__progress">

                                    <div class="wm-project-workstreams-page__progress-top">
                                        <span>68%</span>
                                    </div>

                                    <div class="wm-project-workstreams-page__progress-track">

                                            <span
                                                style="width: 68%;"
                                            ></span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__priority is-high">
                                        High
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__status is-active">
                                        <i class="ph ph-play-circle"></i>
                                        Active
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__date">
                                        Oct 04, 2026
                                    </span>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-workstreams-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-workstream-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Stakeholder Engagement --}}
                        <tr
                            data-workstream
                            data-name="Stakeholder Engagement"
                            data-owner="sarah"
                            data-status="active"
                            data-priority="medium"
                            data-progress="55"
                            data-tasks="5"
                        >

                            <td>

                                <div class="wm-project-workstreams-page__workstream">

                                        <span class="wm-project-workstreams-page__workstream-icon is-cyan">
                                            <i class="ph ph-users-three"></i>
                                        </span>

                                    <div class="wm-project-workstreams-page__workstream-info">

                                        <strong>
                                            Stakeholder Engagement
                                        </strong>

                                        <span>
                                                Partner communication and stakeholder reviews
                                            </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__owner">

                                        <span class="wm-project-workstreams-page__avatar is-cyan">
                                            SW
                                        </span>

                                    <span>
                                            Dr. Sarah Wilson
                                        </span>

                                </div>

                            </td>


                            <td>
                                <strong>5</strong>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__progress">

                                    <div class="wm-project-workstreams-page__progress-top">
                                        <span>55%</span>
                                    </div>

                                    <div class="wm-project-workstreams-page__progress-track">

                                            <span
                                                style="width: 55%;"
                                            ></span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__priority is-medium">
                                        Medium
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__status is-active">
                                        <i class="ph ph-play-circle"></i>
                                        Active
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__date">
                                        Oct 12, 2026
                                    </span>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-workstreams-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-workstream-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Report & Documentation --}}
                        <tr
                            data-workstream
                            data-name="Report & Documentation"
                            data-owner="robert"
                            data-status="at-risk"
                            data-priority="medium"
                            data-progress="38"
                            data-tasks="6"
                        >

                            <td>

                                <div class="wm-project-workstreams-page__workstream">

                                        <span class="wm-project-workstreams-page__workstream-icon is-orange">
                                            <i class="ph ph-file-text"></i>
                                        </span>

                                    <div class="wm-project-workstreams-page__workstream-info">

                                        <strong>
                                            Report &amp; Documentation
                                        </strong>

                                        <span>
                                                Final reports, documentation and research outputs
                                            </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__owner">

                                        <span class="wm-project-workstreams-page__avatar is-orange">
                                            RB
                                        </span>

                                    <span>
                                            Robert Brown
                                        </span>

                                </div>

                            </td>


                            <td>
                                <strong>6</strong>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__progress">

                                    <div class="wm-project-workstreams-page__progress-top">
                                        <span>38%</span>
                                    </div>

                                    <div class="wm-project-workstreams-page__progress-track">

                                            <span
                                                style="width: 38%;"
                                                class="is-risk"
                                            ></span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__priority is-medium">
                                        Medium
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__status is-risk">
                                        <i class="ph ph-warning"></i>
                                        At Risk
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__date is-overdue">
                                        Sep 22, 2026
                                    </span>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-workstreams-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-workstream-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Knowledge Transfer --}}
                        <tr
                            data-workstream
                            data-name="Knowledge Transfer"
                            data-owner="michael"
                            data-status="planned"
                            data-priority="low"
                            data-progress="12"
                            data-tasks="4"
                        >

                            <td>

                                <div class="wm-project-workstreams-page__workstream">

                                        <span class="wm-project-workstreams-page__workstream-icon is-gray">
                                            <i class="ph ph-graduation-cap"></i>
                                        </span>

                                    <div class="wm-project-workstreams-page__workstream-info">

                                        <strong>
                                            Knowledge Transfer
                                        </strong>

                                        <span>
                                                Training, workshops and research knowledge sharing
                                            </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__owner">

                                        <span class="wm-project-workstreams-page__avatar is-gray">
                                            MJ
                                        </span>

                                    <span>
                                            Michael Johnson
                                        </span>

                                </div>

                            </td>


                            <td>
                                <strong>4</strong>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__progress">

                                    <div class="wm-project-workstreams-page__progress-top">
                                        <span>12%</span>
                                    </div>

                                    <div class="wm-project-workstreams-page__progress-track">

                                            <span
                                                style="width: 12%;"
                                            ></span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__priority is-low">
                                        Low
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__status is-planned">
                                        <i class="ph ph-clock"></i>
                                        Planned
                                    </span>
                            </td>


                            <td>
                                    <span class="wm-project-workstreams-page__date">
                                        Nov 05, 2026
                                    </span>
                            </td>


                            <td>

                                <div class="wm-project-workstreams-page__action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-workstreams-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-workstream-action="delete"
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

            </div>

        </div>


        {{-- =========================================================
            Grid View
        ========================================================== --}}
        <div
            class="wm-project-workstreams-page__grid-view"
            data-grid-view
        >

            <div class="wm-project-workstreams-page__grid">


                {{-- Card --}}
                <article
                    class="wm-project-workstreams-page__card"
                    data-grid-workstream
                    data-name="Research Planning"
                    data-owner="sarah"
                    data-status="completed"
                    data-priority="high"
                    data-progress="100"
                    data-tasks="6"
                >

                    <div class="wm-project-workstreams-page__card-top">

                        <span class="wm-project-workstreams-page__card-icon is-blue">
                            <i class="ph ph-notebook"></i>
                        </span>

                        <div class="wm-project-workstreams-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-workstreams-page__action-menu"
                                data-action-menu
                            >

                                <button data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-workstream-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-body">

                        <h3>Research Planning</h3>

                        <p>
                            Research design, methodology and planning.
                        </p>

                        <div class="wm-project-workstreams-page__card-progress">

                            <div>

                                <span>Progress</span>

                                <strong>100%</strong>

                            </div>

                            <div class="wm-project-workstreams-page__progress-track">
                                <span
                                    style="width: 100%;"
                                    class="is-complete"
                                ></span>
                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-meta">

                        <div>

                            <span>Owner</span>

                            <strong>
                                <i class="ph ph-user"></i>
                                Dr. Sarah Wilson
                            </strong>

                        </div>

                        <div>

                            <span>Tasks</span>

                            <strong>
                                <i class="ph ph-check-square"></i>
                                6
                            </strong>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-footer">

                        <span class="wm-project-workstreams-page__status is-completed">
                            <i class="ph ph-check-circle"></i>
                            Completed
                        </span>

                        <span class="wm-project-workstreams-page__priority is-high">
                            High
                        </span>

                    </div>

                </article>


                {{-- Card --}}
                <article
                    class="wm-project-workstreams-page__card"
                    data-grid-workstream
                    data-name="Field Data Collection"
                    data-owner="michael"
                    data-status="active"
                    data-priority="high"
                    data-progress="82"
                    data-tasks="8"
                >

                    <div class="wm-project-workstreams-page__card-top">

                        <span class="wm-project-workstreams-page__card-icon is-green">
                            <i class="ph ph-map-pin"></i>
                        </span>

                        <div class="wm-project-workstreams-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-workstreams-page__action-menu"
                                data-action-menu
                            >

                                <button data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-workstream-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-body">

                        <h3>Field Data Collection</h3>

                        <p>
                            Coastal field observations and sample collection.
                        </p>

                        <div class="wm-project-workstreams-page__card-progress">

                            <div>
                                <span>Progress</span>
                                <strong>82%</strong>
                            </div>

                            <div class="wm-project-workstreams-page__progress-track">
                                <span style="width: 82%;"></span>
                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-meta">

                        <div>
                            <span>Owner</span>

                            <strong>
                                <i class="ph ph-user"></i>
                                Michael Johnson
                            </strong>
                        </div>

                        <div>
                            <span>Tasks</span>

                            <strong>
                                <i class="ph ph-check-square"></i>
                                8
                            </strong>
                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-footer">

                        <span class="wm-project-workstreams-page__status is-active">
                            <i class="ph ph-play-circle"></i>
                            Active
                        </span>

                        <span class="wm-project-workstreams-page__priority is-high">
                            High
                        </span>

                    </div>

                </article>


                {{-- Card --}}
                <article
                    class="wm-project-workstreams-page__card"
                    data-grid-workstream
                    data-name="Data Analysis"
                    data-owner="anna"
                    data-status="active"
                    data-priority="high"
                    data-progress="68"
                    data-tasks="7"
                >

                    <div class="wm-project-workstreams-page__card-top">

                        <span class="wm-project-workstreams-page__card-icon is-purple">
                            <i class="ph ph-chart-line-up"></i>
                        </span>

                        <div class="wm-project-workstreams-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-workstreams-page__action-menu"
                                data-action-menu
                            >

                                <button data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-workstream-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-body">

                        <h3>Data Analysis</h3>

                        <p>
                            Statistical analysis and research modeling.
                        </p>

                        <div class="wm-project-workstreams-page__card-progress">

                            <div>
                                <span>Progress</span>
                                <strong>68%</strong>
                            </div>

                            <div class="wm-project-workstreams-page__progress-track">
                                <span style="width: 68%;"></span>
                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-meta">

                        <div>
                            <span>Owner</span>

                            <strong>
                                <i class="ph ph-user"></i>
                                Anna Kim
                            </strong>
                        </div>

                        <div>
                            <span>Tasks</span>

                            <strong>
                                <i class="ph ph-check-square"></i>
                                7
                            </strong>
                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-footer">

                        <span class="wm-project-workstreams-page__status is-active">
                            <i class="ph ph-play-circle"></i>
                            Active
                        </span>

                        <span class="wm-project-workstreams-page__priority is-high">
                            High
                        </span>

                    </div>

                </article>


                {{-- Card --}}
                <article
                    class="wm-project-workstreams-page__card"
                    data-grid-workstream
                    data-name="Stakeholder Engagement"
                    data-owner="sarah"
                    data-status="active"
                    data-priority="medium"
                    data-progress="55"
                    data-tasks="5"
                >

                    <div class="wm-project-workstreams-page__card-top">

                        <span class="wm-project-workstreams-page__card-icon is-cyan">
                            <i class="ph ph-users-three"></i>
                        </span>

                        <div class="wm-project-workstreams-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-workstreams-page__action-menu"
                                data-action-menu
                            >

                                <button data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-workstream-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-body">

                        <h3>Stakeholder Engagement</h3>

                        <p>
                            Partner communication and stakeholder reviews.
                        </p>

                        <div class="wm-project-workstreams-page__card-progress">

                            <div>
                                <span>Progress</span>
                                <strong>55%</strong>
                            </div>

                            <div class="wm-project-workstreams-page__progress-track">
                                <span style="width: 55%;"></span>
                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-meta">

                        <div>
                            <span>Owner</span>

                            <strong>
                                <i class="ph ph-user"></i>
                                Dr. Sarah Wilson
                            </strong>
                        </div>

                        <div>
                            <span>Tasks</span>

                            <strong>
                                <i class="ph ph-check-square"></i>
                                5
                            </strong>
                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-footer">

                        <span class="wm-project-workstreams-page__status is-active">
                            <i class="ph ph-play-circle"></i>
                            Active
                        </span>

                        <span class="wm-project-workstreams-page__priority is-medium">
                            Medium
                        </span>

                    </div>

                </article>


                {{-- Card --}}
                <article
                    class="wm-project-workstreams-page__card"
                    data-grid-workstream
                    data-name="Report & Documentation"
                    data-owner="robert"
                    data-status="at-risk"
                    data-priority="medium"
                    data-progress="38"
                    data-tasks="6"
                >

                    <div class="wm-project-workstreams-page__card-top">

                        <span class="wm-project-workstreams-page__card-icon is-orange">
                            <i class="ph ph-file-text"></i>
                        </span>

                        <div class="wm-project-workstreams-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-workstreams-page__action-menu"
                                data-action-menu
                            >

                                <button data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-workstream-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-body">

                        <h3>Report &amp; Documentation</h3>

                        <p>
                            Final reports, documentation and research outputs.
                        </p>

                        <div class="wm-project-workstreams-page__card-progress">

                            <div>
                                <span>Progress</span>
                                <strong>38%</strong>
                            </div>

                            <div class="wm-project-workstreams-page__progress-track">
                                <span
                                    style="width: 38%;"
                                    class="is-risk"
                                ></span>
                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-meta">

                        <div>
                            <span>Owner</span>

                            <strong>
                                <i class="ph ph-user"></i>
                                Robert Brown
                            </strong>
                        </div>

                        <div>
                            <span>Tasks</span>

                            <strong>
                                <i class="ph ph-check-square"></i>
                                6
                            </strong>
                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-footer">

                        <span class="wm-project-workstreams-page__status is-risk">
                            <i class="ph ph-warning"></i>
                            At Risk
                        </span>

                        <span class="wm-project-workstreams-page__priority is-medium">
                            Medium
                        </span>

                    </div>

                </article>


                {{-- Card --}}
                <article
                    class="wm-project-workstreams-page__card"
                    data-grid-workstream
                    data-name="Knowledge Transfer"
                    data-owner="michael"
                    data-status="planned"
                    data-priority="low"
                    data-progress="12"
                    data-tasks="4"
                >

                    <div class="wm-project-workstreams-page__card-top">

                        <span class="wm-project-workstreams-page__card-icon is-gray">
                            <i class="ph ph-graduation-cap"></i>
                        </span>

                        <div class="wm-project-workstreams-page__card-menu">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-workstreams-page__action-menu"
                                data-action-menu
                            >

                                <button data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div></div>

                                <button
                                    class="is-danger"
                                    data-workstream-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-body">

                        <h3>Knowledge Transfer</h3>

                        <p>
                            Training, workshops and research knowledge sharing.
                        </p>

                        <div class="wm-project-workstreams-page__card-progress">

                            <div>
                                <span>Progress</span>
                                <strong>12%</strong>
                            </div>

                            <div class="wm-project-workstreams-page__progress-track">
                                <span style="width: 12%;"></span>
                            </div>

                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-meta">

                        <div>
                            <span>Owner</span>

                            <strong>
                                <i class="ph ph-user"></i>
                                Michael Johnson
                            </strong>
                        </div>

                        <div>
                            <span>Tasks</span>

                            <strong>
                                <i class="ph ph-check-square"></i>
                                4
                            </strong>
                        </div>

                    </div>


                    <div class="wm-project-workstreams-page__card-footer">

                        <span class="wm-project-workstreams-page__status is-planned">
                            <i class="ph ph-clock"></i>
                            Planned
                        </span>

                        <span class="wm-project-workstreams-page__priority is-low">
                            Low
                        </span>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}
        <div
            class="wm-project-workstreams-page__empty"
            data-empty-state
        >

            <div class="wm-project-workstreams-page__empty-icon">
                <i class="ph ph-tree-structure"></i>
            </div>

            <h3>
                No workstreams found
            </h3>

            <p>
                Try changing your search or filters, or create a new workstream.
            </p>

            <button
                type="button"
                class="btn btn-primary"
                data-header-action="create"
            >
                <i class="ph ph-plus"></i>
                Create Workstream
            </button>

        </div>


        {{-- =========================================================
            Pagination
        ========================================================== --}}
        <div class="wm-project-workstreams-page__footer">

            <span>
                Showing <strong data-visible-count>6</strong> workstreams
            </span>

            <div class="wm-project-workstreams-page__pagination">

                <button type="button" disabled>
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


        {{-- =========================================================
            Create Workstream Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-workstreams-page__modal"
            id="createWorkstreamModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Create Workstream
                            </h5>

                            <p>
                                Define a focused area of work for this project.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <form id="createWorkstreamForm">

                            <div class="row g-3">

                                <div class="col-md-8">

                                    <label class="form-label">
                                        Workstream Name
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="e.g. Data Analysis"
                                        required
                                    >

                                </div>


                                <div class="col-md-4">

                                    <label class="form-label">
                                        Priority
                                    </label>

                                    <select
                                        name="priority"
                                        class="form-select"
                                    >

                                        <option value="high">
                                            High
                                        </option>

                                        <option value="medium" selected>
                                            Medium
                                        </option>

                                        <option value="low">
                                            Low
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Owner
                                        <span>*</span>
                                    </label>

                                    <select
                                        name="owner"
                                        class="form-select"
                                        required
                                    >

                                        <option value="">
                                            Select owner
                                        </option>

                                        <option value="sarah">
                                            Dr. Sarah Wilson
                                        </option>

                                        <option value="michael">
                                            Michael Johnson
                                        </option>

                                        <option value="anna">
                                            Anna Kim
                                        </option>

                                        <option value="robert">
                                            Robert Brown
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select
                                        name="status"
                                        class="form-select"
                                    >

                                        <option value="planned" selected>
                                            Planned
                                        </option>

                                        <option value="active">
                                            Active
                                        </option>

                                        <option value="at-risk">
                                            At Risk
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Start Date
                                    </label>

                                    <input
                                        type="date"
                                        name="start_date"
                                        class="form-control"
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Due Date
                                    </label>

                                    <input
                                        type="date"
                                        name="due_date"
                                        class="form-control"
                                    >

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Description
                                    </label>

                                    <textarea
                                        name="description"
                                        rows="4"
                                        class="form-control"
                                        placeholder="Describe the scope and objectives of this workstream..."
                                    ></textarea>

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
                            data-save-workstream
                        >
                            <i class="ph ph-plus"></i>
                            Create Workstream
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


            // ---------------------------------------------------------
            // Elements
            // ---------------------------------------------------------

            const $page = $('.wm-project-workstreams-page');

            const $search = $('#projectWorkstreamsSearch');

            const $filterPanel = $('[data-filter-panel]');

            const $activeFilters = $('[data-active-filters]');

            const $sortMenu = $('[data-sort-menu]');

            const $emptyState = $('[data-empty-state]');


            // ---------------------------------------------------------
            // Labels
            // ---------------------------------------------------------

            const statusLabels = {
                active: 'Active',
                completed: 'Completed',
                'at-risk': 'At Risk',
                planned: 'Planned'
            };


            const ownerLabels = {
                sarah: 'Dr. Sarah Wilson',
                michael: 'Michael Johnson',
                anna: 'Anna Kim',
                robert: 'Robert Brown'
            };


            const priorityLabels = {
                high: 'High',
                medium: 'Medium',
                low: 'Low'
            };


            // ---------------------------------------------------------
            // Notice
            // ---------------------------------------------------------

            function showNotice(title, text, icon) {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: icon || 'info',
                        confirmButtonColor: '#2563EB'
                    });

                    return;
                }

                alert(title + '\n\n' + text);

            }


            // ---------------------------------------------------------
            // Modal
            // ---------------------------------------------------------

            function openCreateModal() {

                const element =
                    document.getElementById(
                        'createWorkstreamModal'
                    );

                if (
                    element &&
                    typeof bootstrap !== 'undefined'
                ) {

                    bootstrap.Modal
                        .getOrCreateInstance(element)
                        .show();

                }

            }


            // ---------------------------------------------------------
            // Filters
            // ---------------------------------------------------------

            function getFilters() {

                return {

                    status:
                        $('#workstreamStatusFilter').val(),

                    owner:
                        $('#workstreamOwnerFilter').val(),

                    priority:
                        $('#workstreamPriorityFilter').val(),

                    search:
                        $.trim(
                            $search.val()
                        ).toLowerCase()

                };

            }


            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;


                if (filters.status) {
                    count++;
                }

                if (filters.owner) {
                    count++;
                }

                if (filters.priority) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                $activeFilters.empty();


                if (filters.status) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-workstreams-page__filter-chip"
                        data-remove-filter="status"
                    >
                        ${statusLabels[filters.status]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.owner) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-workstreams-page__filter-chip"
                        data-remove-filter="owner"
                    >
                        ${ownerLabels[filters.owner]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.priority) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-workstreams-page__filter-chip"
                        data-remove-filter="priority"
                    >
                        ${priorityLabels[filters.priority]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.search) {

                    $activeFilters.prepend(`
                    <button
                        type="button"
                        class="wm-project-workstreams-page__filter-chip"
                        data-remove-search
                    >
                        Search: "${$search.val()}"
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }

            }


            // ---------------------------------------------------------
            // Matches
            // ---------------------------------------------------------

            function matchesWorkstream(
                $item,
                filters
            ) {

                const name =
                    (
                        $item.data('name') || ''
                    ).toString().toLowerCase();

                const owner =
                    $item.data('owner');

                const status =
                    $item.data('status');

                const priority =
                    $item.data('priority');


                if (
                    filters.status &&
                    status !== filters.status
                ) {
                    return false;
                }


                if (
                    filters.owner &&
                    owner !== filters.owner
                ) {
                    return false;
                }


                if (
                    filters.priority &&
                    priority !== filters.priority
                ) {
                    return false;
                }


                if (
                    filters.search &&
                    name.indexOf(filters.search) === -1
                ) {
                    return false;
                }


                return true;

            }


            // ---------------------------------------------------------
            // Apply Filters
            // ---------------------------------------------------------

            function applyFilters() {

                const filters = getFilters();

                let listCount = 0;

                let gridCount = 0;


                $('[data-workstream]').each(function () {

                    const $item = $(this);

                    const visible =
                        matchesWorkstream(
                            $item,
                            filters
                        );


                    $item.toggleClass(
                        'is-hidden',
                        !visible
                    );


                    if (visible) {
                        listCount++;
                    }

                });


                $('[data-grid-workstream]').each(function () {

                    const $item = $(this);

                    const visible =
                        matchesWorkstream(
                            $item,
                            filters
                        );


                    $item.toggleClass(
                        'is-hidden',
                        !visible
                    );


                    if (visible) {
                        gridCount++;
                    }

                });


                const visibleCount =
                    Math.max(
                        listCount,
                        gridCount
                    );


                $('[data-visible-count]')
                    .text(visibleCount);


                $emptyState.toggleClass(
                    'is-visible',
                    visibleCount === 0
                );


                updateFilterCount();

                updateActiveFilters();

            }


            // ---------------------------------------------------------
            // View Switching
            // ---------------------------------------------------------

            function switchView(view) {

                $('[data-view]')
                    .removeClass('is-active');

                $('[data-view="' + view + '"]')
                    .addClass('is-active');


                $('[data-list-view]')
                    .removeClass('is-visible');

                $('[data-grid-view]')
                    .removeClass('is-visible');


                if (view === 'list') {

                    $('[data-list-view]')
                        .addClass('is-visible');

                }


                if (view === 'grid') {

                    $('[data-grid-view]')
                        .addClass('is-visible');

                }

            }


            // ---------------------------------------------------------
            // Search
            // ---------------------------------------------------------

            $search.on(
                'input',
                function () {

                    const hasValue =
                        $(this).val().length > 0;


                    $('[data-search-clear]')
                        .toggleClass(
                            'is-visible',
                            hasValue
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


            // ---------------------------------------------------------
            // Filter Toggle
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-filter-toggle]',
                function (event) {

                    event.stopPropagation();

                    $filterPanel
                        .toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Filter Changes
            // ---------------------------------------------------------

            $(document).on(
                'change',
                '#workstreamStatusFilter, #workstreamOwnerFilter, #workstreamPriorityFilter',
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
                        $(this).data('remove-filter');


                    if (filter === 'status') {

                        $('#workstreamStatusFilter')
                            .val('');

                    }


                    if (filter === 'owner') {

                        $('#workstreamOwnerFilter')
                            .val('');

                    }


                    if (filter === 'priority') {

                        $('#workstreamPriorityFilter')
                            .val('');

                    }


                    applyFilters();

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
            // Clear Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    $('#workstreamStatusFilter')
                        .val('');

                    $('#workstreamOwnerFilter')
                        .val('');

                    $('#workstreamPriorityFilter')
                        .val('');

                    $search.val('');

                    $('[data-search-clear]')
                        .removeClass('is-visible');

                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $('[data-summary-filter="all"]')
                        .addClass('is-active');

                    applyFilters();

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
                        $(this).data('summary-filter');


                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $(this)
                        .addClass('is-active');


                    $('#workstreamStatusFilter')
                        .val('');

                    $('#workstreamPriorityFilter')
                        .val('');


                    if (filter === 'active') {

                        $('#workstreamStatusFilter')
                            .val('active');

                    }


                    if (filter === 'completed') {

                        $('#workstreamStatusFilter')
                            .val('completed');

                    }


                    if (filter === 'at-risk') {

                        $('#workstreamStatusFilter')
                            .val('at-risk');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // View Switch
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-view]',
                function () {

                    switchView(
                        $(this).data('view')
                    );

                }
            );


            // ---------------------------------------------------------
            // Sort Menu
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-sort-toggle]',
                function (event) {

                    event.stopPropagation();

                    $sortMenu.toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Sorting
            // ---------------------------------------------------------

            function sortItems(type) {

                const $list =
                    $('[data-workstream-list]');

                const $rows =
                    $list.find('[data-workstream]')
                        .get();


                $rows.sort(
                    function (a, b) {

                        const $a = $(a);

                        const $b = $(b);


                        if (type === 'name') {

                            return (
                                $a.data('name') || ''
                            ).localeCompare(
                                $b.data('name') || ''
                            );

                        }


                        if (type === 'progress') {

                            return (
                                Number(
                                    $b.data('progress')
                                ) -
                                Number(
                                    $a.data('progress')
                                )
                            );

                        }


                        if (type === 'tasks') {

                            return (
                                Number(
                                    $b.data('tasks')
                                ) -
                                Number(
                                    $a.data('tasks')
                                )
                            );

                        }


                        if (type === 'priority') {

                            const order = {
                                high: 1,
                                medium: 2,
                                low: 3
                            };


                            return (
                                    order[
                                        $a.data('priority')
                                        ] || 99
                                ) -
                                (
                                    order[
                                        $b.data('priority')
                                        ] || 99
                                );

                        }


                        return 0;

                    }
                );


                $.each(
                    $rows,
                    function (_, row) {

                        $list.append(row);

                    }
                );


                $sortMenu.removeClass('is-open');

            }


            $(document).on(
                'click',
                '[data-sort]',
                function () {

                    sortItems(
                        $(this).data('sort')
                    );

                }
            );


            // ---------------------------------------------------------
            // Action Menus
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-action-menu-toggle]',
                function (event) {

                    event.stopPropagation();


                    const $currentMenu =
                        $(this)
                            .siblings('[data-action-menu]');


                    $('[data-action-menu]')
                        .not($currentMenu)
                        .removeClass('is-open');


                    $currentMenu
                        .toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Workstream Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-workstream-action]',
                function () {

                    const action =
                        $(this).data('workstream-action');


                    $('[data-action-menu]')
                        .removeClass('is-open');


                    if (action === 'view') {

                        showNotice(
                            'View Workstream',
                            'The workstream detail page can be connected here.'
                        );

                        return;

                    }


                    if (action === 'edit') {

                        showNotice(
                            'Edit Workstream',
                            'The workstream editor can be connected here.'
                        );

                        return;

                    }


                    if (action === 'duplicate') {

                        showNotice(
                            'Workstream duplicated',
                            'A duplicate workstream can be created through the backend.',
                            'success'
                        );

                        return;

                    }


                    if (action === 'archive') {

                        showNotice(
                            'Archive Workstream',
                            'The archive action can be connected to an AJAX endpoint.'
                        );

                        return;

                    }


                    if (action === 'delete') {

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Delete workstream?',
                                text: 'This action cannot be undone.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#EF4444',
                                cancelButtonColor: '#6B7280',
                                confirmButtonText: 'Delete'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Workstream deleted',
                                        'The workstream has been removed from the project.',
                                        'success'
                                    );

                                }

                            });

                        }

                    }

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
                        $(this).data('header-action');


                    if (action === 'create') {

                        openCreateModal();

                        return;

                    }


                    if (action === 'export') {

                        showNotice(
                            'Export Workstreams',
                            'The export workflow can be connected to your backend.'
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // Save Workstream
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-save-workstream]',
                function () {

                    const $form =
                        $('#createWorkstreamForm');


                    if (!$form[0].checkValidity()) {

                        $form[0].reportValidity();

                        return;

                    }


                    const payload = {

                        name:
                            $form
                                .find('[name="name"]')
                                .val(),

                        priority:
                            $form
                                .find('[name="priority"]')
                                .val(),

                        owner:
                            $form
                                .find('[name="owner"]')
                                .val(),

                        status:
                            $form
                                .find('[name="status"]')
                                .val(),

                        start_date:
                            $form
                                .find('[name="start_date"]')
                                .val(),

                        due_date:
                            $form
                                .find('[name="due_date"]')
                                .val(),

                        description:
                            $form
                                .find('[name="description"]')
                                .val()

                    };


                    console.log(
                        'Create workstream:',
                        payload
                    );


                    const modalElement =
                        document.getElementById(
                            'createWorkstreamModal'
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


                    showNotice(
                        'Workstream created',
                        'The new workstream has been created successfully.',
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // Outside Click
            // ---------------------------------------------------------

            $(document).on(
                'click',
                function () {

                    $filterPanel
                        .removeClass('is-open');

                    $sortMenu
                        .removeClass('is-open');

                    $('[data-action-menu]')
                        .removeClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Stop Propagation
            // ---------------------------------------------------------

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
                '[data-action-menu]',
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

                    if (event.key === 'Escape') {

                        $filterPanel
                            .removeClass('is-open');

                        $sortMenu
                            .removeClass('is-open');

                        $('[data-action-menu]')
                            .removeClass('is-open');

                    }

                }
            );


            // ---------------------------------------------------------
            // Initial
            // ---------------------------------------------------------

            switchView('list');

            applyFilters();

        });

    </script>
@endpush
