@extends('layout.app')

@section('main')

    <div class="wm-risks-issues-page">

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}
        <div class="wm-risks-issues-page__header">

            <div class="wm-risks-issues-page__breadcrumb">
                <a href="{{ route('dashboard') }}" class="wm-risks-issues-page__breadcrumb-link">
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span>Risks & Issues</span>
            </div>


            <div class="wm-risks-issues-page__heading">

                <div class="wm-risks-issues-page__heading-content">

                    <h1 class="wm-risks-issues-page__title">
                        Risks & Issues
                    </h1>

                    <p class="wm-risks-issues-page__subtitle">
                        Identify, track, and resolve risks and issues affecting your projects.
                    </p>

                </div>


                <div class="wm-risks-issues-page__header-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-risk-header-action="export"
                    >
                        <i class="ph ph-download-simple"></i>
                        <span>Export</span>
                    </button>

                    <button
                        type="button"
                        class="btn btn-primary"
                        data-risk-header-action="create"
                    >
                        <i class="ph ph-plus"></i>
                        <span>Add Risk / Issue</span>
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            SUMMARY CARDS
        ============================================================= --}}
        <div class="wm-risks-issues-page__summary">

            <button
                type="button"
                class="wm-risk-summary-card"
                data-summary-filter=""
            >

                <div class="wm-risk-summary-card__icon wm-risk-summary-card__icon--primary">
                    <i class="ph ph-warning-circle"></i>
                </div>

                <div class="wm-risk-summary-card__content">

                <span class="wm-risk-summary-card__label">
                    Total Items
                </span>

                    <strong class="wm-risk-summary-card__value">
                        32
                    </strong>

                    <span class="wm-risk-summary-card__meta">
                    Across all projects
                </span>

                </div>

            </button>


            <button
                type="button"
                class="wm-risk-summary-card"
                data-summary-filter="high"
            >

                <div class="wm-risk-summary-card__icon wm-risk-summary-card__icon--danger">
                    <i class="ph ph-warning-octagon"></i>
                </div>

                <div class="wm-risk-summary-card__content">

                <span class="wm-risk-summary-card__label">
                    High Priority
                </span>

                    <strong class="wm-risk-summary-card__value">
                        7
                    </strong>

                    <span class="wm-risk-summary-card__meta wm-risk-summary-card__meta--danger">
                    3 require attention
                </span>

                </div>

            </button>


            <button
                type="button"
                class="wm-risk-summary-card"
                data-summary-filter="open"
            >

                <div class="wm-risk-summary-card__icon wm-risk-summary-card__icon--warning">
                    <i class="ph ph-clock-countdown"></i>
                </div>

                <div class="wm-risk-summary-card__content">

                <span class="wm-risk-summary-card__label">
                    Open
                </span>

                    <strong class="wm-risk-summary-card__value">
                        19
                    </strong>

                    <span class="wm-risk-summary-card__meta">
                    4 due this week
                </span>

                </div>

            </button>


            <button
                type="button"
                class="wm-risk-summary-card"
                data-summary-filter="resolved"
            >

                <div class="wm-risk-summary-card__icon wm-risk-summary-card__icon--success">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-risk-summary-card__content">

                <span class="wm-risk-summary-card__label">
                    Resolved
                </span>

                    <strong class="wm-risk-summary-card__value">
                        13
                    </strong>

                    <span class="wm-risk-summary-card__meta wm-risk-summary-card__meta--success">
                    40.6% resolution rate
                </span>

                </div>

            </button>

        </div>


        {{-- ============================================================
            RISK HEALTH OVERVIEW
        ============================================================= --}}
        <div class="wm-risk-health">

            <div class="wm-risk-health__content">

                <div class="wm-risk-health__heading">

                    <div>

                        <h2 class="wm-risk-health__title">
                            Risk Health
                        </h2>

                        <p class="wm-risk-health__subtitle">
                            Current risk distribution across active projects.
                        </p>

                    </div>

                    <span class="wm-risk-health__updated">
                    Updated 12 min ago
                </span>

                </div>


                <div class="wm-risk-health__stats">

                    <div class="wm-risk-health__stat">

                        <div class="wm-risk-health__stat-header">
                            <span>Critical</span>
                            <strong>2</strong>
                        </div>

                        <div class="wm-risk-health__progress">
                        <span
                            class="wm-risk-health__progress-bar wm-risk-health__progress-bar--danger"
                            style="width: 12%;"
                        ></span>
                        </div>

                    </div>


                    <div class="wm-risk-health__stat">

                        <div class="wm-risk-health__stat-header">
                            <span>High</span>
                            <strong>7</strong>
                        </div>

                        <div class="wm-risk-health__progress">
                        <span
                            class="wm-risk-health__progress-bar wm-risk-health__progress-bar--warning"
                            style="width: 35%;"
                        ></span>
                        </div>

                    </div>


                    <div class="wm-risk-health__stat">

                        <div class="wm-risk-health__stat-header">
                            <span>Medium</span>
                            <strong>14</strong>
                        </div>

                        <div class="wm-risk-health__progress">
                        <span
                            class="wm-risk-health__progress-bar wm-risk-health__progress-bar--primary"
                            style="width: 62%;"
                        ></span>
                        </div>

                    </div>


                    <div class="wm-risk-health__stat">

                        <div class="wm-risk-health__stat-header">
                            <span>Low</span>
                            <strong>9</strong>
                        </div>

                        <div class="wm-risk-health__progress">
                        <span
                            class="wm-risk-health__progress-bar wm-risk-health__progress-bar--success"
                            style="width: 42%;"
                        ></span>
                        </div>

                    </div>

                </div>

            </div>


            <div class="wm-risk-health__score">

                <div class="wm-risk-health__score-ring">

                    <div class="wm-risk-health__score-inner">

                        <strong>72</strong>

                        <span>
                        Health Score
                    </span>

                    </div>

                </div>

                <span class="wm-risk-health__score-label">
                Moderate Risk
            </span>

            </div>

        </div>


        {{-- ============================================================
            TOOLBAR
        ============================================================= --}}
        <div class="wm-risks-issues-page__toolbar">

            <div class="wm-risks-issues-page__toolbar-left">

                <div class="wm-risks-issues-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="riskSearch"
                        class="form-control"
                        placeholder="Search risks and issues..."
                        autocomplete="off"
                    >

                </div>


                <button
                    type="button"
                    class="btn btn-light"
                    id="riskFilterToggle"
                >
                    <i class="ph ph-funnel"></i>
                    <span>Filters</span>
                </button>

            </div>


            <div class="wm-risks-issues-page__toolbar-right">

                <div class="wm-risks-issues-page__sort">

                <span>
                    Sort by
                </span>

                    <select
                        id="riskSort"
                        class="form-select"
                    >
                        <option value="priority-desc">
                            Priority
                        </option>

                        <option value="score-desc">
                            Risk Score
                        </option>

                        <option value="due-asc">
                            Due Date
                        </option>

                        <option value="updated-desc">
                            Recently Updated
                        </option>

                        <option value="title-asc">
                            Name
                        </option>
                    </select>

                </div>


                <div class="wm-risks-issues-page__view-switcher">

                    <button
                        type="button"
                        class="wm-risks-issues-page__view-btn is-active"
                        data-risk-view="list"
                        aria-label="List view"
                    >
                        <i class="ph ph-list"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-risks-issues-page__view-btn"
                        data-risk-view="grid"
                        aria-label="Grid view"
                    >
                        <i class="ph ph-squares-four"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            FILTERS
        ============================================================= --}}
        <div
            class="wm-risks-issues-page__filters"
            id="riskFilters"
        >

            <div class="wm-risks-issues-page__filter-group">

                <label for="riskType">
                    Type
                </label>

                <select
                    id="riskType"
                    class="form-select"
                >
                    <option value="">
                        All Types
                    </option>

                    <option value="risk">
                        Risk
                    </option>

                    <option value="issue">
                        Issue
                    </option>

                </select>

            </div>


            <div class="wm-risks-issues-page__filter-group">

                <label for="riskProject">
                    Project
                </label>

                <select
                    id="riskProject"
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


            <div class="wm-risks-issues-page__filter-group">

                <label for="riskPriority">
                    Priority
                </label>

                <select
                    id="riskPriority"
                    class="form-select"
                >
                    <option value="">
                        All Priorities
                    </option>

                    <option value="critical">
                        Critical
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


            <div class="wm-risks-issues-page__filter-group">

                <label for="riskStatus">
                    Status
                </label>

                <select
                    id="riskStatus"
                    class="form-select"
                >
                    <option value="">
                        All Statuses
                    </option>

                    <option value="open">
                        Open
                    </option>

                    <option value="in-progress">
                        In Progress
                    </option>

                    <option value="resolved">
                        Resolved
                    </option>

                    <option value="closed">
                        Closed
                    </option>

                </select>

            </div>


            <div class="wm-risks-issues-page__filter-group">

                <label for="riskOwner">
                    Owner
                </label>

                <select
                    id="riskOwner"
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


            <div class="wm-risks-issues-page__filter-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    id="clearRiskFilters"
                >
                    Clear Filters
                </button>

            </div>

        </div>


        {{-- ============================================================
            ACTIVE FILTERS
        ============================================================= --}}
        <div
            class="wm-risks-issues-page__active-filters"
            id="activeRiskFilters"
        ></div>


        {{-- ============================================================
            LIST VIEW
        ============================================================= --}}
        <div
            class="wm-risks-issues-page__list-view"
            id="riskListView"
        >

            <div class="wm-risk-table-card">

                <div class="wm-risk-table-wrapper">

                    <table class="wm-risk-table">

                        <thead>

                        <tr>

                            <th>
                                Risk / Issue
                            </th>

                            <th>
                                Type
                            </th>

                            <th>
                                Project
                            </th>

                            <th>
                                Priority
                            </th>

                            <th>
                                Score
                            </th>

                            <th>
                                Owner
                            </th>

                            <th>
                                Due Date
                            </th>

                            <th>
                                Status
                            </th>

                            <th></th>

                        </tr>

                        </thead>


                        <tbody id="riskTableBody">

                        {{-- ====================================================
                            Item 01
                        ===================================================== --}}
                        <tr
                            class="wm-risk-row"
                            data-id="1"
                            data-title="Sample contamination detected"
                            data-type="issue"
                            data-project="climate"
                            data-priority="critical"
                            data-status="open"
                            data-owner="sarah"
                            data-score="95"
                            data-due="2026-09-25"
                            data-updated="2026-09-24"
                        >

                            <td>

                                <div class="wm-risk-table__item">

                                    <div class="wm-risk-table__item-icon wm-risk-table__item-icon--issue">
                                        <i class="ph ph-bug"></i>
                                    </div>

                                    <div class="wm-risk-table__item-content">

                                        <a
                                            href="#"
                                            class="wm-risk-table__item-title"
                                            data-risk-action="view"
                                        >
                                            Sample contamination detected
                                        </a>

                                        <span class="wm-risk-table__item-description">
                                            Contamination was identified in the latest sample batch.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-type wm-risk-type--issue">
                                    Issue
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-project">
                                    Climate Research
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-priority wm-risk-priority--critical">
                                    Critical
                                </span>
                            </td>


                            <td>

                                <span class="wm-risk-score wm-risk-score--critical">
                                    95
                                </span>

                            </td>


                            <td>

                                <div class="wm-risk-owner">

                                    <div class="wm-risk-owner__avatar">
                                        SJ
                                    </div>

                                    <span>
                                        Sarah Johnson
                                    </span>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-due wm-risk-due--danger">
                                    Sep 25, 2026
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-status wm-risk-status--open">
                                    Open
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-table__actions">

                                    <button
                                        type="button"
                                        class="wm-risk-table__action"
                                        data-risk-menu-trigger
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-risk-action-menu">

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

                                        <button
                                            class="wm-risk-action-menu__danger"
                                            data-risk-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- ====================================================
                            Item 02
                        ===================================================== --}}
                        <tr
                            class="wm-risk-row"
                            data-id="2"
                            data-title="Reagent delivery delay"
                            data-type="risk"
                            data-project="drug"
                            data-priority="high"
                            data-status="in-progress"
                            data-owner="michael"
                            data-score="82"
                            data-due="2026-09-28"
                            data-updated="2026-09-23"
                        >

                            <td>

                                <div class="wm-risk-table__item">

                                    <div class="wm-risk-table__item-icon wm-risk-table__item-icon--risk">
                                        <i class="ph ph-truck"></i>
                                    </div>

                                    <div class="wm-risk-table__item-content">

                                        <a
                                            href="#"
                                            class="wm-risk-table__item-title"
                                            data-risk-action="view"
                                        >
                                            Reagent delivery delay
                                        </a>

                                        <span class="wm-risk-table__item-description">
                                            Supplier has reported a possible one-week delivery delay.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-type wm-risk-type--risk">
                                    Risk
                                </span>
                            </td>


                            <td>
                                Drug Discovery
                            </td>


                            <td>
                                <span class="wm-risk-priority wm-risk-priority--high">
                                    High
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-score wm-risk-score--high">
                                    82
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-owner">

                                    <div class="wm-risk-owner__avatar wm-risk-owner__avatar--purple">
                                        MC
                                    </div>

                                    <span>
                                        Michael Chen
                                    </span>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-due">
                                    Sep 28, 2026
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-status wm-risk-status--progress">
                                    In Progress
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-table__actions">

                                    <button
                                        type="button"
                                        class="wm-risk-table__action"
                                        data-risk-menu-trigger
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-risk-action-menu">

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

                                        <button
                                            class="wm-risk-action-menu__danger"
                                            data-risk-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- ====================================================
                            Item 03
                        ===================================================== --}}
                        <tr
                            class="wm-risk-row"
                            data-id="3"
                            data-title="Sequencing equipment failure"
                            data-type="risk"
                            data-project="genomics"
                            data-priority="high"
                            data-status="open"
                            data-owner="david"
                            data-score="78"
                            data-due="2026-10-02"
                            data-updated="2026-09-22"
                        >

                            <td>

                                <div class="wm-risk-table__item">

                                    <div class="wm-risk-table__item-icon wm-risk-table__item-icon--risk">
                                        <i class="ph ph-cpu"></i>
                                    </div>

                                    <div class="wm-risk-table__item-content">

                                        <a
                                            href="#"
                                            class="wm-risk-table__item-title"
                                            data-risk-action="view"
                                        >
                                            Sequencing equipment failure
                                        </a>

                                        <span class="wm-risk-table__item-description">
                                            Backup equipment is not currently available.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-type wm-risk-type--risk">
                                    Risk
                                </span>
                            </td>


                            <td>
                                Genomics Study
                            </td>


                            <td>
                                <span class="wm-risk-priority wm-risk-priority--high">
                                    High
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-score wm-risk-score--high">
                                    78
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-owner">

                                    <div class="wm-risk-owner__avatar wm-risk-owner__avatar--cyan">
                                        DW
                                    </div>

                                    <span>
                                        David Wilson
                                    </span>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-due">
                                    Oct 02, 2026
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-status wm-risk-status--open">
                                    Open
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-table__actions">

                                    <button
                                        type="button"
                                        class="wm-risk-table__action"
                                        data-risk-menu-trigger
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-risk-action-menu">

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

                                        <button
                                            class="wm-risk-action-menu__danger"
                                            data-risk-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- ====================================================
                            Item 04
                        ===================================================== --}}
                        <tr
                            class="wm-risk-row"
                            data-id="4"
                            data-title="Participant recruitment below target"
                            data-type="issue"
                            data-project="neural"
                            data-priority="medium"
                            data-status="open"
                            data-owner="emma"
                            data-score="64"
                            data-due="2026-10-08"
                            data-updated="2026-09-21"
                        >

                            <td>

                                <div class="wm-risk-table__item">

                                    <div class="wm-risk-table__item-icon wm-risk-table__item-icon--issue">
                                        <i class="ph ph-users-three"></i>
                                    </div>

                                    <div class="wm-risk-table__item-content">

                                        <a
                                            href="#"
                                            class="wm-risk-table__item-title"
                                            data-risk-action="view"
                                        >
                                            Participant recruitment below target
                                        </a>

                                        <span class="wm-risk-table__item-description">
                                            Recruitment is currently 18% below the expected target.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-type wm-risk-type--issue">
                                    Issue
                                </span>
                            </td>


                            <td>
                                Neural Imaging
                            </td>


                            <td>
                                <span class="wm-risk-priority wm-risk-priority--medium">
                                    Medium
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-score wm-risk-score--medium">
                                    64
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-owner">

                                    <div class="wm-risk-owner__avatar wm-risk-owner__avatar--warning">
                                        ED
                                    </div>

                                    <span>
                                        Emma Davis
                                    </span>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-due">
                                    Oct 08, 2026
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-status wm-risk-status--open">
                                    Open
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-table__actions">

                                    <button
                                        type="button"
                                        class="wm-risk-table__action"
                                        data-risk-menu-trigger
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-risk-action-menu">

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

                                        <button
                                            class="wm-risk-action-menu__danger"
                                            data-risk-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- ====================================================
                            Item 05
                        ===================================================== --}}
                        <tr
                            class="wm-risk-row"
                            data-id="5"
                            data-title="Analysis pipeline timeout"
                            data-type="issue"
                            data-project="climate"
                            data-priority="medium"
                            data-status="in-progress"
                            data-owner="sarah"
                            data-score="56"
                            data-due="2026-10-05"
                            data-updated="2026-09-20"
                        >

                            <td>

                                <div class="wm-risk-table__item">

                                    <div class="wm-risk-table__item-icon wm-risk-table__item-icon--issue">
                                        <i class="ph ph-code"></i>
                                    </div>

                                    <div class="wm-risk-table__item-content">

                                        <a
                                            href="#"
                                            class="wm-risk-table__item-title"
                                            data-risk-action="view"
                                        >
                                            Analysis pipeline timeout
                                        </a>

                                        <span class="wm-risk-table__item-description">
                                            Large datasets are causing processing jobs to exceed timeout limits.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-type wm-risk-type--issue">
                                    Issue
                                </span>
                            </td>


                            <td>
                                Climate Research
                            </td>


                            <td>
                                <span class="wm-risk-priority wm-risk-priority--medium">
                                    Medium
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-score wm-risk-score--medium">
                                    56
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-owner">

                                    <div class="wm-risk-owner__avatar">
                                        SJ
                                    </div>

                                    <span>
                                        Sarah Johnson
                                    </span>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-due">
                                    Oct 05, 2026
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-status wm-risk-status--progress">
                                    In Progress
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-table__actions">

                                    <button
                                        type="button"
                                        class="wm-risk-table__action"
                                        data-risk-menu-trigger
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-risk-action-menu">

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

                                        <button
                                            class="wm-risk-action-menu__danger"
                                            data-risk-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- ====================================================
                            Item 06
                        ===================================================== --}}
                        <tr
                            class="wm-risk-row"
                            data-id="6"
                            data-title="Budget variance"
                            data-type="risk"
                            data-project="drug"
                            data-priority="low"
                            data-status="resolved"
                            data-owner="michael"
                            data-score="32"
                            data-due="2026-09-18"
                            data-updated="2026-09-18"
                        >

                            <td>

                                <div class="wm-risk-table__item">

                                    <div class="wm-risk-table__item-icon wm-risk-table__item-icon--risk">
                                        <i class="ph ph-currency-dollar"></i>
                                    </div>

                                    <div class="wm-risk-table__item-content">

                                        <a
                                            href="#"
                                            class="wm-risk-table__item-title"
                                            data-risk-action="view"
                                        >
                                            Budget variance
                                        </a>

                                        <span class="wm-risk-table__item-description">
                                            Procurement costs exceeded the original estimate.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-type wm-risk-type--risk">
                                    Risk
                                </span>
                            </td>


                            <td>
                                Drug Discovery
                            </td>


                            <td>
                                <span class="wm-risk-priority wm-risk-priority--low">
                                    Low
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-score wm-risk-score--low">
                                    32
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-owner">

                                    <div class="wm-risk-owner__avatar wm-risk-owner__avatar--purple">
                                        MC
                                    </div>

                                    <span>
                                        Michael Chen
                                    </span>

                                </div>

                            </td>


                            <td>
                                <span class="wm-risk-due">
                                    Sep 18, 2026
                                </span>
                            </td>


                            <td>
                                <span class="wm-risk-status wm-risk-status--resolved">
                                    Resolved
                                </span>
                            </td>


                            <td>

                                <div class="wm-risk-table__actions">

                                    <button
                                        type="button"
                                        class="wm-risk-table__action"
                                        data-risk-menu-trigger
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-risk-action-menu">

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

                                        <button
                                            class="wm-risk-action-menu__danger"
                                            data-risk-action="delete"
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


                {{-- Pagination --}}
                <div class="wm-risk-pagination">

                    <div class="wm-risk-pagination__info">
                        Showing <strong>1–6</strong> of <strong>32</strong> items
                    </div>

                    <div class="wm-risk-pagination__controls">

                        <button
                            type="button"
                            class="wm-risk-pagination__btn"
                            disabled
                        >
                            <i class="ph ph-caret-left"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-risk-pagination__btn is-active"
                        >
                            1
                        </button>

                        <button
                            type="button"
                            class="wm-risk-pagination__btn"
                        >
                            2
                        </button>

                        <button
                            type="button"
                            class="wm-risk-pagination__btn"
                        >
                            3
                        </button>

                        <span class="wm-risk-pagination__dots">
                        ...
                    </span>

                        <button
                            type="button"
                            class="wm-risk-pagination__btn"
                        >
                            6
                        </button>

                        <button
                            type="button"
                            class="wm-risk-pagination__btn"
                        >
                            <i class="ph ph-caret-right"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- ============================================================
            GRID VIEW
        ============================================================= --}}
        <div
            class="wm-risks-issues-page__grid-view"
            id="riskGridView"
        >

            <div class="wm-risk-grid">

                {{-- Grid Card --}}
                <article
                    class="wm-risk-card"
                    data-grid-id="1"
                    data-title="Sample contamination detected"
                    data-type="issue"
                    data-project="climate"
                    data-priority="critical"
                    data-status="open"
                    data-owner="sarah"
                    data-score="95"
                >

                    <div class="wm-risk-card__top">

                    <span class="wm-risk-type wm-risk-type--issue">
                        Issue
                    </span>

                        <div class="wm-risk-card__menu-wrapper">

                            <button
                                type="button"
                                class="wm-risk-card__menu"
                                data-risk-menu-trigger
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-risk-action-menu">

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

                                <button
                                    class="wm-risk-action-menu__danger"
                                    data-risk-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <h3 class="wm-risk-card__title">
                        Sample contamination detected
                    </h3>

                    <p class="wm-risk-card__description">
                        Contamination was identified in the latest sample batch.
                    </p>


                    <div class="wm-risk-card__project">
                        <i class="ph ph-leaf"></i>
                        Climate Research Initiative
                    </div>


                    <div class="wm-risk-card__metrics">

                        <div>
                            <span>Priority</span>

                            <strong class="wm-risk-priority wm-risk-priority--critical">
                                Critical
                            </strong>
                        </div>

                        <div>
                            <span>Score</span>

                            <strong class="wm-risk-score wm-risk-score--critical">
                                95
                            </strong>
                        </div>

                    </div>


                    <div class="wm-risk-card__footer">

                        <div class="wm-risk-owner">

                            <div class="wm-risk-owner__avatar">
                                SJ
                            </div>

                            <span>
                            Sarah Johnson
                        </span>

                        </div>

                        <span class="wm-risk-status wm-risk-status--open">
                        Open
                    </span>

                    </div>

                </article>


                {{-- Grid Card --}}
                <article
                    class="wm-risk-card"
                    data-grid-id="2"
                    data-title="Reagent delivery delay"
                    data-type="risk"
                    data-project="drug"
                    data-priority="high"
                    data-status="in-progress"
                    data-owner="michael"
                    data-score="82"
                >

                    <div class="wm-risk-card__top">

                    <span class="wm-risk-type wm-risk-type--risk">
                        Risk
                    </span>

                        <div class="wm-risk-card__menu-wrapper">

                            <button
                                type="button"
                                class="wm-risk-card__menu"
                                data-risk-menu-trigger
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-risk-action-menu">

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

                                <button
                                    class="wm-risk-action-menu__danger"
                                    data-risk-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <h3 class="wm-risk-card__title">
                        Reagent delivery delay
                    </h3>

                    <p class="wm-risk-card__description">
                        Supplier has reported a possible one-week delivery delay.
                    </p>


                    <div class="wm-risk-card__project">
                        <i class="ph ph-flask"></i>
                        Drug Discovery Platform
                    </div>


                    <div class="wm-risk-card__metrics">

                        <div>
                            <span>Priority</span>

                            <strong class="wm-risk-priority wm-risk-priority--high">
                                High
                            </strong>
                        </div>

                        <div>
                            <span>Score</span>

                            <strong class="wm-risk-score wm-risk-score--high">
                                82
                            </strong>
                        </div>

                    </div>


                    <div class="wm-risk-card__footer">

                        <div class="wm-risk-owner">

                            <div class="wm-risk-owner__avatar wm-risk-owner__avatar--purple">
                                MC
                            </div>

                            <span>
                            Michael Chen
                        </span>

                        </div>

                        <span class="wm-risk-status wm-risk-status--progress">
                        In Progress
                    </span>

                    </div>

                </article>


                {{-- Grid Card --}}
                <article
                    class="wm-risk-card"
                    data-grid-id="3"
                    data-title="Sequencing equipment failure"
                    data-type="risk"
                    data-project="genomics"
                    data-priority="high"
                    data-status="open"
                    data-owner="david"
                    data-score="78"
                >

                    <div class="wm-risk-card__top">

                    <span class="wm-risk-type wm-risk-type--risk">
                        Risk
                    </span>

                        <div class="wm-risk-card__menu-wrapper">

                            <button
                                type="button"
                                class="wm-risk-card__menu"
                                data-risk-menu-trigger
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-risk-action-menu">

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

                                <button
                                    class="wm-risk-action-menu__danger"
                                    data-risk-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <h3 class="wm-risk-card__title">
                        Sequencing equipment failure
                    </h3>

                    <p class="wm-risk-card__description">
                        Backup equipment is not currently available.
                    </p>


                    <div class="wm-risk-card__project">
                        <i class="ph ph-dna"></i>
                        Genomics Study
                    </div>


                    <div class="wm-risk-card__metrics">

                        <div>
                            <span>Priority</span>

                            <strong class="wm-risk-priority wm-risk-priority--high">
                                High
                            </strong>
                        </div>

                        <div>
                            <span>Score</span>

                            <strong class="wm-risk-score wm-risk-score--high">
                                78
                            </strong>
                        </div>

                    </div>


                    <div class="wm-risk-card__footer">

                        <div class="wm-risk-owner">

                            <div class="wm-risk-owner__avatar wm-risk-owner__avatar--cyan">
                                DW
                            </div>

                            <span>
                            David Wilson
                        </span>

                        </div>

                        <span class="wm-risk-status wm-risk-status--open">
                        Open
                    </span>

                    </div>

                </article>


                {{-- Grid Card --}}
                <article
                    class="wm-risk-card"
                    data-grid-id="4"
                    data-title="Participant recruitment below target"
                    data-type="issue"
                    data-project="neural"
                    data-priority="medium"
                    data-status="open"
                    data-owner="emma"
                    data-score="64"
                >

                    <div class="wm-risk-card__top">

                    <span class="wm-risk-type wm-risk-type--issue">
                        Issue
                    </span>

                        <div class="wm-risk-card__menu-wrapper">

                            <button
                                type="button"
                                class="wm-risk-card__menu"
                                data-risk-menu-trigger
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-risk-action-menu">

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

                                <button
                                    class="wm-risk-action-menu__danger"
                                    data-risk-action="delete"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <h3 class="wm-risk-card__title">
                        Participant recruitment below target
                    </h3>

                    <p class="wm-risk-card__description">
                        Recruitment is currently 18% below the expected target.
                    </p>


                    <div class="wm-risk-card__project">
                        <i class="ph ph-brain"></i>
                        Neural Imaging Research
                    </div>


                    <div class="wm-risk-card__metrics">

                        <div>
                            <span>Priority</span>

                            <strong class="wm-risk-priority wm-risk-priority--medium">
                                Medium
                            </strong>
                        </div>

                        <div>
                            <span>Score</span>

                            <strong class="wm-risk-score wm-risk-score--medium">
                                64
                            </strong>
                        </div>

                    </div>


                    <div class="wm-risk-card__footer">

                        <div class="wm-risk-owner">

                            <div class="wm-risk-owner__avatar wm-risk-owner__avatar--warning">
                                ED
                            </div>

                            <span>
                            Emma Davis
                        </span>

                        </div>

                        <span class="wm-risk-status wm-risk-status--open">
                        Open
                    </span>

                    </div>

                </article>

            </div>

        </div>


        {{-- ============================================================
            EMPTY STATE
        ============================================================= --}}
        <div
            class="wm-risks-issues-page__empty"
            id="riskEmpty"
        >

            <div class="wm-risks-issues-page__empty-icon">
                <i class="ph ph-shield-check"></i>
            </div>

            <h3>
                No risks or issues found
            </h3>

            <p>
                Try adjusting your search or filters to find what you are looking for.
            </p>

            <button
                type="button"
                class="btn btn-light"
                id="riskEmptyClear"
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


            // ============================================================
            // State
            // ============================================================

            const filters = {
                type: '',
                project: '',
                priority: '',
                status: '',
                owner: ''
            };

            let currentView = 'list';


            // ============================================================
            // Functions
            // ============================================================

            function getSearchValue() {
                return $.trim(
                    $('#riskSearch').val().toLowerCase()
                );
            }


            function updateActiveFilters() {

                const $container =
                    $('#activeRiskFilters');

                $container.empty();


                const labels = {

                    type: {
                        risk: 'Risk',
                        issue: 'Issue'
                    },

                    project: {
                        climate: 'Climate Research',
                        drug: 'Drug Discovery',
                        genomics: 'Genomics Study',
                        neural: 'Neural Imaging'
                    },

                    priority: {
                        critical: 'Critical',
                        high: 'High',
                        medium: 'Medium',
                        low: 'Low'
                    },

                    status: {
                        open: 'Open',
                        'in-progress': 'In Progress',
                        resolved: 'Resolved',
                        closed: 'Closed'
                    },

                    owner: {
                        sarah: 'Sarah Johnson',
                        michael: 'Michael Chen',
                        david: 'David Wilson',
                        emma: 'Emma Davis'
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


                    $container.append(`
                    <button
                        type="button"
                        class="wm-risks-issues-page__filter-chip"
                        data-remove-risk-filter="${key}"
                    >
                        <span>${label}</span>
                        <i class="ph ph-x"></i>
                    </button>
                `);
                });
            }


            function rowMatches($row) {

                const search =
                    getSearchValue();


                const title =
                    String($row.data('title') || '')
                        .toLowerCase();

                const project =
                    String($row.data('project') || '');

                const type =
                    String($row.data('type') || '');

                const priority =
                    String($row.data('priority') || '');

                const status =
                    String($row.data('status') || '');

                const owner =
                    String($row.data('owner') || '');


                const searchMatch =
                    !search ||
                    title.indexOf(search) !== -1 ||
                    project.indexOf(search) !== -1 ||
                    type.indexOf(search) !== -1 ||
                    priority.indexOf(search) !== -1 ||
                    owner.indexOf(search) !== -1;


                const typeMatch =
                    !filters.type ||
                    filters.type === type;

                const projectMatch =
                    !filters.project ||
                    filters.project === project;

                const priorityMatch =
                    !filters.priority ||
                    filters.priority === priority;

                const statusMatch =
                    !filters.status ||
                    filters.status === status;

                const ownerMatch =
                    !filters.owner ||
                    filters.owner === owner;


                return (
                    searchMatch &&
                    typeMatch &&
                    projectMatch &&
                    priorityMatch &&
                    statusMatch &&
                    ownerMatch
                );
            }


            function applyFilters() {

                let visible = 0;


                $('.wm-risk-row').each(function () {

                    const $row = $(this);

                    const match =
                        rowMatches($row);

                    $row.toggle(match);

                    if (match) {
                        visible++;
                    }
                });


                $('.wm-risk-card').each(function () {

                    const $card = $(this);

                    const match =
                        rowMatches($card);

                    $card.toggle(match);
                });


                updateActiveFilters();

                updateEmptyState(visible);
            }


            function updateEmptyState(count) {

                const hasSearch =
                    getSearchValue() !== '';

                const hasFilters =
                    Object.values(filters)
                        .some(function (value) {
                            return value !== '';
                        });


                const shouldShow =
                    count === 0 &&
                    (hasSearch || hasFilters);


                $('#riskEmpty')
                    .toggleClass(
                        'is-visible',
                        shouldShow
                    );
            }


            function clearFilters() {

                filters.type = '';
                filters.project = '';
                filters.priority = '';
                filters.status = '';
                filters.owner = '';


                $('#riskSearch').val('');

                $('#riskType').val('');
                $('#riskProject').val('');
                $('#riskPriority').val('');
                $('#riskStatus').val('');
                $('#riskOwner').val('');


                applyFilters();
            }


            function closeRiskMenus() {

                $('.wm-risk-action-menu')
                    .removeClass('is-open');

                $('.wm-risk-table__actions')
                    .removeClass('is-open');

                $('.wm-risk-card__menu-wrapper')
                    .removeClass('is-open');
            }


            function showNotice(
                title,
                text,
                icon = 'info'
            ) {

                Swal.fire({
                    icon: icon,
                    title: title,
                    text: text,
                    confirmButtonText: 'Okay'
                });
            }


            function sortRows(sortValue) {

                const $tbody =
                    $('#riskTableBody');

                const $rows =
                    $tbody
                        .children('.wm-risk-row')
                        .get();


                $rows.sort(function (a, b) {

                    const $a = $(a);
                    const $b = $(b);


                    if (sortValue === 'title-asc') {

                        return String(
                            $a.data('title')
                        ).localeCompare(
                            String($b.data('title'))
                        );
                    }


                    if (sortValue === 'score-desc') {

                        return (
                            Number($b.data('score')) -
                            Number($a.data('score'))
                        );
                    }


                    if (sortValue === 'due-asc') {

                        return String(
                            $a.data('due')
                        ).localeCompare(
                            String($b.data('due'))
                        );
                    }


                    if (sortValue === 'updated-desc') {

                        return String(
                            $b.data('updated')
                        ).localeCompare(
                            String($a.data('updated'))
                        );
                    }


                    const priorityWeight = {
                        critical: 4,
                        high: 3,
                        medium: 2,
                        low: 1
                    };


                    return (
                        priorityWeight[
                            $b.data('priority')
                            ] -
                        priorityWeight[
                            $a.data('priority')
                            ]
                    );
                });


                $.each($rows, function (_, row) {
                    $tbody.append(row);
                });


                applyFilters();
            }


            function setView(view) {

                currentView = view;


                $('.wm-risks-issues-page__view-btn')
                    .removeClass('is-active');

                $(
                    '[data-risk-view="' +
                    view +
                    '"]'
                ).addClass('is-active');


                if (view === 'list') {

                    $('#riskListView').show();
                    $('#riskGridView').hide();

                } else {

                    $('#riskListView').hide();
                    $('#riskGridView').show();
                }


                applyFilters();
            }


            // ============================================================
            // Search
            // ============================================================

            $('#riskSearch').on(
                'input',
                function () {
                    applyFilters();
                }
            );


            // ============================================================
            // Filter Toggle
            // ============================================================

            $('#riskFilterToggle').on(
                'click',
                function () {

                    $('#riskFilters')
                        .toggleClass('is-open');

                    $(this)
                        .toggleClass('is-active');
                }
            );


            // ============================================================
            // Filter Changes
            // ============================================================

            $('#riskType').on(
                'change',
                function () {

                    filters.type =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#riskProject').on(
                'change',
                function () {

                    filters.project =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#riskPriority').on(
                'change',
                function () {

                    filters.priority =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#riskStatus').on(
                'change',
                function () {

                    filters.status =
                        $(this).val();

                    applyFilters();
                }
            );


            $('#riskOwner').on(
                'change',
                function () {

                    filters.owner =
                        $(this).val();

                    applyFilters();
                }
            );


            // ============================================================
            // Remove Filter
            // ============================================================

            $(document).on(
                'click',
                '[data-remove-risk-filter]',
                function () {

                    const key =
                        $(this).data(
                            'remove-risk-filter'
                        );


                    filters[key] = '';


                    const selectMap = {

                        type: '#riskType',
                        project: '#riskProject',
                        priority: '#riskPriority',
                        status: '#riskStatus',
                        owner: '#riskOwner'
                    };


                    if (selectMap[key]) {
                        $(selectMap[key]).val('');
                    }


                    applyFilters();
                }
            );


            // ============================================================
            // Clear Filters
            // ============================================================

            $('#clearRiskFilters, #riskEmptyClear')
                .on(
                    'click',
                    function () {
                        clearFilters();
                    }
                );


            // ============================================================
            // Summary Cards
            // ============================================================

            $(document).on(
                'click',
                '[data-summary-filter]',
                function () {

                    const value =
                        $(this).data(
                            'summary-filter'
                        );


                    if (value === 'high') {

                        filters.priority = 'high';
                        $('#riskPriority').val('high');

                    } else if (value === 'open') {

                        filters.status = 'open';
                        $('#riskStatus').val('open');

                    } else if (value === 'resolved') {

                        filters.status = 'resolved';
                        $('#riskStatus').val('resolved');

                    } else {

                        clearFilters();
                        return;
                    }


                    applyFilters();
                }
            );


            // ============================================================
            // Sorting
            // ============================================================

            $('#riskSort').on(
                'change',
                function () {

                    sortRows(
                        $(this).val()
                    );
                }
            );


            // ============================================================
            // View Switcher
            // ============================================================

            $(document).on(
                'click',
                '[data-risk-view]',
                function () {

                    setView(
                        $(this).data('risk-view')
                    );
                }
            );


            // ============================================================
            // Action Menus
            // ============================================================

            $(document).on(
                'click',
                '[data-risk-menu-trigger]',
                function (event) {

                    event.preventDefault();
                    event.stopPropagation();


                    const $wrapper =
                        $(this).closest(
                            '.wm-risk-table__actions, .wm-risk-card__menu-wrapper'
                        );

                    const $menu =
                        $wrapper.find(
                            '.wm-risk-action-menu'
                        );


                    $('.wm-risk-action-menu')
                        .not($menu)
                        .removeClass('is-open');


                    $('.wm-risk-table__actions, .wm-risk-card__menu-wrapper')
                        .not($wrapper)
                        .removeClass('is-open');


                    $menu.toggleClass('is-open');
                    $wrapper.toggleClass('is-open');
                }
            );


            // ============================================================
            // Risk Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-risk-action]',
                function (event) {

                    event.preventDefault();


                    const action =
                        $(this).data(
                            'risk-action'
                        );


                    const $row =
                        $(this).closest(
                            '.wm-risk-row'
                        );

                    const $card =
                        $(this).closest(
                            '.wm-risk-card'
                        );


                    const title =
                        $row.length
                            ? $row.data('title')
                            : $card.data('title');


                    closeRiskMenus();


                    if (action === 'view') {

                        showNotice(
                            'View Risk / Issue',
                            'The detailed risk or issue page for "' +
                            title +
                            '" will open here.'
                        );

                        return;
                    }


                    if (action === 'edit') {

                        showNotice(
                            'Edit Risk / Issue',
                            'The edit form for "' +
                            title +
                            '" will open here.'
                        );

                        return;
                    }


                    if (
                        action === 'resolve' ||
                        action === 'reopen'
                    ) {

                        const message =
                            action === 'resolve'
                                ? 'This item will be marked as resolved.'
                                : 'This item will be reopened.';


                        Swal.fire({
                            icon: 'question',
                            title:
                                action === 'resolve'
                                    ? 'Resolve Item?'
                                    : 'Reopen Item?',
                            text: message,
                            showCancelButton: true,
                            confirmButtonText:
                                action === 'resolve'
                                    ? 'Resolve'
                                    : 'Reopen',
                            cancelButtonText: 'Cancel'
                        }).then(function (result) {

                            if (result.isConfirmed) {

                                showNotice(
                                    'Updated',
                                    'The risk / issue status has been updated.',
                                    'success'
                                );
                            }
                        });

                        return;
                    }


                    if (action === 'delete') {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Delete this item?',
                            text:
                                'This action cannot be undone.',
                            showCancelButton: true,
                            confirmButtonText: 'Delete',
                            cancelButtonText: 'Cancel',
                            confirmButtonColor: '#EF4444'
                        }).then(function (result) {

                            if (result.isConfirmed) {

                                showNotice(
                                    'Deleted',
                                    'The risk / issue has been removed.',
                                    'success'
                                );
                            }
                        });
                    }
                }
            );


            // ============================================================
            // Header Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-risk-header-action="export"]',
                function () {

                    showNotice(
                        'Export Risks & Issues',
                        'Your export file will be generated here.'
                    );
                }
            );


            $(document).on(
                'click',
                '[data-risk-header-action="create"]',
                function () {

                    showNotice(
                        'Add Risk / Issue',
                        'The create risk / issue form will open here.'
                    );
                }
            );


            // ============================================================
            // Outside Click
            // ============================================================

            $(document).on(
                'click',
                function (event) {

                    if (
                        !$(event.target).closest(
                            '.wm-risk-table__actions, .wm-risk-card__menu-wrapper'
                        ).length
                    ) {
                        closeRiskMenus();
                    }
                }
            );


            // ============================================================
            // Escape
            // ============================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeRiskMenus();
                    }
                }
            );


            // ============================================================
            // Initial
            // ============================================================

            setView('list');

            applyFilters();

        });
    </script>
@endpush
