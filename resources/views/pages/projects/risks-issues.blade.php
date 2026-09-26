@extends('layout.app')

@section('main')

    <div class="wm-project-risks-issues-page">

        {{-- =========================================================
            Header
        ========================================================== --}}
        <div class="wm-project-risks-issues-page__header">

            <div class="wm-project-risks-issues-page__header-left">

                <nav class="wm-project-risks-issues-page__breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Risks &amp; Issues</span>

                </nav>

                <div class="wm-project-risks-issues-page__title-row">

                    <div class="wm-project-risks-issues-page__title-icon">
                        <i class="ph ph-shield-warning"></i>
                    </div>

                    <div>

                        <h1 class="wm-project-risks-issues-page__title">
                            Risks &amp; Issues
                        </h1>

                        <p class="wm-project-risks-issues-page__subtitle">
                            Identify, track, and manage project risks and issues.
                        </p>

                    </div>

                </div>

            </div>

            <div class="wm-project-risks-issues-page__header-actions">

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
                    data-header-action="add"
                >
                    <i class="ph ph-plus"></i>
                    Add Risk / Issue
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-risks-issues-page__navigation">

            <nav class="wm-project-risks-issues-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-risks-issues-page__nav-item is-active"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-risks-issues-page__summary">

            <button
                type="button"
                class="wm-project-risks-issues-page__summary-card is-active"
                data-summary-filter="all"
            >

            <span class="wm-project-risks-issues-page__summary-icon is-blue">
                <i class="ph ph-shield-warning"></i>
            </span>

                <span class="wm-project-risks-issues-page__summary-content">

                <span>Total Items</span>

                <strong>18</strong>

                <small>
                    12 risks · 6 issues
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-risks-issues-page__summary-card"
                data-summary-filter="high"
            >

            <span class="wm-project-risks-issues-page__summary-icon is-red">
                <i class="ph ph-warning"></i>
            </span>

                <span class="wm-project-risks-issues-page__summary-content">

                <span>High Priority</span>

                <strong>4</strong>

                <small>
                    Requires attention
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-risks-issues-page__summary-card"
                data-summary-filter="open"
            >

            <span class="wm-project-risks-issues-page__summary-icon is-orange">
                <i class="ph ph-circle"></i>
            </span>

                <span class="wm-project-risks-issues-page__summary-content">

                <span>Open</span>

                <strong>11</strong>

                <small>
                    Active items
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-risks-issues-page__summary-card"
                data-summary-filter="resolved"
            >

            <span class="wm-project-risks-issues-page__summary-icon is-green">
                <i class="ph ph-check-circle"></i>
            </span>

                <span class="wm-project-risks-issues-page__summary-content">

                <span>Resolved</span>

                <strong>7</strong>

                <small>
                    Successfully closed
                </small>

            </span>

            </button>

        </div>


        {{-- =========================================================
            Risk Health
        ========================================================== --}}
        <div class="wm-project-risks-issues-page__health">

            <div class="wm-project-risks-issues-page__health-main">

                <div class="wm-project-risks-issues-page__health-icon">
                    <i class="ph ph-shield-check"></i>
                </div>

                <div class="wm-project-risks-issues-page__health-content">

                <span>
                    Risk Health
                </span>

                    <strong>
                        Moderate
                    </strong>

                    <p>
                        There are 4 high-priority items that require attention.
                    </p>

                </div>

            </div>

            <div class="wm-project-risks-issues-page__health-stats">

                <div>
                    <strong>4</strong>
                    <span>High</span>
                </div>

                <div>
                    <strong>7</strong>
                    <span>Medium</span>
                </div>

                <div>
                    <strong>7</strong>
                    <span>Low</span>
                </div>

            </div>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-risks-issues-page__toolbar">

            <div class="wm-project-risks-issues-page__toolbar-left">

                <div class="wm-project-risks-issues-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="riskIssueSearch"
                        placeholder="Search risks and issues..."
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
                    class="wm-project-risks-issues-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-risks-issues-page__toolbar-right">

                <div class="wm-project-risks-issues-page__sort">

                    <button
                        type="button"
                        class="wm-project-risks-issues-page__toolbar-button"
                        data-sort-toggle
                    >
                        <i class="ph ph-sort-descending"></i>
                        Sort
                        <i class="ph ph-caret-down"></i>
                    </button>

                    <div
                        class="wm-project-risks-issues-page__sort-menu"
                        data-sort-menu
                    >

                        <button type="button" data-sort="priority">
                            <i class="ph ph-warning"></i>
                            Priority
                        </button>

                        <button type="button" data-sort="due">
                            <i class="ph ph-calendar"></i>
                            Due Date
                        </button>

                        <button type="button" data-sort="newest">
                            <i class="ph ph-clock"></i>
                            Newest
                        </button>

                        <button type="button" data-sort="oldest">
                            <i class="ph ph-clock-counter-clockwise"></i>
                            Oldest
                        </button>

                    </div>

                </div>


                <div class="wm-project-risks-issues-page__view-switcher">

                    <button
                        type="button"
                        class="is-active"
                        data-view="list"
                        title="List view"
                    >
                        <i class="ph ph-list"></i>
                    </button>

                    <button
                        type="button"
                        data-view="grid"
                        title="Grid view"
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
            class="wm-project-risks-issues-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-risks-issues-page__filter-field">

                <label for="riskTypeFilter">
                    Type
                </label>

                <select id="riskTypeFilter">

                    <option value="">All Types</option>
                    <option value="risk">Risk</option>
                    <option value="issue">Issue</option>

                </select>

            </div>


            <div class="wm-project-risks-issues-page__filter-field">

                <label for="riskPriorityFilter">
                    Priority
                </label>

                <select id="riskPriorityFilter">

                    <option value="">All Priorities</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>

                </select>

            </div>


            <div class="wm-project-risks-issues-page__filter-field">

                <label for="riskStatusFilter">
                    Status
                </label>

                <select id="riskStatusFilter">

                    <option value="">All Statuses</option>
                    <option value="open">Open</option>
                    <option value="in-progress">In Progress</option>
                    <option value="resolved">Resolved</option>

                </select>

            </div>


            <div class="wm-project-risks-issues-page__filter-field">

                <label for="riskOwnerFilter">
                    Owner
                </label>

                <select id="riskOwnerFilter">

                    <option value="">All Owners</option>
                    <option value="sarah">Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="james">James Miller</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-risks-issues-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-risks-issues-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            List View
        ========================================================== --}}
        <div
            class="wm-project-risks-issues-page__list-view is-visible"
            data-risk-view="list"
        >

            <div class="wm-project-risks-issues-page__card">

                <div class="wm-project-risks-issues-page__table-wrapper">

                    <table class="wm-project-risks-issues-page__table">

                        <thead>

                        <tr>

                            <th>Risk / Issue</th>
                            <th>Type</th>
                            <th>Priority</th>
                            <th>Owner</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Score</th>
                            <th></th>

                        </tr>

                        </thead>

                        <tbody>


                        {{-- Item 01 --}}
                        <tr
                            data-risk-item
                            data-type="risk"
                            data-priority="high"
                            data-status="open"
                            data-owner="sarah"
                            data-score="16"
                            data-date="2026-09-28"
                            data-created="2026-09-20"
                            data-search="extreme weather field research access weather conditions"
                        >

                            <td>

                                <div class="wm-project-risks-issues-page__item-name">

                                    <span class="is-risk">
                                        <i class="ph ph-warning"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Extreme Weather Conditions
                                        </strong>

                                        <small>
                                            Risk #RSK-001
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__type is-risk">
                                    Risk
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__priority is-high">
                                    High
                                </span>
                            </td>

                            <td>
                                Sarah Wilson
                            </td>

                            <td>
                                Sep 28, 2026
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__status is-open">
                                    Open
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-risks-issues-page__score is-high">
                                    16
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-risks-issues-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-risks-issues-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-risk-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-risk-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-risk-action="resolve">
                                            <i class="ph ph-check"></i>
                                            Resolve
                                        </button>

                                        <button data-risk-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Item 02 --}}
                        <tr
                            data-risk-item
                            data-type="issue"
                            data-priority="high"
                            data-status="in-progress"
                            data-owner="michael"
                            data-score="15"
                            data-date="2026-09-26"
                            data-created="2026-09-19"
                            data-search="sensor equipment delayed shipment field equipment"
                        >

                            <td>

                                <div class="wm-project-risks-issues-page__item-name">

                                    <span class="is-issue">
                                        <i class="ph ph-bug"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Sensor Equipment Delay
                                        </strong>

                                        <small>
                                            Issue #ISS-002
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__type is-issue">
                                    Issue
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__priority is-high">
                                    High
                                </span>
                            </td>

                            <td>
                                Michael Johnson
                            </td>

                            <td>
                                Sep 26, 2026
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__status is-progress">
                                    In Progress
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-risks-issues-page__score is-high">
                                    15
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-risks-issues-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-risks-issues-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-risk-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-risk-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-risk-action="resolve">
                                            <i class="ph ph-check"></i>
                                            Resolve
                                        </button>

                                        <button data-risk-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Item 03 --}}
                        <tr
                            data-risk-item
                            data-type="risk"
                            data-priority="medium"
                            data-status="open"
                            data-owner="anna"
                            data-score="9"
                            data-date="2026-10-03"
                            data-created="2026-09-18"
                            data-search="data quality inconsistent field observations validation"
                        >

                            <td>

                                <div class="wm-project-risks-issues-page__item-name">

                                    <span class="is-risk">
                                        <i class="ph ph-warning"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Inconsistent Data Quality
                                        </strong>

                                        <small>
                                            Risk #RSK-003
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__type is-risk">
                                    Risk
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__priority is-medium">
                                    Medium
                                </span>
                            </td>

                            <td>
                                Anna Kim
                            </td>

                            <td>
                                Oct 03, 2026
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__status is-open">
                                    Open
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-risks-issues-page__score is-medium">
                                    9
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-risks-issues-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-risks-issues-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-risk-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-risk-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-risk-action="resolve">
                                            <i class="ph ph-check"></i>
                                            Resolve
                                        </button>

                                        <button data-risk-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Item 04 --}}
                        <tr
                            data-risk-item
                            data-type="issue"
                            data-priority="medium"
                            data-status="open"
                            data-owner="james"
                            data-score="8"
                            data-date="2026-09-30"
                            data-created="2026-09-17"
                            data-search="research participant scheduling interviews delayed"
                        >

                            <td>

                                <div class="wm-project-risks-issues-page__item-name">

                                    <span class="is-issue">
                                        <i class="ph ph-bug"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Participant Scheduling
                                        </strong>

                                        <small>
                                            Issue #ISS-004
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__type is-issue">
                                    Issue
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__priority is-medium">
                                    Medium
                                </span>
                            </td>

                            <td>
                                James Miller
                            </td>

                            <td>
                                Sep 30, 2026
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__status is-open">
                                    Open
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-risks-issues-page__score is-medium">
                                    8
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-risks-issues-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-risks-issues-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-risk-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-risk-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-risk-action="resolve">
                                            <i class="ph ph-check"></i>
                                            Resolve
                                        </button>

                                        <button data-risk-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Item 05 --}}
                        <tr
                            data-risk-item
                            data-type="risk"
                            data-priority="low"
                            data-status="open"
                            data-owner="anna"
                            data-score="4"
                            data-date="2026-10-10"
                            data-created="2026-09-15"
                            data-search="analysis software compatibility statistical software"
                        >

                            <td>

                                <div class="wm-project-risks-issues-page__item-name">

                                    <span class="is-risk">
                                        <i class="ph ph-warning"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Software Compatibility
                                        </strong>

                                        <small>
                                            Risk #RSK-005
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__type is-risk">
                                    Risk
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__priority is-low">
                                    Low
                                </span>
                            </td>

                            <td>
                                Anna Kim
                            </td>

                            <td>
                                Oct 10, 2026
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__status is-open">
                                    Open
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-risks-issues-page__score is-low">
                                    4
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-risks-issues-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-risks-issues-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-risk-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-risk-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-risk-action="resolve">
                                            <i class="ph ph-check"></i>
                                            Resolve
                                        </button>

                                        <button data-risk-action="delete">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Item 06 --}}
                        <tr
                            data-risk-item
                            data-type="issue"
                            data-priority="low"
                            data-status="resolved"
                            data-owner="sarah"
                            data-score="3"
                            data-date="2026-09-22"
                            data-created="2026-09-10"
                            data-search="document approval ethics documentation resolved"
                        >

                            <td>

                                <div class="wm-project-risks-issues-page__item-name">

                                    <span class="is-issue">
                                        <i class="ph ph-bug"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Document Approval Delay
                                        </strong>

                                        <small>
                                            Issue #ISS-006
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__type is-issue">
                                    Issue
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__priority is-low">
                                    Low
                                </span>
                            </td>

                            <td>
                                Sarah Wilson
                            </td>

                            <td>
                                Sep 22, 2026
                            </td>

                            <td>
                                <span class="wm-project-risks-issues-page__status is-resolved">
                                    Resolved
                                </span>
                            </td>

                            <td>

                                <span class="wm-project-risks-issues-page__score is-low">
                                    3
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-risks-issues-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-project-risks-issues-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-risk-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-risk-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-risk-action="reopen">
                                            <i class="ph ph-arrow-counter-clockwise"></i>
                                            Reopen
                                        </button>

                                        <button data-risk-action="delete">
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
            class="wm-project-risks-issues-page__grid-view"
            data-risk-view="grid"
        >

            <div
                class="wm-project-risks-issues-page__risk-grid"
            >

                {{-- Grid Card 01 --}}
                <article
                    class="wm-project-risks-issues-page__risk-card"
                    data-risk-grid-item
                    data-type="risk"
                    data-priority="high"
                    data-status="open"
                    data-owner="sarah"
                    data-score="16"
                    data-date="2026-09-28"
                    data-created="2026-09-20"
                    data-search="extreme weather field research access weather conditions"
                >

                    <div class="wm-project-risks-issues-page__risk-card-top">

                    <span class="wm-project-risks-issues-page__type is-risk">
                        Risk
                    </span>

                        <div class="wm-project-risks-issues-page__row-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-risks-issues-page__action-menu"
                                data-action-menu
                            >

                                <button data-risk-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-risk-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-risk-action="resolve">
                                    <i class="ph ph-check"></i>
                                    Resolve
                                </button>

                                <button data-risk-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <h3>
                        Extreme Weather Conditions
                    </h3>

                    <p>
                        Severe weather could delay field research activities and site access.
                    </p>

                    <div class="wm-project-risks-issues-page__risk-card-meta">

                        <div>

                            <span>Owner</span>

                            <strong>
                                Sarah Wilson
                            </strong>

                        </div>

                        <div>

                            <span>Due Date</span>

                            <strong>
                                Sep 28
                            </strong>

                        </div>

                    </div>

                    <div class="wm-project-risks-issues-page__risk-card-footer">

                    <span class="wm-project-risks-issues-page__priority is-high">
                        High
                    </span>

                        <span class="wm-project-risks-issues-page__score is-high">
                        Score 16
                    </span>

                        <span class="wm-project-risks-issues-page__status is-open">
                        Open
                    </span>

                    </div>

                </article>


                {{-- Grid Card 02 --}}
                <article
                    class="wm-project-risks-issues-page__risk-card"
                    data-risk-grid-item
                    data-type="issue"
                    data-priority="high"
                    data-status="in-progress"
                    data-owner="michael"
                    data-score="15"
                    data-date="2026-09-26"
                    data-created="2026-09-19"
                    data-search="sensor equipment delayed shipment field equipment"
                >

                    <div class="wm-project-risks-issues-page__risk-card-top">

                    <span class="wm-project-risks-issues-page__type is-issue">
                        Issue
                    </span>

                        <div class="wm-project-risks-issues-page__row-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-risks-issues-page__action-menu"
                                data-action-menu
                            >

                                <button data-risk-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-risk-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-risk-action="resolve">
                                    <i class="ph ph-check"></i>
                                    Resolve
                                </button>

                                <button data-risk-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <h3>
                        Sensor Equipment Delay
                    </h3>

                    <p>
                        Sensor shipment has been delayed and may impact the field schedule.
                    </p>

                    <div class="wm-project-risks-issues-page__risk-card-meta">

                        <div>

                            <span>Owner</span>

                            <strong>
                                Michael Johnson
                            </strong>

                        </div>

                        <div>

                            <span>Due Date</span>

                            <strong>
                                Sep 26
                            </strong>

                        </div>

                    </div>

                    <div class="wm-project-risks-issues-page__risk-card-footer">

                    <span class="wm-project-risks-issues-page__priority is-high">
                        High
                    </span>

                        <span class="wm-project-risks-issues-page__score is-high">
                        Score 15
                    </span>

                        <span class="wm-project-risks-issues-page__status is-progress">
                        In Progress
                    </span>

                    </div>

                </article>


                {{-- Grid Card 03 --}}
                <article
                    class="wm-project-risks-issues-page__risk-card"
                    data-risk-grid-item
                    data-type="risk"
                    data-priority="medium"
                    data-status="open"
                    data-owner="anna"
                    data-score="9"
                    data-date="2026-10-03"
                    data-created="2026-09-18"
                    data-search="data quality inconsistent field observations validation"
                >

                    <div class="wm-project-risks-issues-page__risk-card-top">

                    <span class="wm-project-risks-issues-page__type is-risk">
                        Risk
                    </span>

                        <div class="wm-project-risks-issues-page__row-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-risks-issues-page__action-menu"
                                data-action-menu
                            >

                                <button data-risk-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-risk-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-risk-action="resolve">
                                    <i class="ph ph-check"></i>
                                    Resolve
                                </button>

                                <button data-risk-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <h3>
                        Inconsistent Data Quality
                    </h3>

                    <p>
                        Field observations may contain inconsistencies requiring additional validation.
                    </p>

                    <div class="wm-project-risks-issues-page__risk-card-meta">

                        <div>

                            <span>Owner</span>

                            <strong>
                                Anna Kim
                            </strong>

                        </div>

                        <div>

                            <span>Due Date</span>

                            <strong>
                                Oct 03
                            </strong>

                        </div>

                    </div>

                    <div class="wm-project-risks-issues-page__risk-card-footer">

                    <span class="wm-project-risks-issues-page__priority is-medium">
                        Medium
                    </span>

                        <span class="wm-project-risks-issues-page__score is-medium">
                        Score 9
                    </span>

                        <span class="wm-project-risks-issues-page__status is-open">
                        Open
                    </span>

                    </div>

                </article>


                {{-- Grid Card 04 --}}
                <article
                    class="wm-project-risks-issues-page__risk-card"
                    data-risk-grid-item
                    data-type="issue"
                    data-priority="medium"
                    data-status="open"
                    data-owner="james"
                    data-score="8"
                    data-date="2026-09-30"
                    data-created="2026-09-17"
                    data-search="research participant scheduling interviews delayed"
                >

                    <div class="wm-project-risks-issues-page__risk-card-top">

                    <span class="wm-project-risks-issues-page__type is-issue">
                        Issue
                    </span>

                        <div class="wm-project-risks-issues-page__row-action">

                            <button
                                type="button"
                                data-action-menu-toggle
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div
                                class="wm-project-risks-issues-page__action-menu"
                                data-action-menu
                            >

                                <button data-risk-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button data-risk-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button data-risk-action="resolve">
                                    <i class="ph ph-check"></i>
                                    Resolve
                                </button>

                                <button data-risk-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                    <h3>
                        Participant Scheduling
                    </h3>

                    <p>
                        Several research participants need to be rescheduled for interviews.
                    </p>

                    <div class="wm-project-risks-issues-page__risk-card-meta">

                        <div>

                            <span>Owner</span>

                            <strong>
                                James Miller
                            </strong>

                        </div>

                        <div>

                            <span>Due Date</span>

                            <strong>
                                Sep 30
                            </strong>

                        </div>

                    </div>

                    <div class="wm-project-risks-issues-page__risk-card-footer">

                    <span class="wm-project-risks-issues-page__priority is-medium">
                        Medium
                    </span>

                        <span class="wm-project-risks-issues-page__score is-medium">
                        Score 8
                    </span>

                        <span class="wm-project-risks-issues-page__status is-open">
                        Open
                    </span>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}
        <div
            class="wm-project-risks-issues-page__empty"
            data-empty-state
        >

            <div class="wm-project-risks-issues-page__empty-icon">
                <i class="ph ph-shield-warning"></i>
            </div>

            <h3>
                No risks or issues found
            </h3>

            <p>
                Try changing your search or filters, or add a new risk or issue.
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
        <div class="wm-project-risks-issues-page__footer">

        <span>
            Showing
            <strong data-visible-count>6</strong>
            items
        </span>

            <div class="wm-project-risks-issues-page__pagination">

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


        {{-- =========================================================
            Add Risk / Issue Modal
        ========================================================== --}}
        <div
            class="modal fade"
            id="addRiskIssueModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Add Risk / Issue
                            </h5>

                            <p class="wm-project-risks-issues-page__modal-subtitle">
                                Record a new project risk or issue.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <div class="row g-3">

                            <div class="col-md-4">

                                <label
                                    for="riskItemType"
                                    class="form-label"
                                >
                                    Type
                                </label>

                                <select
                                    id="riskItemType"
                                    class="form-select"
                                >

                                    <option value="risk">
                                        Risk
                                    </option>

                                    <option value="issue">
                                        Issue
                                    </option>

                                </select>

                            </div>


                            <div class="col-md-4">

                                <label
                                    for="riskItemPriority"
                                    class="form-label"
                                >
                                    Priority
                                </label>

                                <select
                                    id="riskItemPriority"
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


                            <div class="col-md-4">

                                <label
                                    for="riskItemOwner"
                                    class="form-label"
                                >
                                    Owner
                                </label>

                                <select
                                    id="riskItemOwner"
                                    class="form-select"
                                >

                                    <option value="sarah">
                                        Sarah Wilson
                                    </option>

                                    <option value="michael">
                                        Michael Johnson
                                    </option>

                                    <option value="anna">
                                        Anna Kim
                                    </option>

                                    <option value="james">
                                        James Miller
                                    </option>

                                </select>

                            </div>


                            <div class="col-12">

                                <label
                                    for="riskItemTitle"
                                    class="form-label"
                                >
                                    Title
                                </label>

                                <input
                                    type="text"
                                    id="riskItemTitle"
                                    class="form-control"
                                    placeholder="Enter risk or issue title"
                                >

                            </div>


                            <div class="col-12">

                                <label
                                    for="riskItemDescription"
                                    class="form-label"
                                >
                                    Description
                                </label>

                                <textarea
                                    id="riskItemDescription"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Describe the risk or issue..."
                                ></textarea>

                            </div>


                            <div class="col-md-6">

                                <label
                                    for="riskItemDueDate"
                                    class="form-label"
                                >
                                    Due Date
                                </label>

                                <input
                                    type="date"
                                    id="riskItemDueDate"
                                    class="form-control"
                                >

                            </div>


                            <div class="col-md-6">

                                <label
                                    for="riskItemScore"
                                    class="form-label"
                                >
                                    Risk Score
                                </label>

                                <input
                                    type="number"
                                    id="riskItemScore"
                                    class="form-control"
                                    min="1"
                                    max="25"
                                    value="9"
                                >

                            </div>

                        </div>

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
                            data-save-risk
                        >
                            <i class="ph ph-check"></i>
                            Add Risk / Issue
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

            const $search =
                $('#riskIssueSearch');

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

                risk: 'Risk',

                issue: 'Issue'

            };


            const priorityLabels = {

                high: 'High',

                medium: 'Medium',

                low: 'Low'

            };


            const statusLabels = {

                open: 'Open',

                'in-progress': 'In Progress',

                resolved: 'Resolved'

            };


            const ownerLabels = {

                sarah: 'Sarah Wilson',

                michael: 'Michael Johnson',

                anna: 'Anna Kim',

                james: 'James Miller'

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
            // Get Filters
            // ---------------------------------------------------------

            function getFilters() {

                return {

                    type:
                        $('#riskTypeFilter').val(),

                    priority:
                        $('#riskPriorityFilter').val(),

                    status:
                        $('#riskStatusFilter').val(),

                    owner:
                        $('#riskOwnerFilter').val(),

                    search:
                        $.trim(
                            $search.val()
                        ).toLowerCase()

                };

            }


            // ---------------------------------------------------------
            // Filter Count
            // ---------------------------------------------------------

            function updateFilterCount() {

                const filters =
                    getFilters();

                let count = 0;


                if (filters.type) {
                    count++;
                }

                if (filters.priority) {
                    count++;
                }

                if (filters.status) {
                    count++;
                }

                if (filters.owner) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);

            }


            // ---------------------------------------------------------
            // Active Filter Chips
            // ---------------------------------------------------------

            function updateActiveFilters() {

                const filters =
                    getFilters();


                $activeFilters.empty();


                if (filters.search) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-risks-issues-page__filter-chip"
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
                        class="wm-project-risks-issues-page__filter-chip"
                        data-remove-filter="type"
                    >

                        ${typeLabels[filters.type]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.priority) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-risks-issues-page__filter-chip"
                        data-remove-filter="priority"
                    >

                        ${priorityLabels[filters.priority]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.status) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-risks-issues-page__filter-chip"
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
                        class="wm-project-risks-issues-page__filter-chip"
                        data-remove-filter="owner"
                    >

                        ${ownerLabels[filters.owner]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }

            }


            // ---------------------------------------------------------
            // Match Item
            // ---------------------------------------------------------

            function matchesItem(
                $item,
                filters
            ) {

                const type =
                    $item.data('type');

                const priority =
                    $item.data('priority');

                const status =
                    $item.data('status');

                const owner =
                    $item.data('owner');

                const searchText =
                    String(
                        $item.data('search') || ''
                    ).toLowerCase();


                if (
                    filters.type &&
                    type !== filters.type
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


                $('[data-risk-item]')
                    .each(function () {

                        const $item =
                            $(this);

                        const visible =
                            matchesItem(
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


                $('[data-risk-grid-item]')
                    .each(function () {

                        const $item =
                            $(this);

                        const visible =
                            matchesItem(
                                $item,
                                filters
                            );


                        $item.toggleClass(
                            'is-hidden',
                            !visible
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
                '#riskTypeFilter, #riskPriorityFilter, #riskStatusFilter, #riskOwnerFilter',
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

                        $('#riskTypeFilter')
                            .val('');

                    }


                    if (
                        filter === 'priority'
                    ) {

                        $('#riskPriorityFilter')
                            .val('');

                    }


                    if (
                        filter === 'status'
                    ) {

                        $('#riskStatusFilter')
                            .val('');

                    }


                    if (
                        filter === 'owner'
                    ) {

                        $('#riskOwnerFilter')
                            .val('');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Clear Filters
            // ---------------------------------------------------------

            function clearFilters() {

                $('#riskTypeFilter')
                    .val('');

                $('#riskPriorityFilter')
                    .val('');

                $('#riskStatusFilter')
                    .val('');

                $('#riskOwnerFilter')
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


                    $('#riskTypeFilter')
                        .val('');

                    $('#riskPriorityFilter')
                        .val('');

                    $('#riskStatusFilter')
                        .val('');

                    $('#riskOwnerFilter')
                        .val('');


                    if (
                        filter === 'high'
                    ) {

                        $('#riskPriorityFilter')
                            .val('high');

                    }


                    if (
                        filter === 'open'
                    ) {

                        $('#riskStatusFilter')
                            .val('open');

                    }


                    if (
                        filter === 'resolved'
                    ) {

                        $('#riskStatusFilter')
                            .val('resolved');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // View Switcher
            // ---------------------------------------------------------

            function switchView(
                view
            ) {

                $('[data-view]')
                    .removeClass(
                        'is-active'
                    );


                $(`[data-view="${view}"]`)
                    .addClass(
                        'is-active'
                    );


                $('[data-risk-view]')
                    .removeClass(
                        'is-visible'
                    );


                $(`[data-risk-view="${view}"]`)
                    .addClass(
                        'is-visible'
                    );

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


            // ---------------------------------------------------------
            // Sorting
            // ---------------------------------------------------------

            function sortItems(
                sortType
            ) {

                const $tbody =
                    $('.wm-project-risks-issues-page__table tbody');


                const $grid =
                    $('.wm-project-risks-issues-page__risk-grid');


                let listItems =
                    $tbody.find(
                        '[data-risk-item]'
                    ).get();


                let gridItems =
                    $grid.find(
                        '[data-risk-grid-item]'
                    ).get();


                function compare(
                    a,
                    b
                ) {

                    const $a =
                        $(a);

                    const $b =
                        $(b);


                    if (
                        sortType === 'priority'
                    ) {

                        const priorityMap = {
                            high: 3,
                            medium: 2,
                            low: 1
                        };


                        return (
                            priorityMap[
                                $b.data('priority')
                                ] -
                            priorityMap[
                                $a.data('priority')
                                ]
                        );

                    }


                    if (
                        sortType === 'due'
                    ) {

                        return String(
                            $a.data('date')
                        ).localeCompare(
                            String(
                                $b.data('date')
                            )
                        );

                    }


                    if (
                        sortType === 'newest'
                    ) {

                        return String(
                            $b.data('created')
                        ).localeCompare(
                            String(
                                $a.data('created')
                            )
                        );

                    }


                    if (
                        sortType === 'oldest'
                    ) {

                        return String(
                            $a.data('created')
                        ).localeCompare(
                            String(
                                $b.data('created')
                            )
                        );

                    }


                    return 0;

                }


                listItems.sort(compare);

                gridItems.sort(compare);


                $.each(
                    listItems,
                    function (_, item) {

                        $tbody.append(item);

                    }
                );


                $.each(
                    gridItems,
                    function (_, item) {

                        $grid.append(item);

                    }
                );


                $sortMenu
                    .removeClass(
                        'is-open'
                    );


                applyFilters();

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


                    const $menu =
                        $(this)
                            .siblings(
                                '[data-action-menu]'
                            );


                    $('[data-action-menu]')
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
            // Risk Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-risk-action]',
                function () {

                    const action =
                        $(this).data(
                            'risk-action'
                        );


                    const $item =
                        $(this).closest(
                            '[data-risk-item], [data-risk-grid-item]'
                        );


                    const title =
                        $item.find(
                            '.wm-project-risks-issues-page__item-name strong, h3'
                        ).first().text().trim();


                    $('[data-action-menu]')
                        .removeClass(
                            'is-open'
                        );


                    if (
                        action === 'view'
                    ) {

                        showNotice(
                            'View Risk / Issue',
                            `Opening "${title}".`
                        );

                        return;

                    }


                    if (
                        action === 'edit'
                    ) {

                        showNotice(
                            'Edit Risk / Issue',
                            `Editing "${title}".`
                        );

                        return;

                    }


                    if (
                        action === 'resolve'
                    ) {

                        if (
                            typeof Swal !== 'undefined'
                        ) {

                            Swal.fire({

                                title: 'Resolve Item?',

                                text: `Mark "${title}" as resolved.`,

                                icon: 'question',

                                showCancelButton: true,

                                confirmButtonColor: '#10B981',

                                cancelButtonColor: '#6B7280',

                                confirmButtonText: 'Resolve'

                            }).then(
                                function (result) {

                                    if (
                                        result.isConfirmed
                                    ) {

                                        showNotice(
                                            'Resolved',
                                            `"${title}" has been resolved.`,
                                            'success'
                                        );

                                    }

                                }
                            );

                        }

                        return;

                    }


                    if (
                        action === 'reopen'
                    ) {

                        showNotice(
                            'Item Reopened',
                            `"${title}" has been reopened.`,
                            'success'
                        );

                        return;

                    }


                    if (
                        action === 'delete'
                    ) {

                        if (
                            typeof Swal !== 'undefined'
                        ) {

                            Swal.fire({

                                title: 'Delete Item?',

                                text: `"${title}" will be permanently removed.`,

                                icon: 'warning',

                                showCancelButton: true,

                                confirmButtonColor: '#EF4444',

                                cancelButtonColor: '#6B7280',

                                confirmButtonText: 'Delete'

                            }).then(
                                function (result) {

                                    if (
                                        result.isConfirmed
                                    ) {

                                        showNotice(
                                            'Item Deleted',
                                            `"${title}" has been deleted.`,
                                            'success'
                                        );

                                    }

                                }
                            );

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
                        $(this).data(
                            'header-action'
                        );


                    if (
                        action === 'export'
                    ) {

                        showNotice(
                            'Export Risks & Issues',
                            'The export process is ready to connect.'
                        );

                        return;

                    }


                    if (
                        action === 'add'
                    ) {

                        $('#addRiskIssueModal')
                            .modal('show');

                    }

                }
            );


            // ---------------------------------------------------------
            // Save Risk / Issue
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-save-risk]',
                function () {

                    const title =
                        $.trim(
                            $('#riskItemTitle').val()
                        );


                    if (!title) {

                        showNotice(
                            'Title Required',
                            'Please enter a risk or issue title.',
                            'warning'
                        );

                        $('#riskItemTitle')
                            .trigger('focus');

                        return;

                    }


                    $('#addRiskIssueModal')
                        .modal('hide');


                    showNotice(
                        'Item Added',
                        `"${title}" has been added successfully.`,
                        'success'
                    );


                    $('#riskItemTitle')
                        .val('');

                    $('#riskItemDescription')
                        .val('');

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


                    $('[data-action-menu]')
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


                        $('[data-action-menu]')
                            .removeClass(
                                'is-open'
                            );

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
