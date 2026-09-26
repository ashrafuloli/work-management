@extends('layout.app')

@section('main')

    <div class="wm-notifications-page">

        {{-- Page Header --}}
        <div class="wm-notifications-page__header">
            <div class="wm-notifications-page__header-content">

                <div class="wm-notifications-page__breadcrumb">
                    <a href="{{ route('dashboard') }}" class="wm-notifications-page__breadcrumb-link">
                        Dashboard
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Notifications</span>
                </div>

                <div class="wm-notifications-page__heading">
                    <div>
                        <h1 class="wm-notifications-page__title">
                            Notifications
                        </h1>

                        <p class="wm-notifications-page__subtitle">
                            Stay up to date with project activity, tasks, mentions, and team updates.
                        </p>
                    </div>

                    <div class="wm-notifications-page__header-actions">
                        <button
                            type="button"
                            class="btn btn-light"
                            data-notification-header-action="mark-all-read"
                        >
                            <i class="ph ph-checks"></i>
                            <span>Mark All as Read</span>
                        </button>

                        <button
                            type="button"
                            class="btn btn-primary"
                            data-notification-header-action="notification-settings"
                        >
                            <i class="ph ph-gear"></i>
                            <span>Settings</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>


        {{-- Summary --}}
        <div class="wm-notifications-page__summary">

            <div class="wm-notification-summary-card">
                <div class="wm-notification-summary-card__icon wm-notification-summary-card__icon--primary">
                    <i class="ph ph-bell"></i>
                </div>

                <div class="wm-notification-summary-card__content">
                <span class="wm-notification-summary-card__label">
                    Total Notifications
                </span>

                    <strong class="wm-notification-summary-card__value">
                        48
                    </strong>
                </div>
            </div>


            <div class="wm-notification-summary-card">
                <div class="wm-notification-summary-card__icon wm-notification-summary-card__icon--warning">
                    <i class="ph ph-bell-ringing"></i>
                </div>

                <div class="wm-notification-summary-card__content">
                <span class="wm-notification-summary-card__label">
                    Unread
                </span>

                    <strong class="wm-notification-summary-card__value">
                        12
                    </strong>
                </div>
            </div>


            <div class="wm-notification-summary-card">
                <div class="wm-notification-summary-card__icon wm-notification-summary-card__icon--success">
                    <i class="ph ph-check-circle"></i>
                </div>

                <div class="wm-notification-summary-card__content">
                <span class="wm-notification-summary-card__label">
                    Read
                </span>

                    <strong class="wm-notification-summary-card__value">
                        36
                    </strong>
                </div>
            </div>


            <div class="wm-notification-summary-card">
                <div class="wm-notification-summary-card__icon wm-notification-summary-card__icon--info">
                    <i class="ph ph-at"></i>
                </div>

                <div class="wm-notification-summary-card__content">
                <span class="wm-notification-summary-card__label">
                    Mentions
                </span>

                    <strong class="wm-notification-summary-card__value">
                        7
                    </strong>
                </div>
            </div>

        </div>


        {{-- Toolbar --}}
        <div class="wm-notifications-page__toolbar">

            <div class="wm-notifications-page__toolbar-left">

                <div class="wm-notifications-page__search">
                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="notificationSearch"
                        class="form-control"
                        placeholder="Search notifications..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-notifications-page__search-clear"
                        id="notificationSearchClear"
                        aria-label="Clear search"
                    >
                        <i class="ph ph-x"></i>
                    </button>
                </div>

                <button
                    type="button"
                    class="btn btn-light wm-notifications-page__filter-toggle"
                    id="notificationFilterToggle"
                >
                    <i class="ph ph-funnel"></i>
                    <span>Filters</span>
                </button>

            </div>


            <div class="wm-notifications-page__toolbar-right">

                <div class="wm-notifications-page__view-switcher">

                    <button
                        type="button"
                        class="wm-notifications-page__view-btn is-active"
                        data-notification-view="all"
                    >
                        All
                    </button>

                    <button
                        type="button"
                        class="wm-notifications-page__view-btn"
                        data-notification-view="unread"
                    >
                        Unread
                        <span class="wm-notifications-page__view-count">12</span>
                    </button>

                </div>


                <div class="wm-notifications-page__sort">

                    <select
                        id="notificationSort"
                        class="form-select"
                        aria-label="Sort notifications"
                    >
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- Filters --}}
        <div
            class="wm-notifications-page__filters"
            id="notificationFilters"
        >

            <div class="wm-notifications-page__filter-group">

                <label for="notificationType">
                    Notification Type
                </label>

                <select
                    id="notificationType"
                    class="form-select"
                >
                    <option value="">All Types</option>
                    <option value="task">Task</option>
                    <option value="project">Project</option>
                    <option value="mention">Mention</option>
                    <option value="comment">Comment</option>
                    <option value="team">Team</option>
                    <option value="system">System</option>
                </select>

            </div>


            <div class="wm-notifications-page__filter-group">

                <label for="notificationProject">
                    Project
                </label>

                <select
                    id="notificationProject"
                    class="form-select"
                >
                    <option value="">All Projects</option>
                    <option value="climate">Climate Research Initiative</option>
                    <option value="drug">Drug Discovery Platform</option>
                    <option value="genomics">Genomics Study</option>
                    <option value="neural">Neural Imaging Research</option>
                </select>

            </div>


            <div class="wm-notifications-page__filter-group">

                <label for="notificationStatus">
                    Status
                </label>

                <select
                    id="notificationStatus"
                    class="form-select"
                >
                    <option value="">All</option>
                    <option value="unread">Unread</option>
                    <option value="read">Read</option>
                </select>

            </div>


            <div class="wm-notifications-page__filter-group">

                <label for="notificationDate">
                    Date
                </label>

                <select
                    id="notificationDate"
                    class="form-select"
                >
                    <option value="">Any Date</option>
                    <option value="today">Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>

            </div>


            <div class="wm-notifications-page__filter-actions">

                <button
                    type="button"
                    class="btn btn-light"
                    id="notificationClearFilters"
                >
                    Clear Filters
                </button>

            </div>

        </div>


        {{-- Active Filters --}}
        <div
            class="wm-notifications-page__active-filters"
            id="notificationActiveFilters"
        ></div>


        {{-- Notification List --}}
        <div class="wm-notifications-page__content">

            <div class="wm-notifications-page__list" id="notificationList">

                {{-- Today --}}
                <div
                    class="wm-notification-group"
                    data-group="today"
                >

                    <div class="wm-notification-group__header">
                        <h2>Today</h2>

                        <span>6 notifications</span>
                    </div>


                    {{-- Notification --}}
                    <div
                        class="wm-notification-item is-unread"
                        data-type="task"
                        data-project="climate"
                        data-status="unread"
                        data-date="today"
                        data-time="10:42"
                    >

                        <div class="wm-notification-item__indicator"></div>

                        <div class="wm-notification-item__icon wm-notification-item__icon--task">
                            <i class="ph ph-check-square"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    <strong>Sarah Johnson</strong>
                                    assigned you a task
                                    <strong>Review climate data analysis</strong>.
                                </div>

                                <span class="wm-notification-item__time">
                                12 min ago
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Climate Research Initiative
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="mark-read"
                                title="Mark as read"
                            >
                                <i class="ph ph-check"></i>
                            </button>

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                                title="More"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button
                                    type="button"
                                    data-menu-action="mark-read"
                                >
                                    <i class="ph ph-check"></i>
                                    Mark as read
                                </button>

                                <button
                                    type="button"
                                    data-menu-action="open"
                                >
                                    <i class="ph ph-arrow-up-right"></i>
                                    Open task
                                </button>

                                <button
                                    type="button"
                                    data-menu-action="delete"
                                    class="is-danger"
                                >
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-notification-item is-unread"
                        data-type="mention"
                        data-project="drug"
                        data-status="unread"
                        data-date="today"
                        data-time="09:55"
                    >

                        <div class="wm-notification-item__indicator"></div>

                        <div class="wm-notification-item__icon wm-notification-item__icon--mention">
                            <i class="ph ph-at"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    <strong>Michael Chen</strong>
                                    mentioned you in
                                    <strong>Drug Discovery Meeting Notes</strong>.
                                </div>

                                <span class="wm-notification-item__time">
                                1 hr ago
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Drug Discovery Platform
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="mark-read"
                                title="Mark as read"
                            >
                                <i class="ph ph-check"></i>
                            </button>

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="mark-read">
                                    <i class="ph ph-check"></i>
                                    Mark as read
                                </button>

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    Open
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-notification-item"
                        data-type="project"
                        data-project="genomics"
                        data-status="read"
                        data-date="today"
                        data-time="08:20"
                    >

                        <div class="wm-notification-item__icon wm-notification-item__icon--project">
                            <i class="ph ph-kanban"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    Project
                                    <strong>Genomics Study</strong>
                                    was updated by
                                    <strong>David Wilson</strong>.
                                </div>

                                <span class="wm-notification-item__time">
                                3 hrs ago
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Project settings and milestones were updated.
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="mark-unread">
                                    <i class="ph ph-envelope"></i>
                                    Mark as unread
                                </button>

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    Open project
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-notification-item is-unread"
                        data-type="comment"
                        data-project="neural"
                        data-status="unread"
                        data-date="today"
                        data-time="07:45"
                    >

                        <div class="wm-notification-item__indicator"></div>

                        <div class="wm-notification-item__icon wm-notification-item__icon--comment">
                            <i class="ph ph-chat-circle-text"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    <strong>Emma Davis</strong>
                                    commented on
                                    <strong>Neural imaging protocol</strong>.
                                </div>

                                <span class="wm-notification-item__time">
                                4 hrs ago
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                "I've added the updated imaging parameters."
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="mark-read"
                            >
                                <i class="ph ph-check"></i>
                            </button>

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="mark-read">
                                    <i class="ph ph-check"></i>
                                    Mark as read
                                </button>

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    View comment
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Yesterday --}}
                <div
                    class="wm-notification-group"
                    data-group="yesterday"
                >

                    <div class="wm-notification-group__header">
                        <h2>Yesterday</h2>

                        <span>4 notifications</span>
                    </div>


                    <div
                        class="wm-notification-item"
                        data-type="team"
                        data-project="climate"
                        data-status="read"
                        data-date="yesterday"
                        data-time="16:30"
                    >

                        <div class="wm-notification-item__icon wm-notification-item__icon--team">
                            <i class="ph ph-users"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    <strong>Olivia Brown</strong>
                                    joined the
                                    <strong>Climate Research Initiative</strong>
                                    project.
                                </div>

                                <span class="wm-notification-item__time">
                                Yesterday
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                New team member
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    View member
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-notification-item is-unread"
                        data-type="task"
                        data-project="genomics"
                        data-status="unread"
                        data-date="yesterday"
                        data-time="14:10"
                    >

                        <div class="wm-notification-item__indicator"></div>

                        <div class="wm-notification-item__icon wm-notification-item__icon--task">
                            <i class="ph ph-check-square"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    Task
                                    <strong>Prepare sequencing report</strong>
                                    is due tomorrow.
                                </div>

                                <span class="wm-notification-item__time">
                                Yesterday
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Genomics Study
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="mark-read"
                            >
                                <i class="ph ph-check"></i>
                            </button>

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="mark-read">
                                    <i class="ph ph-check"></i>
                                    Mark as read
                                </button>

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    Open task
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-notification-item"
                        data-type="file"
                        data-project="drug"
                        data-status="read"
                        data-date="yesterday"
                        data-time="11:25"
                    >

                        <div class="wm-notification-item__icon wm-notification-item__icon--file">
                            <i class="ph ph-file-arrow-up"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    <strong>Michael Chen</strong>
                                    uploaded
                                    <strong>compound-analysis.xlsx</strong>.
                                </div>

                                <span class="wm-notification-item__time">
                                Yesterday
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Drug Discovery Platform
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-download-simple"></i>
                                    View file
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- September 22 --}}
                <div
                    class="wm-notification-group"
                    data-group="older"
                >

                    <div class="wm-notification-group__header">
                        <h2>September 22</h2>

                        <span>3 notifications</span>
                    </div>


                    <div
                        class="wm-notification-item"
                        data-type="milestone"
                        data-project="climate"
                        data-status="read"
                        data-date="month"
                        data-time="15:30"
                    >

                        <div class="wm-notification-item__icon wm-notification-item__icon--milestone">
                            <i class="ph ph-flag"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    Milestone
                                    <strong>Data Collection Phase</strong>
                                    was completed.
                                </div>

                                <span class="wm-notification-item__time">
                                Sep 22
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Climate Research Initiative
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    View milestone
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>


                    <div
                        class="wm-notification-item"
                        data-type="system"
                        data-project=""
                        data-status="read"
                        data-date="month"
                        data-time="11:15"
                    >

                        <div class="wm-notification-item__icon wm-notification-item__icon--system">
                            <i class="ph ph-info"></i>
                        </div>

                        <div class="wm-notification-item__content">

                            <div class="wm-notification-item__top">

                                <div class="wm-notification-item__message">
                                    Your workspace billing information was successfully updated.
                                </div>

                                <span class="wm-notification-item__time">
                                Sep 22
                            </span>

                            </div>

                            <p class="wm-notification-item__meta">
                                Workspace Settings
                            </p>

                        </div>

                        <div class="wm-notification-item__actions">

                            <button
                                type="button"
                                class="wm-notification-item__action"
                                data-notification-action="menu"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                            <div class="wm-notification-item__menu">

                                <button type="button" data-menu-action="open">
                                    <i class="ph ph-arrow-up-right"></i>
                                    View settings
                                </button>

                                <button type="button" data-menu-action="delete" class="is-danger">
                                    <i class="ph ph-trash"></i>
                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Empty State --}}
                <div
                    class="wm-notifications-page__empty"
                    id="notificationEmpty"
                >

                    <div class="wm-notifications-page__empty-icon">
                        <i class="ph ph-bell-slash"></i>
                    </div>

                    <h3>No notifications found</h3>

                    <p>
                        Try adjusting your search or filters to find what you're looking for.
                    </p>

                    <button
                        type="button"
                        class="btn btn-light"
                        id="notificationEmptyClear"
                    >
                        Clear Filters
                    </button>

                </div>

            </div>

        </div>


        {{-- Pagination --}}
        <div class="wm-notifications-page__footer">

            <div class="wm-notifications-page__results">
                Showing <strong>1–10</strong> of <strong>48</strong> notifications
            </div>

            <nav class="wm-notifications-page__pagination">

                <button
                    type="button"
                    class="wm-notifications-page__pagination-btn"
                    disabled
                >
                    <i class="ph ph-caret-left"></i>
                </button>

                <button
                    type="button"
                    class="wm-notifications-page__pagination-btn is-active"
                >
                    1
                </button>

                <button
                    type="button"
                    class="wm-notifications-page__pagination-btn"
                >
                    2
                </button>

                <button
                    type="button"
                    class="wm-notifications-page__pagination-btn"
                >
                    3
                </button>

                <span class="wm-notifications-page__pagination-dots">
                ...
            </span>

                <button
                    type="button"
                    class="wm-notifications-page__pagination-btn"
                >
                    5
                </button>

                <button
                    type="button"
                    class="wm-notifications-page__pagination-btn"
                >
                    <i class="ph ph-caret-right"></i>
                </button>

            </nav>

        </div>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {
            'use strict';

            const $page = $('.wm-notifications-page');
            const $list = $('#notificationList');
            const $items = $('.wm-notification-item');
            const $empty = $('#notificationEmpty');

            let currentView = 'all';
            let searchTerm = '';
            let filters = {
                type: '',
                project: '',
                status: '',
                date: ''
            };


            // ------------------------------------------------------------
            // Functions
            // ------------------------------------------------------------

            function closeAllMenus() {
                $('.wm-notification-item__menu').removeClass('is-open');
            }


            function updateUnreadCount() {
                const unreadCount = $('.wm-notification-item.is-unread').length;

                $('.wm-notifications-page__view-count').text(unreadCount);
            }


            function updateSummary() {
                const total = $('.wm-notification-item').length;
                const unread = $('.wm-notification-item.is-unread').length;
                const read = total - unread;

                $('.wm-notification-summary-card__value').eq(0).text(total);
                $('.wm-notification-summary-card__value').eq(1).text(unread);
                $('.wm-notification-summary-card__value').eq(2).text(read);
            }


            function updateGroupVisibility() {
                $('.wm-notification-group').each(function () {
                    const $group = $(this);
                    const visibleItems = $group.find('.wm-notification-item:visible').length;

                    $group.toggleClass('is-hidden', visibleItems === 0);
                });
            }


            function applyFilters() {

                let visibleCount = 0;

                $items.each(function () {

                    const $item = $(this);

                    const itemType = $item.data('type') || '';
                    const itemProject = $item.data('project') || '';
                    const itemStatus = $item.data('status') || '';
                    const itemDate = $item.data('date') || '';

                    const text = $item.text().toLowerCase();

                    const matchesSearch =
                        !searchTerm ||
                        text.indexOf(searchTerm.toLowerCase()) !== -1;

                    const matchesType =
                        !filters.type ||
                        itemType === filters.type;

                    const matchesProject =
                        !filters.project ||
                        itemProject === filters.project;

                    const matchesStatus =
                        !filters.status ||
                        itemStatus === filters.status;

                    const matchesDate =
                        !filters.date ||
                        itemDate === filters.date;

                    const matchesView =
                        currentView === 'all' ||
                        (currentView === 'unread' && itemStatus === 'unread');

                    const visible =
                        matchesSearch &&
                        matchesType &&
                        matchesProject &&
                        matchesStatus &&
                        matchesDate &&
                        matchesView;

                    $item.toggle(visible);

                    if (visible) {
                        visibleCount++;
                    }
                });

                updateGroupVisibility();

                $empty.toggleClass('is-visible', visibleCount === 0);

                updateActiveFilters();
            }


            function updateActiveFilters() {

                const $container = $('#notificationActiveFilters');

                $container.empty();

                const labels = {
                    type: {
                        task: 'Task',
                        project: 'Project',
                        mention: 'Mention',
                        comment: 'Comment',
                        team: 'Team',
                        system: 'System'
                    },
                    project: {
                        climate: 'Climate Research Initiative',
                        drug: 'Drug Discovery Platform',
                        genomics: 'Genomics Study',
                        neural: 'Neural Imaging Research'
                    },
                    status: {
                        unread: 'Unread',
                        read: 'Read'
                    },
                    date: {
                        today: 'Today',
                        yesterday: 'Yesterday',
                        week: 'This Week',
                        month: 'This Month'
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
                        class="wm-notifications-page__filter-chip"
                        data-remove-filter="${key}"
                    >
                        <span>${label}</span>
                        <i class="ph ph-x"></i>
                    </button>
                `);

                    $container.append($chip);
                });
            }


            function clearFilters() {

                filters = {
                    type: '',
                    project: '',
                    status: '',
                    date: ''
                };

                $('#notificationType').val('');
                $('#notificationProject').val('');
                $('#notificationStatus').val('');
                $('#notificationDate').val('');

                applyFilters();
            }


            function markAsRead($item) {

                $item.removeClass('is-unread');
                $item.attr('data-status', 'read');
                $item.data('status', 'read');

                $item.find('[data-notification-action="mark-read"]').remove();

                updateUnreadCount();
                updateSummary();

                applyFilters();
            }


            function markAsUnread($item) {

                $item.addClass('is-unread');
                $item.attr('data-status', 'unread');
                $item.data('status', 'unread');

                updateUnreadCount();
                updateSummary();

                applyFilters();
            }


            function markAllAsRead() {

                $('.wm-notification-item.is-unread').each(function () {
                    markAsRead($(this));
                });

                Swal.fire({
                    icon: 'success',
                    title: 'All notifications marked as read',
                    text: 'You are all caught up.',
                    timer: 1600,
                    showConfirmButton: false
                });
            }


            function sortNotifications() {

                const sort = $('#notificationSort').val();

                $('.wm-notification-group').each(function () {

                    const $group = $(this);
                    const $groupItems = $group.find('.wm-notification-item');

                    $groupItems.sort(function (a, b) {

                        const timeA = $(a).data('time') || '';
                        const timeB = $(b).data('time') || '';

                        return sort === 'oldest'
                            ? timeA.localeCompare(timeB)
                            : timeB.localeCompare(timeA);
                    });

                    $groupItems.detach().appendTo($group);
                });
            }


            // ------------------------------------------------------------
            // Events
            // ------------------------------------------------------------

            $('#notificationSearch').on('input', function () {

                searchTerm = $.trim($(this).val());

                $('#notificationSearchClear').toggle(searchTerm.length > 0);

                applyFilters();
            });


            $('#notificationSearchClear').on('click', function () {

                $('#notificationSearch').val('').trigger('input').focus();
            });


            $('#notificationFilterToggle').on('click', function () {

                $('#notificationFilters').toggleClass('is-open');
                $(this).toggleClass('is-active');
            });


            $('#notificationType, #notificationProject, #notificationStatus, #notificationDate')
                .on('change', function () {

                    filters.type = $('#notificationType').val();
                    filters.project = $('#notificationProject').val();
                    filters.status = $('#notificationStatus').val();
                    filters.date = $('#notificationDate').val();

                    applyFilters();
                });


            $('#notificationClearFilters, #notificationEmptyClear').on('click', function () {
                clearFilters();
            });


            $('#notificationSort').on('change', function () {
                sortNotifications();
            });


            $(document).on('click', '[data-notification-view]', function () {

                currentView = $(this).data('notification-view');

                $('[data-notification-view]').removeClass('is-active');
                $(this).addClass('is-active');

                applyFilters();
            });


            $(document).on('click', '[data-remove-filter]', function () {

                const key = $(this).data('remove-filter');

                filters[key] = '';

                const selectMap = {
                    type: '#notificationType',
                    project: '#notificationProject',
                    status: '#notificationStatus',
                    date: '#notificationDate'
                };

                $(selectMap[key]).val('');

                applyFilters();
            });


            $(document).on(
                'click',
                '[data-notification-action="menu"]',
                function (event) {

                    event.stopPropagation();

                    const $item = $(this).closest('.wm-notification-item');
                    const $menu = $item.find('.wm-notification-item__menu');

                    $('.wm-notification-item__menu')
                        .not($menu)
                        .removeClass('is-open');

                    $menu.toggleClass('is-open');
                }
            );


            $(document).on(
                'click',
                '[data-notification-action="mark-read"]',
                function () {

                    const $item = $(this).closest('.wm-notification-item');

                    markAsRead($item);
                }
            );


            $(document).on('click', '[data-menu-action]', function () {

                const action = $(this).data('menu-action');
                const $item = $(this).closest('.wm-notification-item');

                closeAllMenus();

                if (action === 'mark-read') {
                    markAsRead($item);
                }

                if (action === 'mark-unread') {
                    markAsUnread($item);
                }

                if (action === 'delete') {

                    $item.slideUp(180, function () {

                        $(this).remove();

                        updateUnreadCount();
                        updateSummary();
                        updateGroupVisibility();
                        applyFilters();
                    });
                }

                if (action === 'open') {

                    Swal.fire({
                        icon: 'info',
                        title: 'Open Notification',
                        text: 'This action will connect to the related resource.',
                        confirmButtonText: 'Okay'
                    });
                }
            });


            $(document).on(
                'click',
                '[data-notification-header-action="mark-all-read"]',
                function () {
                    markAllAsRead();
                }
            );


            $(document).on(
                'click',
                '[data-notification-header-action="notification-settings"]',
                function () {

                    Swal.fire({
                        icon: 'info',
                        title: 'Notification Settings',
                        text: 'Notification preferences will be available here.',
                        confirmButtonText: 'Okay'
                    });
                }
            );


            $(document).on('click', function () {
                closeAllMenus();
            });


            $(document).on('click', '.wm-notification-item__menu', function (event) {
                event.stopPropagation();
            });


            $(document).on('keydown', function (event) {

                if (event.key === 'Escape') {
                    closeAllMenus();
                }
            });


            // ------------------------------------------------------------
            // Initial
            // ------------------------------------------------------------

            $('#notificationSearchClear').hide();

            updateUnreadCount();
            updateSummary();
            applyFilters();

        });
    </script>
@endpush
