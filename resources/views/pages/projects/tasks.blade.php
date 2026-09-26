@extends('layout.app')

@section('main')

    <div class="wm-project-tasks-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-tasks-page__header">

            <div class="wm-project-tasks-page__header-left">

                <nav class="wm-project-tasks-page__breadcrumb" aria-label="Breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Tasks</span>

                </nav>

                <div class="wm-project-tasks-page__title-row">

                    <div class="wm-project-tasks-page__title-icon">
                        <i class="ph ph-check-square"></i>
                    </div>

                    <div>
                        <h1 class="wm-project-tasks-page__title">
                            Project Tasks
                        </h1>

                        <p class="wm-project-tasks-page__subtitle">
                            Plan, organize, and track tasks for this research project.
                        </p>
                    </div>

                </div>

            </div>

            <div class="wm-project-tasks-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light wm-project-tasks-page__header-button"
                    data-task-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="btn btn-primary wm-project-tasks-page__header-button"
                    data-task-header-action="create"
                >
                    <i class="ph ph-plus"></i>
                    Create Task
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-tasks-page__navigation">

            <nav class="wm-project-tasks-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item is-active"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-tasks-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary
        ========================================================== --}}
        <div class="wm-project-tasks-page__summary">

            <button
                type="button"
                class="wm-project-tasks-page__summary-card is-active"
                data-summary-filter="all"
            >
                <span class="wm-project-tasks-page__summary-icon wm-project-tasks-page__summary-icon--blue">
                    <i class="ph ph-list-checks"></i>
                </span>

                <span class="wm-project-tasks-page__summary-content">
                    <span>Total Tasks</span>
                    <strong>36</strong>
                    <small>All project tasks</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-tasks-page__summary-card"
                data-summary-filter="todo"
            >
                <span class="wm-project-tasks-page__summary-icon wm-project-tasks-page__summary-icon--gray">
                    <i class="ph ph-circle"></i>
                </span>

                <span class="wm-project-tasks-page__summary-content">
                    <span>To Do</span>
                    <strong>7</strong>
                    <small>Not started</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-tasks-page__summary-card"
                data-summary-filter="progress"
            >
                <span class="wm-project-tasks-page__summary-icon wm-project-tasks-page__summary-icon--blue">
                    <i class="ph ph-spinner"></i>
                </span>

                <span class="wm-project-tasks-page__summary-content">
                    <span>In Progress</span>
                    <strong>9</strong>
                    <small>Currently active</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-tasks-page__summary-card"
                data-summary-filter="review"
            >
                <span class="wm-project-tasks-page__summary-icon wm-project-tasks-page__summary-icon--purple">
                    <i class="ph ph-eye"></i>
                </span>

                <span class="wm-project-tasks-page__summary-content">
                    <span>In Review</span>
                    <strong>4</strong>
                    <small>Waiting for review</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-tasks-page__summary-card"
                data-summary-filter="completed"
            >
                <span class="wm-project-tasks-page__summary-icon wm-project-tasks-page__summary-icon--green">
                    <i class="ph ph-check-circle"></i>
                </span>

                <span class="wm-project-tasks-page__summary-content">
                    <span>Completed</span>
                    <strong>16</strong>
                    <small>Successfully finished</small>
                </span>
            </button>


            <button
                type="button"
                class="wm-project-tasks-page__summary-card"
                data-summary-filter="overdue"
            >
                <span class="wm-project-tasks-page__summary-icon wm-project-tasks-page__summary-icon--red">
                    <i class="ph ph-warning-circle"></i>
                </span>

                <span class="wm-project-tasks-page__summary-content">
                    <span>Overdue</span>
                    <strong>3</strong>
                    <small>Need attention</small>
                </span>
            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-tasks-page__toolbar">

            <div class="wm-project-tasks-page__toolbar-left">

                <div class="wm-project-tasks-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="projectTaskSearch"
                        placeholder="Search tasks..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-tasks-page__search-clear"
                        data-search-clear
                        aria-label="Clear search"
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>

                <button
                    type="button"
                    class="wm-project-tasks-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span class="wm-project-tasks-page__filter-count" data-filter-count>0</span>
                </button>

                <button
                    type="button"
                    class="wm-project-tasks-page__toolbar-button"
                    data-sort-toggle
                >
                    <i class="ph ph-sort-ascending"></i>
                    Sort
                </button>

            </div>


            <div class="wm-project-tasks-page__toolbar-right">

                <div class="wm-project-tasks-page__sort-menu" data-sort-menu>

                    <button type="button" data-sort-value="newest">
                        <i class="ph ph-sort-descending"></i>
                        Newest first
                    </button>

                    <button type="button" data-sort-value="oldest">
                        <i class="ph ph-sort-ascending"></i>
                        Oldest first
                    </button>

                    <button type="button" data-sort-value="due">
                        <i class="ph ph-calendar-blank"></i>
                        Due date
                    </button>

                    <button type="button" data-sort-value="priority">
                        <i class="ph ph-warning"></i>
                        Priority
                    </button>

                </div>

                <div class="wm-project-tasks-page__view-switcher">

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
                        data-view="board"
                        aria-label="Board view"
                    >
                        <i class="ph ph-kanban"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filters
        ========================================================== --}}
        <div class="wm-project-tasks-page__filter-panel" data-filter-panel>

            <div class="wm-project-tasks-page__filter-field">

                <label for="taskStatusFilter">
                    Status
                </label>

                <select id="taskStatusFilter">
                    <option value="">All Statuses</option>
                    <option value="todo">To Do</option>
                    <option value="progress">In Progress</option>
                    <option value="review">In Review</option>
                    <option value="completed">Completed</option>
                </select>

            </div>


            <div class="wm-project-tasks-page__filter-field">

                <label for="taskPriorityFilter">
                    Priority
                </label>

                <select id="taskPriorityFilter">
                    <option value="">All Priorities</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>

            </div>


            <div class="wm-project-tasks-page__filter-field">

                <label for="taskAssigneeFilter">
                    Assignee
                </label>

                <select id="taskAssigneeFilter">
                    <option value="">All Members</option>
                    <option value="sarah">Dr. Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>
                </select>

            </div>


            <div class="wm-project-tasks-page__filter-field">

                <label for="taskDueFilter">
                    Due Date
                </label>

                <select id="taskDueFilter">
                    <option value="">Any Date</option>
                    <option value="overdue">Overdue</option>
                    <option value="today">Due Today</option>
                    <option value="week">This Week</option>
                    <option value="later">Later</option>
                </select>

            </div>


            <button
                type="button"
                class="wm-project-tasks-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div class="wm-project-tasks-page__active-filters" data-active-filters></div>


        {{-- =========================================================
            List View
        ========================================================== --}}
        <div
            class="wm-project-tasks-page__list-view"
            data-list-view
        >

            <div class="wm-project-tasks-page__table-card">

                <div class="wm-project-tasks-page__bulk-bar" data-bulk-bar>

                    <div>
                        <strong data-selected-count>0</strong>
                        tasks selected
                    </div>

                    <div class="wm-project-tasks-page__bulk-actions">

                        <button type="button" data-bulk-action="complete">
                            <i class="ph ph-check"></i>
                            Complete
                        </button>

                        <button type="button" data-bulk-action="assign">
                            <i class="ph ph-user"></i>
                            Assign
                        </button>

                        <button type="button" data-bulk-action="delete">
                            <i class="ph ph-trash"></i>
                            Delete
                        </button>

                    </div>

                </div>


                <div class="wm-project-tasks-page__table-wrapper">

                    <table class="wm-project-tasks-page__table">

                        <thead>

                        <tr>

                            <th class="wm-project-tasks-page__checkbox-column">
                                <label class="wm-project-tasks-page__checkbox">
                                    <input
                                        type="checkbox"
                                        data-select-all
                                    >
                                    <span></span>
                                </label>
                            </th>

                            <th>Task</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Assignee</th>
                            <th>Due Date</th>
                            <th></th>

                        </tr>

                        </thead>

                        <tbody data-task-list>


                        {{-- Task 1 --}}
                        <tr
                            data-task-row
                            data-task-status="progress"
                            data-task-priority="high"
                            data-task-assignee="sarah"
                            data-task-due="week"
                            data-task-date="2026-09-24"
                        >

                            <td>
                                <label class="wm-project-tasks-page__checkbox">
                                    <input type="checkbox" data-task-select>
                                    <span></span>
                                </label>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__task-cell">

                                    <span class="wm-project-tasks-page__task-icon wm-project-tasks-page__task-icon--blue">
                                        <i class="ph ph-chart-line-up"></i>
                                    </span>

                                    <div>
                                        <a
                                            href="{{ route('tasks.detail', 'analyze-coastal-vulnerability') }}"
                                            class="wm-project-tasks-page__task-name"
                                        >
                                            Analyze coastal vulnerability data
                                        </a>

                                        <span class="wm-project-tasks-page__task-code">
                                            CLM-024
                                        </span>
                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-tasks-page__status wm-project-tasks-page__status--progress">
                                    <span></span>
                                    In Progress
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--high">
                                    High
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__assignee">

                                    <span class="wm-project-tasks-page__avatar">
                                        SW
                                    </span>

                                    <span>
                                        Dr. Sarah Wilson
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-tasks-page__date">
                                    <i class="ph ph-calendar-blank"></i>
                                    Sep 26, 2026
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-tasks-page__row-actions">

                                    <button
                                        type="button"
                                        data-task-action-menu
                                        aria-label="Task actions"
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-tasks-page__action-dropdown">

                                        <button data-row-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Task
                                        </button>

                                        <button data-row-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-row-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-row-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 2 --}}
                        <tr
                            data-task-row
                            data-task-status="todo"
                            data-task-priority="medium"
                            data-task-assignee="michael"
                            data-task-due="week"
                            data-task-date="2026-09-23"
                        >

                            <td>
                                <label class="wm-project-tasks-page__checkbox">
                                    <input type="checkbox" data-task-select>
                                    <span></span>
                                </label>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__task-cell">

                                    <span class="wm-project-tasks-page__task-icon wm-project-tasks-page__task-icon--green">
                                        <i class="ph ph-database"></i>
                                    </span>

                                    <div>
                                        <a
                                            href="{{ route('tasks.detail', 'review-field-survey') }}"
                                            class="wm-project-tasks-page__task-name"
                                        >
                                            Review field survey results
                                        </a>

                                        <span class="wm-project-tasks-page__task-code">
                                            CLM-025
                                        </span>
                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-tasks-page__status wm-project-tasks-page__status--todo">
                                    <span></span>
                                    To Do
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--medium">
                                    Medium
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__assignee">

                                    <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--green">
                                        MJ
                                    </span>

                                    <span>
                                        Michael Johnson
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-tasks-page__date">
                                    <i class="ph ph-calendar-blank"></i>
                                    Sep 28, 2026
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-tasks-page__row-actions">

                                    <button
                                        type="button"
                                        data-task-action-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-tasks-page__action-dropdown">

                                        <button data-row-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Task
                                        </button>

                                        <button data-row-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-row-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-row-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 3 --}}
                        <tr
                            data-task-row
                            data-task-status="review"
                            data-task-priority="high"
                            data-task-assignee="anna"
                            data-task-due="week"
                            data-task-date="2026-09-22"
                        >

                            <td>
                                <label class="wm-project-tasks-page__checkbox">
                                    <input type="checkbox" data-task-select>
                                    <span></span>
                                </label>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__task-cell">

                                    <span class="wm-project-tasks-page__task-icon wm-project-tasks-page__task-icon--purple">
                                        <i class="ph ph-chart-bar"></i>
                                    </span>

                                    <div>
                                        <a
                                            href="{{ route('tasks.detail', 'analyze-survey-data') }}"
                                            class="wm-project-tasks-page__task-name"
                                        >
                                            Analyze preliminary survey data
                                        </a>

                                        <span class="wm-project-tasks-page__task-code">
                                            CLM-026
                                        </span>
                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-tasks-page__status wm-project-tasks-page__status--review">
                                    <span></span>
                                    In Review
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--high">
                                    High
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__assignee">

                                    <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--purple">
                                        AK
                                    </span>

                                    <span>
                                        Anna Kim
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-tasks-page__date">
                                    <i class="ph ph-calendar-blank"></i>
                                    Sep 29, 2026
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-tasks-page__row-actions">

                                    <button
                                        type="button"
                                        data-task-action-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-tasks-page__action-dropdown">

                                        <button data-row-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Task
                                        </button>

                                        <button data-row-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-row-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-row-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 4 --}}
                        <tr
                            data-task-row
                            data-task-status="completed"
                            data-task-priority="medium"
                            data-task-assignee="robert"
                            data-task-due="later"
                            data-task-date="2026-09-20"
                        >

                            <td>
                                <label class="wm-project-tasks-page__checkbox">
                                    <input type="checkbox" data-task-select>
                                    <span></span>
                                </label>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__task-cell">

                                    <span class="wm-project-tasks-page__task-icon wm-project-tasks-page__task-icon--green">
                                        <i class="ph ph-check-circle"></i>
                                    </span>

                                    <div>
                                        <a
                                            href="{{ route('tasks.detail', 'field-data-cleanup') }}"
                                            class="wm-project-tasks-page__task-name"
                                        >
                                            Clean and validate field data
                                        </a>

                                        <span class="wm-project-tasks-page__task-code">
                                            CLM-023
                                        </span>
                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-tasks-page__status wm-project-tasks-page__status--completed">
                                    <span></span>
                                    Completed
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--medium">
                                    Medium
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__assignee">

                                    <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--orange">
                                        RB
                                    </span>

                                    <span>
                                        Robert Brown
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-tasks-page__date">
                                    <i class="ph ph-check"></i>
                                    Sep 20, 2026
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-tasks-page__row-actions">

                                    <button
                                        type="button"
                                        data-task-action-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-tasks-page__action-dropdown">

                                        <button data-row-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Task
                                        </button>

                                        <button data-row-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-row-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-row-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 5 --}}
                        <tr
                            data-task-row
                            data-task-status="progress"
                            data-task-priority="medium"
                            data-task-assignee="anna"
                            data-task-due="today"
                            data-task-date="2026-09-24"
                        >

                            <td>
                                <label class="wm-project-tasks-page__checkbox">
                                    <input type="checkbox" data-task-select>
                                    <span></span>
                                </label>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__task-cell">

                                    <span class="wm-project-tasks-page__task-icon wm-project-tasks-page__task-icon--blue">
                                        <i class="ph ph-map-pin"></i>
                                    </span>

                                    <div>
                                        <a
                                            href="{{ route('tasks.detail', 'coastal-mapping') }}"
                                            class="wm-project-tasks-page__task-name"
                                        >
                                            Complete coastal vulnerability mapping
                                        </a>

                                        <span class="wm-project-tasks-page__task-code">
                                            CLM-027
                                        </span>
                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-tasks-page__status wm-project-tasks-page__status--progress">
                                    <span></span>
                                    In Progress
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--medium">
                                    Medium
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__assignee">

                                    <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--purple">
                                        AK
                                    </span>

                                    <span>
                                        Anna Kim
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-tasks-page__date wm-project-tasks-page__date--today">
                                    <i class="ph ph-clock"></i>
                                    Today
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-tasks-page__row-actions">

                                    <button
                                        type="button"
                                        data-task-action-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-tasks-page__action-dropdown">

                                        <button data-row-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Task
                                        </button>

                                        <button data-row-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-row-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-row-action="delete"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 6 --}}
                        <tr
                            data-task-row
                            data-task-status="todo"
                            data-task-priority="low"
                            data-task-assignee="michael"
                            data-task-due="overdue"
                            data-task-date="2026-09-18"
                        >

                            <td>
                                <label class="wm-project-tasks-page__checkbox">
                                    <input type="checkbox" data-task-select>
                                    <span></span>
                                </label>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__task-cell">

                                    <span class="wm-project-tasks-page__task-icon wm-project-tasks-page__task-icon--orange">
                                        <i class="ph ph-users-three"></i>
                                    </span>

                                    <div>
                                        <a
                                            href="{{ route('tasks.detail', 'stakeholder-interviews') }}"
                                            class="wm-project-tasks-page__task-name"
                                        >
                                            Schedule stakeholder interviews
                                        </a>

                                        <span class="wm-project-tasks-page__task-code">
                                            CLM-021
                                        </span>
                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="wm-project-tasks-page__status wm-project-tasks-page__status--todo">
                                    <span></span>
                                    To Do
                                </span>
                            </td>

                            <td>
                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--low">
                                    Low
                                </span>
                            </td>

                            <td>

                                <div class="wm-project-tasks-page__assignee">

                                    <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--green">
                                        MJ
                                    </span>

                                    <span>
                                        Michael Johnson
                                    </span>

                                </div>

                            </td>

                            <td>

                                <span class="wm-project-tasks-page__date wm-project-tasks-page__date--overdue">
                                    <i class="ph ph-warning-circle"></i>
                                    Sep 18, 2026
                                </span>

                            </td>

                            <td>

                                <div class="wm-project-tasks-page__row-actions">

                                    <button
                                        type="button"
                                        data-task-action-menu
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div class="wm-project-tasks-page__action-dropdown">

                                        <button data-row-action="view">
                                            <i class="ph ph-eye"></i>
                                            View Task
                                        </button>

                                        <button data-row-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-row-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <div></div>

                                        <button
                                            class="is-danger"
                                            data-row-action="delete"
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


                {{-- Empty State --}}
                <div class="wm-project-tasks-page__empty" data-empty-state>

                    <div class="wm-project-tasks-page__empty-icon">
                        <i class="ph ph-list-checks"></i>
                    </div>

                    <h3>No tasks found</h3>

                    <p>
                        Try changing your search or filters to find matching tasks.
                    </p>

                    <button
                        type="button"
                        class="btn btn-light"
                        data-clear-filters
                    >
                        Clear Filters
                    </button>

                </div>


                {{-- Pagination --}}
                <div class="wm-project-tasks-page__pagination">

                    <span class="wm-project-tasks-page__pagination-info">
                        Showing <strong>1–6</strong> of <strong>36</strong> tasks
                    </span>

                    <div class="wm-project-tasks-page__pagination-controls">

                        <button
                            type="button"
                            disabled
                            aria-label="Previous page"
                        >
                            <i class="ph ph-caret-left"></i>
                        </button>

                        <button type="button" class="is-active">1</button>
                        <button type="button">2</button>
                        <button type="button">3</button>
                        <span>...</span>
                        <button type="button">6</button>

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


        {{-- =========================================================
            Board View
        ========================================================== --}}
        <div
            class="wm-project-tasks-page__board-view"
            data-board-view
        >

            <div class="wm-project-tasks-page__board">

                {{-- To Do --}}
                <div class="wm-project-tasks-page__column">

                    <div class="wm-project-tasks-page__column-header">

                        <div>
                            <span class="wm-project-tasks-page__column-dot wm-project-tasks-page__column-dot--todo"></span>

                            <strong>To Do</strong>

                            <span>7</span>
                        </div>

                        <button
                            type="button"
                            data-board-add="todo"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>

                    <div class="wm-project-tasks-page__column-body">

                        <article
                            class="wm-project-tasks-page__board-card"
                            data-board-task
                            data-task-status="todo"
                        >

                            <div class="wm-project-tasks-page__board-card-top">

                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--low">
                                    Low
                                </span>

                                <button type="button" data-board-menu>
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <a href="{{ route('tasks.detail', 'stakeholder-interviews') }}">
                                Schedule stakeholder interviews
                            </a>

                            <p>
                                Coordinate interviews with local stakeholders.
                            </p>

                            <div class="wm-project-tasks-page__board-card-footer">

                                <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--sm wm-project-tasks-page__avatar--green">
                                    MJ
                                </span>

                                <span>
                                    Sep 28
                                </span>

                            </div>

                        </article>


                        <article
                            class="wm-project-tasks-page__board-card"
                            data-board-task
                            data-task-status="todo"
                        >

                            <div class="wm-project-tasks-page__board-card-top">

                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--medium">
                                    Medium
                                </span>

                                <button type="button" data-board-menu>
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <a href="{{ route('tasks.detail', 'review-field-survey') }}">
                                Review field survey results
                            </a>

                            <p>
                                Review and organize the latest field observations.
                            </p>

                            <div class="wm-project-tasks-page__board-card-footer">

                                <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--sm wm-project-tasks-page__avatar--green">
                                    MJ
                                </span>

                                <span>
                                    Sep 28
                                </span>

                            </div>

                        </article>

                    </div>

                </div>


                {{-- In Progress --}}
                <div class="wm-project-tasks-page__column">

                    <div class="wm-project-tasks-page__column-header">

                        <div>
                            <span class="wm-project-tasks-page__column-dot wm-project-tasks-page__column-dot--progress"></span>

                            <strong>In Progress</strong>

                            <span>9</span>
                        </div>

                        <button
                            type="button"
                            data-board-add="progress"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>

                    <div class="wm-project-tasks-page__column-body">

                        <article
                            class="wm-project-tasks-page__board-card"
                            data-board-task
                            data-task-status="progress"
                        >

                            <div class="wm-project-tasks-page__board-card-top">

                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--high">
                                    High
                                </span>

                                <button type="button" data-board-menu>
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <a href="{{ route('tasks.detail', 'analyze-coastal-vulnerability') }}">
                                Analyze coastal vulnerability data
                            </a>

                            <p>
                                Complete analysis of collected coastal vulnerability datasets.
                            </p>

                            <div class="wm-project-tasks-page__board-card-footer">

                                <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--sm">
                                    SW
                                </span>

                                <span class="wm-project-tasks-page__board-date--today">
                                    Today
                                </span>

                            </div>

                        </article>


                        <article
                            class="wm-project-tasks-page__board-card"
                            data-board-task
                            data-task-status="progress"
                        >

                            <div class="wm-project-tasks-page__board-card-top">

                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--medium">
                                    Medium
                                </span>

                                <button type="button" data-board-menu>
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <a href="{{ route('tasks.detail', 'coastal-mapping') }}">
                                Complete coastal vulnerability mapping
                            </a>

                            <p>
                                Finalize GIS layers for coastal risk assessment.
                            </p>

                            <div class="wm-project-tasks-page__board-card-footer">

                                <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--sm wm-project-tasks-page__avatar--purple">
                                    AK
                                </span>

                                <span>
                                    Today
                                </span>

                            </div>

                        </article>

                    </div>

                </div>


                {{-- Review --}}
                <div class="wm-project-tasks-page__column">

                    <div class="wm-project-tasks-page__column-header">

                        <div>
                            <span class="wm-project-tasks-page__column-dot wm-project-tasks-page__column-dot--review"></span>

                            <strong>In Review</strong>

                            <span>4</span>
                        </div>

                        <button
                            type="button"
                            data-board-add="review"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>

                    <div class="wm-project-tasks-page__column-body">

                        <article
                            class="wm-project-tasks-page__board-card"
                            data-board-task
                            data-task-status="review"
                        >

                            <div class="wm-project-tasks-page__board-card-top">

                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--high">
                                    High
                                </span>

                                <button type="button" data-board-menu>
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <a href="{{ route('tasks.detail', 'analyze-survey-data') }}">
                                Analyze preliminary survey data
                            </a>

                            <p>
                                Review initial survey analysis and prepare findings.
                            </p>

                            <div class="wm-project-tasks-page__board-card-footer">

                                <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--sm wm-project-tasks-page__avatar--purple">
                                    AK
                                </span>

                                <span>
                                    Sep 29
                                </span>

                            </div>

                        </article>

                    </div>

                </div>


                {{-- Completed --}}
                <div class="wm-project-tasks-page__column">

                    <div class="wm-project-tasks-page__column-header">

                        <div>
                            <span class="wm-project-tasks-page__column-dot wm-project-tasks-page__column-dot--completed"></span>

                            <strong>Completed</strong>

                            <span>16</span>
                        </div>

                        <button
                            type="button"
                            data-board-add="completed"
                        >
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>

                    <div class="wm-project-tasks-page__column-body">

                        <article
                            class="wm-project-tasks-page__board-card is-completed"
                            data-board-task
                            data-task-status="completed"
                        >

                            <div class="wm-project-tasks-page__board-card-top">

                                <span class="wm-project-tasks-page__priority wm-project-tasks-page__priority--medium">
                                    Medium
                                </span>

                                <button type="button" data-board-menu>
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <a href="{{ route('tasks.detail', 'field-data-cleanup') }}">
                                Clean and validate field data
                            </a>

                            <p>
                                Standardize and validate all collected field datasets.
                            </p>

                            <div class="wm-project-tasks-page__board-card-footer">

                                <span class="wm-project-tasks-page__avatar wm-project-tasks-page__avatar--sm wm-project-tasks-page__avatar--orange">
                                    RB
                                </span>

                                <span>
                                    Sep 20
                                </span>

                            </div>

                        </article>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Create Task Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-tasks-page__modal"
            id="createTaskModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>
                            <h5 class="modal-title">
                                Create New Task
                            </h5>

                            <p>
                                Add a task to the Climate Change Research Initiative.
                            </p>
                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>

                    <div class="modal-body">

                        <form id="createTaskForm">

                            <div class="row g-3">

                                <div class="col-12">

                                    <label class="form-label">
                                        Task Name
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        name="task_name"
                                        placeholder="Enter task name"
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
                                        rows="4"
                                        placeholder="Describe the task..."
                                    ></textarea>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select
                                        class="form-select"
                                        name="status"
                                    >
                                        <option value="todo">To Do</option>
                                        <option value="progress">In Progress</option>
                                        <option value="review">In Review</option>
                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Priority
                                    </label>

                                    <select
                                        class="form-select"
                                        name="priority"
                                    >
                                        <option value="low">Low</option>
                                        <option value="medium" selected>Medium</option>
                                        <option value="high">High</option>
                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Assignee
                                    </label>

                                    <select
                                        class="form-select"
                                        name="assignee"
                                    >
                                        <option value="">Select member</option>
                                        <option value="sarah">Dr. Sarah Wilson</option>
                                        <option value="michael">Michael Johnson</option>
                                        <option value="anna">Anna Kim</option>
                                        <option value="robert">Robert Brown</option>
                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Due Date
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                        name="due_date"
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
                            data-create-task-submit
                        >
                            Create Task
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

            /*
            |--------------------------------------------------------------------------
            | Elements
            |--------------------------------------------------------------------------
            */

            const $page = $('.wm-project-tasks-page');
            const $taskRows = $('[data-task-row]');
            const $boardTasks = $('[data-board-task]');
            const $search = $('#projectTaskSearch');
            const $filterPanel = $('[data-filter-panel]');
            const $activeFilters = $('[data-active-filters]');
            const $sortMenu = $('[data-sort-menu]');
            const $emptyState = $('[data-empty-state]');
            const $bulkBar = $('[data-bulk-bar]');

            let currentSort = 'newest';


            /*
            |--------------------------------------------------------------------------
            | Helpers
            |--------------------------------------------------------------------------
            */

            function showNotice(title, text, icon = 'info') {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: icon,
                        confirmButtonText: 'Okay',
                        confirmButtonColor: '#2563EB'
                    });

                    return;
                }

                alert(title + '\n\n' + text);
            }


            function getFilters() {

                return {
                    status: $('#taskStatusFilter').val(),
                    priority: $('#taskPriorityFilter').val(),
                    assignee: $('#taskAssigneeFilter').val(),
                    due: $('#taskDueFilter').val(),
                    search: $.trim($search.val()).toLowerCase()
                };

            }


            function taskMatches($row, filters) {

                const status = $row.data('task-status');
                const priority = $row.data('task-priority');
                const assignee = $row.data('task-assignee');
                const due = $row.data('task-due');
                const text = $row.text().toLowerCase();

                if (filters.status && status !== filters.status) {
                    return false;
                }

                if (filters.priority && priority !== filters.priority) {
                    return false;
                }

                if (filters.assignee && assignee !== filters.assignee) {
                    return false;
                }

                if (filters.due && due !== filters.due) {
                    return false;
                }

                if (filters.search && text.indexOf(filters.search) === -1) {
                    return false;
                }

                return true;

            }


            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;

                if (filters.status) count++;
                if (filters.priority) count++;
                if (filters.assignee) count++;
                if (filters.due) count++;

                $('[data-filter-count]').text(count);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                $activeFilters.empty();

                const labels = {
                    status: {
                        todo: 'To Do',
                        progress: 'In Progress',
                        review: 'In Review',
                        completed: 'Completed'
                    },
                    priority: {
                        high: 'High',
                        medium: 'Medium',
                        low: 'Low'
                    },
                    assignee: {
                        sarah: 'Dr. Sarah Wilson',
                        michael: 'Michael Johnson',
                        anna: 'Anna Kim',
                        robert: 'Robert Brown'
                    },
                    due: {
                        overdue: 'Overdue',
                        today: 'Due Today',
                        week: 'This Week',
                        later: 'Later'
                    }
                };

                $.each(['status', 'priority', 'assignee', 'due'], function (_, key) {

                    if (!filters[key]) {
                        return;
                    }

                    const label = labels[key][filters[key]];

                    const $chip = $(`
                        <button
                            type="button"
                            class="wm-project-tasks-page__filter-chip"
                            data-remove-filter="${key}"
                        >
                            ${label}
                            <i class="ph ph-x"></i>
                        </button>
                    `);

                    $activeFilters.append($chip);

                });

                if (filters.search) {

                    $activeFilters.prepend(`
                        <button
                            type="button"
                            class="wm-project-tasks-page__filter-chip"
                            data-remove-search
                        >
                            Search: "${$search.val()}"
                            <i class="ph ph-x"></i>
                        </button>
                    `);

                }

            }


            function updateBulkState() {

                const selected = $('[data-task-select]:checked').length;

                $('[data-selected-count]').text(selected);

                $bulkBar.toggleClass('is-visible', selected > 0);

            }


            function updateEmptyState(visibleCount) {

                $emptyState.toggleClass('is-visible', visibleCount === 0);

                $('.wm-project-tasks-page__table')
                    .toggleClass('is-empty', visibleCount === 0);

            }


            function updateVisibleCount(count) {

                const $info = $('.wm-project-tasks-page__pagination-info');

                $info.html(
                    'Showing <strong>' +
                    (count > 0 ? '1–' + count : '0') +
                    '</strong> of <strong>36</strong> tasks'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Filtering
            |--------------------------------------------------------------------------
            */

            function applyFilters() {

                const filters = getFilters();

                let visibleCount = 0;

                $taskRows.each(function () {

                    const $row = $(this);

                    if (taskMatches($row, filters)) {

                        $row.removeClass('is-hidden');

                        visibleCount++;

                    } else {

                        $row.addClass('is-hidden');

                    }

                });

                updateFilterCount();
                updateActiveFilters();
                updateEmptyState(visibleCount);
                updateVisibleCount(visibleCount);

            }


            /*
            |--------------------------------------------------------------------------
            | Sorting
            |--------------------------------------------------------------------------
            */

            function sortTasks(sortValue) {

                currentSort = sortValue;

                const $tbody = $('[data-task-list]');
                const rows = $tbody.find('[data-task-row]').get();

                rows.sort(function (a, b) {

                    const $a = $(a);
                    const $b = $(b);

                    if (sortValue === 'priority') {

                        const priority = {
                            high: 1,
                            medium: 2,
                            low: 3
                        };

                        return priority[$a.data('task-priority')] -
                            priority[$b.data('task-priority')];

                    }

                    if (sortValue === 'due') {

                        const due = {
                            overdue: 1,
                            today: 2,
                            week: 3,
                            later: 4
                        };

                        return due[$a.data('task-due')] -
                            due[$b.data('task-due')];

                    }

                    const dateA = new Date($a.data('task-date'));
                    const dateB = new Date($b.data('task-date'));

                    return sortValue === 'oldest'
                        ? dateA - dateB
                        : dateB - dateA;

                });

                $.each(rows, function (_, row) {
                    $tbody.append(row);
                });

            }


            /*
            |--------------------------------------------------------------------------
            | View Switching
            |--------------------------------------------------------------------------
            */

            function switchView(view) {

                $('[data-view]')
                    .removeClass('is-active');

                $('[data-view="' + view + '"]')
                    .addClass('is-active');

                if (view === 'board') {

                    $('[data-list-view]')
                        .removeClass('is-visible');

                    $('[data-board-view]')
                        .addClass('is-visible');

                } else {

                    $('[data-board-view]')
                        .removeClass('is-visible');

                    $('[data-list-view]')
                        .addClass('is-visible');

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Create Task
            |--------------------------------------------------------------------------
            */

            function openCreateTaskModal() {

                const modalElement = document.getElementById('createTaskModal');

                if (
                    modalElement &&
                    typeof bootstrap !== 'undefined'
                ) {

                    const modal = bootstrap.Modal.getOrCreateInstance(
                        modalElement
                    );

                    modal.show();

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Initial
            |--------------------------------------------------------------------------
            */

            switchView('list');
            applyFilters();


            /*
            |--------------------------------------------------------------------------
            | Search
            |--------------------------------------------------------------------------
            */

            $search.on('input', function () {

                $('[data-search-clear]')
                    .toggleClass('is-visible', $(this).val().length > 0);

                applyFilters();

            });


            $(document).on('click', '[data-search-clear]', function () {

                $search.val('').trigger('input');

            });


            /*
            |--------------------------------------------------------------------------
            | Filter Toggle
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-filter-toggle]', function (event) {

                event.stopPropagation();

                $sortMenu.removeClass('is-open');

                $filterPanel.toggleClass('is-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Sort Toggle
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-sort-toggle]', function (event) {

                event.stopPropagation();

                $filterPanel.removeClass('is-open');

                $sortMenu.toggleClass('is-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Filter Change
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'change',
                '#taskStatusFilter, #taskPriorityFilter, #taskAssigneeFilter, #taskDueFilter',
                function () {

                    applyFilters();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Summary Filters
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-summary-filter]', function () {

                const filter = $(this).data('summary-filter');

                $('[data-summary-filter]')
                    .removeClass('is-active');

                $(this).addClass('is-active');

                $('#taskStatusFilter').val('');

                if (filter !== 'all') {

                    if (
                        filter === 'todo' ||
                        filter === 'progress' ||
                        filter === 'review' ||
                        filter === 'completed'
                    ) {

                        $('#taskStatusFilter').val(filter);

                    } else if (filter === 'overdue') {

                        $('#taskDueFilter').val('overdue');

                    }

                }

                applyFilters();

            });


            /*
            |--------------------------------------------------------------------------
            | Remove Filter
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-remove-filter]', function () {

                const filter = $(this).data('remove-filter');

                if (filter === 'status') {
                    $('#taskStatusFilter').val('');
                }

                if (filter === 'priority') {
                    $('#taskPriorityFilter').val('');
                }

                if (filter === 'assignee') {
                    $('#taskAssigneeFilter').val('');
                }

                if (filter === 'due') {
                    $('#taskDueFilter').val('');
                }

                applyFilters();

            });


            $(document).on('click', '[data-remove-search]', function () {

                $search.val('');

                applyFilters();

            });


            /*
            |--------------------------------------------------------------------------
            | Clear Filters
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-clear-filters]', function () {

                $('#taskStatusFilter').val('');
                $('#taskPriorityFilter').val('');
                $('#taskAssigneeFilter').val('');
                $('#taskDueFilter').val('');

                $search.val('');

                $('[data-summary-filter]')
                    .removeClass('is-active');

                $('[data-summary-filter="all"]')
                    .addClass('is-active');

                $('[data-search-clear]')
                    .removeClass('is-visible');

                applyFilters();

            });


            /*
            |--------------------------------------------------------------------------
            | Sorting
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-sort-value]', function () {

                const sortValue = $(this).data('sort-value');

                sortTasks(sortValue);

                $sortMenu.removeClass('is-open');

                applyFilters();

            });


            /*
            |--------------------------------------------------------------------------
            | View Switcher
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-view]', function () {

                switchView($(this).data('view'));

            });


            /*
            |--------------------------------------------------------------------------
            | Select All
            |--------------------------------------------------------------------------
            */

            $(document).on('change', '[data-select-all]', function () {

                const checked = this.checked;

                $('[data-task-row]:not(.is-hidden) [data-task-select]')
                    .prop('checked', checked);

                updateBulkState();

            });


            $(document).on('change', '[data-task-select]', function () {

                const total = $('[data-task-row]:not(.is-hidden) [data-task-select]').length;
                const selected = $('[data-task-row]:not(.is-hidden) [data-task-select]:checked').length;

                $('[data-select-all]')
                    .prop('checked', total > 0 && total === selected);

                updateBulkState();

            });


            /*
            |--------------------------------------------------------------------------
            | Row Action Menu
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-task-action-menu]', function (event) {

                event.stopPropagation();

                $('.wm-project-tasks-page__row-actions')
                    .removeClass('is-open');

                $(this)
                    .closest('.wm-project-tasks-page__row-actions')
                    .toggleClass('is-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Row Actions
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-row-action]', function () {

                const action = $(this).data('row-action');

                $('.wm-project-tasks-page__row-actions')
                    .removeClass('is-open');

                if (action === 'delete') {

                    if (typeof Swal !== 'undefined') {

                        Swal.fire({
                            title: 'Delete task?',
                            text: 'This action cannot be undone.',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Delete Task',
                            cancelButtonText: 'Cancel',
                            confirmButtonColor: '#EF4444'
                        }).then(function (result) {

                            if (result.isConfirmed) {

                                showNotice(
                                    'Task deleted',
                                    'The task has been removed from the project.',
                                    'success'
                                );

                            }

                        });

                    }

                    return;
                }

                const messages = {
                    view: 'The task detail page can be opened here.',
                    edit: 'The task editor can be opened here.',
                    duplicate: 'A duplicate task workflow can be opened here.'
                };

                showNotice(
                    action.charAt(0).toUpperCase() + action.slice(1) + ' Task',
                    messages[action] || 'Task action ready for backend integration.'
                );

            });


            /*
            |--------------------------------------------------------------------------
            | Header Actions
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-task-header-action]', function () {

                const action = $(this).data('task-header-action');

                if (action === 'create') {

                    openCreateTaskModal();

                    return;
                }

                if (action === 'export') {

                    showNotice(
                        'Export Tasks',
                        'The project task export workflow can be connected to your backend.'
                    );

                }

            });


            /*
            |--------------------------------------------------------------------------
            | Create Task Submit
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-create-task-submit]', function () {

                const $form = $('#createTaskForm');

                if (!$form[0].checkValidity()) {

                    $form[0].reportValidity();

                    return;
                }

                const formData = {
                    name: $form.find('[name="task_name"]').val(),
                    description: $form.find('[name="description"]').val(),
                    status: $form.find('[name="status"]').val(),
                    priority: $form.find('[name="priority"]').val(),
                    assignee: $form.find('[name="assignee"]').val(),
                    due_date: $form.find('[name="due_date"]').val()
                };

                console.log('Create task:', formData);

                const modalElement = document.getElementById('createTaskModal');

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
                    'Task created',
                    'The task has been created successfully.',
                    'success'
                );

            });


            /*
            |--------------------------------------------------------------------------
            | Board Add
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-board-add]', function () {

                openCreateTaskModal();

            });


            /*
            |--------------------------------------------------------------------------
            | Board Menu
            |--------------------------------------------------------------------------
            */

            $(document).on('click', '[data-board-menu]', function (event) {

                event.stopPropagation();

                $(this)
                    .closest('.wm-project-tasks-page__board-card')
                    .toggleClass('is-menu-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Outside Click
            |--------------------------------------------------------------------------
            */

            $(document).on('click', function () {

                $filterPanel.removeClass('is-open');
                $sortMenu.removeClass('is-open');

                $('.wm-project-tasks-page__row-actions')
                    .removeClass('is-open');

                $('.wm-project-tasks-page__board-card')
                    .removeClass('is-menu-open');

            });


            /*
            |--------------------------------------------------------------------------
            | Escape
            |--------------------------------------------------------------------------
            */

            $(document).on('keydown', function (event) {

                if (event.key === 'Escape') {

                    $filterPanel.removeClass('is-open');
                    $sortMenu.removeClass('is-open');

                    $('.wm-project-tasks-page__row-actions')
                        .removeClass('is-open');

                    $('.wm-project-tasks-page__board-card')
                        .removeClass('is-menu-open');

                }

            });


            /*
            |--------------------------------------------------------------------------
            | Prevent Dropdown Closing
            |--------------------------------------------------------------------------
            */

            $filterPanel.on('click', function (event) {
                event.stopPropagation();
            });

            $sortMenu.on('click', function (event) {
                event.stopPropagation();
            });

            $('.wm-project-tasks-page__row-actions').on(
                'click',
                function (event) {
                    event.stopPropagation();
                }
            );

        });
    </script>
@endpush
