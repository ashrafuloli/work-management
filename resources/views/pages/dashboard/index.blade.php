@extends('layout.app')

@section('main')

    <div class="wm-dashboard-page">

        {{-- =====================================================
            Page Header
        ====================================================== --}}

        <div class="wm-dashboard__header">

            <div class="wm-dashboard__header-content">

                <div class="wm-dashboard__eyebrow">
                    <i class="ph ph-sparkle"></i>
                    Workspace overview
                </div>

                <h1 class="wm-dashboard__title">
                    Good morning, Alex
                </h1>

                <p class="wm-dashboard__description">
                    Here's what's happening across your projects today.
                </p>

            </div>

            <div class="wm-dashboard__header-actions">

                <button
                    type="button"
                    class="btn btn-light wm-dashboard__date-button"
                    id="dashboard-date-filter"
                >
                    <i class="ph ph-calendar-blank"></i>
                    <span>Sep 24, 2026</span>
                    <i class="ph ph-caret-down"></i>
                </button>

                <a
                    href="{{ route('projects.create') }}"
                    class="btn btn-primary"
                >
                    <i class="ph ph-plus"></i>
                    New Project
                </a>

            </div>

        </div>


        {{-- =====================================================
            KPI Cards
        ====================================================== --}}

        <div class="wm-dashboard__stats">

            {{-- Total Projects --}}

            <div class="wm-dashboard__stat-card">

                <div class="wm-dashboard__stat-top">

                    <div class="wm-dashboard__stat-icon wm-dashboard__stat-icon--primary">
                        <i class="ph ph-kanban"></i>
                    </div>

                    <span class="wm-dashboard__stat-trend wm-dashboard__stat-trend--positive">
                    <i class="ph ph-trend-up"></i>
                    12.5%
                </span>

                </div>

                <div class="wm-dashboard__stat-value">
                    24
                </div>

                <div class="wm-dashboard__stat-label">
                    Total Projects
                </div>

                <div class="wm-dashboard__stat-footer">
                    <span>Compared with last month</span>
                </div>

            </div>


            {{-- Active Tasks --}}

            <div class="wm-dashboard__stat-card">

                <div class="wm-dashboard__stat-top">

                    <div class="wm-dashboard__stat-icon wm-dashboard__stat-icon--blue">
                        <i class="ph ph-check-square-offset"></i>
                    </div>

                    <span class="wm-dashboard__stat-trend wm-dashboard__stat-trend--positive">
                    <i class="ph ph-trend-up"></i>
                    8.2%
                </span>

                </div>

                <div class="wm-dashboard__stat-value">
                    86
                </div>

                <div class="wm-dashboard__stat-label">
                    Active Tasks
                </div>

                <div class="wm-dashboard__stat-footer">
                    <span>18 due this week</span>
                </div>

            </div>


            {{-- Completed Tasks --}}

            <div class="wm-dashboard__stat-card">

                <div class="wm-dashboard__stat-top">

                    <div class="wm-dashboard__stat-icon wm-dashboard__stat-icon--green">
                        <i class="ph ph-check-circle"></i>
                    </div>

                    <span class="wm-dashboard__stat-trend wm-dashboard__stat-trend--positive">
                    <i class="ph ph-trend-up"></i>
                    16.4%
                </span>

                </div>

                <div class="wm-dashboard__stat-value">
                    142
                </div>

                <div class="wm-dashboard__stat-label">
                    Completed Tasks
                </div>

                <div class="wm-dashboard__stat-footer">
                    <span>34 completed this month</span>
                </div>

            </div>


            {{-- Hours Tracked --}}

            <div class="wm-dashboard__stat-card">

                <div class="wm-dashboard__stat-top">

                    <div class="wm-dashboard__stat-icon wm-dashboard__stat-icon--purple">
                        <i class="ph ph-clock"></i>
                    </div>

                    <span class="wm-dashboard__stat-trend wm-dashboard__stat-trend--neutral">
                    This week
                </span>

                </div>

                <div class="wm-dashboard__stat-value">
                    38h 24m
                </div>

                <div class="wm-dashboard__stat-label">
                    Time Tracked
                </div>

                <div class="wm-dashboard__stat-footer">
                    <span>Target: 40 hours</span>
                </div>

            </div>

        </div>


        {{-- =====================================================
            Main Dashboard Grid
        ====================================================== --}}

        <div class="wm-dashboard__grid">


            {{-- =================================================
                Project Progress
            ================================================== --}}

            <section class="wm-dashboard__card wm-dashboard__card--projects">

                <div class="wm-dashboard__card-header">

                    <div>

                        <h2 class="wm-dashboard__card-title">
                            Project Progress
                        </h2>

                        <p class="wm-dashboard__card-description">
                            Current progress across active projects.
                        </p>

                    </div>

                    <a
                        href="{{ route('projects.index') }}"
                        class="wm-dashboard__card-link"
                    >
                        View all
                        <i class="ph ph-arrow-right"></i>
                    </a>

                </div>


                <div class="wm-dashboard__project-list">

                    {{-- Project 01 --}}

                    <div class="wm-dashboard__project">

                        <div class="wm-dashboard__project-main">

                            <div class="wm-dashboard__project-icon wm-dashboard__project-icon--blue">
                                <i class="ph ph-flask"></i>
                            </div>

                            <div class="wm-dashboard__project-info">

                                <a
                                    href="{{ route('projects.overview', ['project' => 'research-platform']) }}"
                                    class="wm-dashboard__project-title"
                                >
                                    Research Platform
                                </a>

                                <span class="wm-dashboard__project-meta">
                                18 tasks · 6 members
                            </span>

                            </div>

                        </div>

                        <div class="wm-dashboard__project-progress">

                            <div class="wm-dashboard__progress-header">

                                <span>78%</span>

                                <span>
                                Due Oct 12
                            </span>

                            </div>

                            <div class="wm-dashboard__progress">
                            <span
                                class="wm-dashboard__progress-bar"
                                style="width: 78%;"
                            ></span>
                            </div>

                        </div>

                    </div>


                    {{-- Project 02 --}}

                    <div class="wm-dashboard__project">

                        <div class="wm-dashboard__project-main">

                            <div class="wm-dashboard__project-icon wm-dashboard__project-icon--purple">
                                <i class="ph ph-chart-line-up"></i>
                            </div>

                            <div class="wm-dashboard__project-info">

                                <a
                                    href="{{ route('projects.overview', ['project' => 'data-analysis']) }}"
                                    class="wm-dashboard__project-title"
                                >
                                    Data Analysis
                                </a>

                                <span class="wm-dashboard__project-meta">
                                24 tasks · 4 members
                            </span>

                            </div>

                        </div>

                        <div class="wm-dashboard__project-progress">

                            <div class="wm-dashboard__progress-header">

                                <span>62%</span>

                                <span>
                                Due Oct 18
                            </span>

                            </div>

                            <div class="wm-dashboard__progress">
                            <span
                                class="wm-dashboard__progress-bar"
                                style="width: 62%;"
                            ></span>
                            </div>

                        </div>

                    </div>


                    {{-- Project 03 --}}

                    <div class="wm-dashboard__project">

                        <div class="wm-dashboard__project-main">

                            <div class="wm-dashboard__project-icon wm-dashboard__project-icon--green">
                                <i class="ph ph-users-three"></i>
                            </div>

                            <div class="wm-dashboard__project-info">

                                <a
                                    href="{{ route('projects.overview', ['project' => 'team-expansion']) }}"
                                    class="wm-dashboard__project-title"
                                >
                                    Team Expansion
                                </a>

                                <span class="wm-dashboard__project-meta">
                                12 tasks · 8 members
                            </span>

                            </div>

                        </div>

                        <div class="wm-dashboard__project-progress">

                            <div class="wm-dashboard__progress-header">

                                <span>45%</span>

                                <span>
                                Due Nov 02
                            </span>

                            </div>

                            <div class="wm-dashboard__progress">
                            <span
                                class="wm-dashboard__progress-bar"
                                style="width: 45%;"
                            ></span>
                            </div>

                        </div>

                    </div>


                    {{-- Project 04 --}}

                    <div class="wm-dashboard__project">

                        <div class="wm-dashboard__project-main">

                            <div class="wm-dashboard__project-icon wm-dashboard__project-icon--orange">
                                <i class="ph ph-database"></i>
                            </div>

                            <div class="wm-dashboard__project-info">

                                <a
                                    href="{{ route('projects.overview', ['project' => 'data-migration']) }}"
                                    class="wm-dashboard__project-title"
                                >
                                    Data Migration
                                </a>

                                <span class="wm-dashboard__project-meta">
                                31 tasks · 5 members
                            </span>

                            </div>

                        </div>

                        <div class="wm-dashboard__project-progress">

                            <div class="wm-dashboard__progress-header">

                                <span>31%</span>

                                <span>
                                Due Nov 14
                            </span>

                            </div>

                            <div class="wm-dashboard__progress">
                            <span
                                class="wm-dashboard__progress-bar"
                                style="width: 31%;"
                            ></span>
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =================================================
                Weekly Activity Chart
            ================================================== --}}

            <section class="wm-dashboard__card wm-dashboard__card--activity">

                <div class="wm-dashboard__card-header">

                    <div>

                        <h2 class="wm-dashboard__card-title">
                            Weekly Activity
                        </h2>

                        <p class="wm-dashboard__card-description">
                            Tasks completed during the week.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="wm-dashboard__chart-filter"
                        id="activity-filter"
                    >
                        This week
                        <i class="ph ph-caret-down"></i>
                    </button>

                </div>

                <div class="wm-dashboard__chart-wrapper">
                    <canvas id="weeklyActivityChart"></canvas>
                </div>

            </section>


            {{-- =================================================
                My Tasks
            ================================================== --}}

            <section class="wm-dashboard__card wm-dashboard__card--tasks">

                <div class="wm-dashboard__card-header">

                    <div>

                        <h2 class="wm-dashboard__card-title">
                            My Tasks
                        </h2>

                        <p class="wm-dashboard__card-description">
                            Tasks that need your attention.
                        </p>

                    </div>

                    <a
                        href="{{ route('tasks.index') }}"
                        class="wm-dashboard__card-link"
                    >
                        View all
                        <i class="ph ph-arrow-right"></i>
                    </a>

                </div>


                <div class="wm-dashboard__task-list">

                    {{-- Task 01 --}}

                    <div class="wm-dashboard__task">

                        <div class="wm-dashboard__task-check">
                            <input
                                type="checkbox"
                                class="wm-dashboard__task-checkbox"
                                data-task-id="1"
                            >
                        </div>

                        <div class="wm-dashboard__task-content">

                            <a
                                href="{{ route('tasks.detail', ['task' => 'finalize-research-report']) }}"
                                class="wm-dashboard__task-title"
                            >
                                Finalize research report
                            </a>

                            <div class="wm-dashboard__task-meta">

                            <span class="wm-dashboard__task-project">
                                <i class="ph ph-kanban"></i>
                                Research Platform
                            </span>

                                <span class="wm-dashboard__task-dot"></span>

                                <span class="wm-dashboard__task-date wm-dashboard__task-date--danger">
                                <i class="ph ph-calendar-blank"></i>
                                Today
                            </span>

                            </div>

                        </div>

                        <span class="wm-dashboard__priority wm-dashboard__priority--high">
                        High
                    </span>

                    </div>


                    {{-- Task 02 --}}

                    <div class="wm-dashboard__task">

                        <div class="wm-dashboard__task-check">
                            <input
                                type="checkbox"
                                class="wm-dashboard__task-checkbox"
                                data-task-id="2"
                            >
                        </div>

                        <div class="wm-dashboard__task-content">

                            <a
                                href="{{ route('tasks.detail', ['task' => 'review-data-analysis']) }}"
                                class="wm-dashboard__task-title"
                            >
                                Review data analysis
                            </a>

                            <div class="wm-dashboard__task-meta">

                            <span class="wm-dashboard__task-project">
                                <i class="ph ph-chart-line-up"></i>
                                Data Analysis
                            </span>

                                <span class="wm-dashboard__task-dot"></span>

                                <span class="wm-dashboard__task-date">
                                <i class="ph ph-calendar-blank"></i>
                                Sep 26
                            </span>

                            </div>

                        </div>

                        <span class="wm-dashboard__priority wm-dashboard__priority--medium">
                        Medium
                    </span>

                    </div>


                    {{-- Task 03 --}}

                    <div class="wm-dashboard__task">

                        <div class="wm-dashboard__task-check">
                            <input
                                type="checkbox"
                                class="wm-dashboard__task-checkbox"
                                data-task-id="3"
                            >
                        </div>

                        <div class="wm-dashboard__task-content">

                            <a
                                href="{{ route('tasks.detail', ['task' => 'team-meeting']) }}"
                                class="wm-dashboard__task-title"
                            >
                                Prepare team meeting agenda
                            </a>

                            <div class="wm-dashboard__task-meta">

                            <span class="wm-dashboard__task-project">
                                <i class="ph ph-users-three"></i>
                                Team Expansion
                            </span>

                                <span class="wm-dashboard__task-dot"></span>

                                <span class="wm-dashboard__task-date">
                                <i class="ph ph-calendar-blank"></i>
                                Sep 27
                            </span>

                            </div>

                        </div>

                        <span class="wm-dashboard__priority wm-dashboard__priority--low">
                        Low
                    </span>

                    </div>


                    {{-- Task 04 --}}

                    <div class="wm-dashboard__task">

                        <div class="wm-dashboard__task-check">
                            <input
                                type="checkbox"
                                class="wm-dashboard__task-checkbox"
                                data-task-id="4"
                            >
                        </div>

                        <div class="wm-dashboard__task-content">

                            <a
                                href="{{ route('tasks.detail', ['task' => 'migration-plan']) }}"
                                class="wm-dashboard__task-title"
                            >
                                Review migration plan
                            </a>

                            <div class="wm-dashboard__task-meta">

                            <span class="wm-dashboard__task-project">
                                <i class="ph ph-database"></i>
                                Data Migration
                            </span>

                                <span class="wm-dashboard__task-dot"></span>

                                <span class="wm-dashboard__task-date">
                                <i class="ph ph-calendar-blank"></i>
                                Sep 29
                            </span>

                            </div>

                        </div>

                        <span class="wm-dashboard__priority wm-dashboard__priority--medium">
                        Medium
                    </span>

                    </div>

                </div>

            </section>


            {{-- =================================================
                Upcoming Deadlines
            ================================================== --}}

            <section class="wm-dashboard__card wm-dashboard__card--deadlines">

                <div class="wm-dashboard__card-header">

                    <div>

                        <h2 class="wm-dashboard__card-title">
                            Upcoming Deadlines
                        </h2>

                        <p class="wm-dashboard__card-description">
                            Important dates coming up.
                        </p>

                    </div>

                    <a
                        href="{{ route('calendar') }}"
                        class="wm-dashboard__card-link"
                    >
                        Calendar
                        <i class="ph ph-arrow-right"></i>
                    </a>

                </div>


                <div class="wm-dashboard__deadline-list">

                    <div class="wm-dashboard__deadline">

                        <div class="wm-dashboard__deadline-date">

                        <span class="wm-dashboard__deadline-month">
                            SEP
                        </span>

                            <strong>
                                26
                            </strong>

                        </div>

                        <div class="wm-dashboard__deadline-content">

                            <strong>
                                Research report review
                            </strong>

                            <span>
                            Research Platform
                        </span>

                        </div>

                        <span class="wm-dashboard__deadline-status wm-dashboard__deadline-status--warning">
                        2 days
                    </span>

                    </div>


                    <div class="wm-dashboard__deadline">

                        <div class="wm-dashboard__deadline-date">

                        <span class="wm-dashboard__deadline-month">
                            SEP
                        </span>

                            <strong>
                                29
                            </strong>

                        </div>

                        <div class="wm-dashboard__deadline-content">

                            <strong>
                                Migration planning
                            </strong>

                            <span>
                            Data Migration
                        </span>

                        </div>

                        <span class="wm-dashboard__deadline-status">
                        5 days
                    </span>

                    </div>


                    <div class="wm-dashboard__deadline">

                        <div class="wm-dashboard__deadline-date">

                        <span class="wm-dashboard__deadline-month">
                            OCT
                        </span>

                            <strong>
                                02
                            </strong>

                        </div>

                        <div class="wm-dashboard__deadline-content">

                            <strong>
                                Sprint review
                            </strong>

                            <span>
                            Team Expansion
                        </span>

                        </div>

                        <span class="wm-dashboard__deadline-status">
                        8 days
                    </span>

                    </div>

                </div>

            </section>


            {{-- =================================================
                Team Workload
            ================================================== --}}

            <section class="wm-dashboard__card wm-dashboard__card--team">

                <div class="wm-dashboard__card-header">

                    <div>

                        <h2 class="wm-dashboard__card-title">
                            Team Workload
                        </h2>

                        <p class="wm-dashboard__card-description">
                            Current task distribution.
                        </p>

                    </div>

                    <a
                        href="{{ route('team.index') }}"
                        class="wm-dashboard__card-link"
                    >
                        View team
                        <i class="ph ph-arrow-right"></i>
                    </a>

                </div>


                <div class="wm-dashboard__team-list">

                    <div class="wm-dashboard__member">

                        <div class="wm-dashboard__member-avatar wm-dashboard__member-avatar--blue">
                            AM
                        </div>

                        <div class="wm-dashboard__member-info">

                            <strong>
                                Alex Morgan
                            </strong>

                            <span>
                            14 tasks
                        </span>

                        </div>

                        <div class="wm-dashboard__member-progress">

                            <div class="wm-dashboard__member-progress-bar">
                                <span style="width: 82%;"></span>
                            </div>

                            <strong>
                                82%
                            </strong>

                        </div>

                    </div>


                    <div class="wm-dashboard__member">

                        <div class="wm-dashboard__member-avatar wm-dashboard__member-avatar--purple">
                            SJ
                        </div>

                        <div class="wm-dashboard__member-info">

                            <strong>
                                Sarah Johnson
                            </strong>

                            <span>
                            18 tasks
                        </span>

                        </div>

                        <div class="wm-dashboard__member-progress">

                            <div class="wm-dashboard__member-progress-bar">
                                <span style="width: 74%;"></span>
                            </div>

                            <strong>
                                74%
                            </strong>

                        </div>

                    </div>


                    <div class="wm-dashboard__member">

                        <div class="wm-dashboard__member-avatar wm-dashboard__member-avatar--green">
                            DW
                        </div>

                        <div class="wm-dashboard__member-info">

                            <strong>
                                David Wilson
                            </strong>

                            <span>
                            11 tasks
                        </span>

                        </div>

                        <div class="wm-dashboard__member-progress">

                            <div class="wm-dashboard__member-progress-bar">
                                <span style="width: 61%;"></span>
                            </div>

                            <strong>
                                61%
                            </strong>

                        </div>

                    </div>


                    <div class="wm-dashboard__member">

                        <div class="wm-dashboard__member-avatar wm-dashboard__member-avatar--orange">
                            EM
                        </div>

                        <div class="wm-dashboard__member-info">

                            <strong>
                                Emma Miller
                            </strong>

                            <span>
                            9 tasks
                        </span>

                        </div>

                        <div class="wm-dashboard__member-progress">

                            <div class="wm-dashboard__member-progress-bar">
                                <span style="width: 48%;"></span>
                            </div>

                            <strong>
                                48%
                            </strong>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =================================================
                Recent Activity
            ================================================== --}}

            <section class="wm-dashboard__card wm-dashboard__card--activity-feed">

                <div class="wm-dashboard__card-header">

                    <div>

                        <h2 class="wm-dashboard__card-title">
                            Recent Activity
                        </h2>

                        <p class="wm-dashboard__card-description">
                            Latest workspace updates.
                        </p>

                    </div>

                    <a
                        href="{{ route('activity') }}"
                        class="wm-dashboard__card-link"
                    >
                        View activity
                        <i class="ph ph-arrow-right"></i>
                    </a>

                </div>


                <div class="wm-dashboard__activity-list">

                    <div class="wm-dashboard__activity-item">

                        <div class="wm-dashboard__activity-avatar wm-dashboard__activity-avatar--blue">
                            AM
                        </div>

                        <div class="wm-dashboard__activity-content">

                            <p>
                                <strong>Alex Morgan</strong>
                                completed
                                <a href="#">
                                    Final research review
                                </a>
                            </p>

                            <span>
                            12 minutes ago
                        </span>

                        </div>

                    </div>


                    <div class="wm-dashboard__activity-item">

                        <div class="wm-dashboard__activity-avatar wm-dashboard__activity-avatar--purple">
                            SJ
                        </div>

                        <div class="wm-dashboard__activity-content">

                            <p>
                                <strong>Sarah Johnson</strong>
                                commented on
                                <a href="#">
                                    Data analysis
                                </a>
                            </p>

                            <span>
                            34 minutes ago
                        </span>

                        </div>

                    </div>


                    <div class="wm-dashboard__activity-item">

                        <div class="wm-dashboard__activity-avatar wm-dashboard__activity-avatar--green">
                            DW
                        </div>

                        <div class="wm-dashboard__activity-content">

                            <p>
                                <strong>David Wilson</strong>
                                moved task to
                                <strong>In Review</strong>
                            </p>

                            <span>
                            1 hour ago
                        </span>

                        </div>

                    </div>


                    <div class="wm-dashboard__activity-item">

                        <div class="wm-dashboard__activity-avatar wm-dashboard__activity-avatar--orange">
                            EM
                        </div>

                        <div class="wm-dashboard__activity-content">

                            <p>
                                <strong>Emma Miller</strong>
                                uploaded a new file
                                <a href="#">
                                    research-data.csv
                                </a>
                            </p>

                            <span>
                            2 hours ago
                        </span>

                        </div>

                    </div>

                </div>

            </section>


        </div>


        {{-- =====================================================
            Quick Actions
        ====================================================== --}}

        <section class="wm-dashboard__quick-actions">

            <div class="wm-dashboard__quick-action-header">

                <div>

                    <h2 class="wm-dashboard__section-title">
                        Quick Actions
                    </h2>

                    <p class="wm-dashboard__section-description">
                        Quickly jump into your most common workflows.
                    </p>

                </div>

            </div>


            <div class="wm-dashboard__quick-action-grid">

                <a
                    href="{{ route('projects.create') }}"
                    class="wm-dashboard__quick-action"
                >
                <span class="wm-dashboard__quick-action-icon wm-dashboard__quick-action-icon--blue">
                    <i class="ph ph-plus"></i>
                </span>

                    <span class="wm-dashboard__quick-action-content">
                    <strong>Create Project</strong>
                    <small>Start a new project</small>
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </a>


                <a
                    href="{{ route('tasks.index') }}"
                    class="wm-dashboard__quick-action"
                >
                <span class="wm-dashboard__quick-action-icon wm-dashboard__quick-action-icon--green">
                    <i class="ph ph-check-square-offset"></i>
                </span>

                    <span class="wm-dashboard__quick-action-content">
                    <strong>Manage Tasks</strong>
                    <small>View and organize tasks</small>
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </a>


                <a
                    href="{{ route('team.index') }}"
                    class="wm-dashboard__quick-action"
                >
                <span class="wm-dashboard__quick-action-icon wm-dashboard__quick-action-icon--purple">
                    <i class="ph ph-users-three"></i>
                </span>

                    <span class="wm-dashboard__quick-action-content">
                    <strong>Manage Team</strong>
                    <small>View team members</small>
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </a>


                <a
                    href="{{ route('reports.index') }}"
                    class="wm-dashboard__quick-action"
                >
                <span class="wm-dashboard__quick-action-icon wm-dashboard__quick-action-icon--orange">
                    <i class="ph ph-chart-line-up"></i>
                </span>

                    <span class="wm-dashboard__quick-action-content">
                    <strong>View Reports</strong>
                    <small>Analyze workspace data</small>
                </span>

                    <i class="ph ph-arrow-up-right"></i>
                </a>

            </div>

        </section>

    </div>

