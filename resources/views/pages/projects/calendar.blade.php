@extends('layout.app')

@section('main')

    <div class="wm-project-calendar-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-calendar-page__header">

            <div class="wm-project-calendar-page__header-left">

                <nav class="wm-project-calendar-page__breadcrumb" aria-label="Breadcrumb">

                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <a href="{{ route('projects.overview', 'climate-research') }}">
                        Climate Change Research Initiative
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Calendar</span>

                </nav>

                <div class="wm-project-calendar-page__title-row">

                    <div class="wm-project-calendar-page__title-icon">
                        <i class="ph ph-calendar-blank"></i>
                    </div>

                    <div>
                        <h1 class="wm-project-calendar-page__title">
                            Project Calendar
                        </h1>

                        <p class="wm-project-calendar-page__subtitle">
                            Manage project tasks, milestones, meetings, and important dates.
                        </p>
                    </div>

                </div>

            </div>

            <div class="wm-project-calendar-page__header-actions">

                <button
                    type="button"
                    class="btn btn-light wm-project-calendar-page__header-button"
                    data-calendar-header-action="today"
                >
                    Today
                </button>

                <button
                    type="button"
                    class="btn btn-light wm-project-calendar-page__header-button"
                    data-calendar-header-action="export"
                >
                    <i class="ph ph-download-simple"></i>
                    Export
                </button>

                <button
                    type="button"
                    class="btn btn-primary wm-project-calendar-page__header-button"
                    data-calendar-header-action="create"
                >
                    <i class="ph ph-plus"></i>
                    Add Event
                </button>

            </div>

        </div>


        {{-- =========================================================
            Project Navigation
        ========================================================== --}}
        <div class="wm-project-calendar-page__navigation">

            <nav class="wm-project-calendar-page__nav">

                <a
                    href="{{ route('projects.overview', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-squares-four"></i>
                    Overview
                </a>

                <a
                    href="{{ route('projects.tasks', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-check-square"></i>
                    Tasks
                    <span>24</span>
                </a>

                <a
                    href="{{ route('projects.milestones', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-flag"></i>
                    Milestones
                </a>

                <a
                    href="{{ route('projects.timeline', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-chart-line-up"></i>
                    Timeline
                </a>

                <a
                    href="{{ route('projects.calendar', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item is-active"
                >
                    <i class="ph ph-calendar-blank"></i>
                    Calendar
                </a>

                <a
                    href="{{ route('projects.workstreams', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-tree-structure"></i>
                    Workstreams
                </a>

                <a
                    href="{{ route('projects.files', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-folder-open"></i>
                    Files
                </a>

                <a
                    href="{{ route('projects.team', 'climate-research') }}"
                    class="wm-project-team-page__nav-item"
                >
                    <i class="ph ph-users-three"></i>
                    Team
                </a>

                <a
                    href="{{ route('projects.activity', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-activity"></i>
                    Activity
                </a>

                <a
                    href="{{ route('projects.reports', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-chart-bar"></i>
                    Reports
                </a>

                <a
                    href="{{ route('projects.risks-issues', 'climate-research') }}"
                    class="wm-project-calendar-page__nav-item"
                >
                    <i class="ph ph-shield-warning"></i>
                    Risks &amp; Issues
                </a>

            </nav>

        </div>


        {{-- =========================================================
            Summary Cards
        ========================================================== --}}
        <div class="wm-project-calendar-page__summary">

            <button
                type="button"
                class="wm-project-calendar-page__summary-card is-active"
                data-summary-filter="all"
            >

                <span class="wm-project-calendar-page__summary-icon wm-project-calendar-page__summary-icon--blue">
                    <i class="ph ph-calendar-blank"></i>
                </span>

                <span class="wm-project-calendar-page__summary-content">
                    <span>Total Events</span>
                    <strong>18</strong>
                    <small>This project</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-calendar-page__summary-card"
                data-summary-filter="tasks"
            >

                <span class="wm-project-calendar-page__summary-icon wm-project-calendar-page__summary-icon--green">
                    <i class="ph ph-check-square"></i>
                </span>

                <span class="wm-project-calendar-page__summary-content">
                    <span>Task Deadlines</span>
                    <strong>9</strong>
                    <small>Upcoming tasks</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-calendar-page__summary-card"
                data-summary-filter="milestones"
            >

                <span class="wm-project-calendar-page__summary-icon wm-project-calendar-page__summary-icon--purple">
                    <i class="ph ph-flag"></i>
                </span>

                <span class="wm-project-calendar-page__summary-content">
                    <span>Milestones</span>
                    <strong>5</strong>
                    <small>Project milestones</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-calendar-page__summary-card"
                data-summary-filter="meetings"
            >

                <span class="wm-project-calendar-page__summary-icon wm-project-calendar-page__summary-icon--cyan">
                    <i class="ph ph-users-three"></i>
                </span>

                <span class="wm-project-calendar-page__summary-content">
                    <span>Meetings</span>
                    <strong>3</strong>
                    <small>Scheduled meetings</small>
                </span>

            </button>


            <button
                type="button"
                class="wm-project-calendar-page__summary-card"
                data-summary-filter="overdue"
            >

                <span class="wm-project-calendar-page__summary-icon wm-project-calendar-page__summary-icon--red">
                    <i class="ph ph-warning-circle"></i>
                </span>

                <span class="wm-project-calendar-page__summary-content">
                    <span>Overdue</span>
                    <strong>1</strong>
                    <small>Needs attention</small>
                </span>

            </button>

        </div>


        {{-- =========================================================
            Toolbar
        ========================================================== --}}
        <div class="wm-project-calendar-page__toolbar">

            <div class="wm-project-calendar-page__toolbar-left">

                <div class="wm-project-calendar-page__search">

                    <i class="ph ph-magnifying-glass"></i>

                    <input
                        type="search"
                        id="projectCalendarSearch"
                        placeholder="Search events..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="wm-project-calendar-page__search-clear"
                        data-search-clear
                    >
                        <i class="ph ph-x"></i>
                    </button>

                </div>


                <button
                    type="button"
                    class="wm-project-calendar-page__toolbar-button"
                    data-filter-toggle
                >
                    <i class="ph ph-funnel"></i>
                    Filter
                    <span data-filter-count>0</span>
                </button>

            </div>


            <div class="wm-project-calendar-page__toolbar-right">

                <div class="wm-project-calendar-page__calendar-navigation">

                    <button
                        type="button"
                        data-calendar-nav="previous"
                        aria-label="Previous month"
                    >
                        <i class="ph ph-caret-left"></i>
                    </button>

                    <button
                        type="button"
                        class="wm-project-calendar-page__calendar-today"
                        data-calendar-nav="today"
                    >
                        Today
                    </button>

                    <button
                        type="button"
                        data-calendar-nav="next"
                        aria-label="Next month"
                    >
                        <i class="ph ph-caret-right"></i>
                    </button>

                </div>


                <div class="wm-project-calendar-page__month-title">
                    <strong data-calendar-month>
                        September 2026
                    </strong>
                </div>


                <div class="wm-project-calendar-page__view-switcher">

                    <button
                        type="button"
                        class="is-active"
                        data-calendar-view="month"
                    >
                        Month
                    </button>

                    <button
                        type="button"
                        data-calendar-view="week"
                    >
                        Week
                    </button>

                    <button
                        type="button"
                        data-calendar-view="agenda"
                    >
                        Agenda
                    </button>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Filter Panel
        ========================================================== --}}
        <div
            class="wm-project-calendar-page__filter-panel"
            data-filter-panel
        >

            <div class="wm-project-calendar-page__filter-field">

                <label for="calendarTypeFilter">
                    Type
                </label>

                <select id="calendarTypeFilter">

                    <option value="">All Types</option>
                    <option value="task">Task</option>
                    <option value="milestone">Milestone</option>
                    <option value="meeting">Meeting</option>
                    <option value="deadline">Deadline</option>

                </select>

            </div>


            <div class="wm-project-calendar-page__filter-field">

                <label for="calendarAssigneeFilter">
                    Assignee
                </label>

                <select id="calendarAssigneeFilter">

                    <option value="">All Assignees</option>
                    <option value="sarah">Dr. Sarah Wilson</option>
                    <option value="michael">Michael Johnson</option>
                    <option value="anna">Anna Kim</option>
                    <option value="robert">Robert Brown</option>

                </select>

            </div>


            <div class="wm-project-calendar-page__filter-field">

                <label for="calendarStatusFilter">
                    Status
                </label>

                <select id="calendarStatusFilter">

                    <option value="">All Statuses</option>
                    <option value="completed">Completed</option>
                    <option value="progress">In Progress</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="overdue">Overdue</option>

                </select>

            </div>


            <button
                type="button"
                class="wm-project-calendar-page__clear-filter"
                data-clear-filters
            >
                Clear Filters
            </button>

        </div>


        {{-- =========================================================
            Active Filters
        ========================================================== --}}
        <div
            class="wm-project-calendar-page__active-filters"
            data-active-filters
        ></div>


        {{-- =========================================================
            MONTH VIEW
        ========================================================== --}}
        <div
            class="wm-project-calendar-page__month-view is-visible"
            data-calendar-month-view
        >

            <div class="wm-project-calendar-page__calendar-card">

                <div class="wm-project-calendar-page__calendar-weekdays">

                    <span>Sun</span>
                    <span>Mon</span>
                    <span>Tue</span>
                    <span>Wed</span>
                    <span>Thu</span>
                    <span>Fri</span>
                    <span>Sat</span>

                </div>


                <div class="wm-project-calendar-page__calendar-grid">


                    {{-- Aug 30 --}}
                    <div class="wm-project-calendar-page__day is-muted">
                        <span class="wm-project-calendar-page__day-number">30</span>
                    </div>


                    {{-- Aug 31 --}}
                    <div class="wm-project-calendar-page__day is-muted">
                        <span class="wm-project-calendar-page__day-number">31</span>
                    </div>


                    {{-- Sep 1 --}}
                    <div
                        class="wm-project-calendar-page__day"
                        data-calendar-day="2026-09-01"
                    >
                        <span class="wm-project-calendar-page__day-number">1</span>
                    </div>


                    {{-- Sep 2 --}}
                    <div
                        class="wm-project-calendar-page__day"
                        data-calendar-day="2026-09-02"
                    >

                        <span class="wm-project-calendar-page__day-number">2</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--milestone"
                            data-event-type="milestone"
                            data-event-status="completed"
                            data-event-owner="sarah"
                            data-event-title="Research Framework"
                        >
                            <i class="ph ph-flag"></i>
                            Research Framework
                        </button>

                    </div>


                    {{-- Sep 3 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">3</span>
                    </div>


                    {{-- Sep 4 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">4</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--task"
                            data-event-type="task"
                            data-event-status="completed"
                            data-event-owner="michael"
                            data-event-title="Review field samples"
                        >
                            <i class="ph ph-check-square"></i>
                            Review field samples
                        </button>
                    </div>


                    {{-- Sep 5 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">5</span>
                    </div>


                    {{-- Sep 6 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">6</span>
                    </div>


                    {{-- Sep 7 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">7</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--meeting"
                            data-event-type="meeting"
                            data-event-status="completed"
                            data-event-owner="sarah"
                            data-event-title="Research Team Sync"
                        >
                            <i class="ph ph-users-three"></i>
                            Research Team Sync
                        </button>
                    </div>


                    {{-- Sep 8 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">8</span>
                    </div>


                    {{-- Sep 9 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">9</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--task"
                            data-event-type="task"
                            data-event-status="completed"
                            data-event-owner="anna"
                            data-event-title="Dataset validation"
                        >
                            <i class="ph ph-check-square"></i>
                            Dataset validation
                        </button>
                    </div>


                    {{-- Sep 10 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">10</span>
                    </div>


                    {{-- Sep 11 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">11</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--deadline"
                            data-event-type="deadline"
                            data-event-status="overdue"
                            data-event-owner="robert"
                            data-event-title="Field report submission"
                        >
                            <i class="ph ph-warning-circle"></i>
                            Field report submission
                        </button>
                    </div>


                    {{-- Sep 12 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">12</span>
                    </div>


                    {{-- Sep 13 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">13</span>
                    </div>


                    {{-- Sep 14 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">14</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--task"
                            data-event-type="task"
                            data-event-status="completed"
                            data-event-owner="michael"
                            data-event-title="Finalize collection notes"
                        >
                            <i class="ph ph-check-square"></i>
                            Finalize collection notes
                        </button>
                    </div>


                    {{-- Sep 15 --}}
                    <div class="wm-project-calendar-page__day">
                        <span class="wm-project-calendar-page__day-number">15</span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--milestone"
                            data-event-type="milestone"
                            data-event-status="completed"
                            data-event-owner="michael"
                            data-event-title="Data Collection"
                        >
                            <i class="ph ph-flag"></i>
                            Data Collection
                        </button>

                    </div>


                    {{-- Sep 16 --}}
                    <div
                        class="wm-project-calendar-page__day is-today"
                    >

                        <span class="wm-project-calendar-page__day-number">
                            16
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--task"
                            data-event-type="task"
                            data-event-status="progress"
                            data-event-owner="anna"
                            data-event-title="Analyze coastal dataset"
                        >
                            <i class="ph ph-spinner"></i>
                            Analyze coastal dataset
                        </button>

                    </div>


                    {{-- Sep 17 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            17
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--meeting"
                            data-event-type="meeting"
                            data-event-status="upcoming"
                            data-event-owner="sarah"
                            data-event-title="PI Review Meeting"
                        >
                            <i class="ph ph-users-three"></i>
                            PI Review Meeting
                        </button>

                    </div>


                    {{-- Sep 18 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            18
                        </span>

                    </div>


                    {{-- Sep 19 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            19
                        </span>

                    </div>


                    {{-- Sep 20 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            20
                        </span>

                    </div>


                    {{-- Sep 21 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            21
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--task"
                            data-event-type="task"
                            data-event-status="upcoming"
                            data-event-owner="anna"
                            data-event-title="Run statistical model"
                        >
                            <i class="ph ph-check-square"></i>
                            Run statistical model
                        </button>

                    </div>


                    {{-- Sep 22 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            22
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--deadline"
                            data-event-type="deadline"
                            data-event-status="upcoming"
                            data-event-owner="robert"
                            data-event-title="Analysis review"
                        >
                            <i class="ph ph-clock"></i>
                            Analysis review
                        </button>

                    </div>


                    {{-- Sep 23 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            23
                        </span>

                    </div>


                    {{-- Sep 24 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            24
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--task"
                            data-event-type="task"
                            data-event-status="upcoming"
                            data-event-owner="michael"
                            data-event-title="Prepare visualization"
                        >
                            <i class="ph ph-check-square"></i>
                            Prepare visualization
                        </button>

                    </div>


                    {{-- Sep 25 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            25
                        </span>

                    </div>


                    {{-- Sep 26 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            26
                        </span>

                    </div>


                    {{-- Sep 27 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            27
                        </span>

                    </div>


                    {{-- Sep 28 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            28
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--meeting"
                            data-event-type="meeting"
                            data-event-status="upcoming"
                            data-event-owner="sarah"
                            data-event-title="Stakeholder Preparation"
                        >
                            <i class="ph ph-users-three"></i>
                            Stakeholder Preparation
                        </button>

                    </div>


                    {{-- Sep 29 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            29
                        </span>

                    </div>


                    {{-- Sep 30 --}}
                    <div class="wm-project-calendar-page__day">

                        <span class="wm-project-calendar-page__day-number">
                            30
                        </span>

                        <button
                            type="button"
                            class="wm-project-calendar-page__event wm-project-calendar-page__event--milestone"
                            data-event-type="milestone"
                            data-event-status="upcoming"
                            data-event-owner="sarah"
                            data-event-title="Stakeholder Review"
                        >
                            <i class="ph ph-flag"></i>
                            Stakeholder Review
                        </button>

                    </div>


                    {{-- Oct 1 --}}
                    <div class="wm-project-calendar-page__day is-muted">

                        <span class="wm-project-calendar-page__day-number">
                            1
                        </span>

                    </div>


                    {{-- Oct 2 --}}
                    <div class="wm-project-calendar-page__day is-muted">

                        <span class="wm-project-calendar-page__day-number">
                            2
                        </span>

                    </div>


                    {{-- Oct 3 --}}
                    <div class="wm-project-calendar-page__day is-muted">

                        <span class="wm-project-calendar-page__day-number">
                            3
                        </span>

                    </div>

                </div>

            </div>


            {{-- Calendar Legend --}}
            <div class="wm-project-calendar-page__legend">

                <span>
                    <i class="is-task"></i>
                    Task
                </span>

                <span>
                    <i class="is-milestone"></i>
                    Milestone
                </span>

                <span>
                    <i class="is-meeting"></i>
                    Meeting
                </span>

                <span>
                    <i class="is-deadline"></i>
                    Deadline
                </span>

            </div>

        </div>


        {{-- =========================================================
            WEEK VIEW
        ========================================================== --}}
        <div
            class="wm-project-calendar-page__week-view"
            data-calendar-week-view
        >

            <div class="wm-project-calendar-page__week-card">

                <div class="wm-project-calendar-page__week-header">

                    <div class="wm-project-calendar-page__week-time-column">
                        Time
                    </div>

                    <div>
                        Mon
                        <strong>14</strong>
                    </div>

                    <div class="is-today">
                        Tue
                        <strong>15</strong>
                    </div>

                    <div>
                        Wed
                        <strong>16</strong>
                    </div>

                    <div>
                        Thu
                        <strong>17</strong>
                    </div>

                    <div>
                        Fri
                        <strong>18</strong>
                    </div>

                    <div>
                        Sat
                        <strong>19</strong>
                    </div>

                    <div>
                        Sun
                        <strong>20</strong>
                    </div>

                </div>


                <div class="wm-project-calendar-page__week-body">

                    <div class="wm-project-calendar-page__week-time-column">

                        <span>8 AM</span>
                        <span>9 AM</span>
                        <span>10 AM</span>
                        <span>11 AM</span>
                        <span>12 PM</span>
                        <span>1 PM</span>
                        <span>2 PM</span>
                        <span>3 PM</span>
                        <span>4 PM</span>
                        <span>5 PM</span>

                    </div>


                    <div class="wm-project-calendar-page__week-day">

                        <div
                            class="wm-project-calendar-page__week-event wm-project-calendar-page__week-event--task"
                            style="top: 120px;"
                        >
                            <strong>Finalize notes</strong>
                            <span>09:00 AM</span>
                        </div>

                    </div>


                    <div class="wm-project-calendar-page__week-day">

                        <div
                            class="wm-project-calendar-page__week-event wm-project-calendar-page__week-event--milestone"
                            style="top: 210px;"
                        >
                            <strong>Data Collection</strong>
                            <span>10:30 AM</span>
                        </div>

                    </div>


                    <div class="wm-project-calendar-page__week-day is-current">

                        <div
                            class="wm-project-calendar-page__week-event wm-project-calendar-page__week-event--task"
                            style="top: 270px;"
                        >
                            <strong>Analyze dataset</strong>
                            <span>11:30 AM</span>
                        </div>

                        <div
                            class="wm-project-calendar-page__week-event wm-project-calendar-page__week-event--meeting"
                            style="top: 450px;"
                        >
                            <strong>PI Review</strong>
                            <span>2:30 PM</span>
                        </div>

                    </div>


                    <div class="wm-project-calendar-page__week-day">

                        <div
                            class="wm-project-calendar-page__week-event wm-project-calendar-page__week-event--deadline"
                            style="top: 330px;"
                        >
                            <strong>Analysis review</strong>
                            <span>12:30 PM</span>
                        </div>

                    </div>


                    <div class="wm-project-calendar-page__week-day">

                        <div
                            class="wm-project-calendar-page__week-event wm-project-calendar-page__week-event--task"
                            style="top: 390px;"
                        >
                            <strong>Visualization</strong>
                            <span>1:30 PM</span>
                        </div>

                    </div>


                    <div class="wm-project-calendar-page__week-day"></div>

                    <div class="wm-project-calendar-page__week-day"></div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            AGENDA VIEW
        ========================================================== --}}
        <div
            class="wm-project-calendar-page__agenda-view"
            data-calendar-agenda-view
        >

            <div class="wm-project-calendar-page__agenda-card">

                <div class="wm-project-calendar-page__agenda-header">

                    <div>
                        <h2>Upcoming Schedule</h2>
                        <p>September 16 – October 2, 2026</p>
                    </div>

                    <span>10 events</span>

                </div>


                <div class="wm-project-calendar-page__agenda-list">


                    <div class="wm-project-calendar-page__agenda-date">

                        <div class="wm-project-calendar-page__agenda-date-label">

                            <strong>16</strong>

                            <span>
                                Sep
                                <small>Wednesday</small>
                            </span>

                        </div>

                        <div class="wm-project-calendar-page__agenda-events">

                            <button
                                type="button"
                                class="wm-project-calendar-page__agenda-event"
                                data-event-type="task"
                                data-event-status="progress"
                            >

                                <span class="wm-project-calendar-page__agenda-event-icon is-task">
                                    <i class="ph ph-check-square"></i>
                                </span>

                                <span class="wm-project-calendar-page__agenda-event-content">

                                    <strong>
                                        Analyze coastal dataset
                                    </strong>

                                    <small>
                                        11:30 AM · Anna Kim
                                    </small>

                                </span>

                                <span class="wm-project-calendar-page__agenda-status is-progress">
                                    In Progress
                                </span>

                            </button>

                        </div>

                    </div>


                    <div class="wm-project-calendar-page__agenda-date">

                        <div class="wm-project-calendar-page__agenda-date-label">

                            <strong>17</strong>

                            <span>
                                Sep
                                <small>Thursday</small>
                            </span>

                        </div>

                        <div class="wm-project-calendar-page__agenda-events">

                            <button
                                type="button"
                                class="wm-project-calendar-page__agenda-event"
                                data-event-type="meeting"
                                data-event-status="upcoming"
                            >

                                <span class="wm-project-calendar-page__agenda-event-icon is-meeting">
                                    <i class="ph ph-users-three"></i>
                                </span>

                                <span class="wm-project-calendar-page__agenda-event-content">

                                    <strong>
                                        PI Review Meeting
                                    </strong>

                                    <small>
                                        2:30 PM · Dr. Sarah Wilson
                                    </small>

                                </span>

                                <span class="wm-project-calendar-page__agenda-status is-upcoming">
                                    Upcoming
                                </span>

                            </button>

                        </div>

                    </div>


                    <div class="wm-project-calendar-page__agenda-date">

                        <div class="wm-project-calendar-page__agenda-date-label">

                            <strong>22</strong>

                            <span>
                                Sep
                                <small>Tuesday</small>
                            </span>

                        </div>

                        <div class="wm-project-calendar-page__agenda-events">

                            <button
                                type="button"
                                class="wm-project-calendar-page__agenda-event"
                                data-event-type="deadline"
                                data-event-status="upcoming"
                            >

                                <span class="wm-project-calendar-page__agenda-event-icon is-deadline">
                                    <i class="ph ph-clock"></i>
                                </span>

                                <span class="wm-project-calendar-page__agenda-event-content">

                                    <strong>
                                        Analysis review
                                    </strong>

                                    <small>
                                        All day · Robert Brown
                                    </small>

                                </span>

                                <span class="wm-project-calendar-page__agenda-status is-upcoming">
                                    Upcoming
                                </span>

                            </button>

                        </div>

                    </div>


                    <div class="wm-project-calendar-page__agenda-date">

                        <div class="wm-project-calendar-page__agenda-date-label">

                            <strong>24</strong>

                            <span>
                                Sep
                                <small>Thursday</small>
                            </span>

                        </div>

                        <div class="wm-project-calendar-page__agenda-events">

                            <button
                                type="button"
                                class="wm-project-calendar-page__agenda-event"
                                data-event-type="task"
                                data-event-status="upcoming"
                            >

                                <span class="wm-project-calendar-page__agenda-event-icon is-task">
                                    <i class="ph ph-check-square"></i>
                                </span>

                                <span class="wm-project-calendar-page__agenda-event-content">

                                    <strong>
                                        Prepare visualization
                                    </strong>

                                    <small>
                                        10:00 AM · Michael Johnson
                                    </small>

                                </span>

                                <span class="wm-project-calendar-page__agenda-status is-upcoming">
                                    Upcoming
                                </span>

                            </button>

                        </div>

                    </div>


                    <div class="wm-project-calendar-page__agenda-date">

                        <div class="wm-project-calendar-page__agenda-date-label">

                            <strong>28</strong>

                            <span>
                                Sep
                                <small>Monday</small>
                            </span>

                        </div>

                        <div class="wm-project-calendar-page__agenda-events">

                            <button
                                type="button"
                                class="wm-project-calendar-page__agenda-event"
                                data-event-type="meeting"
                                data-event-status="upcoming"
                            >

                                <span class="wm-project-calendar-page__agenda-event-icon is-meeting">
                                    <i class="ph ph-users-three"></i>
                                </span>

                                <span class="wm-project-calendar-page__agenda-event-content">

                                    <strong>
                                        Stakeholder Preparation
                                    </strong>

                                    <small>
                                        3:00 PM · Dr. Sarah Wilson
                                    </small>

                                </span>

                                <span class="wm-project-calendar-page__agenda-status is-upcoming">
                                    Upcoming
                                </span>

                            </button>

                        </div>

                    </div>


                    <div class="wm-project-calendar-page__agenda-date">

                        <div class="wm-project-calendar-page__agenda-date-label">

                            <strong>30</strong>

                            <span>
                                Sep
                                <small>Wednesday</small>
                            </span>

                        </div>

                        <div class="wm-project-calendar-page__agenda-events">

                            <button
                                type="button"
                                class="wm-project-calendar-page__agenda-event"
                                data-event-type="milestone"
                                data-event-status="upcoming"
                            >

                                <span class="wm-project-calendar-page__agenda-event-icon is-milestone">
                                    <i class="ph ph-flag"></i>
                                </span>

                                <span class="wm-project-calendar-page__agenda-event-content">

                                    <strong>
                                        Stakeholder Review
                                    </strong>

                                    <small>
                                        All day · Dr. Sarah Wilson
                                    </small>

                                </span>

                                <span class="wm-project-calendar-page__agenda-status is-upcoming">
                                    Upcoming
                                </span>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Event Detail Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-calendar-page__modal"
            id="calendarEventModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <div class="wm-project-calendar-page__modal-title-wrap">

                            <span
                                class="wm-project-calendar-page__modal-icon"
                                data-modal-icon
                            >
                                <i class="ph ph-calendar-blank"></i>
                            </span>

                            <div>

                                <h5
                                    class="modal-title"
                                    data-modal-title
                                >
                                    Event Details
                                </h5>

                                <p data-modal-subtitle>
                                    Project event
                                </p>

                            </div>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>

                    <div class="modal-body">

                        <div class="wm-project-calendar-page__modal-details">

                            <div>
                                <span>Type</span>
                                <strong data-modal-type>—</strong>
                            </div>

                            <div>
                                <span>Status</span>
                                <strong data-modal-status>—</strong>
                            </div>

                            <div>
                                <span>Assignee</span>
                                <strong data-modal-owner>—</strong>
                            </div>

                            <div>
                                <span>Date</span>
                                <strong data-modal-date>—</strong>
                            </div>

                        </div>

                        <div class="wm-project-calendar-page__modal-description">

                            <span>Description</span>

                            <p data-modal-description>
                                Event information will appear here.
                            </p>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>

                        <button
                            type="button"
                            class="btn btn-primary"
                            data-modal-edit
                        >
                            <i class="ph ph-pencil-simple"></i>
                            Edit Event
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================================================
            Create Event Modal
        ========================================================== --}}
        <div
            class="modal fade wm-project-calendar-page__modal"
            id="createCalendarEventModal"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">

                    <div class="modal-header">

                        <div>

                            <h5 class="modal-title">
                                Create Calendar Event
                            </h5>

                            <p>
                                Add a task, milestone, meeting, or deadline.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>

                    <div class="modal-body">

                        <form id="createCalendarEventForm">

                            <div class="row g-3">

                                <div class="col-md-8">

                                    <label class="form-label">
                                        Event Title
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control"
                                        placeholder="Enter event title"
                                        required
                                    >

                                </div>


                                <div class="col-md-4">

                                    <label class="form-label">
                                        Type
                                    </label>

                                    <select
                                        name="type"
                                        class="form-select"
                                    >

                                        <option value="task">
                                            Task
                                        </option>

                                        <option value="milestone">
                                            Milestone
                                        </option>

                                        <option value="meeting">
                                            Meeting
                                        </option>

                                        <option value="deadline">
                                            Deadline
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Date
                                        <span>*</span>
                                    </label>

                                    <input
                                        type="date"
                                        name="date"
                                        class="form-control"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Time
                                    </label>

                                    <input
                                        type="time"
                                        name="time"
                                        class="form-control"
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Assignee
                                    </label>

                                    <select
                                        name="owner"
                                        class="form-select"
                                    >

                                        <option value="">
                                            Select assignee
                                        </option>

                                        <option value="sarah">
                                            Dr. Sarah Wilson
                                        </option>

                                        <option value="michael">
                                            Michael Johnson
                                        </option>

                                        <option value="anna">
                                            Anna Kim
                                        </option>

                                        <option value="robert">
                                            Robert Brown
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select
                                        name="status"
                                        class="form-select"
                                    >

                                        <option value="upcoming">
                                            Upcoming
                                        </option>

                                        <option value="progress">
                                            In Progress
                                        </option>

                                        <option value="completed">
                                            Completed
                                        </option>

                                    </select>

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Description
                                    </label>

                                    <textarea
                                        name="description"
                                        class="form-control"
                                        rows="4"
                                        placeholder="Add event details..."
                                    ></textarea>

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
                            data-save-calendar-event
                        >
                            <i class="ph ph-plus"></i>
                            Create Event
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

            const $search = $('#projectCalendarSearch');

            const $filterPanel = $('[data-filter-panel]');

            const $activeFilters = $('[data-active-filters]');

            const $sortMenu = $('[data-sort-menu]');


            // ---------------------------------------------------------
            // Data
            // ---------------------------------------------------------

            const eventLabels = {
                task: 'Task',
                milestone: 'Milestone',
                meeting: 'Meeting',
                deadline: 'Deadline'
            };


            const ownerLabels = {
                sarah: 'Dr. Sarah Wilson',
                michael: 'Michael Johnson',
                anna: 'Anna Kim',
                robert: 'Robert Brown'
            };


            const statusLabels = {
                completed: 'Completed',
                progress: 'In Progress',
                upcoming: 'Upcoming',
                overdue: 'Overdue'
            };


            // ---------------------------------------------------------
            // Notice
            // ---------------------------------------------------------

            function showNotice(title, text, icon) {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: icon || 'info',
                        confirmButtonColor: '#2563EB'
                    });

                    return;
                }

                alert(title + '\n\n' + text);

            }


            // ---------------------------------------------------------
            // Filters
            // ---------------------------------------------------------

            function getFilters() {

                return {
                    type: $('#calendarTypeFilter').val(),
                    owner: $('#calendarAssigneeFilter').val(),
                    status: $('#calendarStatusFilter').val(),
                    search: $.trim($search.val()).toLowerCase()
                };

            }


            function updateFilterCount() {

                const filters = getFilters();

                let count = 0;

                if (filters.type) {
                    count++;
                }

                if (filters.owner) {
                    count++;
                }

                if (filters.status) {
                    count++;
                }

                $('[data-filter-count]').text(count);

            }


            function updateActiveFilters() {

                const filters = getFilters();

                $activeFilters.empty();


                if (filters.type) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-calendar-page__filter-chip"
                        data-remove-filter="type"
                    >
                        ${eventLabels[filters.type]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.owner) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-calendar-page__filter-chip"
                        data-remove-filter="owner"
                    >
                        ${ownerLabels[filters.owner]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.status) {

                    $activeFilters.append(`
                    <button
                        type="button"
                        class="wm-project-calendar-page__filter-chip"
                        data-remove-filter="status"
                    >
                        ${statusLabels[filters.status]}
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }


                if (filters.search) {

                    $activeFilters.prepend(`
                    <button
                        type="button"
                        class="wm-project-calendar-page__filter-chip"
                        data-remove-search
                    >
                        Search: "${$search.val()}"
                        <i class="ph ph-x"></i>
                    </button>
                `);

                }

            }


            // ---------------------------------------------------------
            // Apply Filters
            // ---------------------------------------------------------

            function applyFilters() {

                const filters = getFilters();

                $('.wm-project-calendar-page__event').each(function () {

                    const $event = $(this);

                    const type = $event.data('event-type');

                    const status = $event.data('event-status');

                    const owner = $event.data('event-owner');

                    const title = (
                        $event.data('event-title') ||
                        $event.text()
                    ).toString().toLowerCase();


                    let visible = true;


                    if (
                        filters.type &&
                        type !== filters.type
                    ) {
                        visible = false;
                    }


                    if (
                        filters.status &&
                        status !== filters.status
                    ) {
                        visible = false;
                    }


                    if (
                        filters.owner &&
                        owner !== filters.owner
                    ) {
                        visible = false;
                    }


                    if (
                        filters.search &&
                        title.indexOf(filters.search) === -1
                    ) {
                        visible = false;
                    }


                    $event.toggleClass(
                        'is-hidden',
                        !visible
                    );

                });


                $('.wm-project-calendar-page__agenda-event').each(function () {

                    const $event = $(this);

                    const type = $event.data('event-type');

                    const status = $event.data('event-status');

                    const text = $event.text().toLowerCase();

                    let visible = true;


                    if (
                        filters.type &&
                        type !== filters.type
                    ) {
                        visible = false;
                    }


                    if (
                        filters.status &&
                        status !== filters.status
                    ) {
                        visible = false;
                    }


                    if (
                        filters.search &&
                        text.indexOf(filters.search) === -1
                    ) {
                        visible = false;
                    }


                    $event.toggleClass(
                        'is-hidden',
                        !visible
                    );

                });


                updateFilterCount();

                updateActiveFilters();

            }


            // ---------------------------------------------------------
            // View Switching
            // ---------------------------------------------------------

            function switchCalendarView(view) {

                $('[data-calendar-view]')
                    .removeClass('is-active');

                $('[data-calendar-view="' + view + '"]')
                    .addClass('is-active');


                $('[data-calendar-month-view]')
                    .removeClass('is-visible');

                $('[data-calendar-week-view]')
                    .removeClass('is-visible');

                $('[data-calendar-agenda-view]')
                    .removeClass('is-visible');


                if (view === 'month') {

                    $('[data-calendar-month-view]')
                        .addClass('is-visible');

                }


                if (view === 'week') {

                    $('[data-calendar-week-view]')
                        .addClass('is-visible');

                }


                if (view === 'agenda') {

                    $('[data-calendar-agenda-view]')
                        .addClass('is-visible');

                }

            }


            // ---------------------------------------------------------
            // Calendar Month
            // ---------------------------------------------------------

            let currentMonth = 8;

            let currentYear = 2026;


            const monthNames = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            ];


            function updateCalendarTitle() {

                $('[data-calendar-month]').text(
                    monthNames[currentMonth] +
                    ' ' +
                    currentYear
                );

            }


            function changeMonth(direction) {

                currentMonth += direction;


                if (currentMonth < 0) {

                    currentMonth = 11;
                    currentYear--;

                }


                if (currentMonth > 11) {

                    currentMonth = 0;
                    currentYear++;

                }


                updateCalendarTitle();

            }


            // ---------------------------------------------------------
            // Summary Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-summary-filter]',
                function () {

                    const filter =
                        $(this).data('summary-filter');


                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $(this)
                        .addClass('is-active');


                    $('#calendarTypeFilter').val('');
                    $('#calendarStatusFilter').val('');


                    if (
                        filter === 'tasks' ||
                        filter === 'milestones' ||
                        filter === 'meetings'
                    ) {

                        $('#calendarTypeFilter')
                            .val(
                                filter === 'tasks'
                                    ? 'task'
                                    : filter === 'milestones'
                                        ? 'milestone'
                                        : 'meeting'
                            );

                    }


                    if (filter === 'overdue') {

                        $('#calendarStatusFilter')
                            .val('overdue');

                    }


                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Search
            // ---------------------------------------------------------

            $search.on('input', function () {

                $('[data-search-clear]')
                    .toggleClass(
                        'is-visible',
                        $(this).val().length > 0
                    );

                applyFilters();

            });


            $(document).on(
                'click',
                '[data-search-clear]',
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

                    $filterPanel.toggleClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Filter Changes
            // ---------------------------------------------------------

            $(document).on(
                'change',
                '#calendarTypeFilter, #calendarAssigneeFilter, #calendarStatusFilter',
                function () {

                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // Remove Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-remove-filter]',
                function () {

                    const filter =
                        $(this).data('remove-filter');


                    if (filter === 'type') {
                        $('#calendarTypeFilter').val('');
                    }

                    if (filter === 'owner') {
                        $('#calendarAssigneeFilter').val('');
                    }

                    if (filter === 'status') {
                        $('#calendarStatusFilter').val('');
                    }


                    applyFilters();

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
            // Clear Filters
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-clear-filters]',
                function () {

                    $('#calendarTypeFilter').val('');

                    $('#calendarAssigneeFilter').val('');

                    $('#calendarStatusFilter').val('');

                    $search.val('');

                    $('[data-summary-filter]')
                        .removeClass('is-active');

                    $('[data-summary-filter="all"]')
                        .addClass('is-active');

                    $('[data-search-clear]')
                        .removeClass('is-visible');

                    applyFilters();

                }
            );


            // ---------------------------------------------------------
            // View
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-calendar-view]',
                function () {

                    switchCalendarView(
                        $(this).data('calendar-view')
                    );

                }
            );


            // ---------------------------------------------------------
            // Calendar Navigation
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-calendar-nav]',
                function () {

                    const action =
                        $(this).data('calendar-nav');


                    if (action === 'previous') {

                        changeMonth(-1);

                    }


                    if (action === 'next') {

                        changeMonth(1);

                    }


                    if (action === 'today') {

                        currentMonth = 8;

                        currentYear = 2026;

                        updateCalendarTitle();

                    }

                }
            );


            // ---------------------------------------------------------
            // Header Actions
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-calendar-header-action]',
                function () {

                    const action =
                        $(this).data('calendar-header-action');


                    if (action === 'today') {

                        currentMonth = 8;

                        currentYear = 2026;

                        updateCalendarTitle();

                        showNotice(
                            'Calendar updated',
                            'The calendar has been returned to the current project period.',
                            'success'
                        );

                        return;

                    }


                    if (action === 'export') {

                        showNotice(
                            'Export Calendar',
                            'The calendar export workflow can be connected to your backend.'
                        );

                        return;

                    }


                    if (action === 'create') {

                        const modalElement =
                            document.getElementById(
                                'createCalendarEventModal'
                            );


                        if (
                            modalElement &&
                            typeof bootstrap !== 'undefined'
                        ) {

                            bootstrap.Modal
                                .getOrCreateInstance(modalElement)
                                .show();

                        }

                    }

                }
            );


            // ---------------------------------------------------------
            // Event Detail
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-event-title]',
                function () {

                    const $event = $(this);

                    const title =
                        $event.data('event-title');

                    const type =
                        $event.data('event-type');

                    const status =
                        $event.data('event-status');

                    const owner =
                        $event.data('event-owner');


                    $('[data-modal-title]')
                        .text(title);

                    $('[data-modal-type]')
                        .text(
                            eventLabels[type] || 'Event'
                        );

                    $('[data-modal-status]')
                        .text(
                            statusLabels[status] || 'Upcoming'
                        );

                    $('[data-modal-owner]')
                        .text(
                            ownerLabels[owner] || 'Project Team'
                        );

                    $('[data-modal-date]')
                        .text('Project schedule');

                    $('[data-modal-description]')
                        .text(
                            title +
                            ' is scheduled as part of the Climate Change Research Initiative.'
                        );


                    const iconMap = {
                        task: 'ph-check-square',
                        milestone: 'ph-flag',
                        meeting: 'ph-users-three',
                        deadline: 'ph-clock'
                    };


                    $('[data-modal-icon]')
                        .html(
                            '<i class="ph ' +
                            (iconMap[type] || 'ph-calendar-blank') +
                            '"></i>'
                        );


                    const modalElement =
                        document.getElementById(
                            'calendarEventModal'
                        );


                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(modalElement)
                            .show();

                    }

                }
            );


            // ---------------------------------------------------------
            // Agenda Event
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '.wm-project-calendar-page__agenda-event',
                function () {

                    const $event = $(this);

                    const type =
                        $event.data('event-type');

                    const status =
                        $event.data('event-status');

                    const title =
                        $.trim(
                            $event
                                .find(
                                    '.wm-project-calendar-page__agenda-event-content strong'
                                )
                                .text()
                        );


                    $('[data-modal-title]')
                        .text(title);

                    $('[data-modal-type]')
                        .text(
                            eventLabels[type] || 'Event'
                        );

                    $('[data-modal-status]')
                        .text(
                            statusLabels[status] || 'Upcoming'
                        );

                    $('[data-modal-description]')
                        .text(
                            title +
                            ' is scheduled in the project calendar.'
                        );


                    const modalElement =
                        document.getElementById(
                            'calendarEventModal'
                        );


                    if (
                        modalElement &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(modalElement)
                            .show();

                    }

                }
            );


            // ---------------------------------------------------------
            // Create Event
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-save-calendar-event]',
                function () {

                    const $form =
                        $('#createCalendarEventForm');


                    if (!$form[0].checkValidity()) {

                        $form[0].reportValidity();

                        return;

                    }


                    const payload = {

                        title: $form
                            .find('[name="title"]')
                            .val(),

                        type: $form
                            .find('[name="type"]')
                            .val(),

                        date: $form
                            .find('[name="date"]')
                            .val(),

                        time: $form
                            .find('[name="time"]')
                            .val(),

                        owner: $form
                            .find('[name="owner"]')
                            .val(),

                        status: $form
                            .find('[name="status"]')
                            .val(),

                        description: $form
                            .find('[name="description"]')
                            .val()

                    };


                    console.log(
                        'Create calendar event:',
                        payload
                    );


                    const modalElement =
                        document.getElementById(
                            'createCalendarEventModal'
                        );


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
                        'Event created',
                        'The calendar event has been created successfully.',
                        'success'
                    );

                }
            );


            // ---------------------------------------------------------
            // Edit Modal Event
            // ---------------------------------------------------------

            $(document).on(
                'click',
                '[data-modal-edit]',
                function () {

                    const detailModal =
                        document.getElementById(
                            'calendarEventModal'
                        );


                    if (
                        detailModal &&
                        typeof bootstrap !== 'undefined'
                    ) {

                        bootstrap.Modal
                            .getOrCreateInstance(detailModal)
                            .hide();

                    }


                    showNotice(
                        'Edit Event',
                        'The event editor can be connected to your backend here.'
                    );

                }
            );


            // ---------------------------------------------------------
            // Outside Click
            // ---------------------------------------------------------

            $(document).on(
                'click',
                function () {

                    $filterPanel.removeClass('is-open');

                }
            );


            // ---------------------------------------------------------
            // Stop Filter Propagation
            // ---------------------------------------------------------

            $filterPanel.on(
                'click',
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

                    if (event.key === 'Escape') {

                        $filterPanel.removeClass('is-open');

                    }

                }
            );


            // ---------------------------------------------------------
            // Initial
            // ---------------------------------------------------------

            switchCalendarView('month');

            updateCalendarTitle();

            applyFilters();

        });

    </script>
@endpush
