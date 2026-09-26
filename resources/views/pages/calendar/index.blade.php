@extends('layout.app')

@section('main')

    <div class="wm-calendar-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-calendar-page__header">

            <div class="wm-calendar-page__header-left">

                <div class="wm-calendar-page__breadcrumb">
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Calendar</span>
                </div>

                <div class="wm-calendar-page__title-row">
                    <div>
                        <h1 class="wm-calendar-page__title">
                            Calendar
                        </h1>

                        <p class="wm-calendar-page__subtitle">
                            Manage tasks, milestones, deadlines and project events.
                        </p>
                    </div>
                </div>

            </div>

            <div class="wm-calendar-page__header-actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wmCalendarToday"
                >
                    <i class="ph ph-calendar-check"></i>
                    <span>Today</span>
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="wmCalendarCreate"
                >
                    <i class="ph ph-plus"></i>
                    <span>Create Event</span>
                </button>

            </div>

        </div>


        {{-- =========================================================
            Calendar Card
        ========================================================== --}}
        <div class="wm-calendar-card">

            {{-- Calendar Toolbar --}}
            <div class="wm-calendar-toolbar">

                <div class="wm-calendar-toolbar__left">

                    <div class="wm-calendar-navigation">

                        <button
                            type="button"
                            class="wm-calendar-navigation__button"
                            id="wmCalendarPrevious"
                            aria-label="Previous"
                        >
                            <i class="ph ph-caret-left"></i>
                        </button>

                        <button
                            type="button"
                            class="wm-calendar-navigation__button"
                            id="wmCalendarNext"
                            aria-label="Next"
                        >
                            <i class="ph ph-caret-right"></i>
                        </button>

                    </div>

                    <h2
                        class="wm-calendar-toolbar__date"
                        id="wmCalendarDate"
                    >
                        September 2026
                    </h2>

                </div>


                <div class="wm-calendar-toolbar__right">

                    {{-- Search --}}
                    <div class="wm-calendar-search">

                        <i class="ph ph-magnifying-glass"></i>

                        <input
                            type="search"
                            id="wmCalendarSearch"
                            placeholder="Search events..."
                            autocomplete="off"
                        >

                    </div>


                    {{-- View Switcher --}}
                    <div
                        class="wm-calendar-view-switcher"
                        role="tablist"
                        aria-label="Calendar view"
                    >

                        <button
                            type="button"
                            class="wm-calendar-view-switcher__button is-active"
                            data-calendar-view="month"
                        >
                            Month
                        </button>

                        <button
                            type="button"
                            class="wm-calendar-view-switcher__button"
                            data-calendar-view="week"
                        >
                            Week
                        </button>

                        <button
                            type="button"
                            class="wm-calendar-view-switcher__button"
                            data-calendar-view="day"
                        >
                            Day
                        </button>

                        <button
                            type="button"
                            class="wm-calendar-view-switcher__button"
                            data-calendar-view="agenda"
                        >
                            Agenda
                        </button>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                Filters
            ====================================================== --}}
            <div class="wm-calendar-filters">

                <div class="wm-calendar-filters__group">

                    <div class="wm-calendar-filter">

                        <label for="wmCalendarProject">
                            Project
                        </label>

                        <select id="wmCalendarProject">

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


                    <div class="wm-calendar-filter">

                        <label for="wmCalendarAssignee">
                            Assignee
                        </label>

                        <select id="wmCalendarAssignee">

                            <option value="all">
                                All Assignees
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


                    <div class="wm-calendar-filter">

                        <label for="wmCalendarStatus">
                            Status
                        </label>

                        <select id="wmCalendarStatus">

                            <option value="all">
                                All Status
                            </option>

                            <option value="todo">
                                To Do
                            </option>

                            <option value="progress">
                                In Progress
                            </option>

                            <option value="completed">
                                Completed
                            </option>

                            <option value="overdue">
                                Overdue
                            </option>

                        </select>

                    </div>

                </div>


                <button
                    type="button"
                    class="wm-calendar-filters__clear"
                    id="wmCalendarClearFilters"
                >
                    <i class="ph ph-x"></i>
                    Clear Filters
                </button>

            </div>


            {{-- =====================================================
                Month View
            ====================================================== --}}
            <div
                class="wm-calendar-view wm-calendar-month-view is-active"
                data-calendar-panel="month"
            >

                <div class="wm-calendar-weekdays">

                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>

                </div>


                <div
                    class="wm-calendar-grid"
                    id="wmCalendarGrid"
                >

                    {{-- Generated by JavaScript --}}

                </div>

            </div>


            {{-- =====================================================
                Week View
            ====================================================== --}}
            <div
                class="wm-calendar-view wm-calendar-week-view"
                data-calendar-panel="week"
            >

                <div class="wm-calendar-week">

                    <div class="wm-calendar-week__time-column">

                        <div class="wm-calendar-week__time-spacer"></div>

                        <div class="wm-calendar-week__time">
                            08:00
                        </div>

                        <div class="wm-calendar-week__time">
                            09:00
                        </div>

                        <div class="wm-calendar-week__time">
                            10:00
                        </div>

                        <div class="wm-calendar-week__time">
                            11:00
                        </div>

                        <div class="wm-calendar-week__time">
                            12:00
                        </div>

                        <div class="wm-calendar-week__time">
                            13:00
                        </div>

                        <div class="wm-calendar-week__time">
                            14:00
                        </div>

                        <div class="wm-calendar-week__time">
                            15:00
                        </div>

                        <div class="wm-calendar-week__time">
                            16:00
                        </div>

                        <div class="wm-calendar-week__time">
                            17:00
                        </div>

                    </div>


                    <div class="wm-calendar-week__days">

                        <div class="wm-calendar-week__day-header">

                            <span>MON</span>
                            <strong>21</strong>

                        </div>

                        <div class="wm-calendar-week__day-header">

                            <span>TUE</span>
                            <strong>22</strong>

                        </div>

                        <div class="wm-calendar-week__day-header">

                            <span>WED</span>
                            <strong>23</strong>

                        </div>

                        <div class="wm-calendar-week__day-header is-today">

                            <span>THU</span>
                            <strong>24</strong>

                        </div>

                        <div class="wm-calendar-week__day-header">

                            <span>FRI</span>
                            <strong>25</strong>

                        </div>

                        <div class="wm-calendar-week__day-header">

                            <span>SAT</span>
                            <strong>26</strong>

                        </div>

                        <div class="wm-calendar-week__day-header">

                            <span>SUN</span>
                            <strong>27</strong>

                        </div>


                        <div class="wm-calendar-week__body">

                            <div class="wm-calendar-week__column"></div>
                            <div class="wm-calendar-week__column"></div>
                            <div class="wm-calendar-week__column"></div>

                            <div class="wm-calendar-week__column">

                                <button
                                    type="button"
                                    class="wm-calendar-event wm-calendar-event--blue"
                                    style="top: 92px;"
                                    data-event-title="Research Team Meeting"
                                >
                                <span class="wm-calendar-event__time">
                                    10:00 AM
                                </span>

                                    <strong>
                                        Research Team Meeting
                                    </strong>
                                </button>

                            </div>

                            <div class="wm-calendar-week__column"></div>
                            <div class="wm-calendar-week__column"></div>
                            <div class="wm-calendar-week__column"></div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                Day View
            ====================================================== --}}
            <div
                class="wm-calendar-view wm-calendar-day-view"
                data-calendar-panel="day"
            >

                <div class="wm-calendar-day">

                    <div class="wm-calendar-day__header">

                        <div>
                            <span>THURSDAY</span>
                            <strong>September 24, 2026</strong>
                        </div>

                        <span class="wm-calendar-day__badge">
                        Today
                    </span>

                    </div>


                    <div class="wm-calendar-day__timeline">

                        @foreach([
                            '08:00 AM',
                            '09:00 AM',
                            '10:00 AM',
                            '11:00 AM',
                            '12:00 PM',
                            '01:00 PM',
                            '02:00 PM',
                            '03:00 PM',
                            '04:00 PM',
                            '05:00 PM'
                        ] as $time)

                            <div class="wm-calendar-day__row">

                                <div class="wm-calendar-day__time">
                                    {{ $time }}
                                </div>

                                <div class="wm-calendar-day__slot">

                                    @if($time === '10:00 AM')

                                        <button
                                            type="button"
                                            class="wm-calendar-event wm-calendar-event--blue"
                                            data-event-title="Research Team Meeting"
                                        >
                                        <span>
                                            Research Team Meeting
                                        </span>

                                            <small>
                                                Atlas Research Platform
                                            </small>
                                        </button>

                                    @elseif($time === '02:00 PM')

                                        <button
                                            type="button"
                                            class="wm-calendar-event wm-calendar-event--green"
                                            data-event-title="Data Analysis"
                                        >
                                        <span>
                                            Data Analysis
                                        </span>

                                            <small>
                                                Climate Data Analysis
                                            </small>
                                        </button>

                                    @endif

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>


            {{-- =====================================================
                Agenda View
            ====================================================== --}}
            <div
                class="wm-calendar-view wm-calendar-agenda-view"
                data-calendar-panel="agenda"
            >

                <div class="wm-calendar-agenda">

                    <div class="wm-calendar-agenda__group">

                        <div class="wm-calendar-agenda__date">

                        <span>
                            TODAY
                        </span>

                            <strong>
                                Sep 24
                            </strong>

                        </div>


                        <div class="wm-calendar-agenda__events">

                            <button
                                type="button"
                                class="wm-calendar-agenda__event"
                                data-event-title="Research Team Meeting"
                            >

                                <span class="wm-calendar-agenda__event-dot wm-calendar-agenda__event-dot--blue"></span>

                                <span class="wm-calendar-agenda__event-content">

                                <strong>
                                    Research Team Meeting
                                </strong>

                                <small>
                                    10:00 AM – 11:00 AM · Atlas Research Platform
                                </small>

                            </span>

                                <i class="ph ph-caret-right"></i>

                            </button>


                            <button
                                type="button"
                                class="wm-calendar-agenda__event"
                                data-event-title="Data Analysis"
                            >

                                <span class="wm-calendar-agenda__event-dot wm-calendar-agenda__event-dot--green"></span>

                                <span class="wm-calendar-agenda__event-content">

                                <strong>
                                    Data Analysis
                                </strong>

                                <small>
                                    02:00 PM – 03:30 PM · Climate Data Analysis
                                </small>

                            </span>

                                <i class="ph ph-caret-right"></i>

                            </button>

                        </div>

                    </div>


                    <div class="wm-calendar-agenda__group">

                        <div class="wm-calendar-agenda__date">

                        <span>
                            TOMORROW
                        </span>

                            <strong>
                                Sep 25
                            </strong>

                        </div>


                        <div class="wm-calendar-agenda__events">

                            <button
                                type="button"
                                class="wm-calendar-agenda__event"
                                data-event-title="Literature Review"
                            >

                                <span class="wm-calendar-agenda__event-dot wm-calendar-agenda__event-dot--purple"></span>

                                <span class="wm-calendar-agenda__event-content">

                                <strong>
                                    Literature Review
                                </strong>

                                <small>
                                    09:00 AM – 10:30 AM · Neuro Imaging Study
                                </small>

                            </span>

                                <i class="ph ph-caret-right"></i>

                            </button>

                        </div>

                    </div>


                    <div class="wm-calendar-agenda__group">

                        <div class="wm-calendar-agenda__date">

                        <span>
                            SATURDAY
                        </span>

                            <strong>
                                Sep 26
                            </strong>

                        </div>


                        <div class="wm-calendar-agenda__events">

                            <button
                                type="button"
                                class="wm-calendar-agenda__event"
                                data-event-title="Project Milestone"
                            >

                                <span class="wm-calendar-agenda__event-dot wm-calendar-agenda__event-dot--orange"></span>

                                <span class="wm-calendar-agenda__event-content">

                                <strong>
                                    Project Milestone
                                </strong>

                                <small>
                                    Atlas Research Platform · Phase 1 Complete
                                </small>

                            </span>

                                <i class="ph ph-caret-right"></i>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
        Event Modal
    ========================================================== --}}
    <div
        class="wm-calendar-modal"
        id="wmCalendarEventModal"
        aria-hidden="true"
    >

        <div class="wm-calendar-modal__backdrop"></div>

        <div class="wm-calendar-modal__dialog">

            <div class="wm-calendar-modal__header">

                <div>

                <span class="wm-calendar-modal__eyebrow">
                    Calendar Event
                </span>

                    <h3
                        class="wm-calendar-modal__title"
                        id="wmCalendarModalTitle"
                    >
                        Event Details
                    </h3>

                </div>

                <button
                    type="button"
                    class="wm-calendar-modal__close"
                    id="wmCalendarModalClose"
                    aria-label="Close"
                >
                    <i class="ph ph-x"></i>
                </button>

            </div>


            <div class="wm-calendar-modal__body">

                <div class="wm-calendar-modal__item">

                <span class="wm-calendar-modal__label">
                    Project
                </span>

                    <strong>
                        Atlas Research Platform
                    </strong>

                </div>


                <div class="wm-calendar-modal__grid">

                    <div class="wm-calendar-modal__item">

                    <span class="wm-calendar-modal__label">
                        Date
                    </span>

                        <strong>
                            September 24, 2026
                        </strong>

                    </div>

                    <div class="wm-calendar-modal__item">

                    <span class="wm-calendar-modal__label">
                        Time
                    </span>

                        <strong>
                            10:00 AM – 11:00 AM
                        </strong>

                    </div>

                </div>


                <div class="wm-calendar-modal__item">

                <span class="wm-calendar-modal__label">
                    Description
                </span>

                    <p>
                        Review current research progress, discuss blockers
                        and plan the next project milestones.
                    </p>

                </div>

            </div>


            <div class="wm-calendar-modal__footer">

                <button
                    type="button"
                    class="wm-btn wm-btn--secondary"
                    id="wmCalendarModalCancel"
                >
                    Close
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="wmCalendarModalEdit"
                >
                    <i class="ph ph-pencil-simple"></i>
                    Edit Event
                </button>

            </div>

        </div>

    </div>

