@extends('layout.app')

@section('main')

    <div class="wm-workstreams-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-workstreams-page__header">

            <div class="wm-workstreams-page__header-left">

                <div class="wm-workstreams-page__breadcrumb">

                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Workstreams</span>

                </div>

                <h1 class="wm-workstreams-page__title">
                    Workstreams
                </h1>

                <p class="wm-workstreams-page__subtitle">
                    Organize research activities into focused streams of work.
                </p>

            </div>


            <div class="wm-workstreams-page__header-actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-workstreams-export"
                >
                    <i class="ph ph-download-simple"></i>
                    <span>Export</span>
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="wm-create-workstream"
                >
                    <i class="ph ph-plus"></i>
                    <span>Create Workstream</span>
                </button>

            </div>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-workstreams-summary">

            <button
                type="button"
                class="wm-workstream-summary is-active"
                data-workstream-status="all"
            >
            <span class="wm-workstream-summary__icon wm-workstream-summary__icon--blue">
                <i class="ph ph-stack"></i>
            </span>

                <span class="wm-workstream-summary__content">
                <span class="wm-workstream-summary__label">
                    Total Workstreams
                </span>

                <strong class="wm-workstream-summary__value">
                    12
                </strong>
            </span>
            </button>


            <button
                type="button"
                class="wm-workstream-summary"
                data-workstream-status="active"
            >
            <span class="wm-workstream-summary__icon wm-workstream-summary__icon--green">
                <i class="ph ph-play-circle"></i>
            </span>

                <span class="wm-workstream-summary__content">
                <span class="wm-workstream-summary__label">
                    Active
                </span>

                <strong class="wm-workstream-summary__value">
                    7
                </strong>
            </span>
            </button>


            <button
                type="button"
                class="wm-workstream-summary"
                data-workstream-status="planning"
            >
            <span class="wm-workstream-summary__icon wm-workstream-summary__icon--purple">
                <i class="ph ph-calendar-plus"></i>
            </span>

                <span class="wm-workstream-summary__content">
                <span class="wm-workstream-summary__label">
                    Planning
                </span>

                <strong class="wm-workstream-summary__value">
                    3
                </strong>
            </span>
            </button>


            <button
                type="button"
                class="wm-workstream-summary"
                data-workstream-status="completed"
            >
            <span class="wm-workstream-summary__icon wm-workstream-summary__icon--cyan">
                <i class="ph ph-check-circle"></i>
            </span>

                <span class="wm-workstream-summary__content">
                <span class="wm-workstream-summary__label">
                    Completed
                </span>

                <strong class="wm-workstream-summary__value">
                    2
                </strong>
            </span>
            </button>


            <button
                type="button"
                class="wm-workstream-summary"
                data-workstream-status="overdue"
            >
            <span class="wm-workstream-summary__icon wm-workstream-summary__icon--red">
                <i class="ph ph-warning-circle"></i>
            </span>

                <span class="wm-workstream-summary__content">
                <span class="wm-workstream-summary__label">
                    Overdue
                </span>

                <strong class="wm-workstream-summary__value">
                    1
                </strong>
            </span>
            </button>

        </div>


        {{-- =========================================================
            Main Card
        ========================================================== --}}
        <div class="wm-workstreams-card">

            {{-- Toolbar --}}
            <div class="wm-workstreams-toolbar">

                <div class="wm-workstreams-toolbar__left">

                    <div class="wm-workstreams-search">

                        <i class="ph ph-magnifying-glass"></i>

                        <input
                            type="search"
                            id="wm-workstream-search"
                            placeholder="Search workstreams..."
                            autocomplete="off"
                        >

                    </div>


                    <button
                        type="button"
                        class="wm-workstreams-filter-toggle"
                        id="wm-workstream-filter-toggle"
                    >
                        <i class="ph ph-funnel"></i>
                        <span>Filters</span>
                    </button>

                </div>


                <div class="wm-workstreams-toolbar__right">

                    <label class="wm-workstreams-sort">

                        <span>Sort by</span>

                        <select id="wm-workstream-sort">

                            <option value="name">
                                Name
                            </option>

                            <option value="progress">
                                Progress
                            </option>

                            <option value="deadline">
                                Deadline
                            </option>

                            <option value="tasks">
                                Tasks
                            </option>

                        </select>

                    </label>


                    <div class="wm-workstreams-view-switcher">

                        <button
                            type="button"
                            class="wm-workstreams-view-switcher__button is-active"
                            data-workstream-view="list"
                            aria-label="List view"
                        >
                            <i class="ph ph-list"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-workstreams-view-switcher__button"
                            data-workstream-view="grid"
                            aria-label="Grid view"
                        >
                            <i class="ph ph-squares-four"></i>
                        </button>

                    </div>

                </div>

            </div>


            {{-- Filters --}}
            <div
                class="wm-workstreams-toolbar__filters"
                id="wm-workstreams-filters"
            >

                <div class="wm-workstream-filter">

                    <label for="wm-workstream-project">
                        Project
                    </label>

                    <select id="wm-workstream-project">

                        <option value="all">
                            All Projects
                        </option>

                        <option value="atlas">
                            Atlas Research Platform
                        </option>

                        <option value="neuro">
                            Neuro Imaging Study
                        </option>

                        <option value="climate">
                            Climate Data Analysis
                        </option>

                        <option value="genome">
                            Genome Research
                        </option>

                    </select>

                </div>


                <div class="wm-workstream-filter">

                    <label for="wm-workstream-owner">
                        Owner
                    </label>

                    <select id="wm-workstream-owner">

                        <option value="all">
                            All Owners
                        </option>

                        <option value="olivia">
                            Olivia Martin
                        </option>

                        <option value="ethan">
                            Ethan Wilson
                        </option>

                        <option value="sophia">
                            Sophia Carter
                        </option>

                        <option value="liam">
                            Liam Anderson
                        </option>

                    </select>

                </div>


                <div class="wm-workstream-filter">

                    <label for="wm-workstream-priority">
                        Priority
                    </label>

                    <select id="wm-workstream-priority">

                        <option value="all">
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


                <button
                    type="button"
                    class="wm-workstreams-clear-filters"
                    id="wm-clear-workstream-filters"
                >
                    <i class="ph ph-x"></i>
                    Clear Filters
                </button>

            </div>


            {{-- Active Filters --}}
            <div
                class="wm-workstreams-active-filters"
                id="wm-workstreams-active-filters"
                hidden
            >

            <span class="wm-workstreams-active-filters__label">
                Active filters:
            </span>

                <div
                    class="wm-workstreams-active-filters__items"
                    id="wm-workstreams-filter-items"
                ></div>

            </div>


            {{-- =====================================================
                List View
            ====================================================== --}}
            <div
                class="wm-workstreams-list"
                id="wm-workstreams-list"
            >

                <div class="wm-workstreams-table-wrapper">

                    <table class="wm-workstreams-table">

                        <thead>

                        <tr>

                            <th class="wm-workstreams-table__workstream">
                                Workstream
                            </th>

                            <th>
                                Project
                            </th>

                            <th>
                                Owner
                            </th>

                            <th>
                                Progress
                            </th>

                            <th>
                                Tasks
                            </th>

                            <th>
                                Deadline
                            </th>

                            <th>
                                Status
                            </th>

                            <th class="wm-workstreams-table__action">
                                <span class="wm-visually-hidden">
                                    Actions
                                </span>
                            </th>

                        </tr>

                        </thead>


                        <tbody id="wm-workstream-table-body">


                        {{-- =================================================
                            Row 01
                        ================================================== --}}
                        <tr
                            class="wm-workstream-row"
                            data-workstream-name="Data Collection"
                            data-workstream-project="atlas"
                            data-workstream-owner="olivia"
                            data-workstream-priority="high"
                            data-workstream-status="active"
                            data-workstream-progress="72"
                            data-workstream-tasks="18"
                            data-workstream-deadline="20260930"
                        >

                            <td>

                                <div class="wm-workstream-info">

                                    <span class="wm-workstream-info__icon wm-workstream-info__icon--blue">
                                        <i class="ph ph-database"></i>
                                    </span>

                                    <div class="wm-workstream-info__content">

                                        <a
                                            href="#"
                                            class="wm-workstream-info__title"
                                        >
                                            Data Collection
                                        </a>

                                        <span class="wm-workstream-info__description">
                                            Collect and validate primary research data.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-project">
                                    Atlas Research Platform
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-owner">

                                    <span class="wm-workstream-owner__avatar">
                                        OM
                                    </span>

                                    <span>
                                        Olivia Martin
                                    </span>

                                </div>

                            </td>


                            <td>

                                <div class="wm-workstream-progress">

                                    <div class="wm-workstream-progress__header">

                                        <span>72%</span>

                                    </div>

                                    <div class="wm-workstream-progress__bar">

                                        <span
                                            style="width: 72%;"
                                        ></span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-tasks">
                                    18 / 24
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-deadline">

                                    <strong>
                                        Sep 30, 2026
                                    </strong>

                                    <span>
                                        6 days left
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-status wm-workstream-status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-actions">

                                    <button
                                        type="button"
                                        class="wm-workstream-action"
                                        aria-expanded="false"
                                        aria-label="Workstream actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-workstream-action-menu">

                                        <button
                                            type="button"
                                            data-workstream-action="view"
                                        >
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button
                                            type="button"
                                            data-workstream-action="edit"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            data-workstream-action="duplicate"
                                        >
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div class="wm-workstream-action-menu__divider"></div>

                                        <button
                                            type="button"
                                            data-workstream-action="archive"
                                        >
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <button
                                            type="button"
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


                        {{-- =================================================
                            Row 02
                        ================================================== --}}
                        <tr
                            class="wm-workstream-row"
                            data-workstream-name="Image Processing"
                            data-workstream-project="neuro"
                            data-workstream-owner="sophia"
                            data-workstream-priority="medium"
                            data-workstream-status="active"
                            data-workstream-progress="56"
                            data-workstream-tasks="12"
                            data-workstream-deadline="20261008"
                        >

                            <td>

                                <div class="wm-workstream-info">

                                    <span class="wm-workstream-info__icon wm-workstream-info__icon--purple">
                                        <i class="ph ph-image"></i>
                                    </span>

                                    <div class="wm-workstream-info__content">

                                        <a
                                            href="#"
                                            class="wm-workstream-info__title"
                                        >
                                            Image Processing
                                        </a>

                                        <span class="wm-workstream-info__description">
                                            Process and classify imaging datasets.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-project">
                                    Neuro Imaging Study
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-owner">

                                    <span class="wm-workstream-owner__avatar">
                                        SC
                                    </span>

                                    <span>
                                        Sophia Carter
                                    </span>

                                </div>

                            </td>


                            <td>

                                <div class="wm-workstream-progress">

                                    <div class="wm-workstream-progress__header">
                                        <span>56%</span>
                                    </div>

                                    <div class="wm-workstream-progress__bar">
                                        <span style="width: 56%;"></span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-tasks">
                                    12 / 21
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-deadline">

                                    <strong>
                                        Oct 08, 2026
                                    </strong>

                                    <span>
                                        14 days left
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-status wm-workstream-status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-actions">

                                    <button
                                        type="button"
                                        class="wm-workstream-action"
                                        aria-expanded="false"
                                        aria-label="Workstream actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-workstream-action-menu">

                                        <button type="button" data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button type="button" data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button type="button" data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div class="wm-workstream-action-menu__divider"></div>

                                        <button type="button" data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <button
                                            type="button"
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


                        {{-- =================================================
                            Row 03
                        ================================================== --}}
                        <tr
                            class="wm-workstream-row"
                            data-workstream-name="Statistical Analysis"
                            data-workstream-project="climate"
                            data-workstream-owner="ethan"
                            data-workstream-priority="high"
                            data-workstream-status="planning"
                            data-workstream-progress="28"
                            data-workstream-tasks="7"
                            data-workstream-deadline="20261015"
                        >

                            <td>

                                <div class="wm-workstream-info">

                                    <span class="wm-workstream-info__icon wm-workstream-info__icon--green">
                                        <i class="ph ph-chart-line-up"></i>
                                    </span>

                                    <div class="wm-workstream-info__content">

                                        <a href="#" class="wm-workstream-info__title">
                                            Statistical Analysis
                                        </a>

                                        <span class="wm-workstream-info__description">
                                            Analyze collected climate datasets and trends.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-project">
                                    Climate Data Analysis
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-owner">

                                    <span class="wm-workstream-owner__avatar">
                                        EW
                                    </span>

                                    <span>
                                        Ethan Wilson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <div class="wm-workstream-progress">

                                    <div class="wm-workstream-progress__header">
                                        <span>28%</span>
                                    </div>

                                    <div class="wm-workstream-progress__bar">
                                        <span style="width: 28%;"></span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-tasks">
                                    7 / 18
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-deadline">

                                    <strong>
                                        Oct 15, 2026
                                    </strong>

                                    <span>
                                        21 days left
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-status wm-workstream-status--planning">
                                    <span></span>
                                    Planning
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-actions">

                                    <button
                                        type="button"
                                        class="wm-workstream-action"
                                        aria-expanded="false"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-workstream-action-menu">

                                        <button type="button" data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button type="button" data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button type="button" data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div class="wm-workstream-action-menu__divider"></div>

                                        <button type="button" data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <button
                                            type="button"
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


                        {{-- =================================================
                            Row 04
                        ================================================== --}}
                        <tr
                            class="wm-workstream-row"
                            data-workstream-name="Genome Sequencing"
                            data-workstream-project="genome"
                            data-workstream-owner="liam"
                            data-workstream-priority="medium"
                            data-workstream-status="active"
                            data-workstream-progress="84"
                            data-workstream-tasks="26"
                            data-workstream-deadline="20261002"
                        >

                            <td>

                                <div class="wm-workstream-info">

                                    <span class="wm-workstream-info__icon wm-workstream-info__icon--cyan">
                                        <i class="ph ph-dna"></i>
                                    </span>

                                    <div class="wm-workstream-info__content">

                                        <a href="#" class="wm-workstream-info__title">
                                            Genome Sequencing
                                        </a>

                                        <span class="wm-workstream-info__description">
                                            Sequence and validate genome samples.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-project">
                                    Genome Research
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-owner">

                                    <span class="wm-workstream-owner__avatar">
                                        LA
                                    </span>

                                    <span>
                                        Liam Anderson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <div class="wm-workstream-progress">

                                    <div class="wm-workstream-progress__header">
                                        <span>84%</span>
                                    </div>

                                    <div class="wm-workstream-progress__bar">
                                        <span style="width: 84%;"></span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-tasks">
                                    26 / 31
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-deadline">

                                    <strong>
                                        Oct 02, 2026
                                    </strong>

                                    <span>
                                        8 days left
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-status wm-workstream-status--active">
                                    <span></span>
                                    Active
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-actions">

                                    <button
                                        type="button"
                                        class="wm-workstream-action"
                                        aria-expanded="false"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-workstream-action-menu">

                                        <button type="button" data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button type="button" data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button type="button" data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div class="wm-workstream-action-menu__divider"></div>

                                        <button type="button" data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <button
                                            type="button"
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


                        {{-- =================================================
                            Row 05
                        ================================================== --}}
                        <tr
                            class="wm-workstream-row"
                            data-workstream-name="Field Research"
                            data-workstream-project="atlas"
                            data-workstream-owner="olivia"
                            data-workstream-priority="low"
                            data-workstream-status="completed"
                            data-workstream-progress="100"
                            data-workstream-tasks="15"
                            data-workstream-deadline="20260918"
                        >

                            <td>

                                <div class="wm-workstream-info">

                                    <span class="wm-workstream-info__icon wm-workstream-info__icon--orange">
                                        <i class="ph ph-map-pin"></i>
                                    </span>

                                    <div class="wm-workstream-info__content">

                                        <a href="#" class="wm-workstream-info__title">
                                            Field Research
                                        </a>

                                        <span class="wm-workstream-info__description">
                                            Conduct field observations and interviews.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-project">
                                    Atlas Research Platform
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-owner">

                                    <span class="wm-workstream-owner__avatar">
                                        OM
                                    </span>

                                    <span>
                                        Olivia Martin
                                    </span>

                                </div>

                            </td>


                            <td>

                                <div class="wm-workstream-progress">

                                    <div class="wm-workstream-progress__header">
                                        <span>100%</span>
                                    </div>

                                    <div class="wm-workstream-progress__bar">
                                        <span style="width: 100%;"></span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-tasks">
                                    15 / 15
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-deadline">

                                    <strong>
                                        Sep 18, 2026
                                    </strong>

                                    <span class="is-completed">
                                        Completed
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-status wm-workstream-status--completed">
                                    <span></span>
                                    Completed
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-actions">

                                    <button
                                        type="button"
                                        class="wm-workstream-action"
                                        aria-expanded="false"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-workstream-action-menu">

                                        <button type="button" data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button type="button" data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button type="button" data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div class="wm-workstream-action-menu__divider"></div>

                                        <button type="button" data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <button
                                            type="button"
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


                        {{-- =================================================
                            Row 06
                        ================================================== --}}
                        <tr
                            class="wm-workstream-row"
                            data-workstream-name="Report Preparation"
                            data-workstream-project="climate"
                            data-workstream-owner="ethan"
                            data-workstream-priority="high"
                            data-workstream-status="overdue"
                            data-workstream-progress="43"
                            data-workstream-tasks="9"
                            data-workstream-deadline="20260920"
                        >

                            <td>

                                <div class="wm-workstream-info">

                                    <span class="wm-workstream-info__icon wm-workstream-info__icon--red">
                                        <i class="ph ph-file-text"></i>
                                    </span>

                                    <div class="wm-workstream-info__content">

                                        <a href="#" class="wm-workstream-info__title">
                                            Report Preparation
                                        </a>

                                        <span class="wm-workstream-info__description">
                                            Prepare final research report and findings.
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-project">
                                    Climate Data Analysis
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-owner">

                                    <span class="wm-workstream-owner__avatar">
                                        EW
                                    </span>

                                    <span>
                                        Ethan Wilson
                                    </span>

                                </div>

                            </td>


                            <td>

                                <div class="wm-workstream-progress">

                                    <div class="wm-workstream-progress__header">
                                        <span>43%</span>
                                    </div>

                                    <div class="wm-workstream-progress__bar">
                                        <span style="width: 43%;"></span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="wm-workstream-tasks">
                                    9 / 21
                                </span>
                            </td>


                            <td>

                                <div class="wm-workstream-deadline">

                                    <strong>
                                        Sep 20, 2026
                                    </strong>

                                    <span class="is-overdue">
                                        4 days overdue
                                    </span>

                                </div>

                            </td>


                            <td>

                                <span class="wm-workstream-status wm-workstream-status--overdue">
                                    <span></span>
                                    Overdue
                                </span>

                            </td>


                            <td>

                                <div class="wm-workstream-actions">

                                    <button
                                        type="button"
                                        class="wm-workstream-action"
                                        aria-expanded="false"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-workstream-action-menu">

                                        <button type="button" data-workstream-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button type="button" data-workstream-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button type="button" data-workstream-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div class="wm-workstream-action-menu__divider"></div>

                                        <button type="button" data-workstream-action="archive">
                                            <i class="ph ph-archive"></i>
                                            Archive
                                        </button>

                                        <button
                                            type="button"
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


            {{-- =====================================================
                Grid View
            ====================================================== --}}
            <div
                class="wm-workstreams-grid"
                id="wm-workstreams-grid"
                hidden
            >

                <article
                    class="wm-workstream-card"
                    data-workstream-name="Data Collection"
                    data-workstream-project="atlas"
                    data-workstream-owner="olivia"
                    data-workstream-priority="high"
                    data-workstream-status="active"
                    data-workstream-progress="72"
                >

                    <div class="wm-workstream-card__header">

                    <span class="wm-workstream-info__icon wm-workstream-info__icon--blue">
                        <i class="ph ph-database"></i>
                    </span>

                        <div class="wm-workstream-actions">

                            <button
                                type="button"
                                class="wm-workstream-action"
                                aria-expanded="false"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-workstream-action-menu">

                                <button type="button" data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button type="button" data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button type="button" data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div class="wm-workstream-action-menu__divider"></div>

                                <button type="button" data-workstream-action="archive">
                                    <i class="ph ph-archive"></i>
                                    Archive
                                </button>

                                <button type="button" class="is-danger" data-workstream-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <a href="#" class="wm-workstream-card__title">
                        Data Collection
                    </a>

                    <p class="wm-workstream-card__description">
                        Collect and validate primary research data.
                    </p>


                    <div class="wm-workstream-card__meta">

                    <span>
                        <i class="ph ph-folder"></i>
                        Atlas Research Platform
                    </span>

                        <span>
                        <i class="ph ph-user"></i>
                        Olivia Martin
                    </span>

                    </div>


                    <div class="wm-workstream-card__progress">

                        <div class="wm-workstream-card__progress-header">

                        <span>
                            Progress
                        </span>

                            <strong>
                                72%
                            </strong>

                        </div>

                        <div class="wm-workstream-progress__bar">
                            <span style="width: 72%;"></span>
                        </div>

                    </div>


                    <div class="wm-workstream-card__footer">

                    <span>
                        18 / 24 tasks
                    </span>

                        <span class="wm-workstream-status wm-workstream-status--active">
                        <span></span>
                        Active
                    </span>

                    </div>

                </article>


                <article
                    class="wm-workstream-card"
                    data-workstream-name="Image Processing"
                    data-workstream-project="neuro"
                    data-workstream-owner="sophia"
                    data-workstream-priority="medium"
                    data-workstream-status="active"
                    data-workstream-progress="56"
                >

                    <div class="wm-workstream-card__header">

                    <span class="wm-workstream-info__icon wm-workstream-info__icon--purple">
                        <i class="ph ph-image"></i>
                    </span>

                        <div class="wm-workstream-actions">

                            <button
                                type="button"
                                class="wm-workstream-action"
                                aria-expanded="false"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-workstream-action-menu">

                                <button type="button" data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button type="button" data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button type="button" data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div class="wm-workstream-action-menu__divider"></div>

                                <button type="button" data-workstream-action="archive">
                                    <i class="ph ph-archive"></i>
                                    Archive
                                </button>

                                <button type="button" class="is-danger" data-workstream-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <a href="#" class="wm-workstream-card__title">
                        Image Processing
                    </a>

                    <p class="wm-workstream-card__description">
                        Process and classify imaging datasets.
                    </p>


                    <div class="wm-workstream-card__meta">

                    <span>
                        <i class="ph ph-folder"></i>
                        Neuro Imaging Study
                    </span>

                        <span>
                        <i class="ph ph-user"></i>
                        Sophia Carter
                    </span>

                    </div>


                    <div class="wm-workstream-card__progress">

                        <div class="wm-workstream-card__progress-header">
                            <span>Progress</span>
                            <strong>56%</strong>
                        </div>

                        <div class="wm-workstream-progress__bar">
                            <span style="width: 56%;"></span>
                        </div>

                    </div>


                    <div class="wm-workstream-card__footer">

                    <span>
                        12 / 21 tasks
                    </span>

                        <span class="wm-workstream-status wm-workstream-status--active">
                        <span></span>
                        Active
                    </span>

                    </div>

                </article>


                <article
                    class="wm-workstream-card"
                    data-workstream-name="Statistical Analysis"
                    data-workstream-project="climate"
                    data-workstream-owner="ethan"
                    data-workstream-priority="high"
                    data-workstream-status="planning"
                    data-workstream-progress="28"
                >

                    <div class="wm-workstream-card__header">

                    <span class="wm-workstream-info__icon wm-workstream-info__icon--green">
                        <i class="ph ph-chart-line-up"></i>
                    </span>

                        <div class="wm-workstream-actions">

                            <button
                                type="button"
                                class="wm-workstream-action"
                                aria-expanded="false"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-workstream-action-menu">

                                <button type="button" data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button type="button" data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button type="button" data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div class="wm-workstream-action-menu__divider"></div>

                                <button type="button" data-workstream-action="archive">
                                    <i class="ph ph-archive"></i>
                                    Archive
                                </button>

                                <button type="button" class="is-danger" data-workstream-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <a href="#" class="wm-workstream-card__title">
                        Statistical Analysis
                    </a>

                    <p class="wm-workstream-card__description">
                        Analyze collected climate datasets and trends.
                    </p>


                    <div class="wm-workstream-card__meta">

                    <span>
                        <i class="ph ph-folder"></i>
                        Climate Data Analysis
                    </span>

                        <span>
                        <i class="ph ph-user"></i>
                        Ethan Wilson
                    </span>

                    </div>


                    <div class="wm-workstream-card__progress">

                        <div class="wm-workstream-card__progress-header">
                            <span>Progress</span>
                            <strong>28%</strong>
                        </div>

                        <div class="wm-workstream-progress__bar">
                            <span style="width: 28%;"></span>
                        </div>

                    </div>


                    <div class="wm-workstream-card__footer">

                    <span>
                        7 / 18 tasks
                    </span>

                        <span class="wm-workstream-status wm-workstream-status--planning">
                        <span></span>
                        Planning
                    </span>

                    </div>

                </article>


                <article
                    class="wm-workstream-card"
                    data-workstream-name="Genome Sequencing"
                    data-workstream-project="genome"
                    data-workstream-owner="liam"
                    data-workstream-priority="medium"
                    data-workstream-status="active"
                    data-workstream-progress="84"
                >

                    <div class="wm-workstream-card__header">

                    <span class="wm-workstream-info__icon wm-workstream-info__icon--cyan">
                        <i class="ph ph-dna"></i>
                    </span>

                        <div class="wm-workstream-actions">

                            <button
                                type="button"
                                class="wm-workstream-action"
                                aria-expanded="false"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-workstream-action-menu">

                                <button type="button" data-workstream-action="view">
                                    <i class="ph ph-eye"></i>
                                    View
                                </button>

                                <button type="button" data-workstream-action="edit">
                                    <i class="ph ph-pencil-simple"></i>
                                    Edit
                                </button>

                                <button type="button" data-workstream-action="duplicate">
                                    <i class="ph ph-copy"></i>
                                    Duplicate
                                </button>

                                <div class="wm-workstream-action-menu__divider"></div>

                                <button type="button" data-workstream-action="archive">
                                    <i class="ph ph-archive"></i>
                                    Archive
                                </button>

                                <button type="button" class="is-danger" data-workstream-action="delete">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <a href="#" class="wm-workstream-card__title">
                        Genome Sequencing
                    </a>

                    <p class="wm-workstream-card__description">
                        Sequence and validate genome samples.
                    </p>


                    <div class="wm-workstream-card__meta">

                    <span>
                        <i class="ph ph-folder"></i>
                        Genome Research
                    </span>

                        <span>
                        <i class="ph ph-user"></i>
                        Liam Anderson
                    </span>

                    </div>


                    <div class="wm-workstream-card__progress">

                        <div class="wm-workstream-card__progress-header">
                            <span>Progress</span>
                            <strong>84%</strong>
                        </div>

                        <div class="wm-workstream-progress__bar">
                            <span style="width: 84%;"></span>
                        </div>

                    </div>


                    <div class="wm-workstream-card__footer">

                    <span>
                        26 / 31 tasks
                    </span>

                        <span class="wm-workstream-status wm-workstream-status--active">
                        <span></span>
                        Active
                    </span>

                    </div>

                </article>

            </div>


            {{-- =====================================================
                Empty State
            ====================================================== --}}
            <div
                class="wm-workstreams-empty"
                id="wm-workstreams-empty"
                hidden
            >

                <div class="wm-workstreams-empty__icon">
                    <i class="ph ph-stack"></i>
                </div>

                <h3>
                    No workstreams found
                </h3>

                <p>
                    Try changing your filters or create a new workstream.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="wm-create-workstream-empty"
                >
                    <i class="ph ph-plus"></i>
                    Create Workstream
                </button>

            </div>


            {{-- =====================================================
                Footer / Pagination
            ====================================================== --}}
            <div
                class="wm-workstreams-footer"
                id="wm-workstreams-footer"
            >

                <div class="wm-workstreams-footer__info">

                    Showing
                    <strong id="wm-workstream-visible-count">
                        1–6
                    </strong>
                    of
                    <strong>
                        12
                    </strong>
                    workstreams

                </div>


                <div class="wm-workstreams-pagination">

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

                    <button type="button">
                        3
                    </button>

                    <span>...</span>

                    <button type="button">
                        5
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

