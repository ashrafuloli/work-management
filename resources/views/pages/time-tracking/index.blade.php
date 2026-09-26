@extends('layout.app')

@section('main')

    <div class="wm-time-tracking-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}

        <div class="wm-time-tracking-page__header">

            <div class="wm-time-tracking-page__header-left">

                <nav class="wm-time-tracking-page__breadcrumb">

                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Time Tracking</span>

                </nav>


                <div class="wm-time-tracking-page__title-row">

                    <div class="wm-time-tracking-page__title-icon">
                        <i class="ph ph-clock-countdown"></i>
                    </div>

                    <div>

                        <h1 class="wm-time-tracking-page__title">
                            Time Tracking
                        </h1>

                        <p class="wm-time-tracking-page__subtitle">
                            Monitor project timelines, deadlines, and schedule health.
                        </p>

                    </div>

                </div>

            </div>


            <div class="wm-time-tracking-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="refresh"
                >
                    <i class="ph ph-arrows-clockwise"></i>
                    Refresh
                </button>

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

            </div>

        </div>


        {{-- =========================================================
            Summary Cards
        ========================================================== --}}

        <div class="wm-time-tracking-page__summary">

            <div class="wm-time-tracking-page__summary-card">

                <div class="wm-time-tracking-page__summary-icon is-blue">
                    <i class="ph ph-kanban"></i>
                </div>

                <div class="wm-time-tracking-page__summary-content">

                    <span>Total Projects</span>

                    <strong>12</strong>

                    <small>
                        8 active projects
                    </small>

                </div>

            </div>


            <div class="wm-time-tracking-page__summary-card">

                <div class="wm-time-tracking-page__summary-icon is-green">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-time-tracking-page__summary-content">

                    <span>On Track</span>

                    <strong>7</strong>

                    <small>
                        Within planned timeline
                    </small>

                </div>

            </div>


            <div class="wm-time-tracking-page__summary-card">

                <div class="wm-time-tracking-page__summary-icon is-orange">
                    <i class="ph ph-warning"></i>
                </div>

                <div class="wm-time-tracking-page__summary-content">

                    <span>Due Soon</span>

                    <strong>3</strong>

                    <small>
                        Within 14 days
                    </small>

                </div>

            </div>


            <div class="wm-time-tracking-page__summary-card">

                <div class="wm-time-tracking-page__summary-icon is-red">
                    <i class="ph ph-clock-countdown"></i>
                </div>

                <div class="wm-time-tracking-page__summary-content">

                    <span>Overdue</span>

                    <strong>2</strong>

                    <small>
                        Past project deadline
                    </small>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Timeline Health
        ========================================================== --}}

        <div class="wm-time-tracking-page__health">

            <div class="wm-time-tracking-page__health-header">

                <div>

                    <h2>
                        Project Timeline Health
                    </h2>

                    <p>
                        Compare project progress against available project time.
                    </p>

                </div>

                <span class="wm-time-tracking-page__health-date">
                Updated just now
            </span>

            </div>


            <div class="wm-time-tracking-page__health-grid">

                <div class="wm-time-tracking-page__health-item">

                    <div class="wm-time-tracking-page__health-item-icon is-green">
                        <i class="ph ph-trend-up"></i>
                    </div>

                    <div>

                        <strong>
                            58%
                        </strong>

                        <span>
                        Average Progress
                    </span>

                    </div>

                </div>


                <div class="wm-time-tracking-page__health-item">

                    <div class="wm-time-tracking-page__health-item-icon is-blue">
                        <i class="ph ph-calendar"></i>
                    </div>

                    <div>

                        <strong>
                            64%
                        </strong>

                        <span>
                        Average Time Used
                    </span>

                    </div>

                </div>


                <div class="wm-time-tracking-page__health-item">

                    <div class="wm-time-tracking-page__health-item-icon is-purple">
                        <i class="ph ph-chart-line-up"></i>
                    </div>

                    <div>

                        <strong>
                            +6%
                        </strong>

                        <span>
                        Schedule Efficiency
                    </span>

                    </div>

                </div>


                <div class="wm-time-tracking-page__health-item">

                    <div class="wm-time-tracking-page__health-item-icon is-orange">
                        <i class="ph ph-calendar-x"></i>
                    </div>

                    <div>

                        <strong>
                            8 days
                        </strong>

                        <span>
                        Average Time Remaining
                    </span>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}

        <div class="wm-time-tracking-page__toolbar">

            <div class="wm-time-tracking-page__toolbar-left">

                <div class="wm-time-tracking-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="timeTrackingSearch"
                        placeholder="Search projects..."
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
                    class="wm-time-tracking-page__filter-button"
                    data-filter-toggle
                >

                    <i class="ph ph-funnel"></i>

                    Filter

                    <span data-filter-count>
                    0
                </span>

                </button>

            </div>


            <div class="wm-time-tracking-page__toolbar-right">

                <div class="wm-time-tracking-page__sort">

                <span>
                    Sort by
                </span>

                    <select id="timeTrackingSort">

                        <option value="deadline">
                            Deadline
                        </option>

                        <option value="progress">
                            Progress
                        </option>

                        <option value="remaining">
                            Time Remaining
                        </option>

                        <option value="name">
                            Project Name
                        </option>

                    </select>

                </div>


                <div class="wm-time-tracking-page__view-switcher">

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
            class="wm-time-tracking-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-time-tracking-page__filter-field">

                <label for="timeStatusFilter">
                    Timeline Status
                </label>

                <select id="timeStatusFilter">

                    <option value="">
                        All Statuses
                    </option>

                    <option value="on-track">
                        On Track
                    </option>

                    <option value="due-soon">
                        Due Soon
                    </option>

                    <option value="overdue">
                        Overdue
                    </option>

                    <option value="completed">
                        Completed
                    </option>

                </select>

            </div>


            <div class="wm-time-tracking-page__filter-field">

                <label for="timeProjectStatusFilter">
                    Project Status
                </label>

                <select id="timeProjectStatusFilter">

                    <option value="">
                        All Projects
                    </option>

                    <option value="active">
                        Active
                    </option>

                    <option value="completed">
                        Completed
                    </option>

                    <option value="on-hold">
                        On Hold
                    </option>

                </select>

            </div>


            <div class="wm-time-tracking-page__filter-field">

                <label for="timeOwnerFilter">
                    Project Owner
                </label>

                <select id="timeOwnerFilter">

                    <option value="">
                        All Owners
                    </option>

                    <option value="sarah">
                        Sarah Wilson
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


            <button
                type="button"
                class="wm-time-tracking-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}

        <div
            class="wm-time-tracking-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            List View
        ========================================================== --}}

        <div
            class="wm-time-tracking-page__list-view is-visible"
            data-time-view="list"
        >

            <div class="wm-time-tracking-page__table-card">

                <div class="wm-time-tracking-page__table-wrapper">

                    <table class="wm-time-tracking-page__table">

                        <thead>

                        <tr>

                            <th>
                                Project
                            </th>

                            <th>
                                Timeline
                            </th>

                            <th>
                                Time Used
                            </th>

                            <th>
                                Progress
                            </th>

                            <th>
                                Time Remaining
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Owner
                            </th>

                            <th></th>

                        </tr>

                        </thead>


                        <tbody>


                        {{-- =================================================
                             Project 01
                        ================================================== --}}

                        <tr
                            data-project-row
                            data-name="Climate Change Research Initiative"
                            data-timeline="on-track"
                            data-project-status="active"
                            data-owner="sarah"
                            data-remaining="24"
                            data-progress="68"
                            data-deadline="2026-10-18"
                        >

                            <td>

                                <div class="wm-time-tracking-page__project">

                                    <div class="wm-time-tracking-page__project-icon is-blue">
                                        <i class="ph ph-flask"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Climate Change Research Initiative
                                        </strong>

                                        <span>
                                            PRJ-001
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__timeline">

                                    <div class="wm-time-tracking-page__dates">
                                        Sep 01, 2026
                                        <span>→</span>
                                        Oct 18, 2026
                                    </div>

                                    <div class="wm-time-tracking-page__timeline-bar">

                                        <span style="width: 68%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong>
                                    68 / 118 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    58% used
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__progress">

                                    <div class="wm-time-tracking-page__progress-header">

                                        <span>
                                            68%
                                        </span>

                                    </div>

                                    <div class="wm-time-tracking-page__progress-bar">

                                        <span style="width: 68%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong class="wm-time-tracking-page__remaining is-green">
                                    24 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    Oct 18, 2026
                                </span>

                            </td>


                            <td>

                                <span class="wm-time-tracking-page__status is-on-track">
                                    <i class="ph ph-check-circle"></i>
                                    On Track
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__owner">

                                    <span class="wm-time-tracking-page__avatar is-blue">
                                        SW
                                    </span>

                                    <span>
                                        Sarah Wilson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <button
                                    type="button"
                                    class="wm-time-tracking-page__action"
                                    data-project-action="view"
                                    data-project-name="Climate Change Research Initiative"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>

                            </td>

                        </tr>


                        {{-- =================================================
                             Project 02
                        ================================================== --}}

                        <tr
                            data-project-row
                            data-name="Water Quality Study"
                            data-timeline="due-soon"
                            data-project-status="active"
                            data-owner="michael"
                            data-remaining="8"
                            data-progress="82"
                            data-deadline="2026-10-02"
                        >

                            <td>

                                <div class="wm-time-tracking-page__project">

                                    <div class="wm-time-tracking-page__project-icon is-cyan">
                                        <i class="ph ph-drop"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Water Quality Study
                                        </strong>

                                        <span>
                                            PRJ-002
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__timeline">

                                    <div class="wm-time-tracking-page__dates">
                                        Sep 10, 2026
                                        <span>→</span>
                                        Oct 02, 2026
                                    </div>

                                    <div class="wm-time-tracking-page__timeline-bar is-warning">

                                        <span style="width: 82%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong>
                                    14 / 22 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    64% used
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__progress">

                                    <div class="wm-time-tracking-page__progress-header">

                                        <span>
                                            82%
                                        </span>

                                    </div>

                                    <div class="wm-time-tracking-page__progress-bar is-warning">

                                        <span style="width: 82%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong class="wm-time-tracking-page__remaining is-warning">
                                    8 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    Oct 02, 2026
                                </span>

                            </td>


                            <td>

                                <span class="wm-time-tracking-page__status is-due-soon">
                                    <i class="ph ph-warning"></i>
                                    Due Soon
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__owner">

                                    <span class="wm-time-tracking-page__avatar is-cyan">
                                        MJ
                                    </span>

                                    <span>
                                        Michael Johnson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <button
                                    type="button"
                                    class="wm-time-tracking-page__action"
                                    data-project-action="view"
                                    data-project-name="Water Quality Study"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>

                            </td>

                        </tr>


                        {{-- =================================================
                             Project 03
                        ================================================== --}}

                        <tr
                            data-project-row
                            data-name="Urban Sustainability Initiative"
                            data-timeline="overdue"
                            data-project-status="active"
                            data-owner="anna"
                            data-remaining="-6"
                            data-progress="45"
                            data-deadline="2026-09-18"
                        >

                            <td>

                                <div class="wm-time-tracking-page__project">

                                    <div class="wm-time-tracking-page__project-icon is-purple">
                                        <i class="ph ph-buildings"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Urban Sustainability Initiative
                                        </strong>

                                        <span>
                                            PRJ-003
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__timeline">

                                    <div class="wm-time-tracking-page__dates">
                                        Aug 01, 2026
                                        <span>→</span>
                                        Sep 18, 2026
                                    </div>

                                    <div class="wm-time-tracking-page__timeline-bar is-danger">

                                        <span style="width: 100%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong>
                                    54 / 48 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    112% used
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__progress">

                                    <div class="wm-time-tracking-page__progress-header">

                                        <span>
                                            45%
                                        </span>

                                    </div>

                                    <div class="wm-time-tracking-page__progress-bar is-danger">

                                        <span style="width: 45%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong class="wm-time-tracking-page__remaining is-danger">
                                    6 days overdue
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    Sep 18, 2026
                                </span>

                            </td>


                            <td>

                                <span class="wm-time-tracking-page__status is-overdue">
                                    <i class="ph ph-x-circle"></i>
                                    Overdue
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__owner">

                                    <span class="wm-time-tracking-page__avatar is-purple">
                                        AK
                                    </span>

                                    <span>
                                        Anna Kim
                                    </span>

                                </div>

                            </td>


                            <td>

                                <button
                                    type="button"
                                    class="wm-time-tracking-page__action"
                                    data-project-action="view"
                                    data-project-name="Urban Sustainability Initiative"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>

                            </td>

                        </tr>


                        {{-- =================================================
                             Project 04
                        ================================================== --}}

                        <tr
                            data-project-row
                            data-name="Field Research Program"
                            data-timeline="due-soon"
                            data-project-status="active"
                            data-owner="robert"
                            data-remaining="3"
                            data-progress="91"
                            data-deadline="2026-09-27"
                        >

                            <td>

                                <div class="wm-time-tracking-page__project">

                                    <div class="wm-time-tracking-page__project-icon is-orange">
                                        <i class="ph ph-map-pin"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Field Research Program
                                        </strong>

                                        <span>
                                            PRJ-004
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__timeline">

                                    <div class="wm-time-tracking-page__dates">
                                        Sep 01, 2026
                                        <span>→</span>
                                        Sep 27, 2026
                                    </div>

                                    <div class="wm-time-tracking-page__timeline-bar is-warning">

                                        <span style="width: 91%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong>
                                    23 / 26 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    88% used
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__progress">

                                    <div class="wm-time-tracking-page__progress-header">

                                        <span>
                                            91%
                                        </span>

                                    </div>

                                    <div class="wm-time-tracking-page__progress-bar is-warning">

                                        <span style="width: 91%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong class="wm-time-tracking-page__remaining is-warning">
                                    3 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    Sep 27, 2026
                                </span>

                            </td>


                            <td>

                                <span class="wm-time-tracking-page__status is-due-soon">
                                    <i class="ph ph-warning"></i>
                                    Due Soon
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__owner">

                                    <span class="wm-time-tracking-page__avatar is-orange">
                                        RB
                                    </span>

                                    <span>
                                        Robert Brown
                                    </span>

                                </div>

                            </td>


                            <td>

                                <button
                                    type="button"
                                    class="wm-time-tracking-page__action"
                                    data-project-action="view"
                                    data-project-name="Field Research Program"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>

                            </td>

                        </tr>


                        {{-- =================================================
                             Project 05
                        ================================================== --}}

                        <tr
                            data-project-row
                            data-name="Community Health Research"
                            data-timeline="on-track"
                            data-project-status="active"
                            data-owner="sarah"
                            data-remaining="18"
                            data-progress="52"
                            data-deadline="2026-10-12"
                        >

                            <td>

                                <div class="wm-time-tracking-page__project">

                                    <div class="wm-time-tracking-page__project-icon is-green">
                                        <i class="ph ph-heartbeat"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Community Health Research
                                        </strong>

                                        <span>
                                            PRJ-005
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__timeline">

                                    <div class="wm-time-tracking-page__dates">
                                        Sep 05, 2026
                                        <span>→</span>
                                        Oct 12, 2026
                                    </div>

                                    <div class="wm-time-tracking-page__timeline-bar">

                                        <span style="width: 52%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong>
                                    19 / 37 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    51% used
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__progress">

                                    <div class="wm-time-tracking-page__progress-header">

                                        <span>
                                            52%
                                        </span>

                                    </div>

                                    <div class="wm-time-tracking-page__progress-bar">

                                        <span style="width: 52%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong class="wm-time-tracking-page__remaining is-green">
                                    18 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    Oct 12, 2026
                                </span>

                            </td>


                            <td>

                                <span class="wm-time-tracking-page__status is-on-track">
                                    <i class="ph ph-check-circle"></i>
                                    On Track
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__owner">

                                    <span class="wm-time-tracking-page__avatar is-green">
                                        SW
                                    </span>

                                    <span>
                                        Sarah Wilson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <button
                                    type="button"
                                    class="wm-time-tracking-page__action"
                                    data-project-action="view"
                                    data-project-name="Community Health Research"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>

                            </td>

                        </tr>


                        {{-- =================================================
                             Project 06
                        ================================================== --}}

                        <tr
                            data-project-row
                            data-name="Renewable Energy Assessment"
                            data-timeline="completed"
                            data-project-status="completed"
                            data-owner="michael"
                            data-remaining="0"
                            data-progress="100"
                            data-deadline="2026-09-15"
                        >

                            <td>

                                <div class="wm-time-tracking-page__project">

                                    <div class="wm-time-tracking-page__project-icon is-yellow">
                                        <i class="ph ph-solar-panel"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Renewable Energy Assessment
                                        </strong>

                                        <span>
                                            PRJ-006
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__timeline">

                                    <div class="wm-time-tracking-page__dates">
                                        Aug 15, 2026
                                        <span>→</span>
                                        Sep 15, 2026
                                    </div>

                                    <div class="wm-time-tracking-page__timeline-bar is-complete">

                                        <span style="width: 100%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong>
                                    31 / 31 days
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    100% used
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__progress">

                                    <div class="wm-time-tracking-page__progress-header">

                                        <span>
                                            100%
                                        </span>

                                    </div>

                                    <div class="wm-time-tracking-page__progress-bar is-complete">

                                        <span style="width: 100%;"></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <strong class="wm-time-tracking-page__remaining">
                                    Completed
                                </strong>

                                <span class="wm-time-tracking-page__muted">
                                    Sep 15, 2026
                                </span>

                            </td>


                            <td>

                                <span class="wm-time-tracking-page__status is-completed">
                                    <i class="ph ph-check-circle"></i>
                                    Completed
                                </span>

                            </td>


                            <td>

                                <div class="wm-time-tracking-page__owner">

                                    <span class="wm-time-tracking-page__avatar is-cyan">
                                        MJ
                                    </span>

                                    <span>
                                        Michael Johnson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <button
                                    type="button"
                                    class="wm-time-tracking-page__action"
                                    data-project-action="view"
                                    data-project-name="Renewable Energy Assessment"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>

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
            class="wm-time-tracking-page__grid-view"
            data-time-view="grid"
        >

            <div class="wm-time-tracking-page__grid">


                {{-- Grid Card 01 --}}
                <article
                    class="wm-time-tracking-page__project-card"
                    data-project-card
                    data-name="Climate Change Research Initiative"
                    data-timeline="on-track"
                    data-project-status="active"
                    data-owner="sarah"
                    data-remaining="24"
                    data-progress="68"
                >

                    <div class="wm-time-tracking-page__project-card-header">

                        <div class="wm-time-tracking-page__project-card-title">

                        <span class="wm-time-tracking-page__project-icon is-blue">
                            <i class="ph ph-flask"></i>
                        </span>

                            <div>

                                <strong>
                                    Climate Change Research
                                </strong>

                                <span>
                                PRJ-001
                            </span>

                            </div>

                        </div>

                        <span class="wm-time-tracking-page__status is-on-track">
                        On Track
                    </span>

                    </div>


                    <div class="wm-time-tracking-page__project-card-progress">

                        <div>

                        <span>
                            Project Progress
                        </span>

                            <strong>
                                68%
                            </strong>

                        </div>

                        <div class="wm-time-tracking-page__progress-bar">
                            <span style="width: 68%;"></span>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-time">

                        <div>
                            <span>Time Used</span>
                            <strong>68 days</strong>
                        </div>

                        <div>
                            <span>Remaining</span>
                            <strong class="is-green">24 days</strong>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-footer">

                    <span>
                        Deadline: Oct 18, 2026
                    </span>

                        <button
                            type="button"
                            data-project-action="view"
                            data-project-name="Climate Change Research Initiative"
                        >
                            View
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                </article>


                {{-- Grid Card 02 --}}
                <article
                    class="wm-time-tracking-page__project-card"
                    data-project-card
                    data-name="Water Quality Study"
                    data-timeline="due-soon"
                    data-project-status="active"
                    data-owner="michael"
                    data-remaining="8"
                    data-progress="82"
                >

                    <div class="wm-time-tracking-page__project-card-header">

                        <div class="wm-time-tracking-page__project-card-title">

                        <span class="wm-time-tracking-page__project-icon is-cyan">
                            <i class="ph ph-drop"></i>
                        </span>

                            <div>

                                <strong>
                                    Water Quality Study
                                </strong>

                                <span>
                                PRJ-002
                            </span>

                            </div>

                        </div>

                        <span class="wm-time-tracking-page__status is-due-soon">
                        Due Soon
                    </span>

                    </div>


                    <div class="wm-time-tracking-page__project-card-progress">

                        <div>
                            <span>Project Progress</span>
                            <strong>82%</strong>
                        </div>

                        <div class="wm-time-tracking-page__progress-bar is-warning">
                            <span style="width: 82%;"></span>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-time">

                        <div>
                            <span>Time Used</span>
                            <strong>14 days</strong>
                        </div>

                        <div>
                            <span>Remaining</span>
                            <strong class="is-warning">8 days</strong>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-footer">

                    <span>
                        Deadline: Oct 02, 2026
                    </span>

                        <button
                            type="button"
                            data-project-action="view"
                            data-project-name="Water Quality Study"
                        >
                            View
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                </article>


                {{-- Grid Card 03 --}}
                <article
                    class="wm-time-tracking-page__project-card"
                    data-project-card
                    data-name="Urban Sustainability Initiative"
                    data-timeline="overdue"
                    data-project-status="active"
                    data-owner="anna"
                    data-remaining="-6"
                    data-progress="45"
                >

                    <div class="wm-time-tracking-page__project-card-header">

                        <div class="wm-time-tracking-page__project-card-title">

                        <span class="wm-time-tracking-page__project-icon is-purple">
                            <i class="ph ph-buildings"></i>
                        </span>

                            <div>

                                <strong>
                                    Urban Sustainability
                                </strong>

                                <span>
                                PRJ-003
                            </span>

                            </div>

                        </div>

                        <span class="wm-time-tracking-page__status is-overdue">
                        Overdue
                    </span>

                    </div>


                    <div class="wm-time-tracking-page__project-card-progress">

                        <div>
                            <span>Project Progress</span>
                            <strong>45%</strong>
                        </div>

                        <div class="wm-time-tracking-page__progress-bar is-danger">
                            <span style="width: 45%;"></span>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-time">

                        <div>
                            <span>Time Used</span>
                            <strong>54 days</strong>
                        </div>

                        <div>
                            <span>Overdue</span>
                            <strong class="is-danger">6 days</strong>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-footer">

                    <span>
                        Deadline: Sep 18, 2026
                    </span>

                        <button
                            type="button"
                            data-project-action="view"
                            data-project-name="Urban Sustainability Initiative"
                        >
                            View
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                </article>


                {{-- Grid Card 04 --}}
                <article
                    class="wm-time-tracking-page__project-card"
                    data-project-card
                    data-name="Field Research Program"
                    data-timeline="due-soon"
                    data-project-status="active"
                    data-owner="robert"
                    data-remaining="3"
                    data-progress="91"
                >

                    <div class="wm-time-tracking-page__project-card-header">

                        <div class="wm-time-tracking-page__project-card-title">

                        <span class="wm-time-tracking-page__project-icon is-orange">
                            <i class="ph ph-map-pin"></i>
                        </span>

                            <div>

                                <strong>
                                    Field Research Program
                                </strong>

                                <span>
                                PRJ-004
                            </span>

                            </div>

                        </div>

                        <span class="wm-time-tracking-page__status is-due-soon">
                        Due Soon
                    </span>

                    </div>


                    <div class="wm-time-tracking-page__project-card-progress">

                        <div>
                            <span>Project Progress</span>
                            <strong>91%</strong>
                        </div>

                        <div class="wm-time-tracking-page__progress-bar is-warning">
                            <span style="width: 91%;"></span>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-time">

                        <div>
                            <span>Time Used</span>
                            <strong>23 days</strong>
                        </div>

                        <div>
                            <span>Remaining</span>
                            <strong class="is-warning">3 days</strong>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-footer">

                    <span>
                        Deadline: Sep 27, 2026
                    </span>

                        <button
                            type="button"
                            data-project-action="view"
                            data-project-name="Field Research Program"
                        >
                            View
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                </article>


                {{-- Grid Card 05 --}}
                <article
                    class="wm-time-tracking-page__project-card"
                    data-project-card
                    data-name="Community Health Research"
                    data-timeline="on-track"
                    data-project-status="active"
                    data-owner="sarah"
                    data-remaining="18"
                    data-progress="52"
                >

                    <div class="wm-time-tracking-page__project-card-header">

                        <div class="wm-time-tracking-page__project-card-title">

                        <span class="wm-time-tracking-page__project-icon is-green">
                            <i class="ph ph-heartbeat"></i>
                        </span>

                            <div>

                                <strong>
                                    Community Health Research
                                </strong>

                                <span>
                                PRJ-005
                            </span>

                            </div>

                        </div>

                        <span class="wm-time-tracking-page__status is-on-track">
                        On Track
                    </span>

                    </div>


                    <div class="wm-time-tracking-page__project-card-progress">

                        <div>
                            <span>Project Progress</span>
                            <strong>52%</strong>
                        </div>

                        <div class="wm-time-tracking-page__progress-bar">
                            <span style="width: 52%;"></span>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-time">

                        <div>
                            <span>Time Used</span>
                            <strong>19 days</strong>
                        </div>

                        <div>
                            <span>Remaining</span>
                            <strong class="is-green">18 days</strong>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-footer">

                    <span>
                        Deadline: Oct 12, 2026
                    </span>

                        <button
                            type="button"
                            data-project-action="view"
                            data-project-name="Community Health Research"
                        >
                            View
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                </article>


                {{-- Grid Card 06 --}}
                <article
                    class="wm-time-tracking-page__project-card"
                    data-project-card
                    data-name="Renewable Energy Assessment"
                    data-timeline="completed"
                    data-project-status="completed"
                    data-owner="michael"
                    data-remaining="0"
                    data-progress="100"
                >

                    <div class="wm-time-tracking-page__project-card-header">

                        <div class="wm-time-tracking-page__project-card-title">

                        <span class="wm-time-tracking-page__project-icon is-yellow">
                            <i class="ph ph-solar-panel"></i>
                        </span>

                            <div>

                                <strong>
                                    Renewable Energy Assessment
                                </strong>

                                <span>
                                PRJ-006
                            </span>

                            </div>

                        </div>

                        <span class="wm-time-tracking-page__status is-completed">
                        Completed
                    </span>

                    </div>


                    <div class="wm-time-tracking-page__project-card-progress">

                        <div>
                            <span>Project Progress</span>
                            <strong>100%</strong>
                        </div>

                        <div class="wm-time-tracking-page__progress-bar is-complete">
                            <span style="width: 100%;"></span>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-time">

                        <div>
                            <span>Time Used</span>
                            <strong>31 days</strong>
                        </div>

                        <div>
                            <span>Status</span>
                            <strong class="is-green">Completed</strong>
                        </div>

                    </div>


                    <div class="wm-time-tracking-page__project-card-footer">

                    <span>
                        Completed: Sep 15, 2026
                    </span>

                        <button
                            type="button"
                            data-project-action="view"
                            data-project-name="Renewable Energy Assessment"
                        >
                            View
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}

        <div
            class="wm-time-tracking-page__empty"
            data-empty-state
        >

            <div class="wm-time-tracking-page__empty-icon">
                <i class="ph ph-calendar-x"></i>
            </div>

            <h3>
                No projects found
            </h3>

            <p>
                Try changing your search or filter criteria.
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
            Pagination
        ========================================================== --}}

        <div class="wm-time-tracking-page__footer">

        <span>
            Showing <strong>1–6</strong> of <strong>12</strong> projects
        </span>

            <div class="wm-time-tracking-page__pagination">

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

    </div>

