@extends('layout.app')

@section('main')

    <div class="wm-tasks-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-tasks-page__header">

            <div class="wm-tasks-page__header-left">

                <nav class="wm-tasks-page__breadcrumb">

                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Tasks</span>

                </nav>

                <div class="wm-tasks-page__title-row">

                    <div class="wm-tasks-page__title-icon">
                        <i class="ph ph-check-square"></i>
                    </div>

                    <div>

                        <h1 class="wm-tasks-page__title">
                            Tasks
                        </h1>

                        <p class="wm-tasks-page__subtitle">
                            Manage and track tasks across all your projects.
                        </p>

                    </div>

                </div>

            </div>


            <div class="wm-tasks-page__header-actions">

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
                    data-header-action="create"
                >
                    <i class="ph ph-plus"></i>
                    Create Task
                </button>

            </div>

        </div>


        {{-- =========================================================
            Summary Cards
        ========================================================== --}}
        <div class="wm-tasks-page__summary">

            <button
                type="button"
                class="wm-tasks-page__summary-card is-active"
                data-summary-filter="all"
            >

            <span class="wm-tasks-page__summary-icon is-blue">
                <i class="ph ph-list-checks"></i>
            </span>

                <span class="wm-tasks-page__summary-content">

                <span>Total Tasks</span>

                <strong>48</strong>

                <small>
                    Across 6 projects
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-tasks-page__summary-card"
                data-summary-filter="todo"
            >

            <span class="wm-tasks-page__summary-icon is-gray">
                <i class="ph ph-circle"></i>
            </span>

                <span class="wm-tasks-page__summary-content">

                <span>To Do</span>

                <strong>16</strong>

                <small>
                    Tasks waiting
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-tasks-page__summary-card"
                data-summary-filter="progress"
            >

            <span class="wm-tasks-page__summary-icon is-orange">
                <i class="ph ph-spinner"></i>
            </span>

                <span class="wm-tasks-page__summary-content">

                <span>In Progress</span>

                <strong>14</strong>

                <small>
                    Currently active
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-tasks-page__summary-card"
                data-summary-filter="completed"
            >

            <span class="wm-tasks-page__summary-icon is-green">
                <i class="ph ph-check-circle"></i>
            </span>

                <span class="wm-tasks-page__summary-content">

                <span>Completed</span>

                <strong>14</strong>

                <small>
                    Finished tasks
                </small>

            </span>

            </button>


            <button
                type="button"
                class="wm-tasks-page__summary-card"
                data-summary-filter="overdue"
            >

            <span class="wm-tasks-page__summary-icon is-red">
                <i class="ph ph-warning"></i>
            </span>

                <span class="wm-tasks-page__summary-content">

                <span>Overdue</span>

                <strong>4</strong>

                <small>
                    Need attention
                </small>

            </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-tasks-page__toolbar">

            <div class="wm-tasks-page__toolbar-left">

                <div class="wm-tasks-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="tasksSearch"
                        placeholder="Search tasks..."
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
                    class="wm-tasks-page__toolbar-button"
                    data-filter-toggle
                >

                    <i class="ph ph-funnel"></i>

                    Filter

                    <span data-filter-count>
                    0
                </span>

                </button>

            </div>


            <div class="wm-tasks-page__toolbar-right">

                <div class="wm-tasks-page__sort">

                    <button
                        type="button"
                        class="wm-tasks-page__toolbar-button"
                        data-sort-toggle
                    >

                        <i class="ph ph-sort-descending"></i>

                        Sort

                        <i class="ph ph-caret-down"></i>

                    </button>


                    <div
                        class="wm-tasks-page__sort-menu"
                        data-sort-menu
                    >

                        <button
                            type="button"
                            data-sort="due-asc"
                        >
                            <i class="ph ph-calendar"></i>
                            Due Date
                        </button>

                        <button
                            type="button"
                            data-sort="priority"
                        >
                            <i class="ph ph-warning"></i>
                            Priority
                        </button>

                        <button
                            type="button"
                            data-sort="created"
                        >
                            <i class="ph ph-clock"></i>
                            Recently Created
                        </button>

                        <button
                            type="button"
                            data-sort="name"
                        >
                            <i class="ph ph-sort-ascending"></i>
                            Task Name
                        </button>

                    </div>

                </div>


                <div class="wm-tasks-page__view-switcher">

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
                        data-view="board"
                        title="Board view"
                    >
                        <i class="ph ph-kanban"></i>
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div
            class="wm-tasks-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-tasks-page__filter-field">

                <label for="taskProjectFilter">
                    Project
                </label>

                <select id="taskProjectFilter">

                    <option value="">
                        All Projects
                    </option>

                    <option value="climate">
                        Climate Change Research
                    </option>

                    <option value="water">
                        Water Quality Study
                    </option>

                    <option value="urban">
                        Urban Sustainability
                    </option>

                    <option value="biodiversity">
                        Biodiversity Assessment
                    </option>

                </select>

            </div>


            <div class="wm-tasks-page__filter-field">

                <label for="taskStatusFilter">
                    Status
                </label>

                <select id="taskStatusFilter">

                    <option value="">
                        All Statuses
                    </option>

                    <option value="todo">
                        To Do
                    </option>

                    <option value="progress">
                        In Progress
                    </option>

                    <option value="review">
                        In Review
                    </option>

                    <option value="completed">
                        Completed
                    </option>

                </select>

            </div>


            <div class="wm-tasks-page__filter-field">

                <label for="taskPriorityFilter">
                    Priority
                </label>

                <select id="taskPriorityFilter">

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


            <div class="wm-tasks-page__filter-field">

                <label for="taskAssigneeFilter">
                    Assignee
                </label>

                <select id="taskAssigneeFilter">

                    <option value="">
                        All Assignees
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

                    <option value="james">
                        James Miller
                    </option>

                </select>

            </div>


            <div class="wm-tasks-page__filter-field">

                <label for="taskDueFilter">
                    Due Date
                </label>

                <select id="taskDueFilter">

                    <option value="">
                        Any Date
                    </option>

                    <option value="overdue">
                        Overdue
                    </option>

                    <option value="today">
                        Today
                    </option>

                    <option value="week">
                        This Week
                    </option>

                    <option value="month">
                        This Month
                    </option>

                </select>

            </div>


            <button
                type="button"
                class="wm-tasks-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-tasks-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            Bulk Actions
        ========================================================== --}}
        <div
            class="wm-tasks-page__bulk-bar"
            data-bulk-bar
        >

            <div>

                <strong data-selected-count>
                    0
                </strong>

                tasks selected

            </div>

            <div class="wm-tasks-page__bulk-actions">

                <button
                    type="button"
                    data-bulk-action="complete"
                >
                    <i class="ph ph-check"></i>
                    Complete
                </button>

                <button
                    type="button"
                    data-bulk-action="assign"
                >
                    <i class="ph ph-user"></i>
                    Assign
                </button>

                <button
                    type="button"
                    class="is-danger"
                    data-bulk-action="delete"
                >
                    <i class="ph ph-trash"></i>
                    Delete
                </button>

            </div>

        </div>


        {{-- =========================================================
            List View
        ========================================================== --}}
        <div
            class="wm-tasks-page__list-view is-visible"
            data-task-view="list"
        >

            <div class="wm-tasks-page__card">

                <div class="wm-tasks-page__table-wrapper">

                    <table class="wm-tasks-page__table">

                        <thead>

                        <tr>

                            <th class="wm-tasks-page__check-column">

                                <input
                                    type="checkbox"
                                    id="selectAllTasks"
                                >

                            </th>

                            <th>Task</th>
                            <th>Project</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Assignee</th>
                            <th>Due Date</th>
                            <th></th>

                        </tr>

                        </thead>

                        <tbody>


                        {{-- Task 01 --}}
                        <tr
                            data-task-item
                            data-project="climate"
                            data-status="progress"
                            data-priority="high"
                            data-assignee="sarah"
                            data-due="2026-09-26"
                            data-created="2026-09-20"
                            data-name="Analyze field sensor data"
                            data-search="analyze field sensor data climate research"
                        >

                            <td class="wm-tasks-page__check-column">

                                <input
                                    type="checkbox"
                                    class="task-checkbox"
                                >

                            </td>

                            <td>

                                <div class="wm-tasks-page__task-cell">

                                    <span class="wm-tasks-page__task-icon is-blue">
                                        <i class="ph ph-chart-line-up"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Analyze field sensor data
                                        </strong>

                                        <small>
                                            TASK-024
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                Climate Change Research
                            </td>

                            <td>

                                <span class="wm-tasks-page__status is-progress">
                                    In Progress
                                </span>

                            </td>

                            <td>

                                <span class="wm-tasks-page__priority is-high">
                                    High
                                </span>

                            </td>

                            <td>

                                <div class="wm-tasks-page__assignee">

                                    <span class="wm-tasks-page__avatar">
                                        SW
                                    </span>

                                    Sarah Wilson

                                </div>

                            </td>

                            <td>
                                Sep 26, 2026
                            </td>

                            <td>

                                <div class="wm-tasks-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-tasks-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-task-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-task-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-task-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-task-action="complete">
                                            <i class="ph ph-check"></i>
                                            Mark Complete
                                        </button>

                                        <button
                                            data-task-action="delete"
                                            class="is-danger"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 02 --}}
                        <tr
                            data-task-item
                            data-project="water"
                            data-status="todo"
                            data-priority="medium"
                            data-assignee="michael"
                            data-due="2026-09-28"
                            data-created="2026-09-19"
                            data-name="Prepare sampling equipment"
                            data-search="prepare sampling equipment water quality study"
                        >

                            <td class="wm-tasks-page__check-column">
                                <input type="checkbox" class="task-checkbox">
                            </td>

                            <td>

                                <div class="wm-tasks-page__task-cell">

                                    <span class="wm-tasks-page__task-icon is-cyan">
                                        <i class="ph ph-flask"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Prepare sampling equipment
                                        </strong>

                                        <small>
                                            TASK-023
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                Water Quality Study
                            </td>

                            <td>
                                <span class="wm-tasks-page__status is-todo">
                                    To Do
                                </span>
                            </td>

                            <td>
                                <span class="wm-tasks-page__priority is-medium">
                                    Medium
                                </span>
                            </td>

                            <td>

                                <div class="wm-tasks-page__assignee">

                                    <span class="wm-tasks-page__avatar is-green">
                                        MJ
                                    </span>

                                    Michael Johnson

                                </div>

                            </td>

                            <td>
                                Sep 28, 2026
                            </td>

                            <td>

                                <div class="wm-tasks-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-tasks-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-task-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-task-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-task-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-task-action="complete">
                                            <i class="ph ph-check"></i>
                                            Mark Complete
                                        </button>

                                        <button
                                            data-task-action="delete"
                                            class="is-danger"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 03 --}}
                        <tr
                            data-task-item
                            data-project="urban"
                            data-status="review"
                            data-priority="high"
                            data-assignee="anna"
                            data-due="2026-09-25"
                            data-created="2026-09-18"
                            data-name="Review sustainability metrics"
                            data-search="review sustainability metrics urban sustainability"
                        >

                            <td class="wm-tasks-page__check-column">
                                <input type="checkbox" class="task-checkbox">
                            </td>

                            <td>

                                <div class="wm-tasks-page__task-cell">

                                    <span class="wm-tasks-page__task-icon is-purple">
                                        <i class="ph ph-leaf"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Review sustainability metrics
                                        </strong>

                                        <small>
                                            TASK-022
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                Urban Sustainability
                            </td>

                            <td>
                                <span class="wm-tasks-page__status is-review">
                                    In Review
                                </span>
                            </td>

                            <td>
                                <span class="wm-tasks-page__priority is-high">
                                    High
                                </span>
                            </td>

                            <td>

                                <div class="wm-tasks-page__assignee">

                                    <span class="wm-tasks-page__avatar is-purple">
                                        AK
                                    </span>

                                    Anna Kim

                                </div>

                            </td>

                            <td>
                                Sep 25, 2026
                            </td>

                            <td>

                                <div class="wm-tasks-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-tasks-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-task-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-task-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-task-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-task-action="complete">
                                            <i class="ph ph-check"></i>
                                            Mark Complete
                                        </button>

                                        <button
                                            data-task-action="delete"
                                            class="is-danger"
                                        >
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 04 --}}
                        <tr
                            data-task-item
                            data-project="biodiversity"
                            data-status="completed"
                            data-priority="medium"
                            data-assignee="james"
                            data-due="2026-09-23"
                            data-created="2026-09-15"
                            data-name="Complete biodiversity survey"
                            data-search="complete biodiversity survey assessment"
                        >

                            <td class="wm-tasks-page__check-column">
                                <input type="checkbox" class="task-checkbox">
                            </td>

                            <td>

                                <div class="wm-tasks-page__task-cell">

                                    <span class="wm-tasks-page__task-icon is-green">
                                        <i class="ph ph-tree"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Complete biodiversity survey
                                        </strong>

                                        <small>
                                            TASK-021
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                Biodiversity Assessment
                            </td>

                            <td>
                                <span class="wm-tasks-page__status is-completed">
                                    Completed
                                </span>
                            </td>

                            <td>
                                <span class="wm-tasks-page__priority is-medium">
                                    Medium
                                </span>
                            </td>

                            <td>

                                <div class="wm-tasks-page__assignee">

                                    <span class="wm-tasks-page__avatar is-orange">
                                        JM
                                    </span>

                                    James Miller

                                </div>

                            </td>

                            <td>
                                Sep 23, 2026
                            </td>

                            <td>

                                <div class="wm-tasks-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-tasks-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-task-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-task-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-task-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-task-action="delete" class="is-danger">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 05 --}}
                        <tr
                            data-task-item
                            data-project="climate"
                            data-status="todo"
                            data-priority="low"
                            data-assignee="anna"
                            data-due="2026-10-02"
                            data-created="2026-09-14"
                            data-name="Prepare research presentation"
                            data-search="research presentation climate change"
                        >

                            <td class="wm-tasks-page__check-column">
                                <input type="checkbox" class="task-checkbox">
                            </td>

                            <td>

                                <div class="wm-tasks-page__task-cell">

                                    <span class="wm-tasks-page__task-icon is-blue">
                                        <i class="ph ph-presentation-chart"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Prepare research presentation
                                        </strong>

                                        <small>
                                            TASK-020
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                Climate Change Research
                            </td>

                            <td>
                                <span class="wm-tasks-page__status is-todo">
                                    To Do
                                </span>
                            </td>

                            <td>
                                <span class="wm-tasks-page__priority is-low">
                                    Low
                                </span>
                            </td>

                            <td>

                                <div class="wm-tasks-page__assignee">

                                    <span class="wm-tasks-page__avatar is-purple">
                                        AK
                                    </span>

                                    Anna Kim

                                </div>

                            </td>

                            <td>
                                Oct 02, 2026
                            </td>

                            <td>

                                <div class="wm-tasks-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-tasks-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-task-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-task-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-task-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-task-action="complete">
                                            <i class="ph ph-check"></i>
                                            Mark Complete
                                        </button>

                                        <button data-task-action="delete" class="is-danger">
                                            <i class="ph ph-trash"></i>
                                            Delete
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>


                        {{-- Task 06 --}}
                        <tr
                            data-task-item
                            data-project="water"
                            data-status="progress"
                            data-priority="medium"
                            data-assignee="michael"
                            data-due="2026-09-29"
                            data-created="2026-09-13"
                            data-name="Analyze water samples"
                            data-search="analyze water samples quality study"
                        >

                            <td class="wm-tasks-page__check-column">
                                <input type="checkbox" class="task-checkbox">
                            </td>

                            <td>

                                <div class="wm-tasks-page__task-cell">

                                    <span class="wm-tasks-page__task-icon is-cyan">
                                        <i class="ph ph-test-tube"></i>
                                    </span>

                                    <div>

                                        <strong>
                                            Analyze water samples
                                        </strong>

                                        <small>
                                            TASK-019
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>
                                Water Quality Study
                            </td>

                            <td>
                                <span class="wm-tasks-page__status is-progress">
                                    In Progress
                                </span>
                            </td>

                            <td>
                                <span class="wm-tasks-page__priority is-medium">
                                    Medium
                                </span>
                            </td>

                            <td>

                                <div class="wm-tasks-page__assignee">

                                    <span class="wm-tasks-page__avatar is-green">
                                        MJ
                                    </span>

                                    Michael Johnson

                                </div>

                            </td>

                            <td>
                                Sep 29, 2026
                            </td>

                            <td>

                                <div class="wm-tasks-page__row-action">

                                    <button
                                        type="button"
                                        data-action-menu-toggle
                                    >
                                        <i class="ph ph-dots-three"></i>
                                    </button>

                                    <div
                                        class="wm-tasks-page__action-menu"
                                        data-action-menu
                                    >

                                        <button data-task-action="view">
                                            <i class="ph ph-eye"></i>
                                            View
                                        </button>

                                        <button data-task-action="edit">
                                            <i class="ph ph-pencil-simple"></i>
                                            Edit
                                        </button>

                                        <button data-task-action="duplicate">
                                            <i class="ph ph-copy"></i>
                                            Duplicate
                                        </button>

                                        <button data-task-action="complete">
                                            <i class="ph ph-check"></i>
                                            Mark Complete
                                        </button>

                                        <button data-task-action="delete" class="is-danger">
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
            Board View
        ========================================================== --}}
        <div
            class="wm-tasks-page__board-view"
            data-task-view="board"
        >

            <div class="wm-tasks-page__board">

                {{-- To Do --}}
                <div class="wm-tasks-page__board-column">

                    <div class="wm-tasks-page__board-header">

                        <div>

                            <span class="wm-tasks-page__board-dot is-gray"></span>

                            <strong>
                                To Do
                            </strong>

                            <span>
                            16
                        </span>

                        </div>

                        <button type="button">
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-tasks-page__board-list">

                        <article class="wm-tasks-page__board-card">

                            <div class="wm-tasks-page__board-card-top">

                            <span class="wm-tasks-page__priority is-medium">
                                Medium
                            </span>

                                <button type="button">
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <h3>
                                Prepare sampling equipment
                            </h3>

                            <span class="wm-tasks-page__board-project">
                            Water Quality Study
                        </span>

                            <div class="wm-tasks-page__board-footer">

                            <span class="wm-tasks-page__avatar is-green">
                                MJ
                            </span>

                                <span>
                                Sep 28
                            </span>

                            </div>

                        </article>


                        <article class="wm-tasks-page__board-card">

                            <div class="wm-tasks-page__board-card-top">

                            <span class="wm-tasks-page__priority is-low">
                                Low
                            </span>

                                <button type="button">
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <h3>
                                Prepare research presentation
                            </h3>

                            <span class="wm-tasks-page__board-project">
                            Climate Change Research
                        </span>

                            <div class="wm-tasks-page__board-footer">

                            <span class="wm-tasks-page__avatar is-purple">
                                AK
                            </span>

                                <span>
                                Oct 02
                            </span>

                            </div>

                        </article>

                    </div>

                </div>


                {{-- In Progress --}}
                <div class="wm-tasks-page__board-column">

                    <div class="wm-tasks-page__board-header">

                        <div>

                            <span class="wm-tasks-page__board-dot is-orange"></span>

                            <strong>
                                In Progress
                            </strong>

                            <span>
                            14
                        </span>

                        </div>

                        <button type="button">
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-tasks-page__board-list">

                        <article class="wm-tasks-page__board-card">

                            <div class="wm-tasks-page__board-card-top">

                            <span class="wm-tasks-page__priority is-high">
                                High
                            </span>

                                <button type="button">
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <h3>
                                Analyze field sensor data
                            </h3>

                            <span class="wm-tasks-page__board-project">
                            Climate Change Research
                        </span>

                            <div class="wm-tasks-page__board-footer">

                            <span class="wm-tasks-page__avatar">
                                SW
                            </span>

                                <span>
                                Sep 26
                            </span>

                            </div>

                        </article>


                        <article class="wm-tasks-page__board-card">

                            <div class="wm-tasks-page__board-card-top">

                            <span class="wm-tasks-page__priority is-medium">
                                Medium
                            </span>

                                <button type="button">
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <h3>
                                Analyze water samples
                            </h3>

                            <span class="wm-tasks-page__board-project">
                            Water Quality Study
                        </span>

                            <div class="wm-tasks-page__board-footer">

                            <span class="wm-tasks-page__avatar is-green">
                                MJ
                            </span>

                                <span>
                                Sep 29
                            </span>

                            </div>

                        </article>

                    </div>

                </div>


                {{-- In Review --}}
                <div class="wm-tasks-page__board-column">

                    <div class="wm-tasks-page__board-header">

                        <div>

                            <span class="wm-tasks-page__board-dot is-purple"></span>

                            <strong>
                                In Review
                            </strong>

                            <span>
                            4
                        </span>

                        </div>

                        <button type="button">
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-tasks-page__board-list">

                        <article class="wm-tasks-page__board-card">

                            <div class="wm-tasks-page__board-card-top">

                            <span class="wm-tasks-page__priority is-high">
                                High
                            </span>

                                <button type="button">
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <h3>
                                Review sustainability metrics
                            </h3>

                            <span class="wm-tasks-page__board-project">
                            Urban Sustainability
                        </span>

                            <div class="wm-tasks-page__board-footer">

                            <span class="wm-tasks-page__avatar is-purple">
                                AK
                            </span>

                                <span>
                                Sep 25
                            </span>

                            </div>

                        </article>

                    </div>

                </div>


                {{-- Completed --}}
                <div class="wm-tasks-page__board-column">

                    <div class="wm-tasks-page__board-header">

                        <div>

                            <span class="wm-tasks-page__board-dot is-green"></span>

                            <strong>
                                Completed
                            </strong>

                            <span>
                            14
                        </span>

                        </div>

                        <button type="button">
                            <i class="ph ph-plus"></i>
                        </button>

                    </div>


                    <div class="wm-tasks-page__board-list">

                        <article class="wm-tasks-page__board-card is-completed">

                            <div class="wm-tasks-page__board-card-top">

                            <span class="wm-tasks-page__priority is-medium">
                                Medium
                            </span>

                                <button type="button">
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                            <h3>
                                Complete biodiversity survey
                            </h3>

                            <span class="wm-tasks-page__board-project">
                            Biodiversity Assessment
                        </span>

                            <div class="wm-tasks-page__board-footer">

                            <span class="wm-tasks-page__avatar is-orange">
                                JM
                            </span>

                                <span>
                                Sep 23
                            </span>

                            </div>

                        </article>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Empty State
        ========================================================== --}}
        <div
            class="wm-tasks-page__empty"
            data-empty-state
        >

            <div class="wm-tasks-page__empty-icon">
                <i class="ph ph-check-square"></i>
            </div>

            <h3>
                No tasks found
            </h3>

            <p>
                Try changing your search or filters, or create a new task.
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
        <div class="wm-tasks-page__footer">

        <span>
            Showing
            <strong data-visible-count>6</strong>
            tasks
        </span>

            <div class="wm-tasks-page__pagination">

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
                    4
                </button>

                <button type="button">
                    <i class="ph ph-caret-right"></i>
                </button>

            </div>

        </div>


        {{-- =========================================================
            Create Task Modal
        ========================================================== --}}
        <div
            class="modal fade"
            id="createTaskModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Create Task
                            </h5>

                            <p class="wm-tasks-page__modal-subtitle">
                                Create a new task for your project.
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

                            <div class="col-12">

                                <label
                                    for="taskTitle"
                                    class="form-label"
                                >
                                    Task Name
                                </label>

                                <input
                                    type="text"
                                    id="taskTitle"
                                    class="form-control"
                                    placeholder="Enter task name"
                                >

                            </div>


                            <div class="col-md-6">

                                <label
                                    for="taskProject"
                                    class="form-label"
                                >
                                    Project
                                </label>

                                <select
                                    id="taskProject"
                                    class="form-select"
                                >

                                    <option value="">
                                        Select Project
                                    </option>

                                    <option value="climate">
                                        Climate Change Research
                                    </option>

                                    <option value="water">
                                        Water Quality Study
                                    </option>

                                    <option value="urban">
                                        Urban Sustainability
                                    </option>

                                    <option value="biodiversity">
                                        Biodiversity Assessment
                                    </option>

                                </select>

                            </div>


                            <div class="col-md-6">

                                <label
                                    for="taskAssignee"
                                    class="form-label"
                                >
                                    Assignee
                                </label>

                                <select
                                    id="taskAssignee"
                                    class="form-select"
                                >

                                    <option value="">
                                        Select Assignee
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

                                    <option value="james">
                                        James Miller
                                    </option>

                                </select>

                            </div>


                            <div class="col-md-4">

                                <label
                                    for="taskPriority"
                                    class="form-label"
                                >
                                    Priority
                                </label>

                                <select
                                    id="taskPriority"
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
                                    for="taskStatus"
                                    class="form-label"
                                >
                                    Status
                                </label>

                                <select
                                    id="taskStatus"
                                    class="form-select"
                                >

                                    <option value="todo">
                                        To Do
                                    </option>

                                    <option value="progress">
                                        In Progress
                                    </option>

                                    <option value="review">
                                        In Review
                                    </option>

                                </select>

                            </div>


                            <div class="col-md-4">

                                <label
                                    for="taskDueDate"
                                    class="form-label"
                                >
                                    Due Date
                                </label>

                                <input
                                    type="date"
                                    id="taskDueDate"
                                    class="form-control"
                                >

                            </div>


                            <div class="col-12">

                                <label
                                    for="taskDescription"
                                    class="form-label"
                                >
                                    Description
                                </label>

                                <textarea
                                    id="taskDescription"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Describe the task..."
                                ></textarea>

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
                            data-save-task
                        >
                            <i class="ph ph-check"></i>
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


            // =========================================================
            // Elements
            // =========================================================

            const $search = $('#tasksSearch');

            const $filterPanel = $('[data-filter-panel]');

            const $sortMenu = $('[data-sort-menu]');

            const $activeFilters = $('[data-active-filters]');

            const $bulkBar = $('[data-bulk-bar]');

            const $emptyState = $('[data-empty-state]');


            // =========================================================
            // Labels
            // =========================================================

            const projectLabels = {

                climate: 'Climate Change Research',

                water: 'Water Quality Study',

                urban: 'Urban Sustainability',

                biodiversity: 'Biodiversity Assessment'

            };


            const statusLabels = {

                todo: 'To Do',

                progress: 'In Progress',

                review: 'In Review',

                completed: 'Completed'

            };


            const priorityLabels = {

                high: 'High',

                medium: 'Medium',

                low: 'Low'

            };


            const assigneeLabels = {

                sarah: 'Sarah Wilson',

                michael: 'Michael Johnson',

                anna: 'Anna Kim',

                james: 'James Miller'

            };


            // =========================================================
            // Notice
            // =========================================================

            function showNotice(
                title,
                text,
                icon
            ) {

                if (typeof Swal !== 'undefined') {

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


            // =========================================================
            // Get Filters
            // =========================================================

            function getFilters() {

                return {

                    project:
                        $('#taskProjectFilter').val(),

                    status:
                        $('#taskStatusFilter').val(),

                    priority:
                        $('#taskPriorityFilter').val(),

                    assignee:
                        $('#taskAssigneeFilter').val(),

                    due:
                        $('#taskDueFilter').val(),

                    search:
                        $.trim(
                            $search.val()
                        ).toLowerCase()

                };
            }


            // =========================================================
            // Date Helpers
            // =========================================================

            function parseDate(
                value
            ) {

                return new Date(
                    value + 'T00:00:00'
                );
            }


            function matchesDueFilter(
                dueDate,
                filter
            ) {

                if (!filter) {

                    return true;
                }


                const today =
                    new Date(
                        '2026-09-24T00:00:00'
                    );

                const due =
                    parseDate(
                        dueDate
                    );


                const startOfWeek =
                    new Date(today);

                startOfWeek.setDate(
                    today.getDate() -
                    today.getDay()
                );


                const endOfWeek =
                    new Date(startOfWeek);

                endOfWeek.setDate(
                    startOfWeek.getDate() + 6
                );


                const startOfMonth =
                    new Date(
                        today.getFullYear(),
                        today.getMonth(),
                        1
                    );


                const endOfMonth =
                    new Date(
                        today.getFullYear(),
                        today.getMonth() + 1,
                        0
                    );


                if (
                    filter === 'overdue'
                ) {

                    return due < today;
                }


                if (
                    filter === 'today'
                ) {

                    return (
                        due.getTime() ===
                        today.getTime()
                    );
                }


                if (
                    filter === 'week'
                ) {

                    return (
                        due >= startOfWeek &&
                        due <= endOfWeek
                    );
                }


                if (
                    filter === 'month'
                ) {

                    return (
                        due >= startOfMonth &&
                        due <= endOfMonth
                    );
                }


                return true;
            }


            // =========================================================
            // Match Task
            // =========================================================

            function matchesTask(
                $task,
                filters
            ) {

                const project =
                    $task.data('project');

                const status =
                    $task.data('status');

                const priority =
                    $task.data('priority');

                const assignee =
                    $task.data('assignee');

                const due =
                    String(
                        $task.data('due')
                    );

                const searchText =
                    String(
                        $task.data('search') || ''
                    ).toLowerCase();


                if (
                    filters.project &&
                    project !== filters.project
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
                    filters.priority &&
                    priority !== filters.priority
                ) {

                    return false;
                }


                if (
                    filters.assignee &&
                    assignee !== filters.assignee
                ) {

                    return false;
                }


                if (
                    filters.due &&
                    !matchesDueFilter(
                        due,
                        filters.due
                    )
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


            // =========================================================
            // Filter Count
            // =========================================================

            function updateFilterCount() {

                const filters =
                    getFilters();

                let count = 0;


                if (filters.project) {
                    count++;
                }

                if (filters.status) {
                    count++;
                }

                if (filters.priority) {
                    count++;
                }

                if (filters.assignee) {
                    count++;
                }

                if (filters.due) {
                    count++;
                }


                $('[data-filter-count]')
                    .text(count);
            }


            // =========================================================
            // Active Filter Chips
            // =========================================================

            function updateActiveFilters() {

                const filters =
                    getFilters();


                $activeFilters.empty();


                if (filters.search) {

                    $activeFilters.append(`

                <button
                    type="button"
                    class="wm-tasks-page__filter-chip"
                    data-remove-search
                >

                    Search: "${$search.val()}"

                    <i class="ph ph-x"></i>

                </button>

            `);
                }


                if (filters.project) {

                    $activeFilters.append(`

                <button
                    type="button"
                    class="wm-tasks-page__filter-chip"
                    data-remove-filter="project"
                >

                    ${projectLabels[filters.project]}

                    <i class="ph ph-x"></i>

                </button>

            `);
                }


                if (filters.status) {

                    $activeFilters.append(`

                <button
                    type="button"
                    class="wm-tasks-page__filter-chip"
                    data-remove-filter="status"
                >

                    ${statusLabels[filters.status]}

                    <i class="ph ph-x"></i>

                </button>

            `);
                }


                if (filters.priority) {

                    $activeFilters.append(`

                <button
                    type="button"
                    class="wm-tasks-page__filter-chip"
                    data-remove-filter="priority"
                >

                    ${priorityLabels[filters.priority]}

                    <i class="ph ph-x"></i>

                </button>

            `);
                }


                if (filters.assignee) {

                    $activeFilters.append(`

                <button
                    type="button"
                    class="wm-tasks-page__filter-chip"
                    data-remove-filter="assignee"
                >

                    ${assigneeLabels[filters.assignee]}

                    <i class="ph ph-x"></i>

                </button>

            `);
                }


                if (filters.due) {

                    $activeFilters.append(`

                <button
                    type="button"
                    class="wm-tasks-page__filter-chip"
                    data-remove-filter="due"
                >

                    ${filters.due}

                    <i class="ph ph-x"></i>

                </button>

            `);
                }
            }


            // =========================================================
            // Apply Filters
            // =========================================================

            function applyFilters() {

                const filters =
                    getFilters();

                let visibleCount = 0;


                $('[data-task-item]')
                    .each(function () {

                        const $task =
                            $(this);

                        const visible =
                            matchesTask(
                                $task,
                                filters
                            );


                        $task.toggleClass(
                            'is-hidden',
                            !visible
                        );


                        if (visible) {

                            visibleCount++;
                        }

                    });


                /*
                 * Board view is intentionally kept as a presentation view.
                 * The list data is the source for global filtering.
                 */

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

                updateBulkState();
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
            // Filter Toggle
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


            // =========================================================
            // Filter Change
            // =========================================================

            $(document).on(
                'change',
                '#taskProjectFilter, #taskStatusFilter, #taskPriorityFilter, #taskAssigneeFilter, #taskDueFilter',
                function () {

                    applyFilters();

                }
            );


            // =========================================================
            // Remove Filter
            // =========================================================

            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data(
                            'remove-filter'
                        );


                    const map = {

                        project: '#taskProjectFilter',

                        status: '#taskStatusFilter',

                        priority: '#taskPriorityFilter',

                        assignee: '#taskAssigneeFilter',

                        due: '#taskDueFilter'

                    };


                    if (map[filter]) {

                        $(map[filter])
                            .val('');
                    }


                    applyFilters();

                }
            );


            // =========================================================
            // Clear Filters
            // =========================================================

            function clearFilters() {

                $('#taskProjectFilter').val('');

                $('#taskStatusFilter').val('');

                $('#taskPriorityFilter').val('');

                $('#taskAssigneeFilter').val('');

                $('#taskDueFilter').val('');

                $search.val('');

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


            // =========================================================
            // Summary Filters
            // =========================================================

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


                    $('#taskProjectFilter').val('');

                    $('#taskStatusFilter').val('');

                    $('#taskPriorityFilter').val('');

                    $('#taskAssigneeFilter').val('');

                    $('#taskDueFilter').val('');


                    if (
                        filter === 'todo'
                    ) {

                        $('#taskStatusFilter')
                            .val('todo');
                    }


                    if (
                        filter === 'progress'
                    ) {

                        $('#taskStatusFilter')
                            .val('progress');
                    }


                    if (
                        filter === 'completed'
                    ) {

                        $('#taskStatusFilter')
                            .val('completed');
                    }


                    if (
                        filter === 'overdue'
                    ) {

                        $('#taskDueFilter')
                            .val('overdue');
                    }


                    applyFilters();

                }
            );


            // =========================================================
            // View Switcher
            // =========================================================

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


                $('[data-task-view]')
                    .removeClass(
                        'is-visible'
                    );


                $(`[data-task-view="${view}"]`)
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


            // =========================================================
            // Sorting
            // =========================================================

            function sortTasks(
                sortType
            ) {

                const $tbody =
                    $('.wm-tasks-page__table tbody');


                const items =
                    $tbody
                        .find('[data-task-item]')
                        .get();


                items.sort(
                    function (a, b) {

                        const $a = $(a);

                        const $b = $(b);


                        if (
                            sortType === 'due-asc'
                        ) {

                            return String(
                                $a.data('due')
                            ).localeCompare(
                                String(
                                    $b.data('due')
                                )
                            );
                        }


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
                            sortType === 'created'
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
                            sortType === 'name'
                        ) {

                            return String(
                                $a.data('name')
                            ).localeCompare(
                                String(
                                    $b.data('name')
                                )
                            );
                        }


                        return 0;

                    }
                );


                $.each(
                    items,
                    function (_, item) {

                        $tbody.append(item);

                    }
                );


                $sortMenu.removeClass(
                    'is-open'
                );


                applyFilters();
            }


            $(document).on(
                'click',
                '[data-sort-toggle]',
                function (event) {

                    event.stopPropagation();

                    $sortMenu.toggleClass(
                        'is-open'
                    );

                }
            );


            $(document).on(
                'click',
                '[data-sort]',
                function () {

                    sortTasks(
                        $(this).data('sort')
                    );

                }
            );


            // =========================================================
            // Select All
            // =========================================================

            $('#selectAllTasks').on(
                'change',
                function () {

                    const checked =
                        $(this).is(':checked');


                    $('[data-task-item]:not(.is-hidden)')
                        .find('.task-checkbox')
                        .prop(
                            'checked',
                            checked
                        );


                    updateBulkState();

                }
            );


            // =========================================================
            // Individual Checkbox
            // =========================================================

            $(document).on(
                'change',
                '.task-checkbox',
                function () {

                    updateBulkState();

                }
            );


            // =========================================================
            // Bulk State
            // =========================================================

            function updateBulkState() {

                const selected =
                    $('.task-checkbox:checked')
                        .length;


                $('[data-selected-count]')
                    .text(selected);


                $bulkBar.toggleClass(
                    'is-visible',
                    selected > 0
                );


                const visibleCheckboxes =
                    $('[data-task-item]:not(.is-hidden)')
                        .find('.task-checkbox')
                        .length;


                const checkedVisible =
                    $('[data-task-item]:not(.is-hidden)')
                        .find('.task-checkbox:checked')
                        .length;


                $('#selectAllTasks').prop(
                    'checked',
                    visibleCheckboxes > 0 &&
                    visibleCheckboxes === checkedVisible
                );

            }


            // =========================================================
            // Bulk Actions
            // =========================================================

            $(document).on(
                'click',
                '[data-bulk-action]',
                function () {

                    const action =
                        $(this).data(
                            'bulk-action'
                        );


                    const count =
                        $('.task-checkbox:checked')
                            .length;


                    if (!count) {

                        return;
                    }


                    if (
                        action === 'complete'
                    ) {

                        showNotice(
                            'Tasks Completed',
                            `${count} task${count > 1 ? 's' : ''} marked as completed.`,
                            'success'
                        );

                    }


                    if (
                        action === 'assign'
                    ) {

                        showNotice(
                            'Assign Tasks',
                            `${count} task${count > 1 ? 's' : ''} ready for assignment.`
                        );

                    }


                    if (
                        action === 'delete'
                    ) {

                        if (
                            typeof Swal !== 'undefined'
                        ) {

                            Swal.fire({

                                title: 'Delete Selected Tasks?',

                                text:
                                    `${count} selected task${count > 1 ? 's' : ''} will be removed.`,

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
                                            'Tasks Deleted',
                                            `${count} task${count > 1 ? 's' : ''} deleted successfully.`,
                                            'success'
                                        );

                                    }

                                }
                            );

                        }

                    }

                }
            );


            // =========================================================
            // Action Menus
            // =========================================================

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


            // =========================================================
            // Task Actions
            // =========================================================

            $(document).on(
                'click',
                '[data-task-action]',
                function () {

                    const action =
                        $(this).data(
                            'task-action'
                        );


                    const $task =
                        $(this).closest(
                            '[data-task-item]'
                        );


                    const title =
                        $task
                            .find(
                                '.wm-tasks-page__task-cell strong'
                            )
                            .text()
                            .trim();


                    $('[data-action-menu]')
                        .removeClass(
                            'is-open'
                        );


                    if (
                        action === 'view'
                    ) {

                        showNotice(
                            'View Task',
                            `Opening "${title}".`
                        );

                        return;
                    }


                    if (
                        action === 'edit'
                    ) {

                        showNotice(
                            'Edit Task',
                            `Editing "${title}".`
                        );

                        return;
                    }


                    if (
                        action === 'duplicate'
                    ) {

                        showNotice(
                            'Task Duplicated',
                            `"${title}" has been duplicated.`,
                            'success'
                        );

                        return;
                    }


                    if (
                        action === 'complete'
                    ) {

                        showNotice(
                            'Task Completed',
                            `"${title}" has been marked as completed.`,
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

                                title: 'Delete Task?',

                                text:
                                    `"${title}" will be permanently removed.`,

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
                                            'Task Deleted',
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
                        action === 'export'
                    ) {

                        showNotice(
                            'Export Tasks',
                            'The task export is ready to connect with your backend.'
                        );

                        return;
                    }


                    if (
                        action === 'create'
                    ) {

                        $('#createTaskModal')
                            .modal('show');

                    }

                }
            );


            // =========================================================
            // Save Task
            // =========================================================

            $(document).on(
                'click',
                '[data-save-task]',
                function () {

                    const title =
                        $.trim(
                            $('#taskTitle').val()
                        );


                    const project =
                        $('#taskProject').val();


                    if (!title) {

                        showNotice(
                            'Task Name Required',
                            'Please enter a task name.',
                            'warning'
                        );

                        $('#taskTitle')
                            .trigger('focus');

                        return;
                    }


                    if (!project) {

                        showNotice(
                            'Project Required',
                            'Please select a project.',
                            'warning'
                        );

                        $('#taskProject')
                            .trigger('focus');

                        return;
                    }


                    $('#createTaskModal')
                        .modal('hide');


                    showNotice(
                        'Task Created',
                        `"${title}" has been created successfully.`,
                        'success'
                    );


                    $('#taskTitle').val('');

                    $('#taskDescription').val('');

                    $('#taskProject').val('');

                    $('#taskAssignee').val('');

                }
            );


            // =========================================================
            // Board Card Actions
            // =========================================================

            $(document).on(
                'click',
                '.wm-tasks-page__board-card button',
                function () {

                    const $card =
                        $(this).closest(
                            '.wm-tasks-page__board-card'
                        );


                    const title =
                        $card
                            .find('h3')
                            .text()
                            .trim();


                    showNotice(
                        'Task Actions',
                        `Actions for "${title}" are ready to connect.`
                    );

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


            // =========================================================
            // Initial
            // =========================================================

            switchView('list');

            applyFilters();

        });

    </script>
@endpush