@endsection


@push('script')

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const calendarPage = document.querySelector('.wm-calendar-page');

            if (!calendarPage) {
                return;
            }


            /*
            |--------------------------------------------------------------------------
            | Elements
            |--------------------------------------------------------------------------
            */

            const dateTitle = document.getElementById('wmCalendarDate');
            const previousButton = document.getElementById('wmCalendarPrevious');
            const nextButton = document.getElementById('wmCalendarNext');
            const todayButton = document.getElementById('wmCalendarToday');

            const searchInput = document.getElementById('wmCalendarSearch');

            const projectFilter = document.getElementById('wmCalendarProject');
            const assigneeFilter = document.getElementById('wmCalendarAssignee');
            const statusFilter = document.getElementById('wmCalendarStatus');

            const clearFiltersButton =
                document.getElementById('wmCalendarClearFilters');

            const createButton =
                document.getElementById('wmCalendarCreate');

            const calendarGrid =
                document.getElementById('wmCalendarGrid');

            const viewButtons =
                document.querySelectorAll('[data-calendar-view]');

            const viewPanels =
                document.querySelectorAll('[data-calendar-panel]');

            const eventModal =
                document.getElementById('wmCalendarEventModal');

            const modalTitle =
                document.getElementById('wmCalendarModalTitle');

            const modalClose =
                document.getElementById('wmCalendarModalClose');

            const modalCancel =
                document.getElementById('wmCalendarModalCancel');

            const modalEdit =
                document.getElementById('wmCalendarModalEdit');

            const modalBackdrop =
                eventModal?.querySelector('.wm-calendar-modal__backdrop');


            /*
            |--------------------------------------------------------------------------
            | State
            |--------------------------------------------------------------------------
            */

            let currentDate = new Date(2026, 8, 24);

            let currentView = 'month';


            /*
            |--------------------------------------------------------------------------
            | Sample Calendar Events
            |--------------------------------------------------------------------------
            */

            const events = [

                {
                    id: 1,
                    date: '2026-09-02',
                    title: 'Project Kickoff',
                    project: 'atlas',
                    assignee: 'olivia',
                    status: 'completed',
                    type: 'task',
                    color: 'blue'
                },

                {
                    id: 2,
                    date: '2026-09-08',
                    title: 'Research Proposal Review',
                    project: 'neuro',
                    assignee: 'sophia',
                    status: 'progress',
                    type: 'task',
                    color: 'purple'
                },

                {
                    id: 3,
                    date: '2026-09-15',
                    title: 'Data Collection',
                    project: 'climate',
                    assignee: 'ethan',
                    status: 'progress',
                    type: 'task',
                    color: 'green'
                },

                {
                    id: 4,
                    date: '2026-09-24',
                    title: 'Research Team Meeting',
                    project: 'atlas',
                    assignee: 'olivia',
                    status: 'progress',
                    type: 'meeting',
                    color: 'blue'
                },

                {
                    id: 5,
                    date: '2026-09-24',
                    title: 'Data Analysis',
                    project: 'climate',
                    assignee: 'ethan',
                    status: 'todo',
                    type: 'task',
                    color: 'green'
                },

                {
                    id: 6,
                    date: '2026-09-25',
                    title: 'Literature Review',
                    project: 'neuro',
                    assignee: 'sophia',
                    status: 'todo',
                    type: 'task',
                    color: 'purple'
                },

                {
                    id: 7,
                    date: '2026-09-26',
                    title: 'Project Milestone',
                    project: 'atlas',
                    assignee: 'olivia',
                    status: 'todo',
                    type: 'milestone',
                    color: 'orange'
                },

                {
                    id: 8,
                    date: '2026-09-30',
                    title: 'Project Deadline',
                    project: 'genome',
                    assignee: 'liam',
                    status: 'overdue',
                    type: 'deadline',
                    color: 'red'
                }

            ];


            /*
            |--------------------------------------------------------------------------
            | Helpers
            |--------------------------------------------------------------------------
            */

            function formatDate(date) {

                const year = date.getFullYear();

                const month =
                    String(date.getMonth() + 1).padStart(2, '0');

                const day =
                    String(date.getDate()).padStart(2, '0');

                return `${year}-${month}-${day}`;
            }


            function getMonthName(date) {

                return date.toLocaleDateString('en-US', {
                    month: 'long',
                    year: 'numeric'
                });

            }


            function isToday(date) {

                return formatDate(date) === '2026-09-24';

            }


            function getFilteredEvents() {

                const search =
                    searchInput?.value.trim().toLowerCase() || '';

                const project =
                    projectFilter?.value || 'all';

                const assignee =
                    assigneeFilter?.value || 'all';

                const status =
                    statusFilter?.value || 'all';


                return events.filter(function (event) {

                    const matchesSearch =
                        !search ||
                        event.title.toLowerCase().includes(search);

                    const matchesProject =
                        project === 'all' ||
                        event.project === project;

                    const matchesAssignee =
                        assignee === 'all' ||
                        event.assignee === assignee;

                    const matchesStatus =
                        status === 'all' ||
                        event.status === status;

                    return (
                        matchesSearch &&
                        matchesProject &&
                        matchesAssignee &&
                        matchesStatus
                    );

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Month Calendar
            |--------------------------------------------------------------------------
            */

            function renderMonthCalendar() {

                if (!calendarGrid) {
                    return;
                }


                calendarGrid.innerHTML = '';


                const year =
                    currentDate.getFullYear();

                const month =
                    currentDate.getMonth();


                const firstDay =
                    new Date(year, month, 1).getDay();

                const daysInMonth =
                    new Date(year, month + 1, 0).getDate();

                const previousMonthDays =
                    new Date(year, month, 0).getDate();


                const filteredEvents =
                    getFilteredEvents();


                const totalCells =
                    Math.ceil((firstDay + daysInMonth) / 7) * 7;


                for (let index = 0; index < totalCells; index++) {

                    let dayNumber;
                    let cellDate;
                    let isCurrentMonth = true;


                    if (index < firstDay) {

                        dayNumber =
                            previousMonthDays -
                            firstDay +
                            index +
                            1;

                        cellDate =
                            new Date(year, month - 1, dayNumber);

                        isCurrentMonth = false;

                    } else if (
                        index >= firstDay + daysInMonth
                    ) {

                        dayNumber =
                            index -
                            firstDay -
                            daysInMonth +
                            1;

                        cellDate =
                            new Date(year, month + 1, dayNumber);

                        isCurrentMonth = false;

                    } else {

                        dayNumber =
                            index - firstDay + 1;

                        cellDate =
                            new Date(year, month, dayNumber);

                    }


                    const dateString =
                        formatDate(cellDate);


                    const dayEvents =
                        filteredEvents.filter(function (event) {
                            return event.date === dateString;
                        });


                    const cell =
                        document.createElement('div');

                    cell.className =
                        'wm-calendar-day-cell';


                    if (!isCurrentMonth) {
                        cell.classList.add('is-other-month');
                    }


                    if (isToday(cellDate)) {
                        cell.classList.add('is-today');
                    }


                    const header =
                        document.createElement('div');

                    header.className =
                        'wm-calendar-day-cell__header';


                    const number =
                        document.createElement('span');

                    number.className =
                        'wm-calendar-day-cell__number';

                    number.textContent =
                        dayNumber;


                    header.appendChild(number);


                    const content =
                        document.createElement('div');

                    content.className =
                        'wm-calendar-day-cell__events';


                    dayEvents.slice(0, 3).forEach(function (event) {

                        const eventButton =
                            document.createElement('button');

                        eventButton.type = 'button';

                        eventButton.className =
                            `wm-calendar-event wm-calendar-event--${event.color}`;

                        eventButton.dataset.eventTitle =
                            event.title;


                        const title =
                            document.createElement('span');

                        title.textContent =
                            event.title;


                        eventButton.appendChild(title);


                        content.appendChild(eventButton);

                    });


                    if (dayEvents.length > 3) {

                        const more =
                            document.createElement('button');

                        more.type = 'button';

                        more.className =
                            'wm-calendar-day-cell__more';

                        more.textContent =
                            `+${dayEvents.length - 3} more`;

                        content.appendChild(more);

                    }


                    cell.appendChild(header);

                    cell.appendChild(content);

                    calendarGrid.appendChild(cell);

                }


                bindEventButtons();

            }


            /*
            |--------------------------------------------------------------------------
            | Date Navigation
            |--------------------------------------------------------------------------
            */

            function updateCalendarTitle() {

                if (!dateTitle) {
                    return;
                }

                if (currentView === 'month') {

                    dateTitle.textContent =
                        getMonthName(currentDate);

                } else if (currentView === 'week') {

                    dateTitle.textContent =
                        'September 21 – 27, 2026';

                } else if (currentView === 'day') {

                    dateTitle.textContent =
                        currentDate.toLocaleDateString(
                            'en-US',
                            {
                                month: 'long',
                                day: 'numeric',
                                year: 'numeric'
                            }
                        );

                } else {

                    dateTitle.textContent =
                        'Upcoming Events';

                }

            }


            previousButton?.addEventListener(
                'click',
                function () {

                    if (currentView === 'month') {

                        currentDate.setMonth(
                            currentDate.getMonth() - 1
                        );

                    } else if (currentView === 'week') {

                        currentDate.setDate(
                            currentDate.getDate() - 7
                        );

                    } else if (currentView === 'day') {

                        currentDate.setDate(
                            currentDate.getDate() - 1
                        );

                    }

                    updateCalendarTitle();

                    renderMonthCalendar();

                }
            );


            nextButton?.addEventListener(
                'click',
                function () {

                    if (currentView === 'month') {

                        currentDate.setMonth(
                            currentDate.getMonth() + 1
                        );

                    } else if (currentView === 'week') {

                        currentDate.setDate(
                            currentDate.getDate() + 7
                        );

                    } else if (currentView === 'day') {

                        currentDate.setDate(
                            currentDate.getDate() + 1
                        );

                    }

                    updateCalendarTitle();

                    renderMonthCalendar();

                }
            );


            todayButton?.addEventListener(
                'click',
                function () {

                    currentDate =
                        new Date(2026, 8, 24);

                    updateCalendarTitle();

                    renderMonthCalendar();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | View Switcher
            |--------------------------------------------------------------------------
            */

            viewButtons.forEach(function (button) {

                button.addEventListener(
                    'click',
                    function () {

                        const view =
                            button.dataset.calendarView;

                        currentView = view;


                        viewButtons.forEach(function (item) {
                            item.classList.remove('is-active');
                        });

                        button.classList.add('is-active');


                        viewPanels.forEach(function (panel) {

                            const panelView =
                                panel.dataset.calendarPanel;

                            panel.classList.toggle(
                                'is-active',
                                panelView === view
                            );

                        });


                        updateCalendarTitle();

                        if (view === 'month') {
                            renderMonthCalendar();
                        }

                    }
                );

            });


            /*
            |--------------------------------------------------------------------------
            | Filters
            |--------------------------------------------------------------------------
            */

            [
                searchInput,
                projectFilter,
                assigneeFilter,
                statusFilter
            ].forEach(function (element) {

                element?.addEventListener(
                    'input',
                    function () {
                        renderMonthCalendar();
                    }
                );

                element?.addEventListener(
                    'change',
                    function () {
                        renderMonthCalendar();
                    }
                );

            });


            clearFiltersButton?.addEventListener(
                'click',
                function () {

                    if (searchInput) {
                        searchInput.value = '';
                    }

                    if (projectFilter) {
                        projectFilter.value = 'all';
                    }

                    if (assigneeFilter) {
                        assigneeFilter.value = 'all';
                    }

                    if (statusFilter) {
                        statusFilter.value = 'all';
                    }

                    renderMonthCalendar();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Event Modal
            |--------------------------------------------------------------------------
            */

            function openEventModal(title) {

                if (!eventModal) {
                    return;
                }

                if (modalTitle) {
                    modalTitle.textContent =
                        title || 'Event Details';
                }

                eventModal.classList.add('is-open');

                eventModal.setAttribute(
                    'aria-hidden',
                    'false'
                );

                document.body.classList.add(
                    'wm-calendar-modal-open'
                );

            }


            function closeEventModal() {

                if (!eventModal) {
                    return;
                }

                eventModal.classList.remove(
                    'is-open'
                );

                eventModal.setAttribute(
                    'aria-hidden',
                    'true'
                );

                document.body.classList.remove(
                    'wm-calendar-modal-open'
                );

            }


            function bindEventButtons() {

                document
                    .querySelectorAll('[data-event-title]')
                    .forEach(function (button) {

                        button.addEventListener(
                            'click',
                            function () {

                                openEventModal(
                                    button.dataset.eventTitle
                                );

                            }
                        );

                    });

            }


            modalClose?.addEventListener(
                'click',
                closeEventModal
            );

            modalCancel?.addEventListener(
                'click',
                closeEventModal
            );

            modalBackdrop?.addEventListener(
                'click',
                closeEventModal
            );


            document.addEventListener(
                'keydown',
                function (event) {

                    if (event.key === 'Escape') {
                        closeEventModal();
                    }

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Create Event
            |--------------------------------------------------------------------------
            */

            createButton?.addEventListener(
                'click',
                function () {

                    console.log(
                        'Create calendar event'
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Edit Event
            |--------------------------------------------------------------------------
            */

            modalEdit?.addEventListener(
                'click',
                function () {

                    console.log(
                        'Edit calendar event'
                    );

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Initial Render
            |--------------------------------------------------------------------------
            */

            updateCalendarTitle();

            renderMonthCalendar();

        });
    </script>

@endpush
