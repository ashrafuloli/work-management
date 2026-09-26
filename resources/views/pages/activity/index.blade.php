@extends('layout.app')

@section('main')

    <div class="wm-activity-page">

        {{-- ============================================================
            Page Header
        ============================================================= --}}
        <div class="wm-activity-page__header">

            <div class="wm-activity-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-activity-page__breadcrumb-link"
                >
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span class="wm-activity-page__breadcrumb-current">
                Activity
            </span>

            </div>


            <div class="wm-activity-page__title-row">

                <div>
                    <h1 class="wm-activity-page__title">
                        Activity
                    </h1>

                    <p class="wm-activity-page__subtitle">
                        Track changes, updates, and actions across your workspace.
                    </p>
                </div>


                <div class="wm-activity-page__header-actions">

                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary"
                        data-activity-action="export"
                    >
                        <i class="ph ph-download-simple"></i>
                        <span>Export</span>
                    </button>

                    <button
                        type="button"
                        class="wm-btn wm-btn--secondary"
                        data-activity-action="mark-read"
                    >
                        <i class="ph ph-check"></i>
                        <span>Mark All Read</span>
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            Summary
        ============================================================= --}}
        <div class="wm-activity-page__summary">

            <div class="wm-activity-page__summary-card">

                <div class="wm-activity-page__summary-icon wm-activity-page__summary-icon--blue">
                    <i class="ph ph-activity"></i>
                </div>

                <div>
                <span class="wm-activity-page__summary-label">
                    Total Activity
                </span>

                    <strong class="wm-activity-page__summary-value">
                        1,248
                    </strong>

                    <span class="wm-activity-page__summary-meta">
                    This month
                </span>
                </div>

            </div>


            <div class="wm-activity-page__summary-card">

                <div class="wm-activity-page__summary-icon wm-activity-page__summary-icon--green">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div>
                <span class="wm-activity-page__summary-label">
                    Completed
                </span>

                    <strong class="wm-activity-page__summary-value">
                        384
                    </strong>

                    <span class="wm-activity-page__summary-meta">
                    Tasks completed
                </span>
                </div>

            </div>


            <div class="wm-activity-page__summary-card">

                <div class="wm-activity-page__summary-icon wm-activity-page__summary-icon--purple">
                    <i class="ph ph-pencil-simple"></i>
                </div>

                <div>
                <span class="wm-activity-page__summary-label">
                    Updates
                </span>

                    <strong class="wm-activity-page__summary-value">
                        512
                    </strong>

                    <span class="wm-activity-page__summary-meta">
                    Project changes
                </span>
                </div>

            </div>


            <div class="wm-activity-page__summary-card">

                <div class="wm-activity-page__summary-icon wm-activity-page__summary-icon--orange">
                    <i class="ph ph-users-three"></i>
                </div>

                <div>
                <span class="wm-activity-page__summary-label">
                    Team Actions
                </span>

                    <strong class="wm-activity-page__summary-value">
                        96
                    </strong>

                    <span class="wm-activity-page__summary-meta">
                    Member activity
                </span>
                </div>

            </div>

        </div>


        {{-- ============================================================
            Main Card
        ============================================================= --}}
        <div class="wm-activity-page__card">

            {{-- Toolbar --}}
            <div class="wm-activity-page__toolbar">

                <div class="wm-activity-page__toolbar-left">

                    <div class="wm-activity-page__search">

                        <i class="ph ph-magnifying-glass"></i>

                        <input
                            type="search"
                            id="wm-activity-search"
                            class="wm-activity-page__search-input"
                            placeholder="Search activity..."
                            autocomplete="off"
                        >

                        <button
                            type="button"
                            class="wm-activity-page__search-clear"
                            id="wm-activity-search-clear"
                            aria-label="Clear search"
                        >
                            <i class="ph ph-x"></i>
                        </button>

                    </div>


                    <button
                        type="button"
                        class="wm-activity-page__filter-toggle"
                        id="wm-activity-filter-toggle"
                    >
                        <i class="ph ph-funnel"></i>

                        <span>Filters</span>

                        <span
                            class="wm-activity-page__filter-count"
                            id="wm-activity-filter-count"
                        >
                        0
                    </span>
                    </button>

                </div>


                <div class="wm-activity-page__toolbar-right">

                    <div class="wm-activity-page__sort">

                    <span>
                        Sort:
                    </span>

                        <select id="wm-activity-sort">

                            <option value="newest">
                                Newest first
                            </option>

                            <option value="oldest">
                                Oldest first
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            {{-- Filters --}}
            <div
                class="wm-activity-page__filters"
                id="wm-activity-filters"
            >

                <div class="wm-activity-page__filter-group">

                    <label for="wm-activity-type">
                        Activity Type
                    </label>

                    <select id="wm-activity-type">

                        <option value="all">
                            All activity
                        </option>

                        <option value="task">
                            Tasks
                        </option>

                        <option value="project">
                            Projects
                        </option>

                        <option value="team">
                            Team
                        </option>

                        <option value="comment">
                            Comments
                        </option>

                        <option value="file">
                            Files
                        </option>

                        <option value="system">
                            System
                        </option>

                    </select>

                </div>


                <div class="wm-activity-page__filter-group">

                    <label for="wm-activity-project">
                        Project
                    </label>

                    <select id="wm-activity-project">

                        <option value="all">
                            All projects
                        </option>

                        <option value="atlas">
                            Atlas Research
                        </option>

                        <option value="neuro">
                            Neuro Imaging
                        </option>

                        <option value="climate">
                            Climate Study
                        </option>

                        <option value="genome">
                            Genome Project
                        </option>

                    </select>

                </div>


                <div class="wm-activity-page__filter-group">

                    <label for="wm-activity-member">
                        Member
                    </label>

                    <select id="wm-activity-member">

                        <option value="all">
                            All members
                        </option>

                        <option value="olivia">
                            Olivia Martin
                        </option>

                        <option value="sophia">
                            Sophia Chen
                        </option>

                        <option value="ethan">
                            Ethan Brooks
                        </option>

                        <option value="liam">
                            Liam Carter
                        </option>

                        <option value="maya">
                            Maya Wilson
                        </option>

                    </select>

                </div>


                <div class="wm-activity-page__filter-group">

                    <label for="wm-activity-date">
                        Date
                    </label>

                    <select id="wm-activity-date">

                        <option value="all">
                            All time
                        </option>

                        <option value="today">
                            Today
                        </option>

                        <option value="week">
                            Last 7 days
                        </option>

                        <option value="month">
                            This month
                        </option>

                    </select>

                </div>


                <button
                    type="button"
                    class="wm-activity-page__clear-filters"
                    id="wm-activity-clear-filters"
                >
                    Clear filters
                </button>

            </div>


            {{-- Active Filters --}}
            <div
                class="wm-activity-page__active-filters"
                id="wm-activity-active-filters"
            ></div>


            {{-- ========================================================
                Activity Content
            ========================================================= --}}
            <div class="wm-activity-page__content">

                {{-- Today --}}
                <div
                    class="wm-activity-page__group"
                    data-activity-group
                >

                    <div class="wm-activity-page__date">
                        <span>Today</span>
                        <span>September 24, 2026</span>
                    </div>


                    <div class="wm-activity-page__timeline">


                        {{-- Activity 01 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="olivia martin updated atlas research project plan"
                            data-type="project"
                            data-project="atlas"
                            data-member="olivia"
                            data-date="today"
                            data-time="10:42"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--blue">
                                <i class="ph ph-pencil-simple"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--blue">
                                            OM
                                        </div>

                                        <div>

                                            <strong>
                                                Olivia Martin
                                            </strong>

                                            <span>
                                            updated a project
                                        </span>

                                        </div>

                                    </div>


                                    <span class="wm-activity-page__time">
                                    10:42 AM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Updated the project plan for
                                    <a href="{{ route('projects.overview', 'atlas') }}">
                                        Atlas Research
                                    </a>.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-folder-simple"></i>

                                    <span>
                                    Atlas Research
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="project">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open Project
                                    </button>

                                </div>

                            </div>

                        </div>


                        {{-- Activity 02 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="liam carter completed literature review task"
                            data-type="task"
                            data-project="atlas"
                            data-member="liam"
                            data-date="today"
                            data-time="09:36"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--green">
                                <i class="ph ph-check"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--cyan">
                                            LC
                                        </div>

                                        <div>

                                            <strong>
                                                Liam Carter
                                            </strong>

                                            <span>
                                            completed a task
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    9:36 AM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Completed
                                    <a href="{{ route('tasks.detail', 'literature-review') }}">
                                        Complete literature review
                                    </a>.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-check-square"></i>

                                    <span>
                                    Atlas Research
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="task">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open Task
                                    </button>

                                </div>

                            </div>

                        </div>


                        {{-- Activity 03 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="sophia chen commented neuro imaging"
                            data-type="comment"
                            data-project="neuro"
                            data-member="sophia"
                            data-date="today"
                            data-time="09:18"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--purple">
                                <i class="ph ph-chat-circle"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--purple">
                                            SC
                                        </div>

                                        <div>

                                            <strong>
                                                Sophia Chen
                                            </strong>

                                            <span>
                                            added a comment
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    9:18 AM
                                </span>

                                </div>


                                <div class="wm-activity-page__comment">

                                <span>
                                    “The imaging results look consistent with the latest
                                    experiment. I will add the updated analysis shortly.”
                                </span>

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-folder-simple"></i>

                                    <span>
                                    Neuro Imaging
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="reply">
                                        <i class="ph ph-chat-circle"></i>
                                        Reply
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Yesterday --}}
                <div
                    class="wm-activity-page__group"
                    data-activity-group
                >

                    <div class="wm-activity-page__date">
                        <span>Yesterday</span>
                        <span>September 23, 2026</span>
                    </div>


                    <div class="wm-activity-page__timeline">


                        {{-- Activity 04 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="ethan brooks created climate study task"
                            data-type="task"
                            data-project="climate"
                            data-member="ethan"
                            data-date="week"
                            data-time="16:32"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--orange">
                                <i class="ph ph-plus"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--green">
                                            EB
                                        </div>

                                        <div>

                                            <strong>
                                                Ethan Brooks
                                            </strong>

                                            <span>
                                            created a task
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    4:32 PM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Created
                                    <a href="{{ route('tasks.detail', 'climate-analysis') }}">
                                        Analyze climate dataset
                                    </a>.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-folder-simple"></i>

                                    <span>
                                    Climate Study
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="task">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open Task
                                    </button>

                                </div>

                            </div>

                        </div>


                        {{-- Activity 05 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="olivia martin added sarah thompson atlas research team"
                            data-type="team"
                            data-project="atlas"
                            data-member="olivia"
                            data-date="week"
                            data-time="15:18"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--blue">
                                <i class="ph ph-user-plus"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--blue">
                                            OM
                                        </div>

                                        <div>

                                            <strong>
                                                Olivia Martin
                                            </strong>

                                            <span>
                                            added a team member
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    3:18 PM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Added
                                    <strong>Sarah Thompson</strong>
                                    to the Atlas Research project.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-users-three"></i>

                                    <span>
                                    Atlas Research
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="member">
                                        <i class="ph ph-user"></i>
                                        View Member
                                    </button>

                                </div>

                            </div>

                        </div>


                        {{-- Activity 06 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="maya wilson uploaded research protocol pdf"
                            data-type="file"
                            data-project="genome"
                            data-member="maya"
                            data-date="week"
                            data-time="13:42"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--cyan">
                                <i class="ph ph-upload-simple"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--orange">
                                            MW
                                        </div>

                                        <div>

                                            <strong>
                                                Maya Wilson
                                            </strong>

                                            <span>
                                            uploaded a file
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    1:42 PM
                                </span>

                                </div>


                                <div class="wm-activity-page__file">

                                    <div class="wm-activity-page__file-icon">
                                        <i class="ph ph-file-pdf"></i>
                                    </div>

                                    <div>
                                        <strong>
                                            Research Protocol.pdf
                                        </strong>

                                        <span>
                                        2.4 MB
                                    </span>
                                    </div>

                                    <button
                                        type="button"
                                        data-activity-action="download"
                                    >
                                        <i class="ph ph-download-simple"></i>
                                    </button>

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-folder-simple"></i>

                                    <span>
                                    Genome Project
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="download">
                                        <i class="ph ph-download-simple"></i>
                                        Download
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Older --}}
                <div
                    class="wm-activity-page__group"
                    data-activity-group
                >

                    <div class="wm-activity-page__date">
                        <span>September 22</span>
                        <span>Earlier this week</span>
                    </div>


                    <div class="wm-activity-page__timeline">


                        {{-- Activity 07 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="liam carter updated genome project status"
                            data-type="project"
                            data-project="genome"
                            data-member="liam"
                            data-date="week"
                            data-time="14:20"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--purple">
                                <i class="ph ph-arrows-clockwise"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--cyan">
                                            LC
                                        </div>

                                        <div>

                                            <strong>
                                                Liam Carter
                                            </strong>

                                            <span>
                                            updated project status
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    2:20 PM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Changed
                                    <strong>Genome Project</strong>
                                    status from Planning to Active.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-folder-simple"></i>

                                    <span>
                                    Genome Project
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="project">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open Project
                                    </button>

                                </div>

                            </div>

                        </div>


                        {{-- Activity 08 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="sophia chen completed neuro imaging milestone"
                            data-type="project"
                            data-project="neuro"
                            data-member="sophia"
                            data-date="week"
                            data-time="11:05"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--green">
                                <i class="ph ph-flag-checkered"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--purple">
                                            SC
                                        </div>

                                        <div>

                                            <strong>
                                                Sophia Chen
                                            </strong>

                                            <span>
                                            completed a milestone
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    11:05 AM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Completed the
                                    <strong>Initial Imaging Review</strong>
                                    milestone.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-flag"></i>

                                    <span>
                                    Neuro Imaging
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                </div>

                            </div>

                        </div>


                        {{-- Activity 09 --}}
                        <div
                            class="wm-activity-page__item"
                            data-activity
                            data-search="ethan brooks changed task priority climate study"
                            data-type="task"
                            data-project="climate"
                            data-member="ethan"
                            data-date="week"
                            data-time="09:44"
                        >

                            <div class="wm-activity-page__timeline-line"></div>

                            <div class="wm-activity-page__icon wm-activity-page__icon--orange">
                                <i class="ph ph-warning-circle"></i>
                            </div>

                            <div class="wm-activity-page__body">

                                <div class="wm-activity-page__activity-header">

                                    <div class="wm-activity-page__actor">

                                        <div class="wm-activity-page__avatar wm-activity-page__avatar--green">
                                            EB
                                        </div>

                                        <div>

                                            <strong>
                                                Ethan Brooks
                                            </strong>

                                            <span>
                                            changed task priority
                                        </span>

                                        </div>

                                    </div>

                                    <span class="wm-activity-page__time">
                                    9:44 AM
                                </span>

                                </div>


                                <div class="wm-activity-page__message">

                                    Changed
                                    <strong>Analyze climate dataset</strong>
                                    priority from Medium to High.

                                </div>


                                <div class="wm-activity-page__context">

                                    <i class="ph ph-check-square"></i>

                                    <span>
                                    Climate Study
                                </span>

                                </div>

                            </div>


                            <div class="wm-activity-page__item-action">

                                <button
                                    type="button"
                                    data-activity-menu
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                                <div class="wm-activity-page__action-menu">

                                    <button data-activity-action="view">
                                        <i class="ph ph-eye"></i>
                                        View
                                    </button>

                                    <button data-activity-action="task">
                                        <i class="ph ph-arrow-square-out"></i>
                                        Open Task
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Empty State --}}
            <div
                class="wm-activity-page__empty"
                id="wm-activity-empty"
            >

                <div class="wm-activity-page__empty-icon">
                    <i class="ph ph-activity"></i>
                </div>

                <h3>
                    No activity found
                </h3>

                <p>
                    Try changing your search or filters to find the activity you're looking for.
                </p>

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wm-activity-empty-reset"
                >
                    Clear Filters
                </button>

            </div>


            {{-- Footer --}}
            <div class="wm-activity-page__footer">

                <div class="wm-activity-page__footer-info">

                    Showing
                    <strong id="wm-activity-visible-count">
                        9
                    </strong>
                    activities

                </div>


                <div class="wm-activity-page__pagination">

                    <button
                        type="button"
                        class="wm-activity-page__pagination-btn is-disabled"
                        disabled
                    >
                        <i class="ph ph-caret-left"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-activity-page__pagination-btn is-active"
                    >
                        1
                    </button>

                    <button
                        type="button"
                        class="wm-activity-page__pagination-btn"
                    >
                        2
                    </button>

                    <button
                        type="button"
                        class="wm-activity-page__pagination-btn"
                    >
                        3
                    </button>

                    <span class="wm-activity-page__pagination-dots">
                    ...
                </span>

                    <button
                        type="button"
                        class="wm-activity-page__pagination-btn"
                    >
                        12
                    </button>

                    <button
                        type="button"
                        class="wm-activity-page__pagination-btn"
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


            // ============================================================
            // Elements
            // ============================================================

            const $search =
                $('#wm-activity-search');

            const $searchClear =
                $('#wm-activity-search-clear');

            const $filterToggle =
                $('#wm-activity-filter-toggle');

            const $filters =
                $('#wm-activity-filters');

            const $filterCount =
                $('#wm-activity-filter-count');

            const $type =
                $('#wm-activity-type');

            const $project =
                $('#wm-activity-project');

            const $member =
                $('#wm-activity-member');

            const $date =
                $('#wm-activity-date');

            const $sort =
                $('#wm-activity-sort');

            const $activities =
                $('[data-activity]');

            const $groups =
                $('[data-activity-group]');

            const $empty =
                $('#wm-activity-empty');

            const $visibleCount =
                $('#wm-activity-visible-count');

            const $activeFilters =
                $('#wm-activity-active-filters');


            // ============================================================
            // Labels
            // ============================================================

            const typeLabels = {
                task: 'Tasks',
                project: 'Projects',
                team: 'Team',
                comment: 'Comments',
                file: 'Files',
                system: 'System'
            };


            const projectLabels = {
                atlas: 'Atlas Research',
                neuro: 'Neuro Imaging',
                climate: 'Climate Study',
                genome: 'Genome Project'
            };


            const memberLabels = {
                olivia: 'Olivia Martin',
                sophia: 'Sophia Chen',
                ethan: 'Ethan Brooks',
                liam: 'Liam Carter',
                maya: 'Maya Wilson'
            };


            const dateLabels = {
                today: 'Today',
                week: 'Last 7 days',
                month: 'This month'
            };


            // ============================================================
            // Functions
            // ============================================================

            function getFilters() {

                return {
                    search: $.trim($search.val()).toLowerCase(),
                    type: $type.val(),
                    project: $project.val(),
                    member: $member.val(),
                    date: $date.val()
                };

            }


            function filterActivities() {

                const filters =
                    getFilters();

                let visibleCount = 0;


                $activities.each(function () {

                    const $item =
                        $(this);

                    const searchText =
                        String(
                            $item.data('search')
                        ).toLowerCase();

                    const type =
                        $item.data('type');

                    const project =
                        $item.data('project');

                    const member =
                        $item.data('member');

                    const date =
                        $item.data('date');


                    const matchesSearch =
                        !filters.search ||
                        searchText.includes(filters.search);


                    const matchesType =
                        filters.type === 'all' ||
                        type === filters.type;


                    const matchesProject =
                        filters.project === 'all' ||
                        project === filters.project;


                    const matchesMember =
                        filters.member === 'all' ||
                        member === filters.member;


                    const matchesDate =
                        filters.date === 'all' ||
                        date === filters.date;


                    const visible =
                        matchesSearch &&
                        matchesType &&
                        matchesProject &&
                        matchesMember &&
                        matchesDate;


                    $item.toggle(visible);


                    if (visible) {
                        visibleCount++;
                    }

                });


                updateGroups();

                updateFilterCount();

                updateActiveFilters();

                updateEmptyState(visibleCount);

                $visibleCount.text(visibleCount);

            }


            function updateGroups() {

                $groups.each(function () {

                    const $group =
                        $(this);

                    const visibleItems =
                        $group
                            .find('[data-activity]:visible')
                            .length;


                    $group.toggle(
                        visibleItems > 0
                    );

                });

            }


            function updateFilterCount() {

                let count = 0;


                if ($type.val() !== 'all') {
                    count++;
                }

                if ($project.val() !== 'all') {
                    count++;
                }

                if ($member.val() !== 'all') {
                    count++;
                }

                if ($date.val() !== 'all') {
                    count++;
                }


                $filterCount.text(count);

                $filterCount.toggle(count > 0);

            }


            function updateActiveFilters() {

                const filters =
                    getFilters();

                let html = '';


                if (filters.type !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-activity-page__filter-chip"
                        data-remove-filter="type"
                    >
                        Type: ${typeLabels[filters.type]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.project !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-activity-page__filter-chip"
                        data-remove-filter="project"
                    >
                        Project: ${projectLabels[filters.project]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.member !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-activity-page__filter-chip"
                        data-remove-filter="member"
                    >
                        Member: ${memberLabels[filters.member]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                if (filters.date !== 'all') {

                    html += `
                    <button
                        type="button"
                        class="wm-activity-page__filter-chip"
                        data-remove-filter="date"
                    >
                        Date: ${dateLabels[filters.date]}
                        <i class="ph ph-x"></i>
                    </button>
                `;

                }


                $activeFilters.html(html);

            }


            function updateEmptyState(count) {

                if (count === 0) {

                    $empty.addClass('is-visible');

                    $('.wm-activity-page__content').hide();

                } else {

                    $empty.removeClass('is-visible');

                    $('.wm-activity-page__content').show();

                }

            }


            function resetFilters() {

                $search.val('');

                $type.val('all');
                $project.val('all');
                $member.val('all');
                $date.val('all');

                $searchClear.hide();

                filterActivities();

            }


            function sortActivities() {

                const sortValue =
                    $sort.val();


                const groups =
                    $('.wm-activity-page__timeline');


                groups.each(function () {

                    const $timeline =
                        $(this);

                    const items =
                        $timeline
                            .find('[data-activity]')
                            .get();


                    items.sort(function (a, b) {

                        const timeA =
                            String(
                                $(a).data('time')
                            );

                        const timeB =
                            String(
                                $(b).data('time')
                            );


                        if (sortValue === 'oldest') {

                            return timeA.localeCompare(
                                timeB
                            );

                        }


                        return timeB.localeCompare(
                            timeA
                        );

                    });


                    $.each(items, function (_, item) {

                        $timeline.append(item);

                    });

                });


                filterActivities();

            }


            function closeMenus() {

                $('.wm-activity-page__item-action')
                    .removeClass('is-open');

            }


            // ============================================================
            // Search
            // ============================================================

            $search.on('input', function () {

                const hasValue =
                    $.trim($(this).val()).length > 0;


                $searchClear.toggle(
                    hasValue
                );


                filterActivities();

            });


            $searchClear.on('click', function () {

                $search.val('');

                $(this).hide();

                filterActivities();

                $search.trigger('focus');

            });


            // ============================================================
            // Filters
            // ============================================================

            $filterToggle.on('click', function () {

                $filters.toggleClass(
                    'is-visible'
                );

            });


            $type
                .add($project)
                .add($member)
                .add($date)
                .on('change', function () {

                    filterActivities();

                });


            $('#wm-activity-clear-filters')
                .add('#wm-activity-empty-reset')
                .on('click', function () {

                    resetFilters();

                });


            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data('remove-filter');


                    if (filter === 'type') {
                        $type.val('all');
                    }

                    if (filter === 'project') {
                        $project.val('all');
                    }

                    if (filter === 'member') {
                        $member.val('all');
                    }

                    if (filter === 'date') {
                        $date.val('all');
                    }


                    filterActivities();

                }
            );


            // ============================================================
            // Sorting
            // ============================================================

            $sort.on('change', function () {

                sortActivities();

            });


            // ============================================================
            // Activity Menus
            // ============================================================

            $(document).on(
                'click',
                '[data-activity-menu]',
                function (event) {

                    event.stopPropagation();


                    const $action =
                        $(this).closest(
                            '.wm-activity-page__item-action'
                        );


                    $('.wm-activity-page__item-action')
                        .not($action)
                        .removeClass('is-open');


                    $action.toggleClass(
                        'is-open'
                    );

                }
            );


            // ============================================================
            // Activity Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-activity-action]',
                function (event) {

                    event.stopPropagation();


                    const action =
                        $(this).data(
                            'activity-action'
                        );


                    const $item =
                        $(this).closest(
                            '[data-activity]'
                        );


                    console.log(
                        'Activity action:',
                        action,
                        $item.data('search')
                    );


                    closeMenus();

                }
            );


            // ============================================================
            // Header Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-activity-action]',
                function () {

                    const action =
                        $(this).data(
                            'activity-action'
                        );


                    if (
                        action === 'export' ||
                        action === 'mark-read'
                    ) {

                        console.log(
                            'Header activity action:',
                            action
                        );

                    }

                }
            );


            // ============================================================
            // Outside Click
            // ============================================================

            $(document).on(
                'click',
                function () {

                    closeMenus();

                }
            );


            // ============================================================
            // Escape
            // ============================================================

            $(document).on(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {

                        closeMenus();

                        $filters.removeClass(
                            'is-visible'
                        );

                    }

                }
            );


            // ============================================================
            // Initial
            // ============================================================

            $searchClear.hide();

            $filterCount.hide();

            filterActivities();

        });
    </script>

@endpush