@endsection


@push('script')

    <script>

        $(document).ready(function () {

            'use strict';


            // =========================================================
            // ELEMENTS
            // =========================================================

            const $search =
                $('#wm-workstream-search');

            const $project =
                $('#wm-workstream-project');

            const $owner =
                $('#wm-workstream-owner');

            const $priority =
                $('#wm-workstream-priority');

            const $sort =
                $('#wm-workstream-sort');

            const $rows =
                $('.wm-workstream-row');

            const $cards =
                $('.wm-workstream-card');

            const $list =
                $('#wm-workstreams-list');

            const $grid =
                $('#wm-workstreams-grid');

            const $empty =
                $('#wm-workstreams-empty');

            const $footer =
                $('#wm-workstreams-footer');

            const $summaryButtons =
                $('.wm-workstream-summary');

            const $viewButtons =
                $('[data-workstream-view]');

            const $filterToggle =
                $('#wm-workstream-filter-toggle');

            const $filters =
                $('#wm-workstreams-filters');

            const $clearFilters =
                $('#wm-clear-workstream-filters');

            const $activeFilters =
                $('#wm-workstreams-active-filters');

            const $activeFilterItems =
                $('#wm-workstreams-filter-items');

            const $createWorkstream =
                $('#wm-create-workstream');

            const $createWorkstreamEmpty =
                $('#wm-create-workstream-empty');

            const $export =
                $('#wm-workstreams-export');


            let selectedStatus = 'all';



            // =========================================================
            // FILTER WORKSTREAMS
            // =========================================================

            function filterWorkstreams() {

                const search =
                    $.trim(
                        $search.val() || ''
                    ).toLowerCase();

                const project =
                    $project.val() || 'all';

                const owner =
                    $owner.val() || 'all';

                const priority =
                    $priority.val() || 'all';


                let visibleCount = 0;


                $rows.each(function () {

                    const $row =
                        $(this);


                    const name =
                        String(
                            $row.data('workstream-name') || ''
                        ).toLowerCase();

                    const rowProject =
                        $row.data('workstream-project') || 'all';

                    const rowOwner =
                        $row.data('workstream-owner') || 'all';

                    const rowPriority =
                        $row.data('workstream-priority') || 'all';

                    const rowStatus =
                        $row.data('workstream-status') || 'all';


                    const matchesSearch =
                        !search ||
                        name.includes(search);

                    const matchesProject =
                        project === 'all' ||
                        rowProject === project;

                    const matchesOwner =
                        owner === 'all' ||
                        rowOwner === owner;

                    const matchesPriority =
                        priority === 'all' ||
                        rowPriority === priority;

                    const matchesStatus =
                        selectedStatus === 'all' ||
                        rowStatus === selectedStatus;


                    const visible =
                        matchesSearch &&
                        matchesProject &&
                        matchesOwner &&
                        matchesPriority &&
                        matchesStatus;


                    $row.prop(
                        'hidden',
                        !visible
                    );


                    if (visible) {
                        visibleCount++;
                    }

                });


                $cards.each(function () {

                    const $card =
                        $(this);


                    const name =
                        String(
                            $card.data('workstream-name') || ''
                        ).toLowerCase();

                    const rowProject =
                        $card.data('workstream-project') || 'all';

                    const rowOwner =
                        $card.data('workstream-owner') || 'all';

                    const rowPriority =
                        $card.data('workstream-priority') || 'all';

                    const rowStatus =
                        $card.data('workstream-status') || 'all';


                    const matchesSearch =
                        !search ||
                        name.includes(search);

                    const matchesProject =
                        project === 'all' ||
                        rowProject === project;

                    const matchesOwner =
                        owner === 'all' ||
                        rowOwner === owner;

                    const matchesPriority =
                        priority === 'all' ||
                        rowPriority === priority;

                    const matchesStatus =
                        selectedStatus === 'all' ||
                        rowStatus === selectedStatus;


                    const visible =
                        matchesSearch &&
                        matchesProject &&
                        matchesOwner &&
                        matchesPriority &&
                        matchesStatus;


                    $card.prop(
                        'hidden',
                        !visible
                    );

                });


                $empty.prop(
                    'hidden',
                    visibleCount !== 0
                );


                $footer.prop(
                    'hidden',
                    visibleCount === 0
                );


                $('#wm-workstream-visible-count').text(
                    visibleCount
                        ? `1–${visibleCount}`
                        : '0'
                );


                updateActiveFilters();

            }



            // =========================================================
            // ACTIVE FILTERS
            // =========================================================

            function updateActiveFilters() {

                $activeFilterItems.empty();


                const filters = [];


                if (
                    $project.length &&
                    $project.val() !== 'all'
                ) {

                    filters.push({
                        type: 'project',
                        label:
                            $project
                                .find('option:selected')
                                .text()
                    });

                }


                if (
                    $owner.length &&
                    $owner.val() !== 'all'
                ) {

                    filters.push({
                        type: 'owner',
                        label:
                            $owner
                                .find('option:selected')
                                .text()
                    });

                }


                if (
                    $priority.length &&
                    $priority.val() !== 'all'
                ) {

                    filters.push({
                        type: 'priority',
                        label:
                            $priority
                                .find('option:selected')
                                .text()
                    });

                }


                if (selectedStatus !== 'all') {

                    const $summary =
                        $summaryButtons.filter(
                            `[data-workstream-status="${selectedStatus}"]`
                        );


                    if ($summary.length) {

                        filters.push({
                            type: 'status',
                            label:
                                $.trim(
                                    $summary
                                        .find(
                                            '.wm-workstream-summary__label'
                                        )
                                        .text()
                                )
                        });

                    }

                }


                $.each(
                    filters,
                    function (index, filter) {

                        const $item =
                            $('<span>', {
                                class:
                                    'wm-workstreams-active-filters__item'
                            });


                        $item.html(`
                        <span>${filter.label}</span>

                        <button
                            type="button"
                            data-filter-type="${filter.type}"
                            aria-label="Remove ${filter.label}"
                        >
                            <i class="ph ph-x"></i>
                        </button>
                    `);


                        $activeFilterItems.append(
                            $item
                        );

                    }
                );


                $activeFilters.prop(
                    'hidden',
                    filters.length === 0
                );

            }



            // =========================================================
            // SEARCH
            // =========================================================

            $search.on(
                'input',
                function () {

                    filterWorkstreams();

                }
            );



            // =========================================================
            // FILTER SELECTS
            // =========================================================

            $project
                .add($owner)
                .add($priority)
                .on(
                    'change',
                    function () {

                        selectedStatus =
                            'all';


                        $summaryButtons
                            .removeClass(
                                'is-active'
                            );


                        $summaryButtons
                            .filter(
                                '[data-workstream-status="all"]'
                            )
                            .addClass(
                                'is-active'
                            );


                        filterWorkstreams();

                    }
                );



            // =========================================================
            // SUMMARY FILTER
            // =========================================================

            $summaryButtons.on(
                'click',
                function (event) {

                    event.preventDefault();


                    const $button =
                        $(this);


                    $summaryButtons
                        .removeClass(
                            'is-active'
                        );


                    $button.addClass(
                        'is-active'
                    );


                    selectedStatus =
                        $button.data(
                            'workstream-status'
                        );


                    filterWorkstreams();

                }
            );



            // =========================================================
            // ACTIVE FILTER REMOVE
            // =========================================================

            $activeFilterItems.on(
                'click',
                '[data-filter-type]',
                function (event) {

                    event.preventDefault();


                    const type =
                        $(this).data(
                            'filter-type'
                        );


                    switch (type) {

                        case 'project':

                            $project.val('all');

                            break;


                        case 'owner':

                            $owner.val('all');

                            break;


                        case 'priority':

                            $priority.val('all');

                            break;


                        case 'status':

                            selectedStatus =
                                'all';


                            $summaryButtons
                                .removeClass(
                                    'is-active'
                                );


                            $summaryButtons
                                .filter(
                                    '[data-workstream-status="all"]'
                                )
                                .addClass(
                                    'is-active'
                                );

                            break;

                    }


                    filterWorkstreams();

                }
            );



            // =========================================================
            // SORT
            // =========================================================

            $sort.on(
                'change',
                function () {

                    const sort =
                        $(this).val();


                    const $tbody =
                        $('#wm-workstream-table-body');


                    if (!$tbody.length) {
                        return;
                    }


                    const rows =
                        $rows.get();


                    rows.sort(function (a, b) {

                        const $a =
                            $(a);

                        const $b =
                            $(b);


                        if (sort === 'name') {

                            return String(
                                $a.data(
                                    'workstream-name'
                                ) || ''
                            ).localeCompare(
                                String(
                                    $b.data(
                                        'workstream-name'
                                    ) || ''
                                )
                            );

                        }


                        if (sort === 'progress') {

                            return (
                                Number(
                                    $b.data(
                                        'workstream-progress'
                                    ) || 0
                                ) -
                                Number(
                                    $a.data(
                                        'workstream-progress'
                                    ) || 0
                                )
                            );

                        }


                        if (sort === 'deadline') {

                            return (
                                Number(
                                    $a.data(
                                        'workstream-deadline'
                                    ) || 0
                                ) -
                                Number(
                                    $b.data(
                                        'workstream-deadline'
                                    ) || 0
                                )
                            );

                        }


                        if (sort === 'tasks') {

                            return (
                                Number(
                                    $b.data(
                                        'workstream-tasks'
                                    ) || 0
                                ) -
                                Number(
                                    $a.data(
                                        'workstream-tasks'
                                    ) || 0
                                )
                            );

                        }


                        return 0;

                    });


                    $.each(
                        rows,
                        function (index, row) {

                            $tbody.append(row);

                        }
                    );


                    filterWorkstreams();

                }
            );



            // =========================================================
            // VIEW SWITCHER
            // =========================================================

            $viewButtons.on(
                'click',
                function (event) {

                    event.preventDefault();


                    const $button =
                        $(this);

                    const view =
                        $button.data(
                            'workstream-view'
                        );


                    $viewButtons
                        .removeClass(
                            'is-active'
                        );


                    $button.addClass(
                        'is-active'
                    );


                    if (view === 'grid') {

                        $list.prop(
                            'hidden',
                            true
                        );

                        $grid.prop(
                            'hidden',
                            false
                        );

                    } else {

                        $list.prop(
                            'hidden',
                            false
                        );

                        $grid.prop(
                            'hidden',
                            true
                        );

                    }


                    filterWorkstreams();

                }
            );



            // =========================================================
            // FILTER TOGGLE
            // =========================================================

            $filterToggle.on(
                'click',
                function (event) {

                    event.preventDefault();


                    $filters.toggleClass(
                        'is-visible'
                    );

                }
            );



            // =========================================================
            // RESET FILTERS
            // =========================================================

            function resetFilters() {

                $search.val('');

                $project.val('all');

                $owner.val('all');

                $priority.val('all');


                selectedStatus =
                    'all';


                $summaryButtons
                    .removeClass(
                        'is-active'
                    );


                $summaryButtons
                    .filter(
                        '[data-workstream-status="all"]'
                    )
                    .addClass(
                        'is-active'
                    );


                filterWorkstreams();

            }


            $clearFilters.on(
                'click',
                function (event) {

                    event.preventDefault();

                    resetFilters();

                }
            );



            // =========================================================
            // ACTION MENUS
            // =========================================================

            function closeActionMenus() {

                $('.wm-workstream-actions.is-open')
                    .removeClass(
                        'is-open'
                    );


                $('.wm-workstream-action')
                    .attr(
                        'aria-expanded',
                        'false'
                    );

            }


            $(document).on(
                'click',
                '.wm-workstream-action',
                function (event) {

                    event.preventDefault();

                    event.stopPropagation();


                    const $button =
                        $(this);

                    const $wrapper =
                        $button.closest(
                            '.wm-workstream-actions'
                        );


                    const isOpen =
                        $wrapper.hasClass(
                            'is-open'
                        );


                    closeActionMenus();


                    if (!isOpen) {

                        $wrapper.addClass(
                            'is-open'
                        );


                        $button.attr(
                            'aria-expanded',
                            'true'
                        );

                    }

                }
            );


            $(document).on(
                'click',
                '.wm-workstream-action-menu',
                function (event) {

                    event.stopPropagation();

                }
            );


            $(document).on(
                'click',
                function () {

                    closeActionMenus();

                }
            );


            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeActionMenus();

                    }

                }
            );



            // =========================================================
            // ACTION HANDLER
            // =========================================================

            $(document).on(
                'click',
                '[data-workstream-action]',
                function (event) {

                    event.preventDefault();


                    const $button =
                        $(this);

                    const action =
                        $button.data(
                            'workstream-action'
                        );


                    const $row =
                        $button.closest(
                            '.wm-workstream-row'
                        );

                    const $card =
                        $button.closest(
                            '.wm-workstream-card'
                        );


                    const $item =
                        $row.length
                            ? $row
                            : $card;


                    const name =
                        $item.length
                            ? (
                                $item.data(
                                    'workstream-name'
                                ) || 'Workstream'
                            )
                            : 'Workstream';


                    closeActionMenus();


                    switch (action) {

                        case 'view':

                            console.log(
                                'View workstream:',
                                name
                            );

                            break;


                        case 'edit':

                            console.log(
                                'Edit workstream:',
                                name
                            );

                            break;


                        case 'duplicate':

                            console.log(
                                'Duplicate workstream:',
                                name
                            );

                            break;


                        case 'archive':

                            console.log(
                                'Archive workstream:',
                                name
                            );

                            break;


                        case 'delete':

                            console.log(
                                'Delete workstream:',
                                name
                            );

                            break;

                    }

                }
            );



            // =========================================================
            // CREATE WORKSTREAM
            // =========================================================

            $createWorkstream
                .add($createWorkstreamEmpty)
                .on(
                    'click',
                    function (event) {

                        event.preventDefault();


                        console.log(
                            'Create Workstream clicked'
                        );

                    }
                );



            // =========================================================
            // EXPORT
            // =========================================================

            $export.on(
                'click',
                function (event) {

                    event.preventDefault();


                    console.log(
                        'Export workstreams'
                    );

                }
            );



            // =========================================================
            // WORKSTREAM LINKS
            // =========================================================

            $(document).on(
                'click',
                '.wm-workstream-info__title, .wm-workstream-card__title',
                function (event) {

                    event.preventDefault();


                    const name =
                        $.trim(
                            $(this).text()
                        );


                    console.log(
                        'Open workstream:',
                        name
                    );

                }
            );



            // =========================================================
            // INITIAL
            // =========================================================

            filterWorkstreams();

        });

    </script>

@endpush
