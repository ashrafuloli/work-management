@extends('layout.app')

@section('main')

    <div class="wm-reports-page">

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}
        <div class="wm-reports-page__header">

            <div class="wm-reports-page__breadcrumb">
                <a href="{{ route('dashboard') }}" class="wm-reports-page__breadcrumb-link">
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span>Reports</span>
            </div>


            <div class="wm-reports-page__heading">

                <div class="wm-reports-page__heading-content">

                    <h1 class="wm-reports-page__title">
                        Reports
                    </h1>

                    <p class="wm-reports-page__subtitle">
                        Monitor project performance, team productivity, tasks, and research progress.
                    </p>

                </div>


                <div class="wm-reports-page__header-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-report-header-action="export"
                    >
                        <i class="ph ph-download-simple"></i>
                        <span>Export</span>
                    </button>

                    <button
                        type="button"
                        class="btn btn-primary"
                        data-report-header-action="generate"
                    >
                        <i class="ph ph-file-plus"></i>
                        <span>Generate Report</span>
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            SUMMARY CARDS
        ============================================================= --}}
        <div class="wm-reports-page__summary">

            <div class="wm-report-summary-card">

                <div class="wm-report-summary-card__icon wm-report-summary-card__icon--primary">
                    <i class="ph ph-chart-line-up"></i>
                </div>

                <div class="wm-report-summary-card__content">

                <span class="wm-report-summary-card__label">
                    Overall Progress
                </span>

                    <strong class="wm-report-summary-card__value">
                        78%
                    </strong>

                    <span class="wm-report-summary-card__change wm-report-summary-card__change--positive">
                    <i class="ph ph-trend-up"></i>
                    8.4% this month
                </span>

                </div>

            </div>


            <div class="wm-report-summary-card">

                <div class="wm-report-summary-card__icon wm-report-summary-card__icon--success">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-report-summary-card__content">

                <span class="wm-report-summary-card__label">
                    Tasks Completed
                </span>

                    <strong class="wm-report-summary-card__value">
                        284
                    </strong>

                    <span class="wm-report-summary-card__change wm-report-summary-card__change--positive">
                    <i class="ph ph-trend-up"></i>
                    14.2% this month
                </span>

                </div>

            </div>


            <div class="wm-report-summary-card">

                <div class="wm-report-summary-card__icon wm-report-summary-card__icon--warning">
                    <i class="ph ph-clock"></i>
                </div>

                <div class="wm-report-summary-card__content">

                <span class="wm-report-summary-card__label">
                    Hours Tracked
                </span>

                    <strong class="wm-report-summary-card__value">
                        1,248
                    </strong>

                    <span class="wm-report-summary-card__change wm-report-summary-card__change--positive">
                    <i class="ph ph-trend-up"></i>
                    6.8% this month
                </span>

                </div>

            </div>


            <div class="wm-report-summary-card">

                <div class="wm-report-summary-card__icon wm-report-summary-card__icon--purple">
                    <i class="ph ph-flag"></i>
                </div>

                <div class="wm-report-summary-card__content">

                <span class="wm-report-summary-card__label">
                    Milestones
                </span>

                    <strong class="wm-report-summary-card__value">
                        18 / 24
                    </strong>

                    <span class="wm-report-summary-card__change">
                    75% completed
                </span>

                </div>

            </div>

        </div>


        {{-- ============================================================
            FILTER BAR
        ============================================================= --}}
        <div class="wm-reports-page__toolbar">

            <div class="wm-reports-page__toolbar-left">

                <div class="wm-reports-page__date-range">

                    <i class="ph ph-calendar-blank"></i>

                    <select
                        id="reportDateRange"
                        class="form-select"
                    >
                        <option value="month">
                            This Month
                        </option>

                        <option value="week">
                            This Week
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


                <div class="wm-reports-page__project-filter">

                    <select
                        id="reportProject"
                        class="form-select"
                    >
                        <option value="">
                            All Projects
                        </option>

                        <option value="climate">
                            Climate Research Initiative
                        </option>

                        <option value="drug">
                            Drug Discovery Platform
                        </option>

                        <option value="genomics">
                            Genomics Study
                        </option>

                        <option value="neural">
                            Neural Imaging Research
                        </option>
                    </select>

                </div>


                <button
                    type="button"
                    class="btn btn-light"
                    id="reportFilterToggle"
                >
                    <i class="ph ph-funnel"></i>
                    Filters
                </button>

            </div>


            <div class="wm-reports-page__toolbar-right">

                <button
                    type="button"
                    class="btn btn-light"
                    data-report-action="refresh"
                >
                    <i class="ph ph-arrows-clockwise"></i>
                    Refresh
                </button>

                <div class="wm-reports-page__view-switcher">

                    <button
                        type="button"
                        class="wm-reports-page__view-btn is-active"
                        data-report-view="overview"
                    >
                        <i class="ph ph-chart-bar"></i>
                        Overview
                    </button>

                    <button
                        type="button"
                        class="wm-reports-page__view-btn"
                        data-report-view="table"
                    >
                        <i class="ph ph-table"></i>
                        Table
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            ADVANCED FILTERS
        ============================================================= --}}
        <div
            class="wm-reports-page__filters"
            id="reportFilters"
        >

            <div class="wm-reports-page__filter-group">

                <label for="reportStatus">
                    Project Status
                </label>

                <select
                    id="reportStatus"
                    class="form-select"
                >
                    <option value="">
                        All Statuses
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


            <div class="wm-reports-page__filter-group">

                <label for="reportOwner">
                    Project Owner
                </label>

                <select
                    id="reportOwner"
                    class="form-select"
                >
                    <option value="">
                        All Owners
                    </option>

                    <option value="sarah">
                        Sarah Johnson
                    </option>

                    <option value="michael">
                        Michael Chen
                    </option>

                    <option value="david">
                        David Wilson
                    </option>

                    <option value="emma">
                        Emma Davis
                    </option>
                </select>

            </div>


            <div class="wm-reports-page__filter-group">

                <label for="reportPriority">
                    Priority
                </label>

                <select
                    id="reportPriority"
                    class="form-select"
                >
                    <option value="">
                        All Priorities
                    </option>

                    <option value="high">
                        High
                    </option>

                    <option value="medium">
                        Medium
                    </option>

                    <option value="low">
                        Low
                    </option>
                </select>

            </div>


            <div class="wm-reports-page__filter-group">

                <label for="reportTeam">
                    Team
                </label>

                <select
                    id="reportTeam"
                    class="form-select"
                >
                    <option value="">
                        All Teams
                    </option>

                    <option value="research">
                        Research Team
                    </option>

                    <option value="data">
                        Data Team
                    </option>

                    <option value="operations">
                        Operations
                    </option>
                </select>

            </div>


            <div class="wm-reports-page__filter-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    id="clearReportFilters"
                >
                    Clear Filters
                </button>

            </div>

        </div>


        {{-- Active Filters --}}
        <div
            class="wm-reports-page__active-filters"
            id="activeReportFilters"
        ></div>


        {{-- ============================================================
            OVERVIEW VIEW
        ============================================================= --}}
        <div
            class="wm-reports-page__overview"
            id="reportOverview"
        >

            {{-- ========================================================
                PERFORMANCE + TASKS
            ========================================================= --}}
            <div class="row g-4 mb-4">

                {{-- Project Performance --}}
                <div class="col-xl-8">

                    <div class="wm-report-card wm-report-card--chart">

                        <div class="wm-report-card__header">

                            <div>
                                <h2 class="wm-report-card__title">
                                    Project Performance
                                </h2>

                                <p class="wm-report-card__subtitle">
                                    Project progress over the selected period.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="wm-report-card__menu"
                                data-report-card-menu="performance"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>


                        <div class="wm-report-chart">

                            <div class="wm-report-chart__legend">

                            <span>
                                <i class="wm-report-chart__legend-dot wm-report-chart__legend-dot--primary"></i>
                                Progress
                            </span>

                                <span>
                                <i class="wm-report-chart__legend-dot wm-report-chart__legend-dot--muted"></i>
                                Target
                            </span>

                            </div>


                            <div class="wm-report-chart__area">

                                <div class="wm-report-chart__y-axis">

                                    <span>100%</span>
                                    <span>80%</span>
                                    <span>60%</span>
                                    <span>40%</span>
                                    <span>20%</span>
                                    <span>0%</span>

                                </div>


                                <div class="wm-report-chart__graph">

                                    <div class="wm-report-chart__grid-line"></div>
                                    <div class="wm-report-chart__grid-line"></div>
                                    <div class="wm-report-chart__grid-line"></div>
                                    <div class="wm-report-chart__grid-line"></div>
                                    <div class="wm-report-chart__grid-line"></div>


                                    <div class="wm-report-chart__bars">

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 52%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 45%;"></div>
                                            <span>Jan</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 62%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 58%;"></div>
                                            <span>Feb</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 70%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 65%;"></div>
                                            <span>Mar</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 76%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 71%;"></div>
                                            <span>Apr</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 82%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 79%;"></div>
                                            <span>May</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 90%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 86%;"></div>
                                            <span>Jun</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 94%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 91%;"></div>
                                            <span>Jul</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 96%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 94%;"></div>
                                            <span>Aug</span>
                                        </div>

                                        <div class="wm-report-chart__bar-group">
                                            <div class="wm-report-chart__bar wm-report-chart__bar--target" style="height: 100%;"></div>
                                            <div class="wm-report-chart__bar wm-report-chart__bar--progress" style="height: 96%;"></div>
                                            <span>Sep</span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Task Completion --}}
                <div class="col-xl-4">

                    <div class="wm-report-card wm-report-card--task">

                        <div class="wm-report-card__header">

                            <div>
                                <h2 class="wm-report-card__title">
                                    Task Completion
                                </h2>

                                <p class="wm-report-card__subtitle">
                                    Current task distribution.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="wm-report-card__menu"
                                data-report-card-menu="tasks"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>


                        <div class="wm-task-completion">

                            <div class="wm-task-completion__ring">

                                <div class="wm-task-completion__ring-inner">

                                    <strong>
                                        78%
                                    </strong>

                                    <span>
                                    Completed
                                </span>

                                </div>

                            </div>


                            <div class="wm-task-completion__legend">

                                <div class="wm-task-completion__legend-item">

                                    <span class="wm-task-completion__dot wm-task-completion__dot--success"></span>

                                    <span>
                                    Completed
                                </span>

                                    <strong>
                                        284
                                    </strong>

                                </div>


                                <div class="wm-task-completion__legend-item">

                                    <span class="wm-task-completion__dot wm-task-completion__dot--primary"></span>

                                    <span>
                                    In Progress
                                </span>

                                    <strong>
                                        52
                                    </strong>

                                </div>


                                <div class="wm-task-completion__legend-item">

                                    <span class="wm-task-completion__dot wm-task-completion__dot--warning"></span>

                                    <span>
                                    Pending
                                </span>

                                    <strong>
                                        28
                                    </strong>

                                </div>


                                <div class="wm-task-completion__legend-item">

                                    <span class="wm-task-completion__dot wm-task-completion__dot--danger"></span>

                                    <span>
                                    Overdue
                                </span>

                                    <strong>
                                        12
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ========================================================
                PROJECT BREAKDOWN + TEAM PRODUCTIVITY
            ========================================================= --}}
            <div class="row g-4 mb-4">

                {{-- Project Breakdown --}}
                <div class="col-xl-7">

                    <div class="wm-report-card">

                        <div class="wm-report-card__header">

                            <div>
                                <h2 class="wm-report-card__title">
                                    Project Breakdown
                                </h2>

                                <p class="wm-report-card__subtitle">
                                    Performance by active project.
                                </p>
                            </div>

                            <a
                                href="{{ route('projects.index') }}"
                                class="wm-report-card__link"
                            >
                                View Projects
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </div>


                        <div class="wm-project-breakdown">

                            <div class="wm-project-breakdown__row">

                                <div class="wm-project-breakdown__identity">

                                    <div class="wm-project-breakdown__icon">
                                        <i class="ph ph-leaf"></i>
                                    </div>

                                    <div>
                                        <strong>
                                            Climate Research Initiative
                                        </strong>

                                        <span>
                                        Sarah Johnson
                                    </span>
                                    </div>

                                </div>

                                <div class="wm-project-breakdown__progress">

                                    <div class="wm-project-breakdown__progress-top">
                                        <span>94%</span>
                                        <small>On Track</small>
                                    </div>

                                    <div class="wm-project-breakdown__progress-bar">
                                        <span style="width: 94%;"></span>
                                    </div>

                                </div>

                            </div>


                            <div class="wm-project-breakdown__row">

                                <div class="wm-project-breakdown__identity">

                                    <div class="wm-project-breakdown__icon wm-project-breakdown__icon--purple">
                                        <i class="ph ph-flask"></i>
                                    </div>

                                    <div>
                                        <strong>
                                            Drug Discovery Platform
                                        </strong>

                                        <span>
                                        Michael Chen
                                    </span>
                                    </div>

                                </div>

                                <div class="wm-project-breakdown__progress">

                                    <div class="wm-project-breakdown__progress-top">
                                        <span>82%</span>
                                        <small>On Track</small>
                                    </div>

                                    <div class="wm-project-breakdown__progress-bar">
                                        <span style="width: 82%;"></span>
                                    </div>

                                </div>

                            </div>


                            <div class="wm-project-breakdown__row">

                                <div class="wm-project-breakdown__identity">

                                    <div class="wm-project-breakdown__icon wm-project-breakdown__icon--cyan">
                                        <i class="ph ph-dna"></i>
                                    </div>

                                    <div>
                                        <strong>
                                            Genomics Study
                                        </strong>

                                        <span>
                                        David Wilson
                                    </span>

                                    </div>

                                </div>

                                <div class="wm-project-breakdown__progress">

                                    <div class="wm-project-breakdown__progress-top">
                                        <span>71%</span>
                                        <small>At Risk</small>
                                    </div>

                                    <div class="wm-project-breakdown__progress-bar">
                                        <span style="width: 71%;"></span>
                                    </div>

                                </div>

                            </div>


                            <div class="wm-project-breakdown__row">

                                <div class="wm-project-breakdown__identity">

                                    <div class="wm-project-breakdown__icon wm-project-breakdown__icon--warning">
                                        <i class="ph ph-brain"></i>
                                    </div>

                                    <div>
                                        <strong>
                                            Neural Imaging Research
                                        </strong>

                                        <span>
                                        Emma Davis
                                    </span>

                                    </div>

                                </div>

                                <div class="wm-project-breakdown__progress">

                                    <div class="wm-project-breakdown__progress-top">
                                        <span>63%</span>
                                        <small>At Risk</small>
                                    </div>

                                    <div class="wm-project-breakdown__progress-bar">
                                        <span style="width: 63%;"></span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Team Productivity --}}
                <div class="col-xl-5">

                    <div class="wm-report-card">

                        <div class="wm-report-card__header">

                            <div>
                                <h2 class="wm-report-card__title">
                                    Team Productivity
                                </h2>

                                <p class="wm-report-card__subtitle">
                                    Tasks completed by team members.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="wm-report-card__menu"
                                data-report-card-menu="team"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>


                        <div class="wm-team-productivity">

                            <div class="wm-team-productivity__row">

                                <div class="wm-team-productivity__member">

                                    <div class="wm-team-productivity__avatar">
                                        SJ
                                    </div>

                                    <div>
                                        <strong>
                                            Sarah Johnson
                                        </strong>

                                        <span>
                                        86 tasks
                                    </span>
                                    </div>

                                </div>

                                <div class="wm-team-productivity__value">
                                    <strong>92%</strong>

                                    <div class="wm-team-productivity__bar">
                                        <span style="width: 92%;"></span>
                                    </div>
                                </div>

                            </div>


                            <div class="wm-team-productivity__row">

                                <div class="wm-team-productivity__member">

                                    <div class="wm-team-productivity__avatar wm-team-productivity__avatar--purple">
                                        MC
                                    </div>

                                    <div>
                                        <strong>
                                            Michael Chen
                                        </strong>

                                        <span>
                                        74 tasks
                                    </span>
                                    </div>

                                </div>

                                <div class="wm-team-productivity__value">
                                    <strong>86%</strong>

                                    <div class="wm-team-productivity__bar">
                                        <span style="width: 86%;"></span>
                                    </div>
                                </div>

                            </div>


                            <div class="wm-team-productivity__row">

                                <div class="wm-team-productivity__member">

                                    <div class="wm-team-productivity__avatar wm-team-productivity__avatar--cyan">
                                        DW
                                    </div>

                                    <div>
                                        <strong>
                                            David Wilson
                                        </strong>

                                        <span>
                                        63 tasks
                                    </span>
                                    </div>

                                </div>

                                <div class="wm-team-productivity__value">
                                    <strong>79%</strong>

                                    <div class="wm-team-productivity__bar">
                                        <span style="width: 79%;"></span>
                                    </div>
                                </div>

                            </div>


                            <div class="wm-team-productivity__row">

                                <div class="wm-team-productivity__member">

                                    <div class="wm-team-productivity__avatar wm-team-productivity__avatar--warning">
                                        ED
                                    </div>

                                    <div>
                                        <strong>
                                            Emma Davis
                                        </strong>

                                        <span>
                                        61 tasks
                                    </span>
                                    </div>

                                </div>

                                <div class="wm-team-productivity__value">
                                    <strong>74%</strong>

                                    <div class="wm-team-productivity__bar">
                                        <span style="width: 74%;"></span>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ========================================================
                MILESTONES + RECENT REPORTS
            ========================================================= --}}
            <div class="row g-4">

                {{-- Milestones --}}
                <div class="col-xl-7">

                    <div class="wm-report-card">

                        <div class="wm-report-card__header">

                            <div>
                                <h2 class="wm-report-card__title">
                                    Milestone Progress
                                </h2>

                                <p class="wm-report-card__subtitle">
                                    Upcoming and recently completed milestones.
                                </p>
                            </div>

                            <a
                                href="{{ route('projects.milestones', 'climate-research') }}"
                                class="wm-report-card__link"
                            >
                                View All
                                <i class="ph ph-arrow-right"></i>
                            </a>

                        </div>


                        <div class="wm-milestone-report">

                            <div class="wm-milestone-report__item">

                                <div class="wm-milestone-report__icon wm-milestone-report__icon--success">
                                    <i class="ph ph-check"></i>
                                </div>

                                <div class="wm-milestone-report__content">

                                    <strong>
                                        Data Collection Phase
                                    </strong>

                                    <span>
                                    Climate Research Initiative
                                </span>

                                </div>

                                <div class="wm-milestone-report__status">
                                    Completed
                                </div>

                            </div>


                            <div class="wm-milestone-report__item">

                                <div class="wm-milestone-report__icon wm-milestone-report__icon--primary">
                                    <i class="ph ph-flag"></i>
                                </div>

                                <div class="wm-milestone-report__content">

                                    <strong>
                                        Data Analysis Phase
                                    </strong>

                                    <span>
                                    Climate Research Initiative
                                </span>

                                </div>

                                <div class="wm-milestone-report__status wm-milestone-report__status--active">
                                    82%
                                </div>

                            </div>


                            <div class="wm-milestone-report__item">

                                <div class="wm-milestone-report__icon wm-milestone-report__icon--warning">
                                    <i class="ph ph-warning"></i>
                                </div>

                                <div class="wm-milestone-report__content">

                                    <strong>
                                        Sequencing Analysis
                                    </strong>

                                    <span>
                                    Genomics Study
                                </span>

                                </div>

                                <div class="wm-milestone-report__status wm-milestone-report__status--warning">
                                    At Risk
                                </div>

                            </div>


                            <div class="wm-milestone-report__item">

                                <div class="wm-milestone-report__icon wm-milestone-report__icon--primary">
                                    <i class="ph ph-flag"></i>
                                </div>

                                <div class="wm-milestone-report__content">

                                    <strong>
                                        Compound Validation
                                    </strong>

                                    <span>
                                    Drug Discovery Platform
                                </span>

                                </div>

                                <div class="wm-milestone-report__status wm-milestone-report__status--active">
                                    68%
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Recent Reports --}}
                <div class="col-xl-5">

                    <div class="wm-report-card">

                        <div class="wm-report-card__header">

                            <div>
                                <h2 class="wm-report-card__title">
                                    Recent Reports
                                </h2>

                                <p class="wm-report-card__subtitle">
                                    Recently generated reports.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="wm-report-card__menu"
                                data-report-card-menu="recent"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>


                        <div class="wm-recent-reports">

                            <div class="wm-recent-reports__item">

                                <div class="wm-recent-reports__icon">
                                    <i class="ph ph-file-pdf"></i>
                                </div>

                                <div class="wm-recent-reports__content">

                                    <strong>
                                        Monthly Project Report
                                    </strong>

                                    <span>
                                    Generated Sep 24, 2026
                                </span>

                                </div>

                                <button
                                    type="button"
                                    class="wm-recent-reports__download"
                                    data-report-download="monthly"
                                >
                                    <i class="ph ph-download-simple"></i>
                                </button>

                            </div>


                            <div class="wm-recent-reports__item">

                                <div class="wm-recent-reports__icon">
                                    <i class="ph ph-file-pdf"></i>
                                </div>

                                <div class="wm-recent-reports__content">

                                    <strong>
                                        Team Productivity Report
                                    </strong>

                                    <span>
                                    Generated Sep 20, 2026
                                </span>

                                </div>

                                <button
                                    type="button"
                                    class="wm-recent-reports__download"
                                    data-report-download="team"
                                >
                                    <i class="ph ph-download-simple"></i>
                                </button>

                            </div>


                            <div class="wm-recent-reports__item">

                                <div class="wm-recent-reports__icon">
                                    <i class="ph ph-file-pdf"></i>
                                </div>

                                <div class="wm-recent-reports__content">

                                    <strong>
                                        Research Progress Report
                                    </strong>

                                    <span>
                                    Generated Sep 15, 2026
                                </span>

                                </div>

                                <button
                                    type="button"
                                    class="wm-recent-reports__download"
                                    data-report-download="research"
                                >
                                    <i class="ph ph-download-simple"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- ============================================================
            TABLE VIEW
        ============================================================= --}}
        <div
            class="wm-reports-page__table-view"
            id="reportTableView"
        >

            <div class="wm-report-card">

                <div class="wm-report-card__header">

                    <div>
                        <h2 class="wm-report-card__title">
                            Project Performance Report
                        </h2>

                        <p class="wm-report-card__subtitle">
                            Detailed project-level performance metrics.
                        </p>
                    </div>

                    <button
                        type="button"
                        class="btn btn-light"
                        data-report-action="export-table"
                    >
                        <i class="ph ph-download-simple"></i>
                        Export CSV
                    </button>

                </div>


                <div class="wm-reports-table-wrapper">

                    <table class="wm-reports-table">

                        <thead>

                        <tr>
                            <th>Project</th>
                            <th>Owner</th>
                            <th>Progress</th>
                            <th>Tasks</th>
                            <th>Completed</th>
                            <th>Hours</th>
                            <th>Status</th>
                            <th></th>
                        </tr>

                        </thead>

                        <tbody>

                        <tr
                            data-report-project="climate"
                            data-report-status="active"
                            data-report-owner="sarah"
                            data-report-priority="high"
                        >

                            <td>
                                <div class="wm-reports-table__project">

                                    <div class="wm-reports-table__project-icon">
                                        <i class="ph ph-leaf"></i>
                                    </div>

                                    <strong>
                                        Climate Research Initiative
                                    </strong>

                                </div>
                            </td>

                            <td>
                                Sarah Johnson
                            </td>

                            <td>
                                <div class="wm-reports-table__progress">

                                    <div class="wm-reports-table__progress-value">
                                        94%
                                    </div>

                                    <div class="wm-reports-table__progress-bar">
                                        <span style="width: 94%;"></span>
                                    </div>

                                </div>
                            </td>

                            <td>84</td>

                            <td>79</td>

                            <td>386h</td>

                            <td>
                                <span class="wm-report-status wm-report-status--success">
                                    On Track
                                </span>
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-reports-table__action"
                                    data-table-action="view"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>
                            </td>

                        </tr>


                        <tr
                            data-report-project="drug"
                            data-report-status="active"
                            data-report-owner="michael"
                            data-report-priority="high"
                        >

                            <td>
                                <div class="wm-reports-table__project">

                                    <div class="wm-reports-table__project-icon wm-reports-table__project-icon--purple">
                                        <i class="ph ph-flask"></i>
                                    </div>

                                    <strong>
                                        Drug Discovery Platform
                                    </strong>

                                </div>
                            </td>

                            <td>
                                Michael Chen
                            </td>

                            <td>
                                <div class="wm-reports-table__progress">

                                    <div class="wm-reports-table__progress-value">
                                        82%
                                    </div>

                                    <div class="wm-reports-table__progress-bar">
                                        <span style="width: 82%;"></span>
                                    </div>

                                </div>
                            </td>

                            <td>72</td>

                            <td>59</td>

                            <td>318h</td>

                            <td>
                                <span class="wm-report-status wm-report-status--success">
                                    On Track
                                </span>
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-reports-table__action"
                                    data-table-action="view"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>
                            </td>

                        </tr>


                        <tr
                            data-report-project="genomics"
                            data-report-status="active"
                            data-report-owner="david"
                            data-report-priority="medium"
                        >

                            <td>
                                <div class="wm-reports-table__project">

                                    <div class="wm-reports-table__project-icon wm-reports-table__project-icon--cyan">
                                        <i class="ph ph-dna"></i>
                                    </div>

                                    <strong>
                                        Genomics Study
                                    </strong>

                                </div>
                            </td>

                            <td>
                                David Wilson
                            </td>

                            <td>
                                <div class="wm-reports-table__progress">

                                    <div class="wm-reports-table__progress-value">
                                        71%
                                    </div>

                                    <div class="wm-reports-table__progress-bar">
                                        <span style="width: 71%;"></span>
                                    </div>

                                </div>
                            </td>

                            <td>68</td>

                            <td>48</td>

                            <td>294h</td>

                            <td>
                                <span class="wm-report-status wm-report-status--warning">
                                    At Risk
                                </span>
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-reports-table__action"
                                    data-table-action="view"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                </button>
                            </td>

                        </tr>


                        <tr
                            data-report-project="neural"
                            data-report-status="on-hold"
                            data-report-owner="emma"
                            data-report-priority="low"
                        >

                            <td>
                                <div class="wm-reports-table__project">

                                    <div class="wm-reports-table__project-icon wm-reports-table__project-icon--warning">
                                        <i class="ph ph-brain"></i>
                                    </div>

                                    <strong>
                                        Neural Imaging Research
                                    </strong>

                                </div>
                            </td>

                            <td>
                                Emma Davis
                            </td>

                            <td>
                                <div class="wm-reports-table__progress">

                                    <div class="wm-reports-table__progress-value">
                                        63%
                                    </div>

                                    <div class="wm-reports-table__progress-bar">
                                        <span style="width: 63%;"></span>
                                    </div>

                                </div>
                            </td>

                            <td>60</td>

                            <td>38</td>

                            <td>250h</td>

                            <td>
                                <span class="wm-report-status wm-report-status--warning">
                                    At Risk
                                </span>
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="wm-reports-table__action"
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


        {{-- ============================================================
            EMPTY STATE
        ============================================================= --}}
        <div
            class="wm-reports-page__empty"
            id="reportEmpty"
        >

            <div class="wm-reports-page__empty-icon">
                <i class="ph ph-chart-bar"></i>
            </div>

            <h3>
                No report data found
            </h3>

            <p>
                Try changing your filters or selecting a different reporting period.
            </p>

            <button
                type="button"
                class="btn btn-light"
                id="reportEmptyClear"
            >
                Clear Filters
            </button>

        </div>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {
            'use strict';


            // ------------------------------------------------------------
            // Elements
            // ------------------------------------------------------------

            const $page = $('.wm-reports-page');
            const $overview = $('#reportOverview');
            const $tableView = $('#reportTableView');
            const $empty = $('#reportEmpty');

            let currentView = 'overview';

            let filters = {
                project: '',
                status: '',
                owner: '',
                priority: '',
                team: ''
            };


            // ------------------------------------------------------------
            // Functions
            // ------------------------------------------------------------

            function updateActiveFilters() {

                const $container = $('#activeReportFilters');

                $container.empty();

                const labels = {

                    project: {
                        climate: 'Climate Research Initiative',
                        drug: 'Drug Discovery Platform',
                        genomics: 'Genomics Study',
                        neural: 'Neural Imaging Research'
                    },

                    status: {
                        active: 'Active',
                        completed: 'Completed',
                        'on-hold': 'On Hold'
                    },

                    owner: {
                        sarah: 'Sarah Johnson',
                        michael: 'Michael Chen',
                        david: 'David Wilson',
                        emma: 'Emma Davis'
                    },

                    priority: {
                        high: 'High Priority',
                        medium: 'Medium Priority',
                        low: 'Low Priority'
                    },

                    team: {
                        research: 'Research Team',
                        data: 'Data Team',
                        operations: 'Operations'
                    }
                };


                Object.keys(filters).forEach(function (key) {

                    const value = filters[key];

                    if (!value) {
                        return;
                    }

                    const label =
                        labels[key] &&
                        labels[key][value]
                            ? labels[key][value]
                            : value;

                    const $chip = $(`
                    <button
                        type="button"
                        class="wm-reports-page__filter-chip"
                        data-remove-report-filter="${key}"
                    >
                        <span>${label}</span>
                        <i class="ph ph-x"></i>
                    </button>
                `);

                    $container.append($chip);
                });
            }


            function applyFilters() {

                const $rows = $('.wm-reports-table tbody tr');

                let visibleRows = 0;

                $rows.each(function () {

                    const $row = $(this);

                    const project =
                        $row.data('report-project') || '';

                    const status =
                        $row.data('report-status') || '';

                    const owner =
                        $row.data('report-owner') || '';

                    const priority =
                        $row.data('report-priority') || '';


                    const matchesProject =
                        !filters.project ||
                        project === filters.project;

                    const matchesStatus =
                        !filters.status ||
                        status === filters.status;

                    const matchesOwner =
                        !filters.owner ||
                        owner === filters.owner;

                    const matchesPriority =
                        !filters.priority ||
                        priority === filters.priority;


                    const visible =
                        matchesProject &&
                        matchesStatus &&
                        matchesOwner &&
                        matchesPriority;


                    $row.toggle(visible);

                    if (visible) {
                        visibleRows++;
                    }
                });


                updateActiveFilters();

                updateEmptyState(visibleRows);
            }


            function updateEmptyState(count) {

                if (currentView === 'table') {

                    $tableView.toggleClass(
                        'is-empty',
                        count === 0
                    );

                }

                $empty.toggleClass(
                    'is-visible',
                    count === 0
                );
            }


            function clearFilters() {

                filters = {
                    project: '',
                    status: '',
                    owner: '',
                    priority: '',
                    team: ''
                };


                $('#reportProject').val('');
                $('#reportStatus').val('');
                $('#reportOwner').val('');
                $('#reportPriority').val('');
                $('#reportTeam').val('');

                applyFilters();
            }


            function switchView(view) {

                currentView = view;

                $('.wm-reports-page__view-btn')
                    .removeClass('is-active');

                $(
                    '[data-report-view="' + view + '"]'
                ).addClass('is-active');


                if (view === 'overview') {

                    $overview.show();
                    $tableView.hide();

                } else {

                    $overview.hide();
                    $tableView.show();

                }


                applyFilters();
            }


            function showMessage(title, text, icon = 'info') {

                Swal.fire({
                    icon: icon,
                    title: title,
                    text: text,
                    confirmButtonText: 'Okay'
                });
            }


            // ------------------------------------------------------------
            // View Switcher
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-view]',
                function () {

                    const view =
                        $(this).data('report-view');

                    switchView(view);
                }
            );


            // ------------------------------------------------------------
            // Filter Toggle
            // ------------------------------------------------------------

            $('#reportFilterToggle').on(
                'click',
                function () {

                    $('#reportFilters')
                        .toggleClass('is-open');

                    $(this)
                        .toggleClass('is-active');
                }
            );


            // ------------------------------------------------------------
            // Filters
            // ------------------------------------------------------------

            $('#reportProject').on(
                'change',
                function () {

                    filters.project =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#reportStatus').on(
                'change',
                function () {

                    filters.status =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#reportOwner').on(
                'change',
                function () {

                    filters.owner =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#reportPriority').on(
                'change',
                function () {

                    filters.priority =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#reportTeam').on(
                'change',
                function () {

                    filters.team =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#reportDateRange').on(
                'change',
                function () {

                    const value =
                        $(this).val();

                    if (value === 'custom') {

                        showMessage(
                            'Custom Date Range',
                            'A custom date range picker will be connected here.'
                        );
                    }
                }
            );


            $('#clearReportFilters').on(
                'click',
                function () {
                    clearFilters();
                }
            );


            $('#reportEmptyClear').on(
                'click',
                function () {
                    clearFilters();
                }
            );


            $(document).on(
                'click',
                '[data-remove-report-filter]',
                function () {

                    const key =
                        $(this).data(
                            'remove-report-filter'
                        );

                    filters[key] = '';


                    const map = {

                        project: '#reportProject',
                        status: '#reportStatus',
                        owner: '#reportOwner',
                        priority: '#reportPriority',
                        team: '#reportTeam'
                    };


                    if (map[key]) {
                        $(map[key]).val('');
                    }


                    applyFilters();
                }
            );


            // ------------------------------------------------------------
            // Header Actions
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-header-action="export"]',
                function () {

                    showMessage(
                        'Export Report',
                        'Your report export will be prepared here.'
                    );
                }
            );


            $(document).on(
                'click',
                '[data-report-header-action="generate"]',
                function () {

                    Swal.fire({
                        icon: 'success',
                        title: 'Report Generated',
                        text: 'Your new report has been added to Recent Reports.',
                        confirmButtonText: 'Done'
                    });
                }
            );


            // ------------------------------------------------------------
            // Toolbar Actions
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-action="refresh"]',
                function () {

                    const $button = $(this);

                    $button
                        .prop('disabled', true)
                        .addClass('is-loading');

                    setTimeout(function () {

                        $button
                            .prop('disabled', false)
                            .removeClass('is-loading');

                        showMessage(
                            'Report Refreshed',
                            'The report data has been refreshed.',
                            'success'
                        );

                    }, 700);
                }
            );


            $(document).on(
                'click',
                '[data-report-action="export-table"]',
                function () {

                    showMessage(
                        'Export CSV',
                        'The project performance CSV will be generated here.'
                    );
                }
            );


            // ------------------------------------------------------------
            // Report Card Menus
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-card-menu]',
                function () {

                    const type =
                        $(this).data(
                            'report-card-menu'
                        );

                    showMessage(
                        'Report Options',
                        'Additional options for the ' +
                        type +
                        ' report will appear here.'
                    );
                }
            );


            // ------------------------------------------------------------
            // Recent Report Downloads
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-report-download]',
                function () {

                    const report =
                        $(this).data(
                            'report-download'
                        );

                    showMessage(
                        'Download Report',
                        'Preparing the ' +
                        report +
                        ' report for download.'
                    );
                }
            );


            // ------------------------------------------------------------
            // Table Actions
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-table-action="view"]',
                function () {

                    showMessage(
                        'Project Report',
                        'The detailed project report will open here.'
                    );
                }
            );


            // ------------------------------------------------------------
            // Initial
            // ------------------------------------------------------------

            switchView('overview');

            updateActiveFilters();

        });
    </script>
@endpush
