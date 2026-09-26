@extends('layout.app')

@section('main')

    <div class="wm-project-timeline-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-timeline-page__header">

            <div class="wm-project-timeline-page__header-left">

                <nav class="wm-project-timeline-page__breadcrumb" aria-label="Breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Timeline</span>

                </nav>

                <div class="wm-project-timeline-page__title-row">

                    <div class="wm-project-timeline-page__title-icon">
                        <i class="ph ph-chart-line-up"></i>
                    </div>

                    <div>
                        <h1 class="wm-project-timeline-page__title">
                            Project Timeline
                        </h1>

                        <p class="wm-project-timeline-page__subtitle">
                            Visualize project phases, milestones, and important delivery dates.
                        </p>
                    </div>

                </div>

            </div>

            <div class="wm-project-timeline-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light wm-project-timeline-page__header-button"
                    data-timeline-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="btn btn-primary wm-project-timeline-page__header-button"
                    data-timeline-header-action="add"
                >
                    <i class="ph ph-plus"></i>
                    Add Milestone
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-timeline-page__navigation">

            <nav class="wm-project-timeline-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item is-active"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-timeline-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-timeline-page__summary">

            <button
                type="button"
                class="wm-project-timeline-page__summary-card is-active"
                data-summary-filter="all"
            >
                <span class="wm-project-timeline-page__summary-icon wm-project-timeline-page__summary-icon--blue">
                    <i class="ph ph-calendar-blank"></i>
                </span>

                <span class="wm-project-timeline-page__summary-content">
                    <span>Project Duration</span>
                    <strong>118 days</strong>
                    <small>Jul 04 – Oct 30, 2026</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-timeline-page__summary-card"
                data-summary-filter="completed"
            >
                <span class="wm-project-timeline-page__summary-icon wm-project-timeline-page__summary-icon--green">
                    <i class="ph ph-check-circle"></i>
                </span>

                <span class="wm-project-timeline-page__summary-content">
                    <span>Completed</span>
                    <strong>5</strong>
                    <small>Milestones delivered</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-timeline-page__summary-card"
                data-summary-filter="progress"
            >
                <span class="wm-project-timeline-page__summary-icon wm-project-timeline-page__summary-icon--cyan">
                    <i class="ph ph-spinner"></i>
                </span>

                <span class="wm-project-timeline-page__summary-content">
                    <span>In Progress</span>
                    <strong>1</strong>
                    <small>Active milestone</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-timeline-page__summary-card"
                data-summary-filter="upcoming"
            >
                <span class="wm-project-timeline-page__summary-icon wm-project-timeline-page__summary-icon--purple">
                    <i class="ph ph-flag"></i>
                </span>

                <span class="wm-project-timeline-page__summary-content">
                    <span>Upcoming</span>
                    <strong>2</strong>
                    <small>Scheduled milestones</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-timeline-page__summary-card"
                data-summary-filter="overdue"
            >
                <span class="wm-project-timeline-page__summary-icon wm-project-timeline-page__summary-icon--red">
                    <i class="ph ph-warning-circle"></i>
                </span>

                <span class="wm-project-timeline-page__summary-content">
                    <span>Overdue</span>
                    <strong>0</strong>
                    <small>Need attention</small>
                </span>
            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-timeline-page__toolbar">

            <div class="wm-project-timeline-page__toolbar-left">

                <div class="wm-project-timeline-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="timelineSearch"
                        placeholder="Search timeline..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-timeline-page__search-clear"
                        data-search-clear
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>


                <button
                    type="button"
                    class="wm-project-timeline-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>


                <button
                    type="button"
                    class="wm-project-timeline-page__toolbar-button"
                    data-sort-toggle
                >
                    <i class="ph ph-sort-ascending"></i>
                    Sort
                </button>

            </div>


            <div class="wm-project-timeline-page__toolbar-right">

                <div
                    class="wm-project-timeline-page__sort-menu"
                    data-sort-menu
                >

                    <button type="button" data-sort-value="newest">
                        <i class="ph ph-sort-descending"></i>
                        Newest first
                    </button>

                    <button type="button" data-sort-value="oldest">
                        <i class="ph ph-sort-ascending"></i>
                        Oldest first
                    </button>

                    <button type="button" data-sort-value="status">
                        <i class="ph ph-chart-bar"></i>
                        Status
                    </button>

                </div>


                <div class="wm-project-timeline-page__view-switcher">

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
        <div
            class="wm-project-timeline-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-timeline-page__filter-field">

                <label for="timelineStatusFilter">
                    Status
                </label>

                <select id="timelineStatusFilter">

                    <option value="">All Statuses</option>
                    <option value="completed">Completed</option>
                    <option value="progress">In Progress</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="overdue">Overdue</option>

                </select>

            </div>


            <div class="wm-project-timeline-page__filter-field">

                <label for="timelineOwnerFilter">
                    Owner
                </label>

                <select id="timelineOwnerFilter">

                    <option value="">All Owners</option>
                    <option value="sarah">Dr. Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>

                </select>

            </div>


            <div class="wm-project-timeline-page__filter-field">

                <label for="timelinePhaseFilter">
                    Phase
                </label>

                <select id="timelinePhaseFilter">

                    <option value="">All Phases</option>
                    <option value="planning">Planning</option>
                    <option value="research">Research</option>
                    <option value="analysis">Analysis</option>
                    <option value="reporting">Reporting</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-timeline-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-timeline-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            LIST VIEW
        ========================================================== --}}
        <div
            class="wm-project-timeline-page__list-view is-visible"
            data-list-view
        >

            <div class="wm-project-timeline-page__content-card">

                <div class="wm-project-timeline-page__table-wrapper">

                    <table class="wm-project-timeline-page__table">

                        <thead>

                        <tr>
                            <th>Timeline Item</th>
                            <th>Phase</th>
                            <th>Status</th>
                            <th>Owner</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Progress</th>
                            <th></th>
                        </tr>

                        </thead>

                        <tbody data-timeline-list>


                        {{-- Planning --}}
                        <tr
                            data-timeline-row
                            data-timeline-status="completed"
                            data-timeline-owner="sarah"
                            data-timeline-phase="planning"
                            data-timeline-created="2026-07-04"
                        >

                            <td>

                                <div class="wm-project-timeline-page__item-cell">

                                    <span class="wm-project-timeline-page__item-icon wm-project-timeline-page__item-icon--green">
                                        <i class="ph ph-check"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.milestones', 'climate-research') }}">
                                            Research Planning
                                        </a>

                                        <span>
                                            Project scope, methodology, and research framework
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__phase">
                                    Planning
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-timeline-page__status wm-project-timeline-page__status--completed">
                                    <span></span>
                                    Completed
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__owner">

                                    <span class="wm-project-timeline-page__avatar">
                                        SW
                                    </span>

                                    <span>Dr. Sarah Wilson</span>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Jul 04, 2026
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Aug 02, 2026
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-timeline-page__progress">

                                    <div>
                                        <span>100%</span>
                                    </div>

                                    <div class="wm-project-timeline-page__progress-track">
                                        <span style="width:100%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__row-actions">

                                    <button type="button" data-timeline-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-timeline-page__action-dropdown">

                                        <button data-timeline-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-timeline-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-timeline-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-timeline-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Research --}}
                        <tr
                            data-timeline-row
                            data-timeline-status="completed"
                            data-timeline-owner="michael"
                            data-timeline-phase="research"
                            data-timeline-created="2026-08-03"
                        >

                            <td>

                                <div class="wm-project-timeline-page__item-cell">

                                    <span class="wm-project-timeline-page__item-icon wm-project-timeline-page__item-icon--green">
                                        <i class="ph ph-check"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.milestones', 'climate-research') }}">
                                            Field Data Collection
                                        </a>

                                        <span>
                                            Collect and validate environmental field data
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__phase">
                                    Research
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-timeline-page__status wm-project-timeline-page__status--completed">
                                    <span></span>
                                    Completed
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__owner">

                                    <span class="wm-project-timeline-page__avatar wm-project-timeline-page__avatar--green">
                                        MJ
                                    </span>

                                    <span>Michael Johnson</span>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Aug 03, 2026
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Sep 15, 2026
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-timeline-page__progress">

                                    <div>
                                        <span>100%</span>
                                    </div>

                                    <div class="wm-project-timeline-page__progress-track">
                                        <span style="width:100%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__row-actions">

                                    <button type="button" data-timeline-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-timeline-page__action-dropdown">

                                        <button data-timeline-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-timeline-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-timeline-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-timeline-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Analysis --}}
                        <tr
                            data-timeline-row
                            data-timeline-status="progress"
                            data-timeline-owner="anna"
                            data-timeline-phase="analysis"
                            data-timeline-created="2026-09-16"
                        >

                            <td>

                                <div class="wm-project-timeline-page__item-cell">

                                    <span class="wm-project-timeline-page__item-icon wm-project-timeline-page__item-icon--blue">
                                        <i class="ph ph-chart-line-up"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.milestones', 'climate-research') }}">
                                            Data Analysis
                                        </a>

                                        <span>
                                            Analyze collected datasets and identify patterns
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__phase">
                                    Analysis
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-timeline-page__status wm-project-timeline-page__status--progress">
                                    <span></span>
                                    In Progress
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__owner">

                                    <span class="wm-project-timeline-page__avatar wm-project-timeline-page__avatar--purple">
                                        AK
                                    </span>

                                    <span>Anna Kim</span>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Sep 16, 2026
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Oct 12, 2026
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-timeline-page__progress">

                                    <div>
                                        <span>68%</span>
                                    </div>

                                    <div class="wm-project-timeline-page__progress-track">
                                        <span style="width:68%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__row-actions">

                                    <button type="button" data-timeline-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-timeline-page__action-dropdown">

                                        <button data-timeline-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-timeline-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-timeline-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-timeline-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Stakeholder --}}
                        <tr
                            data-timeline-row
                            data-timeline-status="upcoming"
                            data-timeline-owner="sarah"
                            data-timeline-phase="analysis"
                            data-timeline-created="2026-10-13"
                        >

                            <td>

                                <div class="wm-project-timeline-page__item-cell">

                                    <span class="wm-project-timeline-page__item-icon wm-project-timeline-page__item-icon--purple">
                                        <i class="ph ph-users-three"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.milestones', 'climate-research') }}">
                                            Stakeholder Review
                                        </a>

                                        <span>
                                            Present preliminary findings for stakeholder feedback
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__phase">
                                    Analysis
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-timeline-page__status wm-project-timeline-page__status--upcoming">
                                    <span></span>
                                    Upcoming
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__owner">

                                    <span class="wm-project-timeline-page__avatar">
                                        SW
                                    </span>

                                    <span>Dr. Sarah Wilson</span>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Oct 13, 2026
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Oct 26, 2026
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-timeline-page__progress">

                                    <div>
                                        <span>25%</span>
                                    </div>

                                    <div class="wm-project-timeline-page__progress-track">
                                        <span style="width:25%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__row-actions">

                                    <button type="button" data-timeline-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-timeline-page__action-dropdown">

                                        <button data-timeline-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-timeline-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-timeline-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-timeline-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Reporting --}}
                        <tr
                            data-timeline-row
                            data-timeline-status="upcoming"
                            data-timeline-owner="robert"
                            data-timeline-phase="reporting"
                            data-timeline-created="2026-10-27"
                        >

                            <td>

                                <div class="wm-project-timeline-page__item-cell">

                                    <span class="wm-project-timeline-page__item-icon wm-project-timeline-page__item-icon--orange">
                                        <i class="ph ph-file-text"></i>
                                    </span>

                                    <div>

                                        <a href="{{ route('projects.milestones', 'climate-research') }}">
                                            Final Report
                                        </a>

                                        <span>
                                            Final research report and recommendations
                                        </span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__phase">
                                    Reporting
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-timeline-page__status wm-project-timeline-page__status--upcoming">
                                    <span></span>
                                    Upcoming
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__owner">

                                    <span class="wm-project-timeline-page__avatar wm-project-timeline-page__avatar--orange">
                                        RB
                                    </span>

                                    <span>Robert Brown</span>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Oct 27, 2026
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-timeline-page__date">
                                    Nov 28, 2026
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-timeline-page__progress">

                                    <div>
                                        <span>10%</span>
                                    </div>

                                    <div class="wm-project-timeline-page__progress-track">
                                        <span style="width:10%;"></span>
                                    </div>

                                </div>

                            </td>

                            <td>

                                <div class="wm-project-timeline-page__row-actions">

                                    <button type="button" data-timeline-menu>
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-timeline-page__action-dropdown">

                                        <button data-timeline-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-timeline-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-timeline-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-timeline-action="delete"
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


                <div
                    class="wm-project-timeline-page__empty"
                    data-empty-state
                >

                    <div class="wm-project-timeline-page__empty-icon">
                        <i class="ph ph-chart-line"></i>
                    </div>

                    <h3>No timeline items found</h3>

                    <p>
                        Try changing your search or filters to find matching timeline items.
                    </p>

                    <button
                        type="button"
                        class="btn btn-light"
                        data-clear-filters
                    >
                        Clear Filters
                    </button>

                </div>


                <div class="wm-project-timeline-page__pagination">

                    <span>
                        Showing <strong>1–5</strong> of <strong>5</strong> items
                    </span>

                    <div class="wm-project-timeline-page__pagination-controls">

                        <button type="button" disabled>
                            <i class="ph ph-caret-left"></i>
                        </button>

                        <button
                            type="button"
                            class="is-active"
                        >
                            1
                        </button>

                        <button type="button" disabled>
                            <i class="ph ph-caret-right"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            GRID VIEW
        ========================================================== --}}
        <div
            class="wm-project-timeline-page__grid-view"
            data-grid-view
        >

            <div class="wm-project-timeline-page__grid">


                <article
                    class="wm-project-timeline-page__grid-card"
                    data-grid-item
                    data-grid-status="completed"
                    data-grid-owner="sarah"
                    data-grid-phase="planning"
                >

                    <div class="wm-project-timeline-page__grid-card-top">

                        <span class="wm-project-timeline-page__grid-icon wm-project-timeline-page__grid-icon--green">
                            <i class="ph ph-check"></i>
                        </span>

                        <div class="wm-project-timeline-page__grid-actions">

                            <button type="button" data-grid-menu>
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-project-timeline-page__grid-dropdown">

                                <button data-timeline-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-timeline-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                            </div>

                        </div>

                    </div>

                    <span class="wm-project-timeline-page__grid-phase">
                        Planning
                    </span>

                    <h3>Research Planning</h3>

                    <p>
                        Project scope, methodology, and research framework.
                    </p>

                    <div class="wm-project-timeline-page__grid-dates">

                        <span>
                            <i class="ph ph-calendar-blank"></i>
                            Jul 04 – Aug 02
                        </span>

                    </div>

                    <div class="wm-project-timeline-page__grid-progress">

                        <div>
                            <span>Progress</span>
                            <strong>100%</strong>
                        </div>

                        <div class="wm-project-timeline-page__progress-track">
                            <span style="width:100%;"></span>
                        </div>

                    </div>

                    <div class="wm-project-timeline-page__grid-footer">

                        <div class="wm-project-timeline-page__owner">

                            <span class="wm-project-timeline-page__avatar">
                                SW
                            </span>

                            <span>Dr. Sarah Wilson</span>

                        </div>

                        <span class="wm-project-timeline-page__status wm-project-timeline-page__status--completed">
                            <span></span>
                            Completed
                        </span>

                    </div>

                </article>


                <article
                    class="wm-project-timeline-page__grid-card"
                    data-grid-item
                    data-grid-status="completed"
                    data-grid-owner="michael"
                    data-grid-phase="research"
                >

                    <div class="wm-project-timeline-page__grid-card-top">

                        <span class="wm-project-timeline-page__grid-icon wm-project-timeline-page__grid-icon--green">
                            <i class="ph ph-check"></i>
                        </span>

                        <div class="wm-project-timeline-page__grid-actions">

                            <button type="button" data-grid-menu>
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-project-timeline-page__grid-dropdown">

                                <button data-timeline-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-timeline-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                            </div>

                        </div>

                    </div>

                    <span class="wm-project-timeline-page__grid-phase">
                        Research
                    </span>

                    <h3>Field Data Collection</h3>

                    <p>
                        Collect and validate environmental field data.
                    </p>

                    <div class="wm-project-timeline-page__grid-dates">

                        <span>
                            <i class="ph ph-calendar-blank"></i>
                            Aug 03 – Sep 15
                        </span>

                    </div>

                    <div class="wm-project-timeline-page__grid-progress">

                        <div>
                            <span>Progress</span>
                            <strong>100%</strong>
                        </div>

                        <div class="wm-project-timeline-page__progress-track">
                            <span style="width:100%;"></span>
                        </div>

                    </div>

                    <div class="wm-project-timeline-page__grid-footer">

                        <div class="wm-project-timeline-page__owner">

                            <span class="wm-project-timeline-page__avatar wm-project-timeline-page__avatar--green">
                                MJ
                            </span>

                            <span>Michael Johnson</span>

                        </div>

                        <span class="wm-project-timeline-page__status wm-project-timeline-page__status--completed">
                            <span></span>
                            Completed
                        </span>

                    </div>

                </article>


                <article
                    class="wm-project-timeline-page__grid-card"
                    data-grid-item
                    data-grid-status="progress"
                    data-grid-owner="anna"
                    data-grid-phase="analysis"
                >

                    <div class="wm-project-timeline-page__grid-card-top">

                        <span class="wm-project-timeline-page__grid-icon wm-project-timeline-page__grid-icon--blue">
                            <i class="ph ph-chart-line-up"></i>
                        </span>

                        <div class="wm-project-timeline-page__grid-actions">

                            <button type="button" data-grid-menu>
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-project-timeline-page__grid-dropdown">

                                <button data-timeline-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-timeline-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                            </div>

                        </div>

                    </div>

                    <span class="wm-project-timeline-page__grid-phase">
                        Analysis
                    </span>

                    <h3>Data Analysis</h3>

                    <p>
                        Analyze collected datasets and identify patterns.
                    </p>

                    <div class="wm-project-timeline-page__grid-dates">

                        <span>
                            <i class="ph ph-calendar-blank"></i>
                            Sep 16 – Oct 12
                        </span>

                    </div>

                    <div class="wm-project-timeline-page__grid-progress">

                        <div>
                            <span>Progress</span>
                            <strong>68%</strong>
                        </div>

                        <div class="wm-project-timeline-page__progress-track">
                            <span style="width:68%;"></span>
                        </div>

                    </div>

                    <div class="wm-project-timeline-page__grid-footer">

                        <div class="wm-project-timeline-page__owner">

                            <span class="wm-project-timeline-page__avatar wm-project-timeline-page__avatar--purple">
                                AK
                            </span>

                            <span>Anna Kim</span>

                        </div>

                        <span class="wm-project-timeline-page__status wm-project-timeline-page__status--progress">
                            <span></span>
                            In Progress
                        </span>

                    </div>

                </article>


                <article
                    class="wm-project-timeline-page__grid-card"
                    data-grid-item
                    data-grid-status="upcoming"
                    data-grid-owner="sarah"
                    data-grid-phase="analysis"
                >

                    <div class="wm-project-timeline-page__grid-card-top">

                        <span class="wm-project-timeline-page__grid-icon wm-project-timeline-page__grid-icon--purple">
                            <i class="ph ph-users-three"></i>
                        </span>

                        <div class="wm-project-timeline-page__grid-actions">

                            <button type="button" data-grid-menu>
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-project-timeline-page__grid-dropdown">

                                <button data-timeline-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-timeline-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                            </div>

                        </div>

                    </div>

                    <span class="wm-project-timeline-page__grid-phase">
                        Analysis
                    </span>

                    <h3>Stakeholder Review</h3>

                    <p>
                        Present preliminary findings for stakeholder feedback.
                    </p>

                    <div class="wm-project-timeline-page__grid-dates">

                        <span>
                            <i class="ph ph-calendar-blank"></i>
                            Oct 13 – Oct 26
                        </span>

                    </div>

                    <div class="wm-project-timeline-page__grid-progress">

                        <div>
                            <span>Progress</span>
                            <strong>25%</strong>
                        </div>

                        <div class="wm-project-timeline-page__progress-track">
                            <span style="width:25%;"></span>
                        </div>

                    </div>

                    <div class="wm-project-timeline-page__grid-footer">

                        <div class="wm-project-timeline-page__owner">

                            <span class="wm-project-timeline-page__avatar">
                                SW
                            </span>

                            <span>Dr. Sarah Wilson</span>

                        </div>

                        <span class="wm-project-timeline-page__status wm-project-timeline-page__status--upcoming">
                            <span></span>
                            Upcoming
                        </span>

                    </div>

                </article>


                <article
                    class="wm-project-timeline-page__grid-card"
                    data-grid-item
                    data-grid-status="upcoming"
                    data-grid-owner="robert"
                    data-grid-phase="reporting"
                >

                    <div class="wm-project-timeline-page__grid-card-top">

                        <span class="wm-project-timeline-page__grid-icon wm-project-timeline-page__grid-icon--orange">
                            <i class="ph ph-file-text"></i>
                        </span>

                        <div class="wm-project-timeline-page__grid-actions">

                            <button type="button" data-grid-menu>
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-project-timeline-page__grid-dropdown">

                                <button data-timeline-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-timeline-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                            </div>

                        </div>

                    </div>

                    <span class="wm-project-timeline-page__grid-phase">
                        Reporting
                    </span>

                    <h3>Final Report</h3>

                    <p>
                        Final research report and recommendations.
                    </p>

                    <div class="wm-project-timeline-page__grid-dates">

                        <span>
                            <i class="ph ph-calendar-blank"></i>
                            Oct 27 – Nov 28
                        </span>

                    </div>

                    <div class="wm-project-timeline-page__grid-progress">

                        <div>
                            <span>Progress</span>
                            <strong>10%</strong>
                        </div>

                        <div class="wm-project-timeline-page__progress-track">
                            <span style="width:10%;"></span>
                        </div>

                    </div>

                    <div class="wm-project-timeline-page__grid-footer">

                        <div class="wm-project-timeline-page__owner">

                            <span class="wm-project-timeline-page__avatar wm-project-timeline-page__avatar--orange">
                                RB
                            </span>

                            <span>Robert Brown</span>

                        </div>

                        <span class="wm-project-timeline-page__status wm-project-timeline-page__status--upcoming">
                            <span></span>
                            Upcoming
                        </span>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            TIMELINE VIEW
        ========================================================== --}}
        <div
            class="wm-project-timeline-page__timeline-view"
            data-timeline-view
        >

            <div class="wm-project-timeline-page__gantt-card">

                <div class="wm-project-timeline-page__gantt-header">

                    <div>
                        <h2>Project Schedule</h2>
                        <p>Jul 2026 — Nov 2026</p>
                    </div>

                    <div class="wm-project-timeline-page__gantt-legend">

                        <span>
                            <i class="is-completed"></i>
                            Completed
                        </span>

                        <span>
                            <i class="is-progress"></i>
                            In Progress
                        </span>

                        <span>
                            <i class="is-upcoming"></i>
                            Upcoming
                        </span>

                    </div>

                </div>


                <div class="wm-project-timeline-page__gantt">

                    <div class="wm-project-timeline-page__gantt-labels">

                        <span>Timeline</span>
                        <span>Jul</span>
                        <span>Aug</span>
                        <span>Sep</span>
                        <span>Oct</span>
                        <span>Nov</span>

                    </div>


                    <div class="wm-project-timeline-page__gantt-grid">

                        <div class="wm-project-timeline-page__gantt-months">

                            <span>Jul</span>
                            <span>Aug</span>
                            <span>Sep</span>
                            <span>Oct</span>
                            <span>Nov</span>

                        </div>


                        <div class="wm-project-timeline-page__gantt-row">

                            <div class="wm-project-timeline-page__gantt-name">
                                Research Planning
                            </div>

                            <div class="wm-project-timeline-page__gantt-track">

                                <span
                                    class="wm-project-timeline-page__gantt-bar is-completed"
                                    style="left:0%;width:25%;"
                                >
                                    100%
                                </span>

                            </div>

                        </div>


                        <div class="wm-project-timeline-page__gantt-row">

                            <div class="wm-project-timeline-page__gantt-name">
                                Field Data Collection
                            </div>

                            <div class="wm-project-timeline-page__gantt-track">

                                <span
                                    class="wm-project-timeline-page__gantt-bar is-completed"
                                    style="left:25%;width:30%;"
                                >
                                    100%
                                </span>

                            </div>

                        </div>


                        <div class="wm-project-timeline-page__gantt-row">

                            <div class="wm-project-timeline-page__gantt-name">
                                Data Analysis
                            </div>

                            <div class="wm-project-timeline-page__gantt-track">

                                <span
                                    class="wm-project-timeline-page__gantt-bar is-progress"
                                    style="left:54%;width:23%;"
                                >
                                    68%
                                </span>

                            </div>

                        </div>


                        <div class="wm-project-timeline-page__gantt-row">

                            <div class="wm-project-timeline-page__gantt-name">
                                Stakeholder Review
                            </div>

                            <div class="wm-project-timeline-page__gantt-track">

                                <span
                                    class="wm-project-timeline-page__gantt-bar is-upcoming"
                                    style="left:77%;width:11%;"
                                >
                                    25%
                                </span>

                            </div>

                        </div>


                        <div class="wm-project-timeline-page__gantt-row">

                            <div class="wm-project-timeline-page__gantt-name">
                                Final Report
                            </div>

                            <div class="wm-project-timeline-page__gantt-track">

                                <span
                                    class="wm-project-timeline-page__gantt-bar is-upcoming"
                                    style="left:88%;width:12%;"
                                >
                                    10%
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="wm-project-timeline-page__timeline-events">

                <div class="wm-project-timeline-page__timeline-heading">
                    <h2>Milestone Timeline</h2>
                    <span>5 milestones</span>
                </div>


                <div class="wm-project-timeline-page__event-list">

                    <article class="wm-project-timeline-page__event is-completed">

                        <div class="wm-project-timeline-page__event-marker">
                            <i class="ph ph-check"></i>
                        </div>

                        <div class="wm-project-timeline-page__event-content">

                            <span>Sep 02, 2026</span>

                            <h3>Research Framework</h3>

                            <p>
                                Research methodology and project framework finalized.
                            </p>

                            <div>
                                <span>
                                    <i class="ph ph-user"></i>
                                    Dr. Sarah Wilson
                                </span>

                                <span>
                                    <i class="ph ph-check-square"></i>
                                    6 / 6 tasks
                                </span>
                            </div>

                        </div>

                    </article>


                    <article class="wm-project-timeline-page__event is-completed">

                        <div class="wm-project-timeline-page__event-marker">
                            <i class="ph ph-check"></i>
                        </div>

                        <div class="wm-project-timeline-page__event-content">

                            <span>Sep 15, 2026</span>

                            <h3>Data Collection</h3>

                            <p>
                                Field data collection completed across selected locations.
                            </p>

                            <div>
                                <span>
                                    <i class="ph ph-user"></i>
                                    Michael Johnson
                                </span>

                                <span>
                                    <i class="ph ph-check-square"></i>
                                    8 / 8 tasks
                                </span>
                            </div>

                        </div>

                    </article>


                    <article class="wm-project-timeline-page__event is-current">

                        <div class="wm-project-timeline-page__event-marker">
                            <i class="ph ph-chart-line-up"></i>
                        </div>

                        <div class="wm-project-timeline-page__event-content">

                            <span>Oct 12, 2026</span>

                            <h3>Data Analysis</h3>

                            <p>
                                Analysis of coastal vulnerability datasets.
                            </p>

                            <div>
                                <span>
                                    <i class="ph ph-user"></i>
                                    Anna Kim
                                </span>

                                <span>
                                    <i class="ph ph-chart-line-up"></i>
                                    68% complete
                                </span>
                            </div>

                        </div>

                    </article>


                    <article class="wm-project-timeline-page__event">

                        <div class="wm-project-timeline-page__event-marker">
                            <i class="ph ph-flag"></i>
                        </div>

                        <div class="wm-project-timeline-page__event-content">

                            <span>Oct 26, 2026</span>

                            <h3>Stakeholder Review</h3>

                            <p>
                                Present preliminary findings and collect stakeholder feedback.
                            </p>

                            <div>
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


                    <article class="wm-project-timeline-page__event">

                        <div class="wm-project-timeline-page__event-marker">
                            <i class="ph ph-flag"></i>
                        </div>

                        <div class="wm-project-timeline-page__event-content">

                            <span>Nov 28, 2026</span>

                            <h3>Final Report</h3>

                            <p>
                                Complete final research report and recommendations.
                            </p>

                            <div>
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

        </div>


        {{-- =========================================================
            Add Milestone Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-timeline-page__modal"
            id="addTimelineMilestoneModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Add Timeline Milestone
                            </h5>

                            <p>
                                Add a milestone to the project schedule.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>

                    <div class="modal-body">

                        <form id="timelineMilestoneForm">

                            <div class="row g-3">

                                <div class="col-12">

                                    <label class="form-label">
                                        Milestone Name
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
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
                                        rows="3"
                                        placeholder="Describe the milestone..."
                                    ></textarea>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Phase
                                    </label>

                                    <select
                                        class="form-select"
                                        name="phase"
                                    >
                                        <option value="planning">
                                            Planning
                                        </option>

                                        <option value="research">
                                            Research
                                        </option>

                                        <option value="analysis">
                                            Analysis
                                        </option>

                                        <option value="reporting">
                                            Reporting
                                        </option>
                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Owner
                                    </label>

                                    <select
                                        class="form-select"
                                        name="owner"
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
                                        Start Date
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                        name="start_date"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        End Date
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                        name="end_date"
                                        required
                                    >

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
                            data-save-timeline-milestone
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


            // ---------------------------------------------------------
            // Elements
            // ---------------------------------------------------------

            const $search = $('#timelineSearch');
            const $filterPanel = $('[data-filter-panel]');
            const $sortMenu = $('[data-sort-menu]');
            const $activeFilters = $('[data-active-filters]');
            const $rows = $('[data-timeline-row]');
            const $gridItems = $('[data-grid-item]');
            const $emptyState = $('[data-empty-state]');


            // ---------------------------------------------------------
            // Helpers
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


            function getFilters() {

                return {
                    status: $('#timelineStatusFilter').val(),
                    owner: $('#timelineOwnerFilter').val(),
                    phase: $('#timelinePhaseFilter').val(),
                    search: $.trim($search.val()).toLowerCase()
                };

            }


            // ---------------------------------------------------------
            // Filter Count
            // ---------------------------------------------------------

            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;

                if (filters.status) {
                    count++;
                }

                if (filters.owner) {
                    count++;
                }

                if (filters.phase) {
                    count++;
                }

                $('[data-filter-count]').text(count);

            }


            // ---------------------------------------------------------
            // Active Filters
            // ---------------------------------------------------------

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

                    phase: {
                        planning: 'Planning',
                        research: 'Research',
                        analysis: 'Analysis',
                        reporting: 'Reporting'
                    }
                };


                $.each(
                    ['status', 'owner', 'phase'],
                    function (_, key) {

                        if (!filters[key]) {
                            return;
                        }

                        $activeFilters.append(`
                        <button
                            type="button"
                            class="wm-project-timeline-page__filter-chip"
                            data-remove-filter="${key}"
                        >
                            ${labels[key][filters[key]]}
                            <i class="ph ph-x"></i>
                        </button>
                    `);

                    }
                );


                if (filters.search) {

                    $activeFilters.prepend(`
                    <button
                        type="button"
                        class="wm-project-timeline-page__filter-chip"
                        data-remove-search
                    >
                        Search: "${$search.val()}"
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }

            }


            // ---------------------------------------------------------
            // Match
            // ---------------------------------------------------------

            function matchesRow($element, filters) {

                const status = $element.data('timeline-status');
                const owner = $element.data('timeline-owner');
                const phase = $element.data('timeline-phase');

                const text = $element.text().toLowerCase();


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
                    filters.phase &&
                    phase !== filters.phase
                ) {
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


            // ---------------------------------------------------------
            // Apply Filters
            // ---------------------------------------------------------

            function applyFilters() {

                const filters = getFilters();

                let visibleRows = 0;
                let visibleGrid = 0;


                $rows.each(function () {

                    const $row = $(this);

                    if (matchesRow($row, filters)) {

                        $row.removeClass('is-hidden');

                        visibleRows++;

                    } else {

                        $row.addClass('is-hidden');

                    }

                });


                $gridItems.each(function () {

                    const $item = $(this);

                    if (matchesRow(
                        $item,
                        {
                            status: filters.status,
                            owner: filters.owner,
                            phase: filters.phase,
                            search: filters.search
                        }
                    )) {

                        $item.removeClass('is-hidden');

                        visibleGrid++;

                    } else {

                        $item.addClass('is-hidden');

                    }

                });


                updateFilterCount();
                updateActiveFilters();


                $emptyState.toggleClass(
                    'is-visible',
                    visibleRows === 0
                );


                $('.wm-project-timeline-page__table')
                    .toggleClass(
                        'is-empty',
                        visibleRows === 0
                    );


                $('.wm-project-timeline-page__pagination > span')
                    .html(
                        'Showing <strong>' +
                        visibleRows +
                        '</strong> of <strong>5</strong> items'
                    );

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

                $('[data-timeline-view]')
                    .removeClass('is-visible');


                if (view === 'list') {

                    $('[data-list-view]')
                        .addClass('is-visible');

                }


                if (view === 'grid') {

                    $('[data-grid-view]')
                        .addClass('is-visible');

                }


                if (view === 'timeline') {

                    $('[data-timeline-view]')
                        .addClass('is-visible');

                }

            }


            // ---------------------------------------------------------
            // Sort
            // ---------------------------------------------------------

            function sortTimeline(sortValue) {

                const $tbody = $('[data-timeline-list]');
                const rows = $tbody
                    .find('[data-timeline-row]')
                    .get();


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
                            order[$a.data('timeline-status')] || 99
                        ) - (
                            order[$b.data('timeline-status')] || 99
                        );

                    }


                    const dateA = new Date(
                        $a.data('timeline-created')
                    );

                    const dateB = new Date(
                        $b.data('timeline-created')
                    );


                    return sortValue === 'oldest'
                        ? dateA - dateB
                        : dateB - dateA;

                });


                $.each(rows, function (_, row) {
                    $tbody.append(row);
                });

            }


            // ---------------------------------------------------------
            // Initial
            // ---------------------------------------------------------

            switchView('list');
            applyFilters();


            // ---------------------------------------------------------
            // Search
            // ---------------------------------------------------------

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

                    $sortMenu.removeClass('is-open');

                    $filterPanel.toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Sort Toggle
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-sort-toggle]',
                function (event) {

                    event.stopPropagation();

                    $filterPanel.removeClass('is-open');

                    $sortMenu.toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Filter Change
            // ---------------------------------------------------------

            $(document).on(
                'change',
                '#timelineStatusFilter, #timelineOwnerFilter, #timelinePhaseFilter',
                function () {

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


                    $('#timelineStatusFilter').val('');


                    if (
                        filter === 'completed' ||
                        filter === 'progress' ||
                        filter === 'upcoming' ||
                        filter === 'overdue'
                    ) {

                        $('#timelineStatusFilter')
                            .val(filter);

                    }


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
                        $('#timelineStatusFilter').val('');
                    }

                    if (filter === 'owner') {
                        $('#timelineOwnerFilter').val('');
                    }

                    if (filter === 'phase') {
                        $('#timelinePhaseFilter').val('');
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

                    $('#timelineStatusFilter').val('');
                    $('#timelineOwnerFilter').val('');
                    $('#timelinePhaseFilter').val('');

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


            // ---------------------------------------------------------
            // Sort
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-sort-value]',
                function () {

                    sortTimeline(
                        $(this).data('sort-value')
                    );

                    $sortMenu.removeClass('is-open');

                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // View
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
            // Row Menu
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-timeline-menu]',
                function (event) {

                    event.stopPropagation();

                    $('.wm-project-timeline-page__row-actions')
                        .removeClass('is-open');

                    $(this)
                        .closest(
                            '.wm-project-timeline-page__row-actions'
                        )
                        .toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Grid Menu
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-grid-menu]',
                function (event) {

                    event.stopPropagation();

                    $('.wm-project-timeline-page__grid-actions')
                        .removeClass('is-open');

                    $(this)
                        .closest(
                            '.wm-project-timeline-page__grid-actions'
                        )
                        .toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Timeline Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-timeline-action]',
                function () {

                    const action =
                        $(this).data('timeline-action');


                    $('.wm-project-timeline-page__row-actions')
                        .removeClass('is-open');

                    $('.wm-project-timeline-page__grid-actions')
                        .removeClass('is-open');


                    if (action === 'delete') {

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                title: 'Delete timeline item?',
                                text: 'This action cannot be undone.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Delete',
                                cancelButtonText: 'Cancel',
                                confirmButtonColor: '#EF4444'
                            }).then(function (result) {

                                if (result.isConfirmed) {

                                    showNotice(
                                        'Timeline item deleted',
                                        'The timeline item has been removed.',
                                        'success'
                                    );

                                }

                            });

                        }

                        return;
                    }


                    const messages = {
                        view: 'The timeline item detail view can be connected here.',
                        edit: 'The timeline item editor can be connected here.',
                        duplicate: 'The duplicate workflow can be connected here.'
                    };


                    showNotice(
                        action.charAt(0).toUpperCase() +
                        action.slice(1),
                        messages[action] || 'Action ready for backend integration.'
                    );

                }
            );


            // ---------------------------------------------------------
            // Header Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-timeline-header-action]',
                function () {

                    const action =
                        $(this).data('timeline-header-action');


                    if (action === 'add') {

                        const modalElement =
                            document.getElementById(
                                'addTimelineMilestoneModal'
                            );


                        if (
                            modalElement &&
                            typeof bootstrap !== 'undefined'
                        ) {

                            bootstrap.Modal
                                .getOrCreateInstance(modalElement)
                                .show();

                        }

                        return;

                    }


                    if (action === 'export') {

                        showNotice(
                            'Export Timeline',
                            'The timeline export workflow can be connected to your backend.'
                        );

                    }

                }
            );


            // ---------------------------------------------------------
            // Save Milestone
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-save-timeline-milestone]',
                function () {

                    const $form =
                        $('#timelineMilestoneForm');


                    if (!$form[0].checkValidity()) {

                        $form[0].reportValidity();

                        return;

                    }


                    const data = {
                        name: $form.find('[name="name"]').val(),
                        description: $form.find('[name="description"]').val(),
                        phase: $form.find('[name="phase"]').val(),
                        owner: $form.find('[name="owner"]').val(),
                        start_date: $form.find('[name="start_date"]').val(),
                        end_date: $form.find('[name="end_date"]').val()
                    };


                    console.log(
                        'Create timeline milestone:',
                        data
                    );


                    const modalElement =
                        document.getElementById(
                            'addTimelineMilestoneModal'
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
                        'Milestone added',
                        'The milestone has been added to the project timeline.',
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // Outside Click
            // ---------------------------------------------------------

            $(document).on('click', function () {

                $filterPanel.removeClass('is-open');

                $sortMenu.removeClass('is-open');

                $('.wm-project-timeline-page__row-actions')
                    .removeClass('is-open');

                $('.wm-project-timeline-page__grid-actions')
                    .removeClass('is-open');

            });


            // ---------------------------------------------------------
            // Escape
            // ---------------------------------------------------------

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        $filterPanel.removeClass('is-open');

                        $sortMenu.removeClass('is-open');

                        $('.wm-project-timeline-page__row-actions')
                            .removeClass('is-open');

                        $('.wm-project-timeline-page__grid-actions')
                            .removeClass('is-open');

                    }

                }
            );


            // ---------------------------------------------------------
            // Prevent Dropdown Closing
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
                '.wm-project-timeline-page__row-actions, .wm-project-timeline-page__grid-actions',
                function (event) {
                    event.stopPropagation();
                }
            );

        });

    </script>
@endpush
