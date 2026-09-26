@extends('layout.app')

@section('main')

    <div class="wm-search-page">

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}
        <div class="wm-search-page__header">

            <div class="wm-search-page__breadcrumb">
                <a href="{{ route('dashboard') }}" class="wm-search-page__breadcrumb-link">
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span>Search</span>
            </div>


            <div class="wm-search-page__heading">

                <div class="wm-search-page__heading-content">

                    <h1 class="wm-search-page__title">
                        Search
                    </h1>

                    <p class="wm-search-page__subtitle">
                        Search across projects, tasks, files, team members, and documents.
                    </p>

                </div>

            </div>

        </div>


        {{-- ============================================================
            SEARCH HERO
        ============================================================= --}}
        <section class="wm-search-page__hero">

            <div class="wm-search-page__search-box">

                <i class="ph ph-magnifying-glass wm-search-page__search-icon"></i>

                <input
                    type="search"
                    id="globalSearchInput"
                    class="wm-search-page__search-input"
                    placeholder="Search projects, tasks, files, people..."
                    autocomplete="off"
                >

                <button
                    type="button"
                    class="wm-search-page__search-clear"
                    id="globalSearchClear"
                    aria-label="Clear search"
                >
                    <i class="ph ph-x"></i>
                </button>

                <div class="wm-search-page__search-shortcut">
                    <kbd>⌘</kbd>
                    <kbd>K</kbd>
                </div>

            </div>


            <div class="wm-search-page__search-hint">
                <i class="ph ph-info"></i>

                <span>
                Try searching for a project name, task, document, or team member.
            </span>
            </div>

        </section>


        {{-- ============================================================
            RECENT SEARCHES
        ============================================================= --}}
        <section
            class="wm-search-page__recent"
            id="recentSearches"
        >

            <div class="wm-search-page__section-header">

                <div>
                    <h2 class="wm-search-page__section-title">
                        Recent Searches
                    </h2>

                    <p class="wm-search-page__section-description">
                        Quickly access your recent searches.
                    </p>
                </div>

                <button
                    type="button"
                    class="btn btn-light btn-sm"
                    id="clearRecentSearches"
                >
                    Clear History
                </button>

            </div>


            <div class="wm-search-page__recent-list">

                <button
                    type="button"
                    class="wm-search-page__recent-item"
                    data-recent-search="climate research"
                >
                <span class="wm-search-page__recent-icon">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </span>

                    <span class="wm-search-page__recent-text">
                    climate research
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </button>


                <button
                    type="button"
                    class="wm-search-page__recent-item"
                    data-recent-search="genomics"
                >
                <span class="wm-search-page__recent-icon">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </span>

                    <span class="wm-search-page__recent-text">
                    genomics
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </button>


                <button
                    type="button"
                    class="wm-search-page__recent-item"
                    data-recent-search="Sarah Johnson"
                >
                <span class="wm-search-page__recent-icon">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </span>

                    <span class="wm-search-page__recent-text">
                    Sarah Johnson
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </button>


                <button
                    type="button"
                    class="wm-search-page__recent-item"
                    data-recent-search="data analysis"
                >
                <span class="wm-search-page__recent-icon">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </span>

                    <span class="wm-search-page__recent-text">
                    data analysis
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </button>

            </div>

        </section>


        {{-- ============================================================
            SEARCH RESULTS
        ============================================================= --}}
        <section
            class="wm-search-page__results"
            id="searchResults"
        >

            {{-- Results Header --}}
            <div class="wm-search-page__results-header">

                <div class="wm-search-page__results-heading">

                    <div>
                        <h2 class="wm-search-page__section-title">
                            Search Results
                        </h2>

                        <p class="wm-search-page__results-count">
                            <span id="searchResultCount">12</span>
                            results found
                        </p>
                    </div>

                </div>


                <div class="wm-search-page__results-actions">

                    <select
                        id="searchSort"
                        class="form-select"
                    >
                        <option value="relevance">
                            Most Relevant
                        </option>

                        <option value="newest">
                            Newest First
                        </option>

                        <option value="oldest">
                            Oldest First
                        </option>
                    </select>

                </div>

            </div>


            {{-- Result Toolbar --}}
            <div class="wm-search-page__toolbar">

                <div class="wm-search-page__type-tabs">

                    <button
                        type="button"
                        class="wm-search-page__type-tab is-active"
                        data-search-type="all"
                    >
                        All
                        <span>12</span>
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__type-tab"
                        data-search-type="projects"
                    >
                        Projects
                        <span>3</span>
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__type-tab"
                        data-search-type="tasks"
                    >
                        Tasks
                        <span>4</span>
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__type-tab"
                        data-search-type="files"
                    >
                        Files
                        <span>2</span>
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__type-tab"
                        data-search-type="people"
                    >
                        People
                        <span>2</span>
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__type-tab"
                        data-search-type="documents"
                    >
                        Documents
                        <span>1</span>
                    </button>

                </div>


                <button
                    type="button"
                    class="btn btn-light"
                    id="searchFilterToggle"
                >
                    <i class="ph ph-funnel"></i>
                    Filters
                </button>

            </div>


            {{-- Filters --}}
            <div
                class="wm-search-page__filters"
                id="searchFilters"
            >

                <div class="wm-search-page__filter-group">

                    <label for="searchProject">
                        Project
                    </label>

                    <select
                        id="searchProject"
                        class="form-select"
                    >
                        <option value="">All Projects</option>
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


                <div class="wm-search-page__filter-group">

                    <label for="searchOwner">
                        Owner
                    </label>

                    <select
                        id="searchOwner"
                        class="form-select"
                    >
                        <option value="">All Members</option>
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


                <div class="wm-search-page__filter-group">

                    <label for="searchDate">
                        Date
                    </label>

                    <select
                        id="searchDate"
                        class="form-select"
                    >
                        <option value="">Any Date</option>
                        <option value="today">Today</option>
                        <option value="week">This Week</option>
                        <option value="month">This Month</option>
                    </select>

                </div>


                <div class="wm-search-page__filter-group">

                    <label for="searchStatus">
                        Status
                    </label>

                    <select
                        id="searchStatus"
                        class="form-select"
                    >
                        <option value="">Any Status</option>
                        <option value="active">Active</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="draft">Draft</option>
                    </select>

                </div>


                <div class="wm-search-page__filter-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        id="clearSearchFilters"
                    >
                        Clear
                    </button>

                </div>

            </div>


            {{-- Active Filters --}}
            <div
                class="wm-search-page__active-filters"
                id="activeSearchFilters"
            ></div>


            {{-- Result List --}}
            <div
                class="wm-search-page__result-list"
                id="searchResultList"
            >

                {{-- Project Result --}}
                <article
                    class="wm-search-result"
                    data-type="projects"
                    data-project="climate"
                    data-owner="sarah"
                    data-status="active"
                    data-date="week"
                    data-time="202609241020"
                >

                    <div class="wm-search-result__icon wm-search-result__icon--project">
                        <i class="ph ph-folder-open"></i>
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                Climate Research Initiative
                            </div>

                            <span class="wm-search-result__type">
                            Project
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Long-term climate data collection and environmental
                            analysis project.
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Sarah Johnson
                        </span>

                            <span>
                            <i class="ph ph-calendar-blank"></i>
                            Updated today
                        </span>

                            <span class="wm-search-result__status wm-search-result__status--active">
                            Active
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                            title="Open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                            title="More"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-arrow-up-right"></i>
                                Open
                            </button>

                            <button type="button" data-menu-action="copy">
                                <i class="ph ph-copy"></i>
                                Copy Link
                            </button>

                            <button type="button" data-menu-action="archive">
                                <i class="ph ph-archive"></i>
                                Archive
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Task Result --}}
                <article
                    class="wm-search-result"
                    data-type="tasks"
                    data-project="climate"
                    data-owner="sarah"
                    data-status="active"
                    data-date="today"
                    data-time="202609240950"
                >

                    <div class="wm-search-result__icon wm-search-result__icon--task">
                        <i class="ph ph-check-square"></i>
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                Review climate data analysis
                            </div>

                            <span class="wm-search-result__type">
                            Task
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Review the latest climate data analysis and prepare
                            feedback for the research team.
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-folder"></i>
                            Climate Research Initiative
                        </span>

                            <span>
                            <i class="ph ph-user"></i>
                            Sarah Johnson
                        </span>

                            <span class="wm-search-result__status wm-search-result__status--active">
                            In Progress
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-arrow-up-right"></i>
                                Open Task
                            </button>

                            <button type="button" data-menu-action="copy">
                                <i class="ph ph-copy"></i>
                                Copy Link
                            </button>

                            <button type="button" data-menu-action="complete">
                                <i class="ph ph-check"></i>
                                Mark Complete
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Task Result --}}
                <article
                    class="wm-search-result"
                    data-type="tasks"
                    data-project="genomics"
                    data-owner="michael"
                    data-status="pending"
                    data-date="week"
                    data-time="202609231400"
                >

                    <div class="wm-search-result__icon wm-search-result__icon--task">
                        <i class="ph ph-check-square"></i>
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                Prepare sequencing report
                            </div>

                            <span class="wm-search-result__type">
                            Task
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Prepare the final sequencing report for the genomics
                            research team.
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-folder"></i>
                            Genomics Study
                        </span>

                            <span>
                            <i class="ph ph-user"></i>
                            Michael Chen
                        </span>

                            <span class="wm-search-result__status wm-search-result__status--pending">
                            Pending
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-arrow-up-right"></i>
                                Open Task
                            </button>

                            <button type="button" data-menu-action="copy">
                                <i class="ph ph-copy"></i>
                                Copy Link
                            </button>

                            <button type="button" data-menu-action="delete" class="is-danger">
                                <i class="ph ph-trash"></i>
                                Delete
                            </button>

                        </div>

                    </div>

                </article>


                {{-- File Result --}}
                <article
                    class="wm-search-result"
                    data-type="files"
                    data-project="drug"
                    data-owner="michael"
                    data-status="active"
                    data-date="week"
                    data-time="202609231130"
                >

                    <div class="wm-search-result__icon wm-search-result__icon--file">
                        <i class="ph ph-file-xls"></i>
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                compound-analysis.xlsx
                            </div>

                            <span class="wm-search-result__type">
                            File
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Compound analysis spreadsheet containing the latest
                            experimental results.
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-folder"></i>
                            Drug Discovery Platform
                        </span>

                            <span>
                            <i class="ph ph-user"></i>
                            Michael Chen
                        </span>

                            <span>
                            Updated Sep 23
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-eye"></i>
                                Preview
                            </button>

                            <button type="button" data-menu-action="download">
                                <i class="ph ph-download-simple"></i>
                                Download
                            </button>

                            <button type="button" data-menu-action="copy">
                                <i class="ph ph-copy"></i>
                                Copy Link
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Person Result --}}
                <article
                    class="wm-search-result"
                    data-type="people"
                    data-project=""
                    data-owner="sarah"
                    data-status="active"
                    data-date="month"
                    data-time="202609221000"
                >

                    <div class="wm-search-result__avatar">
                        SJ
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                Sarah Johnson
                            </div>

                            <span class="wm-search-result__type">
                            Team Member
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Principal Investigator · Climate Research Initiative
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-envelope"></i>
                            sarah@example.com
                        </span>

                            <span class="wm-search-result__status wm-search-result__status--active">
                            Active
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-user"></i>
                                View Profile
                            </button>

                            <button type="button" data-menu-action="message">
                                <i class="ph ph-chat-circle"></i>
                                Message
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Document Result --}}
                <article
                    class="wm-search-result"
                    data-type="documents"
                    data-project="neural"
                    data-owner="emma"
                    data-status="draft"
                    data-date="week"
                    data-time="202609211530"
                >

                    <div class="wm-search-result__icon wm-search-result__icon--document">
                        <i class="ph ph-file-text"></i>
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                Neural Imaging Protocol
                            </div>

                            <span class="wm-search-result__type">
                            Document
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Research protocol covering imaging parameters,
                            acquisition workflow, and analysis methodology.
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-folder"></i>
                            Neural Imaging Research
                        </span>

                            <span>
                            <i class="ph ph-user"></i>
                            Emma Davis
                        </span>

                            <span class="wm-search-result__status wm-search-result__status--draft">
                            Draft
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-eye"></i>
                                View Document
                            </button>

                            <button type="button" data-menu-action="copy">
                                <i class="ph ph-copy"></i>
                                Copy Link
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Project Result --}}
                <article
                    class="wm-search-result"
                    data-type="projects"
                    data-project="drug"
                    data-owner="michael"
                    data-status="active"
                    data-date="month"
                    data-time="202609201100"
                >

                    <div class="wm-search-result__icon wm-search-result__icon--project">
                        <i class="ph ph-folder-open"></i>
                    </div>

                    <div class="wm-search-result__content">

                        <div class="wm-search-result__top">

                            <div class="wm-search-result__title">
                                Drug Discovery Platform
                            </div>

                            <span class="wm-search-result__type">
                            Project
                        </span>

                        </div>

                        <p class="wm-search-result__description">
                            Research project focused on identifying and validating
                            promising drug compounds.
                        </p>

                        <div class="wm-search-result__meta">

                        <span>
                            <i class="ph ph-user"></i>
                            Michael Chen
                        </span>

                            <span>
                            Updated Sep 20
                        </span>

                            <span class="wm-search-result__status wm-search-result__status--active">
                            Active
                        </span>

                        </div>

                    </div>

                    <div class="wm-search-result__actions">

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="open"
                        >
                            <i class="ph ph-arrow-up-right"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-search-result__action"
                            data-result-action="menu"
                        >
                            <i class="ph ph-dots-three"></i>
                        </button>

                        <div class="wm-search-result__menu">

                            <button type="button" data-menu-action="open">
                                <i class="ph ph-arrow-up-right"></i>
                                Open
                            </button>

                            <button type="button" data-menu-action="copy">
                                <i class="ph ph-copy"></i>
                                Copy Link
                            </button>

                        </div>

                    </div>

                </article>


                {{-- Empty --}}
                <div
                    class="wm-search-page__empty"
                    id="searchEmpty"
                >

                    <div class="wm-search-page__empty-icon">
                        <i class="ph ph-magnifying-glass"></i>
                    </div>

                    <h3>
                        No results found
                    </h3>

                    <p>
                        We couldn't find anything matching your search.
                        Try another keyword or adjust your filters.
                    </p>

                    <button
                        type="button"
                        class="btn btn-light"
                        id="searchEmptyClear"
                    >
                        Clear Search
                    </button>

                </div>

            </div>


            {{-- Pagination --}}
            <div class="wm-search-page__pagination">

            <span class="wm-search-page__pagination-info">
                Showing <strong>1–7</strong> of <strong>12</strong> results
            </span>

                <div class="wm-search-page__pagination-controls">

                    <button
                        type="button"
                        class="wm-search-page__pagination-btn"
                        disabled
                    >
                        <i class="ph ph-caret-left"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__pagination-btn is-active"
                    >
                        1
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__pagination-btn"
                    >
                        2
                    </button>

                    <button
                        type="button"
                        class="wm-search-page__pagination-btn"
                    >
                        <i class="ph ph-caret-right"></i>
                    </button>

                </div>

            </div>

        </section>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {
            'use strict';

            // ------------------------------------------------------------
            // Elements
            // ------------------------------------------------------------

            const $searchInput = $('#globalSearchInput');
            const $searchClear = $('#globalSearchClear');
            const $resultList = $('#searchResultList');
            const $results = $('.wm-search-result');
            const $empty = $('#searchEmpty');

            let searchTerm = '';
            let currentType = 'all';

            let filters = {
                project: '',
                owner: '',
                date: '',
                status: ''
            };


            // ------------------------------------------------------------
            // Functions
            // ------------------------------------------------------------

            function closeAllMenus() {
                $('.wm-search-result__menu').removeClass('is-open');
            }


            function updateResultCount() {

                const visibleCount = $('.wm-search-result:visible').length;

                $('#searchResultCount').text(visibleCount);
            }


            function updateSearchClear() {

                if ($searchInput.val().trim().length) {
                    $searchClear.show();
                } else {
                    $searchClear.hide();
                }
            }


            function updateActiveFilters() {

                const $container = $('#activeSearchFilters');

                $container.empty();

                const labels = {
                    project: {
                        climate: 'Climate Research Initiative',
                        drug: 'Drug Discovery Platform',
                        genomics: 'Genomics Study',
                        neural: 'Neural Imaging Research'
                    },

                    owner: {
                        sarah: 'Sarah Johnson',
                        michael: 'Michael Chen',
                        david: 'David Wilson',
                        emma: 'Emma Davis'
                    },

                    date: {
                        today: 'Today',
                        week: 'This Week',
                        month: 'This Month'
                    },

                    status: {
                        active: 'Active',
                        completed: 'Completed',
                        pending: 'Pending',
                        draft: 'Draft'
                    }
                };


                Object.keys(filters).forEach(function (key) {

                    const value = filters[key];

                    if (!value) {
                        return;
                    }

                    const label = labels[key][value] || value;

                    const $chip = $(`
                    <button
                        type="button"
                        class="wm-search-page__filter-chip"
                        data-remove-search-filter="${key}"
                    >
                        <span>${label}</span>
                        <i class="ph ph-x"></i>
                    </button>
                `);

                    $container.append($chip);
                });
            }


            function applySearch() {

                let visibleCount = 0;

                $results.each(function () {

                    const $result = $(this);

                    const text = $result.text().toLowerCase();

                    const type = $result.data('type') || '';
                    const project = $result.data('project') || '';
                    const owner = $result.data('owner') || '';
                    const status = $result.data('status') || '';
                    const date = $result.data('date') || '';

                    const matchesSearch =
                        !searchTerm ||
                        text.includes(searchTerm.toLowerCase());

                    const matchesType =
                        currentType === 'all' ||
                        type === currentType;

                    const matchesProject =
                        !filters.project ||
                        project === filters.project;

                    const matchesOwner =
                        !filters.owner ||
                        owner === filters.owner;

                    const matchesStatus =
                        !filters.status ||
                        status === filters.status;

                    const matchesDate =
                        !filters.date ||
                        date === filters.date;

                    const visible =
                        matchesSearch &&
                        matchesType &&
                        matchesProject &&
                        matchesOwner &&
                        matchesStatus &&
                        matchesDate;

                    $result.toggle(visible);

                    if (visible) {
                        visibleCount++;
                    }
                });


                updateResultCount();

                $empty.toggleClass(
                    'is-visible',
                    visibleCount === 0
                );

                updateActiveFilters();
            }


            function clearFilters() {

                filters = {
                    project: '',
                    owner: '',
                    date: '',
                    status: ''
                };

                $('#searchProject').val('');
                $('#searchOwner').val('');
                $('#searchDate').val('');
                $('#searchStatus').val('');

                applySearch();
            }


            function clearSearch() {

                $searchInput.val('');

                searchTerm = '';

                updateSearchClear();

                applySearch();

                $searchInput.focus();
            }


            function showSearchMessage(title, text) {

                Swal.fire({
                    icon: 'info',
                    title: title,
                    text: text,
                    confirmButtonText: 'Okay'
                });
            }


            // ------------------------------------------------------------
            // Search
            // ------------------------------------------------------------

            $searchInput.on('input', function () {

                searchTerm = $.trim($(this).val());

                updateSearchClear();

                applySearch();
            });


            $searchClear.on('click', function () {
                clearSearch();
            });


            $('#searchEmptyClear').on('click', function () {

                clearSearch();

                clearFilters();

                currentType = 'all';

                $('.wm-search-page__type-tab')
                    .removeClass('is-active');

                $('.wm-search-page__type-tab[data-search-type="all"]')
                    .addClass('is-active');
            });


            // ------------------------------------------------------------
            // Recent Searches
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-recent-search]',
                function () {

                    const value = $(this).data('recent-search');

                    $searchInput
                        .val(value)
                        .trigger('input')
                        .focus();
                }
            );


            $('#clearRecentSearches').on('click', function () {

                $('.wm-search-page__recent-list').slideUp(
                    180,
                    function () {

                        $(this).empty();

                        $('#recentSearches').addClass(
                            'is-empty'
                        );
                    }
                );
            });


            // ------------------------------------------------------------
            // Result Type Tabs
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-search-type]',
                function () {

                    currentType = $(this).data('search-type');

                    $('.wm-search-page__type-tab')
                        .removeClass('is-active');

                    $(this).addClass('is-active');

                    applySearch();
                }
            );


            // ------------------------------------------------------------
            // Filters
            // ------------------------------------------------------------

            $('#searchFilterToggle').on('click', function () {

                $('#searchFilters').toggleClass('is-open');

                $(this).toggleClass('is-active');
            });


            $(
                '#searchProject, #searchOwner, #searchDate, #searchStatus'
            ).on('change', function () {

                filters.project = $('#searchProject').val();
                filters.owner = $('#searchOwner').val();
                filters.date = $('#searchDate').val();
                filters.status = $('#searchStatus').val();

                applySearch();
            });


            $('#clearSearchFilters').on(
                'click',
                function () {
                    clearFilters();
                }
            );


            $(document).on(
                'click',
                '[data-remove-search-filter]',
                function () {

                    const key = $(this).data(
                        'remove-search-filter'
                    );

                    filters[key] = '';

                    const selectMap = {
                        project: '#searchProject',
                        owner: '#searchOwner',
                        date: '#searchDate',
                        status: '#searchStatus'
                    };

                    $(selectMap[key]).val('');

                    applySearch();
                }
            );


            // ------------------------------------------------------------
            // Sorting
            // ------------------------------------------------------------

            $('#searchSort').on('change', function () {

                const sort = $(this).val();

                const $items = $('.wm-search-result');

                $items.sort(function (a, b) {

                    const timeA = parseInt(
                        $(a).data('time'),
                        10
                    );

                    const timeB = parseInt(
                        $(b).data('time'),
                        10
                    );

                    if (sort === 'oldest') {
                        return timeA - timeB;
                    }

                    if (sort === 'newest') {
                        return timeB - timeA;
                    }

                    return 0;
                });

                $items.detach().appendTo($resultList);

                applySearch();
            });


            // ------------------------------------------------------------
            // Result Actions
            // ------------------------------------------------------------

            $(document).on(
                'click',
                '[data-result-action="menu"]',
                function (event) {

                    event.stopPropagation();

                    const $result = $(this)
                        .closest('.wm-search-result');

                    const $menu = $result
                        .find('.wm-search-result__menu');

                    $('.wm-search-result__menu')
                        .not($menu)
                        .removeClass('is-open');

                    $menu.toggleClass('is-open');
                }
            );


            $(document).on(
                'click',
                '[data-result-action="open"]',
                function () {

                    showSearchMessage(
                        'Open Result',
                        'This result will open its related resource.'
                    );
                }
            );


            $(document).on(
                'click',
                '[data-menu-action]',
                function () {

                    const action = $(this).data('menu-action');

                    closeAllMenus();

                    if (action === 'open') {

                        showSearchMessage(
                            'Open Result',
                            'The selected resource will open here.'
                        );
                    }

                    if (action === 'copy') {

                        showSearchMessage(
                            'Link Copied',
                            'The resource link has been copied.'
                        );
                    }

                    if (action === 'download') {

                        showSearchMessage(
                            'Download',
                            'The file download will start here.'
                        );
                    }

                    if (action === 'message') {

                        showSearchMessage(
                            'Message',
                            'Messaging will open here.'
                        );
                    }

                    if (action === 'complete') {

                        showSearchMessage(
                            'Task Completed',
                            'The task has been marked as completed.'
                        );
                    }

                    if (action === 'archive') {

                        showSearchMessage(
                            'Archive',
                            'The project will be archived.'
                        );
                    }

                    if (action === 'delete') {

                        const $result = $(this)
                            .closest('.wm-search-result');

                        $result.slideUp(
                            180,
                            function () {

                                $(this).remove();

                                updateResultCount();

                                const count =
                                    $('.wm-search-result:visible')
                                        .length;

                                $empty.toggleClass(
                                    'is-visible',
                                    count === 0
                                );
                            }
                        );
                    }
                }
            );


            // ------------------------------------------------------------
            // Global Click
            // ------------------------------------------------------------

            $(document).on('click', function () {
                closeAllMenus();
            });


            $(document).on(
                'click',
                '.wm-search-result__menu',
                function (event) {
                    event.stopPropagation();
                }
            );


            // ------------------------------------------------------------
            // Keyboard Shortcuts
            // ------------------------------------------------------------

            $(document).on('keydown', function (event) {

                const isMac =
                    navigator.platform
                        .toUpperCase()
                        .indexOf('MAC') >= 0;

                const modifier =
                    isMac
                        ? event.metaKey
                        : event.ctrlKey;

                if (
                    modifier &&
                    event.key.toLowerCase() === 'k'
                ) {

                    event.preventDefault();

                    $searchInput.focus();
                }


                if (event.key === 'Escape') {

                    closeAllMenus();

                    if (
                        document.activeElement ===
                        $searchInput[0]
                    ) {
                        $searchInput.blur();
                    }
                }
            });


            // ------------------------------------------------------------
            // Initial
            // ------------------------------------------------------------

            updateSearchClear();

            applySearch();

        });
    </script>
@endpush
