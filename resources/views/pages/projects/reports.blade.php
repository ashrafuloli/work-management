@extends('layout.app')

@section('main')

    <div class="wm-project-reports-page">

        {{-- =========================================================
            Header
        ========================================================== --}}
        <div class="wm-project-reports-page__header">

            <div class="wm-project-reports-page__header-left">

                <nav class="wm-project-reports-page__breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Reports</span>

                </nav>

                <div class="wm-project-reports-page__title-row">

                    <div class="wm-project-reports-page__title-icon">
                        <i class="ph ph-chart-bar"></i>
                    </div>

                    <div>

                        <h1 class="wm-project-reports-page__title">
                            Project Reports
                        </h1>

                        <p class="wm-project-reports-page__subtitle">
                            Monitor project performance, progress, and team productivity.
                        </p>

                    </div>

                </div>

            </div>

            <div class="wm-project-reports-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    data-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export Report
                </button>

                <button
                    type="button"
                    class="btn btn-primary"
                    data-header-action="generate"
                >
                    <i class="ph ph-file-plus"></i>
                    Generate Report
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-reports-page__navigation">

            <nav class="wm-project-reports-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item is-active"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-reports-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-reports-page__summary">

            <button
                type="button"
                class="wm-project-reports-page__summary-card is-active"
                data-summary-filter="all"
            >

            <span class="wm-project-reports-page__summary-icon wm-project-reports-page__summary-icon--blue">
                <i class="ph ph-chart-line-up"></i>
            </span>

                <span class="wm-project-reports-page__summary-content">

                <span>Overall Progress</span>

                <strong>68%</strong>

                <small>
                    +8% this month
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-reports-page__summary-card"
                data-summary-filter="tasks"
            >

            <span class="wm-project-reports-page__summary-icon wm-project-reports-page__summary-icon--green">
                <i class="ph ph-check-circle"></i>
            </span>

                <span class="wm-project-reports-page__summary-content">

                <span>Tasks Completed</span>

                <strong>24 / 36</strong>

                <small>
                    67% completion
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-reports-page__summary-card"
                data-summary-filter="hours"
            >

            <span class="wm-project-reports-page__summary-icon wm-project-reports-page__summary-icon--purple">
                <i class="ph ph-clock"></i>
            </span>

                <span class="wm-project-reports-page__summary-content">

                <span>Hours Tracked</span>

                <strong>842h</strong>

                <small>
                    76% of estimate
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-project-reports-page__summary-card"
                data-summary-filter="milestones"
            >

            <span class="wm-project-reports-page__summary-icon wm-project-reports-page__summary-icon--orange">
                <i class="ph ph-flag"></i>
            </span>

                <span class="wm-project-reports-page__summary-content">

                <span>Milestones</span>

                <strong>5 / 8</strong>

                <small>
                    3 remaining
                </small>

            </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-reports-page__toolbar">

            <div class="wm-project-reports-page__toolbar-left">

                <div class="wm-project-reports-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="projectReportSearch"
                        placeholder="Search reports..."
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
                    class="wm-project-reports-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-reports-page__toolbar-right">

                <button
                    type="button"
                    class="wm-project-reports-page__toolbar-button"
                    data-refresh
                >
                    <i class="ph ph-arrows-clockwise"></i>
                    Refresh
                </button>

                <div class="wm-project-reports-page__view-switcher">

                    <button
                        type="button"
                        class="is-active"
                        data-view="overview"
                    >
                        <i class="ph ph-chart-bar"></i>
                        Overview
                    </button>

                    <button
                        type="button"
                        data-view="table"
                    >
                        <i class="ph ph-list"></i>
                        Table
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div
            class="wm-project-reports-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-reports-page__filter-field">

                <label for="reportDateFilter">
                    Date Range
                </label>

                <select id="reportDateFilter">

                    <option value="">All Time</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                    <option value="quarter">This Quarter</option>

                </select>

            </div>


            <div class="wm-project-reports-page__filter-field">

                <label for="reportTypeFilter">
                    Report Type
                </label>

                <select id="reportTypeFilter">

                    <option value="">All Reports</option>
                    <option value="performance">Performance</option>
                    <option value="tasks">Task Report</option>
                    <option value="team">Team Report</option>
                    <option value="milestone">Milestone Report</option>

                </select>

            </div>


            <div class="wm-project-reports-page__filter-field">

                <label for="reportStatusFilter">
                    Project Status
                </label>

                <select id="reportStatusFilter">

                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="on-hold">On Hold</option>
                    <option value="completed">Completed</option>

                </select>

            </div>


            <div class="wm-project-reports-page__filter-field">

                <label for="reportOwnerFilter">
                    Owner
                </label>

                <select id="reportOwnerFilter">

                    <option value="">All Owners</option>
                    <option value="sarah">Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-reports-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-reports-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            Overview
        ========================================================== --}}
        <div
            class="wm-project-reports-page__overview"
            data-report-view="overview"
        >

            {{-- Performance --}}
            <div class="wm-project-reports-page__card wm-project-reports-page__card--performance">

                <div class="wm-project-reports-page__card-header">

                    <div>

                        <h2>
                            Project Performance
                        </h2>

                        <p>
                            Overall project progress over the last six months.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__card-action"
                        data-chart-action="performance"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                </div>


                <div class="wm-project-reports-page__performance">

                    <div class="wm-project-reports-page__performance-chart">

                        <div class="wm-project-reports-page__chart-y-axis">

                            <span>100%</span>
                            <span>75%</span>
                            <span>50%</span>
                            <span>25%</span>
                            <span>0%</span>

                        </div>

                        <div class="wm-project-reports-page__chart-area">

                            <div class="wm-project-reports-page__chart-grid">

                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                            <div class="wm-project-reports-page__chart-bars">

                                <div class="wm-project-reports-page__chart-bar-group">
                                    <span style="height: 28%;"></span>
                                    <small>Apr</small>
                                </div>

                                <div class="wm-project-reports-page__chart-bar-group">
                                    <span style="height: 38%;"></span>
                                    <small>May</small>
                                </div>

                                <div class="wm-project-reports-page__chart-bar-group">
                                    <span style="height: 46%;"></span>
                                    <small>Jun</small>
                                </div>

                                <div class="wm-project-reports-page__chart-bar-group">
                                    <span style="height: 55%;"></span>
                                    <small>Jul</small>
                                </div>

                                <div class="wm-project-reports-page__chart-bar-group">
                                    <span style="height: 63%;"></span>
                                    <small>Aug</small>
                                </div>

                                <div class="wm-project-reports-page__chart-bar-group is-current">
                                    <span style="height: 68%;"></span>
                                    <small>Sep</small>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="wm-project-reports-page__performance-stat">

                        <div class="wm-project-reports-page__performance-stat-ring">

                        <span>
                            68%
                        </span>

                        </div>

                        <strong>
                            Overall Progress
                        </strong>

                        <small>
                            8% increase from last month
                        </small>

                    </div>

                </div>

            </div>


            {{-- Task Completion --}}
            <div class="wm-project-reports-page__card">

                <div class="wm-project-reports-page__card-header">

                    <div>

                        <h2>
                            Task Completion
                        </h2>

                        <p>
                            Current task distribution.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__card-action"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                </div>


                <div class="wm-project-reports-page__task-completion">

                    <div class="wm-project-reports-page__donut">

                        <div class="wm-project-reports-page__donut-inner">
                            <strong>36</strong>
                            <span>Total</span>
                        </div>

                    </div>

                    <div class="wm-project-reports-page__legend">

                        <div>
                            <span class="is-completed"></span>
                            <label>Completed</label>
                            <strong>24</strong>
                        </div>

                        <div>
                            <span class="is-progress"></span>
                            <label>In Progress</label>
                            <strong>6</strong>
                        </div>

                        <div>
                            <span class="is-review"></span>
                            <label>In Review</label>
                            <strong>3</strong>
                        </div>

                        <div>
                            <span class="is-todo"></span>
                            <label>To Do</label>
                            <strong>3</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Project Breakdown --}}
            <div class="wm-project-reports-page__card">

                <div class="wm-project-reports-page__card-header">

                    <div>

                        <h2>
                            Project Breakdown
                        </h2>

                        <p>
                            Progress across project areas.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__card-action"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                </div>


                <div class="wm-project-reports-page__breakdown">

                    <div class="wm-project-reports-page__breakdown-item">

                        <div>

                            <strong>
                                Research Planning
                            </strong>

                            <span>
                            92%
                        </span>

                        </div>

                        <div class="wm-project-reports-page__bar">
                            <span style="width: 92%;"></span>
                        </div>

                    </div>


                    <div class="wm-project-reports-page__breakdown-item">

                        <div>

                            <strong>
                                Field Data Collection
                            </strong>

                            <span>
                            76%
                        </span>

                        </div>

                        <div class="wm-project-reports-page__bar">
                            <span style="width: 76%;"></span>
                        </div>

                    </div>


                    <div class="wm-project-reports-page__breakdown-item">

                        <div>

                            <strong>
                                Data Analysis
                            </strong>

                            <span>
                            61%
                        </span>

                        </div>

                        <div class="wm-project-reports-page__bar">
                            <span style="width: 61%;"></span>
                        </div>

                    </div>


                    <div class="wm-project-reports-page__breakdown-item">

                        <div>

                            <strong>
                                Stakeholder Engagement
                            </strong>

                            <span>
                            54%
                        </span>

                        </div>

                        <div class="wm-project-reports-page__bar">
                            <span style="width: 54%;"></span>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Team Productivity --}}
            <div class="wm-project-reports-page__card">

                <div class="wm-project-reports-page__card-header">

                    <div>

                        <h2>
                            Team Productivity
                        </h2>

                        <p>
                            Team contribution this month.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__card-action"
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                </div>


                <div class="wm-project-reports-page__team-productivity">

                    <div class="wm-project-reports-page__team-member">

                        <div class="wm-project-reports-page__avatar">
                            SW
                        </div>

                        <div class="wm-project-reports-page__member-info">

                            <strong>
                                Sarah Wilson
                            </strong>

                            <span>
                            Principal Investigator
                        </span>

                        </div>

                        <div class="wm-project-reports-page__member-score">
                            <strong>94%</strong>
                            <small>Productivity</small>
                        </div>

                    </div>


                    <div class="wm-project-reports-page__team-member">

                        <div class="wm-project-reports-page__avatar">
                            MJ
                        </div>

                        <div class="wm-project-reports-page__member-info">

                            <strong>
                                Michael Johnson
                            </strong>

                            <span>
                            Project Manager
                        </span>

                        </div>

                        <div class="wm-project-reports-page__member-score">
                            <strong>89%</strong>
                            <small>Productivity</small>
                        </div>

                    </div>


                    <div class="wm-project-reports-page__team-member">

                        <div class="wm-project-reports-page__avatar">
                            AK
                        </div>

                        <div class="wm-project-reports-page__member-info">

                            <strong>
                                Anna Kim
                            </strong>

                            <span>
                            Researcher
                        </span>

                        </div>

                        <div class="wm-project-reports-page__member-score">
                            <strong>82%</strong>
                            <small>Productivity</small>
                        </div>

                    </div>


                    <div class="wm-project-reports-page__team-member">

                        <div class="wm-project-reports-page__avatar">
                            JB
                        </div>

                        <div class="wm-project-reports-page__member-info">

                            <strong>
                                James Brown
                            </strong>

                            <span>
                            Research Assistant
                        </span>

                        </div>

                        <div class="wm-project-reports-page__member-score">
                            <strong>76%</strong>
                            <small>Productivity</small>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Milestone Progress --}}
            <div class="wm-project-reports-page__card">

                <div class="wm-project-reports-page__card-header">

                    <div>

                        <h2>
                            Milestone Progress
                        </h2>

                        <p>
                            Current milestone completion.
                        </p>

                    </div>

                    <a
                        href="{{ route('projects.milestones', 'climate-research') }}"
                        class="wm-project-reports-page__card-link"
                    >
                        View All
                    </a>

                </div>


                <div class="wm-project-reports-page__milestones">

                    <div class="wm-project-reports-page__milestone">

                        <div class="wm-project-reports-page__milestone-icon is-complete">
                            <i class="ph ph-check"></i>
                        </div>

                        <div class="wm-project-reports-page__milestone-info">

                            <strong>
                                Research Planning
                            </strong>

                            <span>
                            Completed
                        </span>

                        </div>

                        <b>
                            100%
                        </b>

                    </div>


                    <div class="wm-project-reports-page__milestone">

                        <div class="wm-project-reports-page__milestone-icon is-complete">
                            <i class="ph ph-check"></i>
                        </div>

                        <div class="wm-project-reports-page__milestone-info">

                            <strong>
                                Literature Review
                            </strong>

                            <span>
                            Completed
                        </span>

                        </div>

                        <b>
                            100%
                        </b>

                    </div>


                    <div class="wm-project-reports-page__milestone">

                        <div class="wm-project-reports-page__milestone-icon is-progress">
                            <i class="ph ph-arrow-right"></i>
                        </div>

                        <div class="wm-project-reports-page__milestone-info">

                            <strong>
                                Field Research
                            </strong>

                            <span>
                            In Progress
                        </span>

                        </div>

                        <b>
                            76%
                        </b>

                    </div>


                    <div class="wm-project-reports-page__milestone">

                        <div class="wm-project-reports-page__milestone-icon is-upcoming">
                            <i class="ph ph-circle"></i>
                        </div>

                        <div class="wm-project-reports-page__milestone-info">

                            <strong>
                                Data Analysis
                            </strong>

                            <span>
                            Upcoming
                        </span>

                        </div>

                        <b>
                            42%
                        </b>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Recent Reports
        ========================================================== --}}
        <div class="wm-project-reports-page__recent">

            <div class="wm-project-reports-page__section-header">

                <div>

                    <h2>
                        Recent Reports
                    </h2>

                    <p>
                        Previously generated project reports.
                    </p>

                </div>

                <button
                    type="button"
                    class="btn btn-light"
                    data-view-all-reports
                >
                    View All
                    <i class="ph ph-arrow-right"></i>
                </button>

            </div>


            <div class="wm-project-reports-page__report-grid">

                <article
                    class="wm-project-reports-page__report-card"
                    data-report-item
                    data-type="performance"
                    data-status="active"
                    data-owner="sarah"
                    data-date="month"
                    data-search="monthly project performance report"
                >

                    <div class="wm-project-reports-page__report-icon is-blue">
                        <i class="ph ph-chart-line-up"></i>
                    </div>

                    <div class="wm-project-reports-page__report-content">

                    <span class="wm-project-reports-page__report-type">
                        Performance Report
                    </span>

                        <h3>
                            Monthly Project Performance
                        </h3>

                        <p>
                            September 2026 · Generated Sep 23
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__report-menu"
                        data-report-menu-toggle
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                    <div
                        class="wm-project-reports-page__report-menu-dropdown"
                        data-report-menu
                    >

                        <button data-report-action="view">
                            <i class="ph ph-eye"></i>
                            View Report
                        </button>

                        <button data-report-action="download">
                            <i class="ph ph-download-simple"></i>
                            Download
                        </button>

                        <button data-report-action="delete">
                            <i class="ph ph-trash"></i>
                            Delete
                        </button>

                    </div>

                </article>


                <article
                    class="wm-project-reports-page__report-card"
                    data-report-item
                    data-type="tasks"
                    data-status="active"
                    data-owner="michael"
                    data-date="month"
                    data-search="task completion report september"
                >

                    <div class="wm-project-reports-page__report-icon is-green">
                        <i class="ph ph-check-square"></i>
                    </div>

                    <div class="wm-project-reports-page__report-content">

                    <span class="wm-project-reports-page__report-type">
                        Task Report
                    </span>

                        <h3>
                            September Task Completion
                        </h3>

                        <p>
                            September 2026 · Generated Sep 20
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__report-menu"
                        data-report-menu-toggle
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                    <div
                        class="wm-project-reports-page__report-menu-dropdown"
                        data-report-menu
                    >

                        <button data-report-action="view">
                            <i class="ph ph-eye"></i>
                            View Report
                        </button>

                        <button data-report-action="download">
                            <i class="ph ph-download-simple"></i>
                            Download
                        </button>

                        <button data-report-action="delete">
                            <i class="ph ph-trash"></i>
                            Delete
                        </button>

                    </div>

                </article>


                <article
                    class="wm-project-reports-page__report-card"
                    data-report-item
                    data-type="team"
                    data-status="active"
                    data-owner="anna"
                    data-date="quarter"
                    data-search="team productivity quarterly report"
                >

                    <div class="wm-project-reports-page__report-icon is-purple">
                        <i class="ph ph-users-three"></i>
                    </div>

                    <div class="wm-project-reports-page__report-content">

                    <span class="wm-project-reports-page__report-type">
                        Team Report
                    </span>

                        <h3>
                            Q3 Team Productivity
                        </h3>

                        <p>
                            Q3 2026 · Generated Sep 18
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-project-reports-page__report-menu"
                        data-report-menu-toggle
                    >
                        <i class="ph ph-dots-three"></i>
                    </button>

                    <div
                        class="wm-project-reports-page__report-menu-dropdown"
                        data-report-menu
                    >

                        <button data-report-action="view">
                            <i class="ph ph-eye"></i>
                            View Report
                        </button>

                        <button data-report-action="download">
                            <i class="ph ph-download-simple"></i>
                            Download
                        </button>

                        <button data-report-action="delete">
                            <i class="ph ph-trash"></i>
                            Delete
                        </button>

                    </div>

                </article>

            </div>

        </div>


        {{-- =========================================================
            Table View
        ========================================================== --}}
        <div
            class="wm-project-reports-page__table-view"
            data-report-view="table"
        >

            <div class="wm-project-reports-page__card">

                <div class="wm-project-reports-page__card-header">

                    <div>

                        <h2>
                            Project Performance Details
                        </h2>

                        <p>
                            Detailed performance metrics by project area.
                        </p>

                    </div>

                </div>


                <div class="wm-project-reports-page__table-wrapper">

                    <table class="wm-project-reports-page__table">

                        <thead>

                        <tr>

                            <th>
                                Project Area
                            </th>

                            <th>
                                Progress
                            </th>

                            <th>
                                Tasks
                            </th>

                            <th>
                                Completed
                            </th>

                            <th>
                                Hours
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

                        <tr
                            data-report-row
                            data-search="research planning"
                            data-status="completed"
                            data-owner="sarah"
                        >

                            <td>

                                <div class="wm-project-reports-page__table-name">

                                    <span class="is-blue">
                                        <i class="ph ph-clipboard-text"></i>
                                    </span>

                                    <strong>
                                        Research Planning
                                    </strong>

                                </div>

                            </td>

                            <td>
                                <strong>92%</strong>
                            </td>

                            <td>
                                8
                            </td>

                            <td>
                                8
                            </td>

                            <td>
                                126h
                            </td>

                            <td>
                                <span class="wm-project-reports-page__status is-completed">
                                    Completed
                                </span>
                            </td>

                            <td>
                                Sarah Wilson
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-project-reports-page__table-action"
                                    data-table-action="view"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>
                            </td>

                        </tr>


                        <tr
                            data-report-row
                            data-search="field data collection"
                            data-status="active"
                            data-owner="michael"
                        >

                            <td>

                                <div class="wm-project-reports-page__table-name">

                                    <span class="is-green">
                                        <i class="ph ph-map-pin"></i>
                                    </span>

                                    <strong>
                                        Field Data Collection
                                    </strong>

                                </div>

                            </td>

                            <td>
                                <strong>76%</strong>
                            </td>

                            <td>
                                10
                            </td>

                            <td>
                                7
                            </td>

                            <td>
                                264h
                            </td>

                            <td>
                                <span class="wm-project-reports-page__status is-active">
                                    Active
                                </span>
                            </td>

                            <td>
                                Michael Johnson
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-project-reports-page__table-action"
                                    data-table-action="view"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>
                            </td>

                        </tr>


                        <tr
                            data-report-row
                            data-search="data analysis"
                            data-status="active"
                            data-owner="anna"
                        >

                            <td>

                                <div class="wm-project-reports-page__table-name">

                                    <span class="is-purple">
                                        <i class="ph ph-chart-bar"></i>
                                    </span>

                                    <strong>
                                        Data Analysis
                                    </strong>

                                </div>

                            </td>

                            <td>
                                <strong>61%</strong>
                            </td>

                            <td>
                                9
                            </td>

                            <td>
                                5
                            </td>

                            <td>
                                238h
                            </td>

                            <td>
                                <span class="wm-project-reports-page__status is-active">
                                    Active
                                </span>
                            </td>

                            <td>
                                Anna Kim
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-project-reports-page__table-action"
                                    data-table-action="view"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>
                            </td>

                        </tr>


                        <tr
                            data-report-row
                            data-search="stakeholder engagement"
                            data-status="on-hold"
                            data-owner="sarah"
                        >

                            <td>

                                <div class="wm-project-reports-page__table-name">

                                    <span class="is-orange">
                                        <i class="ph ph-users"></i>
                                    </span>

                                    <strong>
                                        Stakeholder Engagement
                                    </strong>

                                </div>

                            </td>

                            <td>
                                <strong>54%</strong>
                            </td>

                            <td>
                                6
                            </td>

                            <td>
                                3
                            </td>

                            <td>
                                114h
                            </td>

                            <td>
                                <span class="wm-project-reports-page__status is-on-hold">
                                    On Hold
                                </span>
                            </td>

                            <td>
                                Sarah Wilson
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-project-reports-page__table-action"
                                    data-table-action="view"
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
            Empty State
        ========================================================== --}}
        <div
            class="wm-project-reports-page__empty"
            data-empty-state
        >

            <div class="wm-project-reports-page__empty-icon">
                <i class="ph ph-chart-bar"></i>
            </div>

            <h3>
                No reports found
            </h3>

            <p>
                Try changing your filters or generate a new project report.
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
            Generate Report Modal
        ========================================================== --}}
        <div
            class="modal fade"
            id="generateProjectReportModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">
                            Generate Project Report
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>

                    <div class="modal-body">

                        <div class="wm-project-reports-page__modal-field">

                            <label for="generateReportType">
                                Report Type
                            </label>

                            <select
                                id="generateReportType"
                                class="form-select"
                            >

                                <option value="performance">
                                    Performance Report
                                </option>

                                <option value="tasks">
                                    Task Report
                                </option>

                                <option value="team">
                                    Team Productivity Report
                                </option>

                                <option value="milestone">
                                    Milestone Report
                                </option>

                            </select>

                        </div>


                        <div class="wm-project-reports-page__modal-field">

                            <label for="generateReportPeriod">
                                Reporting Period
                            </label>

                            <select
                                id="generateReportPeriod"
                                class="form-select"
                            >

                                <option value="month">
                                    This Month
                                </option>

                                <option value="quarter">
                                    This Quarter
                                </option>

                                <option value="year">
                                    This Year
                                </option>

                                <option value="custom">
                                    Custom Range
                                </option>

                            </select>

                        </div>


                        <div class="wm-project-reports-page__modal-check">

                            <input
                                type="checkbox"
                                id="includeTeam"
                                checked
                            >

                            <label for="includeTeam">
                                Include team productivity
                            </label>

                        </div>


                        <div class="wm-project-reports-page__modal-check">

                            <input
                                type="checkbox"
                                id="includeTasks"
                                checked
                            >

                            <label for="includeTasks">
                                Include task statistics
                            </label>

                        </div>


                        <div class="wm-project-reports-page__modal-check">

                            <input
                                type="checkbox"
                                id="includeMilestones"
                                checked
                            >

                            <label for="includeMilestones">
                                Include milestone progress
                            </label>

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
                            data-generate-report
                        >
                            <i class="ph ph-file-plus"></i>
                            Generate Report
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
                $('#projectReportSearch');

            const $filterPanel =
                $('[data-filter-panel]');

            const $activeFilters =
                $('[data-active-filters]');

            const $emptyState =
                $('[data-empty-state]');


            // ---------------------------------------------------------
            // Labels
            // ---------------------------------------------------------

            const reportTypeLabels = {

                performance: 'Performance',

                tasks: 'Task Report',

                team: 'Team Report',

                milestone: 'Milestone Report'

            };


            const statusLabels = {

                active: 'Active',

                'on-hold': 'On Hold',

                completed: 'Completed'

            };


            const ownerLabels = {

                sarah: 'Sarah Wilson',

                michael: 'Michael Johnson',

                anna: 'Anna Kim'

            };


            const dateLabels = {

                week: 'This Week',

                month: 'This Month',

                quarter: 'This Quarter'

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

                    date:
                        $('#reportDateFilter').val(),

                    type:
                        $('#reportTypeFilter').val(),

                    status:
                        $('#reportStatusFilter').val(),

                    owner:
                        $('#reportOwnerFilter').val(),

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


                if (filters.date) {
                    count++;
                }

                if (filters.type) {
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


            function updateActiveFilters() {

                const filters =
                    getFilters();


                $activeFilters.empty();


                if (filters.search) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-reports-page__filter-chip"
                        data-remove-search
                    >

                        Search: "${$search.val()}"

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.date) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-reports-page__filter-chip"
                        data-remove-filter="date"
                    >

                        ${dateLabels[filters.date]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.type) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-reports-page__filter-chip"
                        data-remove-filter="type"
                    >

                        ${reportTypeLabels[filters.type]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }


                if (filters.status) {

                    $activeFilters.append(`

                    <button
                        type="button"
                        class="wm-project-reports-page__filter-chip"
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
                        class="wm-project-reports-page__filter-chip"
                        data-remove-filter="owner"
                    >

                        ${ownerLabels[filters.owner]}

                        <i class="ph ph-x"></i>

                    </button>

                `);

                }

            }


            // ---------------------------------------------------------
            // Report Matching
            // ---------------------------------------------------------

            function matchesReport(
                $item,
                filters
            ) {

                const type =
                    $item.data('type');

                const status =
                    $item.data('status');

                const owner =
                    $item.data('owner');

                const date =
                    $item.data('date');

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

                let visibleReports = 0;


                $('[data-report-item]')
                    .each(function () {

                        const $item =
                            $(this);

                        const visible =
                            matchesReport(
                                $item,
                                filters
                            );


                        $item.toggleClass(
                            'is-hidden',
                            !visible
                        );


                        if (visible) {
                            visibleReports++;
                        }

                    });


                $('[data-report-row]')
                    .each(function () {

                        const $row =
                            $(this);

                        const visible =
                            matchesReport(
                                $row,
                                filters
                            );


                        $row.toggleClass(
                            'is-hidden',
                            !visible
                        );

                    });


                $emptyState.toggleClass(
                    'is-visible',
                    visibleReports === 0
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
            // Filter Change
            // ---------------------------------------------------------

            $(document).on(
                'change',
                '#reportDateFilter, #reportTypeFilter, #reportStatusFilter, #reportOwnerFilter',
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
                        filter === 'date'
                    ) {

                        $('#reportDateFilter')
                            .val('');

                    }


                    if (
                        filter === 'type'
                    ) {

                        $('#reportTypeFilter')
                            .val('');

                    }


                    if (
                        filter === 'status'
                    ) {

                        $('#reportStatusFilter')
                            .val('');

                    }


                    if (
                        filter === 'owner'
                    ) {

                        $('#reportOwnerFilter')
                            .val('');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Clear Filters
            // ---------------------------------------------------------

            function clearFilters() {

                $('#reportDateFilter')
                    .val('');

                $('#reportTypeFilter')
                    .val('');

                $('#reportStatusFilter')
                    .val('');

                $('#reportOwnerFilter')
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


                    $('#reportDateFilter')
                        .val('');

                    $('#reportTypeFilter')
                        .val('');

                    $('#reportStatusFilter')
                        .val('');

                    $('#reportOwnerFilter')
                        .val('');


                    if (
                        filter === 'tasks'
                    ) {

                        $('#reportTypeFilter')
                            .val('tasks');

                    }


                    if (
                        filter === 'milestones'
                    ) {

                        $('#reportTypeFilter')
                            .val('milestone');

                    }


                    if (
                        filter === 'hours'
                    ) {

                        $('#reportTypeFilter')
                            .val('team');

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


                $('[data-report-view]')
                    .removeClass(
                        'is-visible'
                    );


                $(`[data-report-view="${view}"]`)
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
            // Refresh
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-refresh]',
                function () {

                    const $button =
                        $(this);

                    const original =
                        $button.html();


                    $button
                        .prop('disabled', true)
                        .html(`
                        <i class="ph ph-spinner ph-spin"></i>
                        Refreshing...
                    `);


                    setTimeout(
                        function () {

                            $button
                                .prop('disabled', false)
                                .html(original);


                            showNotice(
                                'Reports Refreshed',
                                'Project report data has been refreshed.',
                                'success'
                            );

                        },
                        700
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
                            'Export Report',
                            'The project report export is ready to connect.'
                        );

                        return;

                    }


                    if (
                        action === 'generate'
                    ) {

                        $('#generateProjectReportModal')
                            .modal('show');

                    }

                }
            );


            // ---------------------------------------------------------
            // Generate Report
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-generate-report]',
                function () {

                    const type =
                        $('#generateReportType option:selected')
                            .text();

                    const period =
                        $('#generateReportPeriod option:selected')
                            .text();


                    $('#generateProjectReportModal')
                        .modal('hide');


                    showNotice(
                        'Report Generated',
                        `${type} for ${period} has been generated successfully.`,
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // Report Menu
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-menu-toggle]',
                function (event) {

                    event.stopPropagation();


                    const $menu =
                        $(this)
                            .siblings(
                                '[data-report-menu]'
                            );


                    $('[data-report-menu]')
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
            // Report Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-action]',
                function () {

                    const action =
                        $(this).data(
                            'report-action'
                        );


                    $('[data-report-menu]')
                        .removeClass(
                            'is-open'
                        );


                    if (
                        action === 'view'
                    ) {

                        showNotice(
                            'View Report',
                            'The selected report will open in the report viewer.'
                        );

                        return;

                    }


                    if (
                        action === 'download'
                    ) {

                        showNotice(
                            'Download Report',
                            'The report download is ready to connect.'
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

                                title: 'Delete Report?',

                                text: 'This action cannot be undone.',

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
                                            'Report Deleted',
                                            'The report has been removed.',
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
            // View All Reports
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-view-all-reports]',
                function () {

                    switchView(
                        'table'
                    );

                    $('html, body').animate(
                        {
                            scrollTop:
                                $('.wm-project-reports-page__table-view')
                                    .offset().top - 30
                        },
                        300
                    );

                }
            );


            // ---------------------------------------------------------
            // Chart Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-chart-action]',
                function () {

                    showNotice(
                        'Chart Options',
                        'Additional chart actions can be connected here.'
                    );

                }
            );


            // ---------------------------------------------------------
            // Table Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-table-action]',
                function () {

                    showNotice(
                        'Project Details',
                        'Opening the selected project performance details.'
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
                        .removeClass(
                            'is-open'
                        );


                    $('[data-report-menu]')
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


            $(document).on(
                'click',
                '[data-report-menu]',
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


                        $('[data-report-menu]')
                            .removeClass(
                                'is-open'
                            );

                    }

                }
            );


            // ---------------------------------------------------------
            // Initial
            // ---------------------------------------------------------

            switchView('overview');

            applyFilters();

        });

    </script>
@endpush