@endsection


@push('script')
    <script>

        $(document).ready(function () {

            'use strict';


            // =========================================================
            // Elements
            // =========================================================

            const $search = $('#timeTrackingSearch');

            const $filterPanel = $('[data-filter-panel]');

            const $emptyState = $('[data-empty-state]');

            let currentView = 'list';


            // =========================================================
            // Helpers
            // =========================================================

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

                    search: $.trim(
                        $search.val()
                    ).toLowerCase(),

                    timeline: $('#timeStatusFilter').val(),

                    projectStatus: $('#timeProjectStatusFilter').val(),

                    owner: $('#timeOwnerFilter').val()

                };

            }


            // =========================================================
            // Match
            // =========================================================

            function matchesProject($element, filters) {

                const name = String(
                    $element.data('name') || ''
                ).toLowerCase();


                const timeline =
                    String(
                        $element.data('timeline') || ''
                    );


                const projectStatus =
                    String(
                        $element.data('project-status') || ''
                    );


                const owner =
                    String(
                        $element.data('owner') || ''
                    );


                if (
                    filters.search &&
                    name.indexOf(filters.search) === -1
                ) {

                    return false;

                }


                if (
                    filters.timeline &&
                    timeline !== filters.timeline
                ) {

                    return false;

                }


                if (
                    filters.projectStatus &&
                    projectStatus !== filters.projectStatus
                ) {

                    return false;

                }


                if (
                    filters.owner &&
                    owner !== filters.owner
                ) {

                    return false;

                }


                return true;

            }


            // =========================================================
            // Apply Filters
            // =========================================================

            function applyFilters() {

                const filters = getFilters();

                let visibleList = 0;

                let visibleGrid = 0;


                $('[data-project-row]').each(function () {

                    const $row = $(this);

                    const visible =
                        matchesProject(
                            $row,
                            filters
                        );


                    $row.toggleClass(
                        'is-hidden',
                        !visible
                    );


                    if (visible) {
                        visibleList++;
                    }

                });


                $('[data-project-card]').each(function () {

                    const $card = $(this);

                    const visible =
                        matchesProject(
                            $card,
                            filters
                        );


                    $card.toggleClass(
                        'is-hidden',
                        !visible
                    );


                    if (visible) {
                        visibleGrid++;
                    }

                });


                const totalVisible =
                    currentView === 'list'
                        ? visibleList
                        : visibleGrid;


                $emptyState.toggleClass(
                    'is-visible',
                    totalVisible === 0
                );


                updateFilterCount();

                updateActiveFilters();

            }


            // =========================================================
            // Filter Count
            // =========================================================

            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;


                if (filters.timeline) {
                    count++;
                }

                if (filters.projectStatus) {
                    count++;
                }

                if (filters.owner) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);

            }


            // =========================================================
            // Active Filter Chips
            // =========================================================

            function updateActiveFilters() {

                const filters = getFilters();

                const $container =
                    $('[data-active-filters]');


                $container.empty();


                if (filters.search) {

                    $container.append(`

                <button
                    type="button"
                    class="wm-time-tracking-page__filter-chip"
                    data-remove-search
                >
                    Search: "${$search.val()}"
                    <i class="ph ph-x"></i>
                </button>

            `);

                }


                const timelineLabels = {

                    'on-track': 'On Track',

                    'due-soon': 'Due Soon',

                    'overdue': 'Overdue',

                    'completed': 'Completed'

                };


                const projectStatusLabels = {

                    active: 'Active',

                    completed: 'Completed',

                    'on-hold': 'On Hold'

                };


                const ownerLabels = {

                    sarah: 'Sarah Wilson',

                    michael: 'Michael Johnson',

                    anna: 'Anna Kim',

                    robert: 'Robert Brown'

                };


                const chips = [

                    {
                        key: 'timeline',
                        value: filters.timeline,
                        label: timelineLabels[filters.timeline]
                    },

                    {
                        key: 'projectStatus',
                        value: filters.projectStatus,
                        label: projectStatusLabels[
                            filters.projectStatus
                            ]
                    },

                    {
                        key: 'owner',
                        value: filters.owner,
                        label: ownerLabels[filters.owner]
                    }

                ];


                $.each(
                    chips,
                    function (_, chip) {

                        if (!chip.value) {
                            return;
                        }


                        $container.append(`

                    <button
                        type="button"
                        class="wm-time-tracking-page__filter-chip"
                        data-remove-filter="${chip.key}"
                    >

                        ${chip.label}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                    }
                );

            }


            // =========================================================
            // Search
            // =========================================================

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


            // =========================================================
            // Filter Panel
            // =========================================================

            $(document).on(
                'click',
                '[data-filter-toggle]',
                function (event) {

                    event.stopPropagation();

                    $filterPanel.toggleClass(
                        'is-open'
                    );

                }
            );


            $(document).on(
                'click',
                '[data-filter-panel]',
                function (event) {

                    event.stopPropagation();

                }
            );


            $(document).on(
                'change',
                '#timeStatusFilter, #timeProjectStatusFilter, #timeOwnerFilter',
                function () {

                    applyFilters();

                }
            );


            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const key =
                        $(this).data(
                            'remove-filter'
                        );


                    const filterMap = {

                        timeline: '#timeStatusFilter',

                        projectStatus:
                            '#timeProjectStatusFilter',

                        owner:
                            '#timeOwnerFilter'

                    };


                    if (filterMap[key]) {

                        $(filterMap[key]).val('');

                    }


                    applyFilters();

                }
            );


            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    $search.val('');

                    $('#timeStatusFilter').val('');

                    $('#timeProjectStatusFilter').val('');

                    $('#timeOwnerFilter').val('');


                    $('[data-search-clear]')
                        .removeClass(
                            'is-visible'
                        );


                    applyFilters();

                }
            );


            // =========================================================
            // View Switcher
            // =========================================================

            function switchView(view) {

                currentView = view;


                $('[data-view]')
                    .removeClass(
                        'is-active'
                    );


                $(`[data-view="${view}"]`)
                    .addClass(
                        'is-active'
                    );


                $('[data-time-view]')
                    .removeClass(
                        'is-visible'
                    );


                $(`[data-time-view="${view}"]`)
                    .addClass(
                        'is-visible'
                    );


                applyFilters();

            }


            $(document).on(
                'click',
                '[data-view]',
                function () {

                    switchView(
                        $(this).data('view')
                    );

                }
            );


            // =========================================================
            // Sorting
            // =========================================================

            $(document).on(
                'change',
                '#timeTrackingSort',
                function () {

                    const sort =
                        $(this).val();


                    const $tbody =
                        $('.wm-time-tracking-page__table tbody');


                    const $rows =
                        $tbody
                            .find('[data-project-row]')
                            .get();


                    $rows.sort(
                        function (a, b) {

                            const $a = $(a);

                            const $b = $(b);


                            if (sort === 'name') {

                                return String(
                                    $a.data('name')
                                ).localeCompare(
                                    String(
                                        $b.data('name')
                                    )
                                );

                            }


                            if (sort === 'progress') {

                                return Number(
                                        $b.data('progress')
                                    ) -
                                    Number(
                                        $a.data('progress')
                                    );

                            }


                            if (sort === 'remaining') {

                                return Number(
                                        $a.data('remaining')
                                    ) -
                                    Number(
                                        $b.data('remaining')
                                    );

                            }


                            return String(
                                $a.data('deadline')
                            ).localeCompare(
                                String(
                                    $b.data('deadline')
                                )
                            );

                        }
                    );


                    $.each(
                        $rows,
                        function (_, row) {

                            $tbody.append(row);

                        }
                    );


                    applyFilters();

                }
            );


            // =========================================================
            // Project Actions
            // =========================================================

            $(document).on(
                'click',
                '[data-project-action="view"]',
                function () {

                    const projectName =
                        $(this).data(
                            'project-name'
                        );


                    showNotice(
                        'Project Overview',
                        `${projectName} overview is ready to connect.`,
                        'info'
                    );

                }
            );


            // =========================================================
            // Header Actions
            // =========================================================

            $(document).on(
                'click',
                '[data-header-action]',
                function () {

                    const action =
                        $(this).data(
                            'header-action'
                        );


                    if (
                        action === 'refresh'
                    ) {

                        const $button =
                            $(this);


                        $button
                            .prop(
                                'disabled',
                                true
                            )
                            .find('i')
                            .addClass(
                                'ph-spin'
                            );


                        setTimeout(
                            function () {

                                $button
                                    .prop(
                                        'disabled',
                                        false
                                    )
                                    .find('i')
                                    .removeClass(
                                        'ph-spin'
                                    );


                                showNotice(
                                    'Updated',
                                    'Project timeline information has been refreshed.',
                                    'success'
                                );

                            },
                            700
                        );


                        return;

                    }


                    if (
                        action === 'export'
                    ) {

                        showNotice(
                            'Export Time Tracking',
                            'Project timeline export is ready to connect with the backend.',
                            'info'
                        );

                    }

                }
            );


            // =========================================================
            // Outside Click
            // =========================================================

            $(document).on(
                'click',
                function () {

                    $filterPanel
                        .removeClass(
                            'is-open'
                        );

                }
            );


            // =========================================================
            // Escape
            // =========================================================

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

                    }

                }
            );


            // =========================================================
            // Initial
            // =========================================================

            switchView('list');

            applyFilters();

        });

    </script>
@endpush