@endsection

@push('script')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        $(document).ready(function () {

            'use strict';


            // =========================================================
            // Weekly Activity Chart
            // =========================================================

            const chartElement = document.getElementById(
                'weeklyActivityChart'
            );

            if (chartElement) {

                new Chart(chartElement, {

                    type: 'line',

                    data: {

                        labels: [
                            'Mon',
                            'Tue',
                            'Wed',
                            'Thu',
                            'Fri',
                            'Sat',
                            'Sun'
                        ],

                        datasets: [
                            {
                                label: 'Completed Tasks',

                                data: [
                                    8,
                                    12,
                                    9,
                                    16,
                                    13,
                                    6,
                                    10
                                ],

                                borderWidth: 2,

                                tension: 0.4,

                                fill: true,

                                pointRadius: 4,

                                pointHoverRadius: 6
                            }
                        ]

                    },

                    options: {

                        responsive: true,

                        maintainAspectRatio: false,

                        interaction: {
                            intersect: false,
                            mode: 'index'
                        },

                        plugins: {

                            legend: {
                                display: false
                            },

                            tooltip: {
                                padding: 12,

                                displayColors: false,

                                callbacks: {

                                    label: function (context) {

                                        return (
                                            context.parsed.y +
                                            ' tasks completed'
                                        );

                                    }

                                }

                            }

                        },

                        scales: {

                            x: {

                                grid: {
                                    display: false
                                },

                                border: {
                                    display: false
                                },

                                ticks: {
                                    padding: 8
                                }

                            },

                            y: {

                                beginAtZero: true,

                                suggestedMax: 20,

                                ticks: {
                                    stepSize: 5,
                                    padding: 8
                                },

                                grid: {
                                    drawTicks: false
                                },

                                border: {
                                    display: false
                                }

                            }

                        }

                    }

                });

            }


            // =========================================================
            // Task Checkbox
            // =========================================================

            $(document).on(
                'change',
                '.wm-dashboard__task-checkbox',
                function () {

                    const $checkbox = $(this);

                    const $task = $checkbox.closest(
                        '.wm-dashboard__task'
                    );


                    if ($checkbox.is(':checked')) {

                        $task.addClass(
                            'is-completed'
                        );

                    } else {

                        $task.removeClass(
                            'is-completed'
                        );

                    }

                }
            );


            // =========================================================
            // Date Filter
            // =========================================================

            $(document).on(
                'click',
                '#dashboard-date-filter',
                function () {

                    const $button = $(this);

                    $button.toggleClass(
                        'is-active'
                    );

                }
            );


            // =========================================================
            // Activity Filter
            // =========================================================

            $(document).on(
                'click',
                '#activity-filter',
                function () {

                    const $button = $(this);

                    $button.toggleClass(
                        'is-active'
                    );

                }
            );


        });

    </script>

@endpush
