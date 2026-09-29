@verbatim
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Publishing Consultant Cheat Sheet</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
  <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
  <script>tailwind.config = { theme: { extend: { colors: { navy: '#172B4D', aus: '#00bfd3', ink: '#172B4D', mist: '#FFFFFF' }, boxShadow: { soft: '0 7px 18px rgba(25,91,171,.08)' } } } }</script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@700;800&display=swap"
    rel="stylesheet">
  <style>
    :root { --color-primary:#172B4D; --color-primary-blue:#00bfd3; --color-accent:#F4C542; --color-background:#FFFFFF; --color-surface:#F5F6F7; --color-text:#222222; --color-text-muted:#6B7280; --color-border:#E5E7EB; --sidebar-navy-900:#061838; --sidebar-navy-800:#0a2758; --sidebar-navy-700:#123573; --sidebar-teal:#19c3d6; --sidebar-gold:#f4b63f; --sidebar-text:rgba(255,255,255,.9); --sidebar-dim:rgba(255,255,255,.5); --sidebar-divider:rgba(255,255,255,.1); }
    html {
      overflow-y: scroll;
      scrollbar-gutter: stable;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--color-background);
      color: var(--color-text)
    }

    h1,
    h2,
    h3 {
      font-family: Manrope, sans-serif
    }

    .sidebar { width:18rem; height:100vh; background:radial-gradient(ellipse at top left, var(--sidebar-navy-700) 0%, transparent 58%),linear-gradient(180deg,var(--sidebar-navy-800),var(--sidebar-navy-900)); border-right:1px solid var(--sidebar-divider); font-family:'Poppins',system-ui,sans-serif; }
    .sidebar-brand { min-height:130px; padding:22px 24px 18px; text-align:center; background:transparent; border-color:var(--sidebar-divider); }
    .brand-logo { display:block; width:240px; max-height:56px; margin:0 auto; object-fit:contain; object-position:center; }
    .brand-subtitle { margin-top:11px; color:rgba(255,255,255,.9); font-size:12px; font-weight:600; letter-spacing:.16em; }
    .brand-version { display:inline-flex; margin-top:12px; border:1px solid var(--sidebar-divider); border-radius:999px; background:rgba(255,255,255,.06); padding:3px 9px; color:var(--sidebar-dim); font-size:10px; font-weight:500; letter-spacing:.04em; }
    #sideNav { display:flex; flex:1; flex-direction:column; gap:4px; overflow-y:auto; padding:20px 14px; }
    .nav-link { position:relative; display:flex; min-height:46px; align-items:center; gap:14px; border:1px solid transparent; border-radius:12px; padding:0 14px; color:var(--sidebar-dim); font-family:inherit; font-size:14.5px; font-weight:500; transition:background-color 150ms ease,color 150ms ease; }
    .nav-link svg { width:22px; height:22px; flex:none; stroke-width:1.6; stroke-linecap:round; stroke-linejoin:round; }
    .nav-link.active, .nav-link[aria-current="page"] { border-color:rgba(25,195,214,.35); background:linear-gradient(100deg,rgba(25,195,214,.32),rgba(25,195,214,.1)); color:#fff; font-weight:600; }
    .nav-link.active svg, .nav-link[aria-current="page"] svg { color:var(--sidebar-teal); }
    .nav-link.active::before, .nav-link[aria-current="page"]::before { position:absolute; top:9px; bottom:9px; left:-14px; width:4px; border-radius:0 4px 4px 0; background:var(--sidebar-gold); content:''; }
    .nav-link:hover:not(.active):not([aria-current="page"]) { color:#fff; background:rgba(255,255,255,.07); }
    .nav-link:focus-visible, .account-link:focus-visible { outline:2px solid var(--sidebar-teal); outline-offset:2px; }
    .account-nav { display:grid; gap:4px; border-top:1px solid var(--sidebar-divider); padding:14px; }
    .account-link { display:flex; min-height:42px; align-items:center; gap:14px; border-radius:10px; padding:0 14px; color:var(--sidebar-dim); font:500 14.5px 'Poppins',system-ui,sans-serif; text-decoration:none; }
    .account-link:hover { color:#fff; background:rgba(255,255,255,.07); }
    .account-link svg { width:21px; height:21px; stroke-width:1.6; }
    @media (prefers-reduced-motion: reduce) { .nav-link { transition:none; } }


    .card {
      border: 1px solid var(--color-border);
      box-shadow: 0 7px 18px rgba(25, 91, 171, .07)
    }

    .resource-row {
      border-bottom: 1px solid #E5E7EB
    }

    .resource-row:last-of-type {
      border-bottom: 0
    }

    .resource-row:hover {
      background: #FFFFFF
    }

    .icon-ball {
      box-shadow: inset 0 1px 0 #fff9
    }

    .modal-open {
      overflow: hidden
    }

    .app-page {
      max-width: 1440px;
      margin: 0 auto;
    }

    .app-hero {
      position: relative;
      overflow: hidden;
      min-height: 146px;
      border: 1px solid var(--color-border);
      background: linear-gradient(135deg, #ffffff 0%, #F5F6F7 58%, #F5F6F7 100%);
      box-shadow: 0 12px 28px rgba(25, 91, 171, .08);
    }

    .app-hero h1 {
      margin-top: 4px;
      color: #172B4D;
      font-size: 30px;
      font-weight: 800;
      line-height: 1.2;
    }

    .app-hero p {
      color: #6B7280;
      font-size: 14px;
      line-height: 1.5;
    }

    .app-hero p:first-child {
      margin-top: 0;
      color: #00bfd3;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .18em;
      line-height: 1.2;
      text-transform: uppercase;
    }

    .app-hero::after {
      content: '';
      position: absolute;
      width: 220px;
      height: 220px;
      right: -70px;
      top: -125px;
      border-radius: 999px;
      background: #00bfd312;
    }

    .app-metric {
      border: 1px solid var(--color-border);
      background: #ffffffc9;
      box-shadow: 0 4px 12px rgba(25, 91, 171, .06);
    }

    .app-section-title {
      display: flex;
      align-items: center;
      gap: .6rem;
      font-family: Manrope, sans-serif;
      font-weight: 800;
      color: #172B4D;
    }

    .app-section-title::before {
      content: '';
      width: .45rem;
      height: 1.5rem;
      border-radius: 999px;
      background: #00bfd3;
    }

    .app-workflow {
      transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
    }

    .app-workflow:hover {
      transform: translateY(-3px);
      border-color: #00bfd3;
      box-shadow: 0 14px 28px rgba(25, 91, 171, .13);
    }
      body { background: var(--color-background); color: var(--color-text); }
    .nav-link:not(.active):not([aria-current="page"]) { color: var(--sidebar-dim); }
    .sidebar [class~="text-blue-100"], .sidebar [class~="text-blue-200"] { color: #8aa6c7 !important; }
    .card, .app-metric { border-color: var(--color-border); }
    .app-hero { border-color: var(--color-border); background: linear-gradient(135deg,#fff 0%,#F5F6F7 100%); }
    .app-hero h1, h1, h2, h3 { color: var(--color-primary); }
    input, select, textarea { border-color: var(--color-border); color: var(--color-text); }
    input:focus, select:focus, textarea:focus, button:focus-visible, a:focus-visible { outline-color: var(--color-primary-blue); }
    [class~="bg-blue-50"], [class~="bg-blue-100"], [class~="bg-indigo-100"], [class~="bg-cyan-100"], [class~="bg-teal-100"], [class~="bg-violet-100"], [class~="bg-orange-100"] { background-color: var(--color-surface) !important; }
    [class~="bg-blue-600"], [class~="bg-blue-700"], [class~="bg-aus"] { background-color: var(--color-primary-blue) !important; }
    [class~="text-blue-100"], [class~="text-blue-200"] { color: var(--color-text-muted) !important; }
    .sidebar [class~="text-blue-100"], .sidebar [class~="text-blue-200"] { color: #FFFFFF !important; }
    [class~="text-blue-600"], [class~="text-blue-700"], [class~="text-cyan-600"], [class~="text-teal-600"], [class~="text-violet-600"], [class~="text-indigo-600"], [class~="text-orange-600"], [class~="text-aus"] { color: var(--color-primary-blue) !important; }
    [class~="border-blue-50"], [class~="border-blue-100"], [class~="border-blue-600"] { border-color: var(--color-border) !important; }
    [class~="hover:bg-blue-50"]:hover { background-color: var(--color-surface) !important; }
    [class~="hover:bg-blue-700"]:hover, [class~="hover:bg-blue-800"]:hover { background-color: var(--color-primary-blue) !important; }
    [class~="hover:text-blue-800"]:hover { color: var(--color-primary) !important; }
    [class~="text-amber-500"] { color: var(--color-accent) !important; }
    [class~="bg-amber-500"] { color: var(--color-primary) !important; }
    [class~="bg-amber-500"] { background-color: var(--color-accent) !important; }
    [class~="bg-amber-50"], [class~="bg-amber-100"] { background-color: #FFF9E5 !important; }
  </style>
</head>

<body class="min-h-screen">
  <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-40 hidden w-[18rem] flex-col text-white lg:flex">
    <div class="sidebar-brand border-b">
      @endverbatim
      <img class="brand-logo" src="{{ Vite::asset('resources/tellwell-blue-logo.png') }}" alt="Tellwell">
@verbatim
      <p class="brand-subtitle">CONSULTANT CHEAT SHEET</p>
    </div>
    <nav id="sideNav" aria-label="Main"></nav>
    <nav class="account-nav" aria-label="Account">
      <a class="account-link" href="#profile"><i data-lucide="user-round" aria-hidden="true"></i><span>Profile</span></a>
      <a class="account-link" href="#settings"><i data-lucide="settings-2" aria-hidden="true"></i><span>Settings</span></a>
      <a class="account-link" href="#support"><i data-lucide="life-buoy" aria-hidden="true"></i><span>Support</span></a>
    </nav>
  </aside>
  <div class="lg:pl-[18rem]">
    <header
      class="sticky top-0 z-30 flex h-[69px] items-center gap-3 border-b border-blue-100 bg-white/95 px-4 shadow-sm backdrop-blur sm:px-6">
      <button id="menuBtn" class="rounded-lg p-2 text-ink hover:bg-blue-50 lg:hidden" aria-label="Open navigation"><i
          data-lucide="menu"></i></button><label class="relative max-w-[500px] flex-1"><i data-lucide="search"
          class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-[#00bfd3]"></i><input id="globalSearch"
          placeholder="Search resources, guides, and more..."
          class="w-full rounded-lg bg-[#F5F6F7] py-2.5 pl-11 pr-4 text-sm text-ink outline-none ring-aus focus:ring-2"></label>
      <div class="ml-auto flex items-center gap-3"><button id="addBtn"
          class="hidden items-center gap-1 rounded-lg bg-aus px-3 py-2 text-xs font-bold text-white hover:bg-blue-700 sm:inline-flex"><i
            data-lucide="plus" class="h-4 w-4"></i> Add link</button><button
          class="relative rounded-lg p-2 text-ink hover:bg-blue-50"><i data-lucide="bell" class="h-5 w-5"></i><span
            class="absolute right-2 top-2 h-2 w-2 rounded-full bg-rose-500"></span></button>
        <div class="hidden h-8 w-px bg-blue-100 sm:block"></div>
        <div class="grid h-10 w-10 place-items-center rounded-full bg-[#00bfd3] text-xs font-bold text-white">AE</div>
      </div>
    </header>
    <main class="mx-auto max-w-[1440px] px-4 pb-10 pt-6 sm:px-6">
      <div id="pageContent">
        <section
          class="app-hero mb-5 rounded-2xl px-6 py-7 sm:px-8">
          <div class="relative z-10 flex items-center gap-4">
            <div class="icon-ball grid h-14 w-14 place-items-center rounded-full bg-[#F5F6F7] text-[#00bfd3]"><i
                data-lucide="book-open" class="h-7 w-7"></i></div>
            <div>
              <h1 class="text-2xl font-extrabold tracking-tight text-[#172B4D] sm:text-[32px]">Consultation Resources
              </h1>
              <p class="mt-1 text-sm text-[#6B7280] sm:text-base">Everything you need, organized in one place.</p>
            </div>
          </div>
          <div class="absolute right-6 top-4 hidden opacity-70 md:block"><i data-lucide="library-big"
              class="h-32 w-32 text-[#00bfd3]"></i></div>
        </section>
        <section class="card mb-4 rounded-xl bg-white p-3">
          <div class="flex flex-col gap-3 xl:flex-row xl:items-center"><label
              class="relative w-full xl:max-w-[560px]"><i data-lucide="search"
                class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-[#00bfd3]"></i><input id="resourceSearch"
                placeholder="Search consultation resources..."
                class="w-full rounded-lg border border-[#E5E7EB] py-2.5 pl-10 pr-3 text-sm outline-none ring-aus focus:ring-2"></label>
            <div id="filters" class="flex flex-wrap gap-2"></div><button id="favoritesOnly"
              class="ml-auto inline-flex items-center gap-1 rounded-full border border-blue-100 px-3 py-2 text-xs font-semibold text-[#00bfd3] hover:bg-blue-50"><i
                data-lucide="star" class="h-3.5 w-3.5"></i> Saved</button>
          </div>
        </section>
        <div id="resultInfo" class="mb-3 hidden text-xs font-medium text-[#6B7280]"></div>
        <section class="mt-4 mb-4 grid gap-4 xl:grid-cols-2">
          <div class="card rounded-xl bg-white p-4">
            <div class="mb-4 flex items-center gap-3">
              <div class="icon-ball grid h-9 w-9 place-items-center rounded-full bg-orange-100 text-orange-500"><i
                  data-lucide="star" class="h-5 w-5"></i></div>
              <div>
                <h2 class="text-sm font-extrabold">Popular resources</h2>
                <p class="text-[11px] text-[#6B7280]">Most accessed by authors and team members.</p>
              </div>
            </div>
            <div id="popular" class="grid grid-cols-2 gap-2 sm:grid-cols-5"></div>
          </div>
          <div class="card rounded-xl bg-white p-4">
            <div class="mb-3 flex items-center gap-3">
              <div class="icon-ball grid h-9 w-9 place-items-center rounded-full bg-blue-100 text-aus"><i
                  data-lucide="clock-3" class="h-5 w-5"></i></div>
              <div>
                <h2 class="text-sm font-extrabold">Recently used</h2>
                <p class="text-[11px] text-[#6B7280]">Your latest resource activity.</p>
              </div>
            </div>
            <div id="recent"></div>
          </div>
        </section>
        <section id="categoryGrid" class="grid gap-4 md:grid-cols-2 xl:grid-cols-4"></section>

      </div>
    </main>
  </div>
  <div id="overlay" class="fixed inset-0 z-30 hidden bg-slate-950/40 lg:hidden"></div>
  <div id="modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/55 p-4">
    <form id="linkForm" class="w-full max-w-md rounded-2xl bg-white p-6 shadow-2xl">
      <div class="mb-5 flex items-center justify-between">
        <div>
          <p class="text-xs font-bold uppercase tracking-wider text-aus">Personal workspace</p>
          <h2 class="text-xl font-extrabold">Add custom link</h2>
        </div><button type="button" class="closeModal p-1"><i data-lucide="x"></i></button>
      </div><label class="mb-3 block text-sm font-bold">Title<input required name="title"
          class="mt-1 w-full rounded-lg border border-blue-100 p-2.5 font-normal outline-none focus:ring-2 focus:ring-aus"
          placeholder="Resource name"></label><label class="mb-3 block text-sm font-bold">URL<input required type="url"
          name="url"
          class="mt-1 w-full rounded-lg border border-blue-100 p-2.5 font-normal outline-none focus:ring-2 focus:ring-aus"
          placeholder="https://"></label><label class="mb-3 block text-sm font-bold">Add link to<select
          id="navigationSelect" name="page"
          class="mt-1 w-full rounded-lg border border-blue-100 p-2.5 font-normal"></select></label><label
        id="categoryField" class="mb-5 block text-sm font-bold">Resource group<select id="categorySelect"
          name="category" class="mt-1 w-full rounded-lg border border-blue-100 p-2.5 font-normal"></select></label>
      <div id="existingCategoryField" class="mb-4 hidden"><label class="block text-sm font-bold">Existing
          category<select id="existingCategorySelect" name="existingCategory"
            class="mt-1 w-full rounded-lg border border-blue-100 p-2.5 font-normal"></select></label><button
          type="button" id="addCategoryToggle"
          class="mt-2 inline-flex items-center gap-1 text-xs font-bold text-aus hover:text-blue-800"><i
            data-lucide="plus" class="h-3.5 w-3.5"></i> Add category</button></div>
      <div id="newCategoryFields" class="hidden"><label class="mb-3 block text-sm font-bold">Add category<input
            id="navigationCategory" name="navigationCategory"
            class="mt-1 w-full rounded-lg border border-blue-100 p-2.5 font-normal outline-none focus:ring-2 focus:ring-aus"
            placeholder="e.g. Sales templates"></label><label class="mb-5 block text-sm font-bold">Category
          description<textarea id="navigationCategoryDescription" name="navigationCategoryDescription" rows="2"
            class="mt-1 w-full resize-none rounded-lg border border-blue-100 p-2.5 font-normal outline-none focus:ring-2 focus:ring-aus"
            placeholder="Briefly describe this category"></textarea></label></div>
      <div class="flex justify-end gap-2"><button type="button"
          class="closeModal rounded-lg px-4 py-2 text-sm font-bold">Cancel</button><button
          class="rounded-lg bg-aus px-4 py-2 text-sm font-bold text-white">Save link</button></div>
    </form>
  </div>
  <div id="toast"
    class="pointer-events-none fixed bottom-5 left-1/2 z-[60] hidden -translate-x-1/2 rounded-full bg-navy px-4 py-2 text-sm text-white shadow-xl">
  </div>
  <div id="resourceModal" class="fixed inset-0 z-[55] hidden items-center justify-center bg-slate-950/55 p-4">
    <div class="max-h-[85vh] w-full max-w-2xl overflow-y-auto rounded-2xl bg-white p-6 shadow-2xl">
      <div class="mb-5 flex items-start justify-between">
        <div>
          <p id="resourceModalLabel" class="text-xs font-bold uppercase tracking-wider text-aus">Resource</p>
          <h2 id="resourceModalTitle" class="mt-1 text-xl font-extrabold text-ink">Resource details</h2>
        </div><button class="closeResourceModal rounded-lg p-1 hover:bg-blue-50" aria-label="Close"><i
            data-lucide="x"></i></button>
      </div>
      <div id="resourceModalBody"></div>
    </div>
  </div>
  <div id="toast"
    class="pointer-events-none fixed bottom-5 left-1/2 z-[60] hidden -translate-x-1/2 rounded-full bg-navy px-4 py-2 text-sm text-white shadow-xl">
  </div>
  <script>
    const nav = [['Consultation Resources', 'book-open'], ['Country Code Guide', 'globe-2'], ['Spiels', 'messages-square'], ['Billing & Invoicing', 'receipt-text'], ['Directory & Company Info', 'users-round'], ['Cadences / Workflows', 'workflow'], ['Learning & Resources', 'graduation-cap']];
    const icons = { literature: 'book-open', zendesk: 'headphones', reference: 'files', production: 'file-text', samples: 'image', website: 'globe-2', calculator: 'calculator', quote: 'clipboard-list' };
    const data = [
      { id: 'literature', title: 'Author-Facing Product Literatures', desc: 'Product information, guides and helpful resources for authors.', color: 'blue', type: 'Guides', items: ['2025 Publishing Packages', 'Audiobook', 'Marketing Services', 'Publishing Guide', 'Editing Services', 'Author Success Stories'] },
      { id: 'zendesk', title: 'Zendesk Guide Articles (Author Facing)', desc: 'Support articles and help guides for authors.', color: 'teal', type: 'Guides', items: ['Publishing Timeline / Turn-around-time', 'Production Process Overview', 'What is Octavo?', 'Illustrations Guide', 'Project Manager Role', 'Tellwell Zendesk'] },
      { id: 'reference', title: 'Reference Sheets', desc: 'Quick reference materials for common questions.', color: 'violet', type: 'Reference', items: ['Tellwell Size Matrix', 'IngramSpark Popular Trim Sizes', 'Print Prices', 'Ingram Book Specs', 'Book Returns Program', 'Global Distribution'] },
      { id: 'production', title: 'Production PDF Guides', desc: 'Step-by-step guides for production and file preparation.', color: 'orange', type: 'Guides', items: ['Interior Layout Samples (Non-Author Facing)', 'Illustrations Creation Process', 'Marketing Collateral Samples', 'Extra Design Time', 'Print-ready Files Guide'] },
      { id: 'samples', title: 'Product Samples', desc: 'See examples of our work and product formats.', color: 'emerald', type: 'Samples', items: ['Cover Samples', 'Interior Layout Samples', 'Marketing Collaterals', 'Paperback & Hardcover Samples', 'Illustration Samples'] },
      { id: 'website', title: 'Author Website Samples', desc: 'Website examples and resources for authors.', color: 'rose', type: 'Samples', items: ['Sonia Discher', 'Angie Collins Burke', 'Karen Sibal', 'Seyoumnigussie', 'Website Best Practices'] },
      { id: 'calculator', title: 'External Calculators', desc: 'Useful tools and calculators for authors.', color: 'indigo', type: 'Reference', items: ['Royalty Calculator', 'Book Pricing Calculator', 'Trim Size Calculator', 'Distribution Calculator'] },
      { id: 'quote', title: 'Printing Quote Form', desc: 'Request a quote for printing services and custom projects.', color: 'cyan', type: 'Forms', items: ['Printing Quote Form'] }];
    const consultationUrls = {
      '2025 Publishing Packages': 'https://drive.google.com/drive/folders/1DsgsIQTNgPwEELiprJOsacdVHL2Xbe3-?usp=sharing', 'Audiobook': 'https://drive.google.com/drive/folders/1OYC17jJhHNtwiYz6tvwP6ofzWAOaaygf?usp=drive_link', 'Marketing Services': 'https://drive.google.com/drive/folders/1_5wEGDDfuG6JRnLPPu6KYej2zhSs89jH?usp=share_link', 'Publishing Guide': 'https://drive.google.com/drive/folders/131tDMJYww27FV3mne0pbYf0kioX949rX?usp=drive_link', 'Editing Services': 'https://drive.google.com/drive/u/3/folders/1jOKrOhioGxq8Z5GzFNSb64MpdYqdH-nG', 'Author Success Stories': 'https://drive.google.com/file/d/1pYpSpy9jFvsp5d9PlyJg8TKNw5BL-dGD/view', 'Publishing Timeline / Turn-around-time': 'https://tellwell.zendesk.com/hc/en-us/articles/360037698432-How-long-does-it-take-to-publish-a-book-', 'Production Process Overview': 'https://tellwell.zendesk.com/hc/en-us/articles/360050277131-I-signed-up-to-publish-with-Tellwell-What-s-next-', 'What is Octavo?': 'https://tellwell.zendesk.com/hc/en-us/articles/360039842952-What-is-Octavo-', 'Illustrations Guide': 'https://tellwell.zendesk.com/hc/en-us/articles/360046416211-Tellwell-Illustrations-Guide', 'Project Manager Role': 'https://tellwell.zendesk.com/hc/en-us/articles/360037762352-What-is-the-role-of-my-project-manager-', 'Tellwell Zendesk': 'https://tellwell.zendesk.com/hc/en-us', 'Tellwell Size Matrix': 'https://docs.google.com/spreadsheets/d/1xaqPXTrmMfbNcEI_5OskT_agJIvcZWZYxun883FYoOQ/edit', 'IngramSpark Popular Trim Sizes': 'https://drive.google.com/file/d/1G4bBvKCZU6vAVhXVmoHZBV-wO-XUZs0T/view?usp=sharing', 'Print Prices': 'https://docs.google.com/spreadsheets/d/1w1P-sVXMDMsOlHLMIORY88Z5UhEPVQ2eZv6ZqRrGaww/edit', 'Ingram Book Specs': 'https://www.ingramspark.com/plan-your-book/print/trim-sizes', 'Book Returns Program': 'https://www.ingramspark.com/blog/making-your-book-returnable', 'Global Distribution': 'https://www.ingramspark.com/how-it-works/distribute', 'Interior Layout Samples (Non-Author Facing)': 'https://drive.google.com/drive/folders/1uFvbuv5MOng4TSttp-oi05Qdn3ugySDp?usp=sharing', 'Illustrations Creation Process': 'https://drive.google.com/file/d/1BS4VvvC6VuuiEqKco-LFZOZ64uSxd0KN/view?usp=sharing', 'Marketing Collateral Samples': 'https://drive.google.com/drive/folders/1-viMOpQvikWLMPwC-tmd4tgufpHPKFJf?usp=sharing', 'Extra Design Time': 'https://drive.google.com/file/d/1IN2J74LHUqQOREczCQMtFiTgDGO16dAb/view', 'Print-ready Files Guide': 'https://tellwell.zendesk.com/hc/en-us/articles/19180976736411-Tellwell-s-Guide-to-Print-Ready-Files', 'Cover Samples': 'https://drive.google.com/drive/folders/1yjqs_T-10N0hN1NWq_bIz6n2dOj0Axcx?usp=sharing', 'Interior Layout Samples': 'https://drive.google.com/drive/folders/1uFvbuv5MOng4TSttp-oi05Qdn3ugySDp?usp=sharing', 'Marketing Collaterals': 'https://drive.google.com/drive/folders/1-viMOpQvikWLMPwC-tmd4tgufpHPKFJf?usp=sharing', 'Paperback & Hardcover Samples': 'https://drive.google.com/drive/folders/1yjqs_T-10N0hN1NWq_bIz6n2dOj0Axcx?usp=sharing', 'Illustration Samples': 'https://tellwellpublishing.com/ca/services/illustrations/', 'Sonia Discher': 'https://soniadischer.com/', 'Angie Collins Burke': 'http://angiecollinsburke.com/', 'Karen Sibal': 'https://karensibal.com/', 'Seyoumnigussie': 'https://seyoumnigussie.com/', 'Royalty Calculator': 'https://tellwell.ca/authorcalc', 'Book Pricing Calculator': 'https://portal.tellwell.ca/dashboard', 'Trim Size Calculator': 'https://docs.google.com/spreadsheets/d/1xaqPXTrmMfbNcEI_5OskT_agJIvcZWZYxun883FYoOQ/edit', 'Distribution Calculator': 'https://www.ingramspark.com/how-it-works/distribute', 'Printing Quote Form': 'https://docs.google.com/spreadsheets/d/1kDES7dmj2MnVGk8UUmio-RCTKHGqGphFsVR-n4yukF4/edit'
    };
    const websiteLinksByMarket = {
      CAN: [['Home', 'https://tellwellpublishing.com/ca/homepage/'], ['Price List', 'https://tellwellpublishing.com/ca/price-list/'], ['Illustrations Sample | Book Shelf', 'https://tellwellpublishing.com/ca/services/illustrations/'], ['Terms and Conditions', 'https://tellwellpublishing.com/ca/terms-conditions/'], ['Blog | News Room', 'https://blog.tellwell.ca/'], ['Privacy Policy', 'https://tellwellpublishing.com/ca/privacy-policy/']],
      USA: [['Home', 'https://tellwellpublishing.com/us/homepage/'], ['Price List', 'https://tellwellpublishing.com/us/price-list/'], ['Illustrations Sample | Book Shelf', 'https://tellwellpublishing.com/us/services/illustrations/'], ['Terms and Conditions', 'https://tellwellpublishing.com/us/terms-conditions/'], ['Blog | News Room', 'https://blog.tellwell.ca/'], ['Privacy Policy', 'https://tellwellpublishing.com/us/privacy-policy/']],
      AUS: [['Home', 'https://tellwellpublishing.com/au/homepage/'], ['Price List', 'https://tellwellpublishing.com/au/price-list/'], ['Illustrations Sample | Book Shelf', 'https://tellwellpublishing.com/au/services/illustrations/'], ['Terms and Conditions', 'https://tellwellpublishing.com/au/terms-conditions/'], ['Blog | News Room', 'https://blog.tellwell.ca/'], ['Privacy Policy', 'https://tellwellpublishing.com/au/privacy-policy/']],
      UKI: [['Home', 'https://tellwellpublishing.com/uk/homepage/'], ['Price List', 'https://tellwellpublishing.com/uk/price-list/'], ['Illustrations Sample | Book Shelf', 'https://tellwellpublishing.com/uk/services/illustrations/'], ['Terms and Conditions', 'https://tellwellpublishing.com/uk/terms-conditions/'], ['Blog | News Room', 'https://blog.tellwell.ca/'], ['Privacy Policy', 'https://tellwellpublishing.com/uk/privacy-policy/']],
      EU: [['Home', 'https://tellwellpublishing.com/eu/homepage/'], ['Price List', 'https://tellwellpublishing.com/eu/price-list/'], ['Illustrations Sample | Book Shelf', 'https://tellwellpublishing.com/eu/homepage/'], ['Terms and Conditions', 'https://tellwellpublishing.com/eu/terms-conditions/'], ['Blog | News Room', 'https://blog.tellwell.ca/'], ['Privacy Policy', 'https://tellwellpublishing.com/eu/privacy-policy/']]
    };
    let activeMarket = 'CAN';
    const discountGuidelines = { cashDisc: '10%', countries: { CA: { prefix: 'CA$', flag: 'ca', invoice: [2199, 3649, 6699, 7399, 9499, 12999], free: [330, 547, 1005, 1110, 1425, 1950] }, AU: { prefix: 'AU$', flag: 'au', invoice: [2399, 3899, 7099, 7799, 10199, 13999], free: [360, 585, 1065, 1170, 1530, 2100] }, US: { prefix: 'US$', flag: 'us', invoice: [1749, 2999, 5499, 6199, 7999, 11499], free: [262, 450, 825, 930, 1200, 1725] }, UK: { prefix: '\u00A3', flag: 'gb', invoice: [1249, 2099, 4099, 4299, 5899, 7999], free: [187, 315, 615, 645, 885, 1200] }, EU: { prefix: '\u20AC', flag: 'eu', invoice: [1499, 2499, 4899, 5099, 6899, 9899], free: [225, 375, 735, 765, 1035, 1485] } } };
    const discountCountryByMarket = { CAN: 'CA', AUS: 'AU', USA: 'US', UKI: 'UK', EU: 'EU' };
    const discountMarketChoices = [{ market: 'AUS', code: 'AU', flag: 'au', ext: 'webp' }, { market: 'USA', code: 'US', flag: 'us', ext: 'webp' }, { market: 'CAN', code: 'CA', flag: 'ca', ext: 'webp' }, { market: 'UKI', code: 'UK', flag: 'gb', ext: 'svg' }, { market: 'EU', code: 'EU', flag: 'eu', ext: 'jpg' }];
    function discountMarketPicker() { const current = discountMarketChoices.find(option => option.market === activeMarket) || discountMarketChoices[2]; return `<div id="marketDropdown" class="relative"><button id="marketSelect" type="button" aria-haspopup="true" aria-expanded="false" aria-label="Selected country: ${current.code}" class="inline-flex items-center gap-2 rounded-md border border-[#E5E7EB] bg-white px-2.5 py-2 text-sm font-semibold text-[#172B4D] hover:bg-[#F5F6F7] focus:outline-none focus:ring-2 focus:ring-aus"><img src="/flags/${current.flag}.${current.ext}" alt="" class="h-4 w-6 object-cover"><span>${current.code}</span><i data-lucide="chevron-down" class="h-4 w-4"></i></button><div id="marketOptions" role="menu" class="absolute right-0 top-full z-20 mt-1 hidden min-w-24 overflow-hidden rounded-md border border-[#E5E7EB] bg-white py-1 shadow-lg">${discountMarketChoices.map(option => `<button type="button" role="menuitemradio" aria-checked="${option.market === activeMarket}" class="marketOption flex w-full items-center gap-2 px-3 py-2 text-left text-sm font-medium ${option.market === activeMarket ? 'bg-aus text-white' : 'text-[#222222] hover:bg-[#F5F6F7]'}" data-market="${option.market}"><img src="/flags/${option.flag}.${option.ext}" alt="" class="h-4 w-6 object-cover"><span>${option.code}</span></button>`).join('')}</div></div>`; }
    function renderDiscountRows() { const body = document.querySelector('#discountGuidelineRows'); if (!body) return; const country = discountGuidelines.countries[discountCountryByMarket[activeMarket]] || discountGuidelines.countries.CA; const format = value => `${country.prefix}${new Intl.NumberFormat('en-US').format(value)}`; body.innerHTML = country.invoice.map((invoice, index) => `<tr class="border-t border-blue-50"><td class="px-3 py-2 align-top">${format(invoice)}</td><td class="px-3 py-2 align-top">${discountGuidelines.cashDisc}</td><td class="px-3 py-2 align-top">${format(country.free[index])}</td></tr>`).join(''); const button = document.querySelector('#marketSelect'); const current = discountMarketChoices.find(option => option.market === activeMarket); if (button && current) { button.setAttribute('aria-label', `Selected country: ${current.code}`); button.querySelector('img').src = `/flags/${current.flag}.${current.ext}`; button.querySelector('span').textContent = current.code; } document.querySelectorAll('.marketOption').forEach(option => { const selected = option.dataset.market === activeMarket; option.setAttribute('aria-checked', String(selected)); option.classList.toggle('bg-aus', selected); option.classList.toggle('text-white', selected); option.classList.toggle('text-[#222222]', !selected); }); }
    let custom = JSON.parse(localStorage.getItem('aus-custom') || '[]'), customNav = JSON.parse(localStorage.getItem('aus-navigation-links') || '[]'), saved = JSON.parse(localStorage.getItem('aus-saved') || '[]'), recent = JSON.parse(localStorage.getItem('aus-recent') || '[]'), filter = 'All', savedMode = false, expanded = {}, activePage = 0;
    const consultationView = document.querySelector('#pageContent').innerHTML;
    const tabPages = {
      1: {
        eyebrow: 'Reference guide', title: 'Country Code Guide', intro: 'A quick country-calling-code reference for the LATAM and EUR regions. Use it before calling or validating an international phone number.', groups: [
          { title: 'LATAM region', icon: 'map-pinned', items: ['Argentina â€” +54, +549', 'Bolivia â€” +591', 'Brazil â€” +55', 'Chile â€” +56', 'Colombia â€” +57', 'Costa Rica â€” +506', 'Cuba â€” +53', 'Dominican Republic â€” +1 809 / +1 829 / +1 849', 'Ecuador â€” +593', 'Mexico â€” +52', 'Peru â€” +51', 'Puerto Rico â€” +1 787 / +1 939', 'Uruguay â€” +598'] },
          { title: 'EUR region', icon: 'map-pinned', items: ['Albania â€” +355', 'Andorra â€” +376', 'Austria â€” +43', 'Belgium â€” +32', 'France â€” +33', 'Germany â€” +49', 'Ireland â€” +353', 'Italy â€” +39', 'Netherlands â€” +31', 'Portugal â€” +351', 'Spain â€” +34', 'Switzerland â€” +41', 'United Kingdom â€” +44'] }
        ]
      },
      2: {
        eyebrow: 'Call toolkit', title: 'Spiels', intro: 'Ready-to-use phone guidance, callback details, and conversation templates for publishing consultations.', groups: [
          { title: 'Toll-free callback numbers', icon: 'phone-call', items: ['Canada â€” 1-888-415-1541', 'United States â€” 1 (800) 891-4160', 'Australia â€” 61 (1800) 934-224', 'Leave the toll-free number with the callerâ€™s extension as the callback number.'] },
          { title: 'Call templates', icon: 'message-circle-more', items: ['Publishing consultation', 'Self-publishing consultation', 'Book coaching consultation', 'Ghostwriting and writing services', 'HVNF call templates', 'Writing services call guide'] }
        ]
      },
      3: {
        eyebrow: 'Billing reference', title: 'Billing & Invoicing', intro: 'Discounting limits, payment-plan rules, and the internal process for company forms.', groups: [
          { title: 'Regular discounting guidelines', icon: 'badge-dollar-sign', items: ['Country-specific invoice and free-service values are shown in the table.'] },
          { title: 'Payment plans & company forms', icon: 'file-check-2', items: ['Full payment is available for qualifying invoices.', 'A 2â€“3 month payment plan includes an admin fee.', 'Payments must be 30 days apart.', 'Complete the required details, then forward the form to JH for signing.'] }
        ]
      },
      4: {
        eyebrow: 'Internal directory', title: 'Directory & Company Info', intro: 'Core Tellwell company details and a central place to find the appropriate team member.', groups: [
          { title: 'Tellwell at a glance', icon: 'building-2', items: ['Tellwell Talent, Inc. â€” founded 2015', 'Headquarters: Victoria, British Columbia, Canada', 'Satellite office: Tellitwell International Inc., Cebu, Philippines â€” founded 2018', 'Workforce: 60 full-time staff and around 50 contractors', 'Official address: 2031 Store Street, Victoria, BC, V8T 5L9'] },
          { title: 'Team directory', icon: 'contact-round', items: ['Use the directory to find staff names, extensions, email addresses, and locations.', 'Start with the core Canada team when you need guidance or escalation.', 'Keep client-facing contact details current before sharing them.'] }
        ]
      },
      5: {
        eyebrow: 'Daily operations', title: 'Cadences / Workflows', intro: 'A practical guide for planning the day, prioritizing leads, and maintaining consistent follow-up.', groups: [
          { title: 'Order of call priority', icon: 'list-ordered', items: ['1. Incoming calls', '2. Calendly appointments', '3. Uncontacted leads with a complete or one-month milestone', '4. Attempted leads with a complete or one-month milestone'] },
          { title: 'Daily productivity guide', icon: 'calendar-check-2', items: ['Read and respond to unreplied email and Slack/Teams messages from the prior day.', 'Identify the dayâ€™s top 20 warmest leads.', 'Organize the workday around the priority queue and planned follow-ups.', 'Start the day prepared, focused, and ready for client conversations.'] }
        ]
      },
      6: {
        eyebrow: 'Learning centre', title: 'Learning & Resources', intro: 'Team videos and quick-reference links from the Tellwell training library.', groups: [
          { title: 'Tutorial videos', icon: 'video', items: ["The Evolution of Self-Publishing with Tellwell's Founder & CEO Tim Lindsay", '8 Tips for Choosing the Right Self-Publishing Company for Your Book', 'Debunking 15 Self-Publishing Myths with Tellwell Publishing Consultant Mitch Anderson', 'Is Self-Publishing Legitimate? The Case for Self-Publishing', 'Navigating Vulnerability in Memoir Writing with Self-Published Author Karen Harmon', 'Increase Your Amazon Ranking (And Book Sales!) With These Tips!', 'The Evolution of Book Promotion with Author Karen Cumming', '7 Marketing Tips to Get Your Childrenâ€™s Book Noticed!'] },
          { title: 'Quick reference links', icon: 'external-link', items: ['Tellwell Size Matrix', 'Print Prices', 'Publishing Timeline / Turn-around-time', 'Production Process Overview', 'Manuscript Submission Guidelines'] }
        ]
      }
    };
    const companyInfo = [
      ['Name', 'Tellwell Talent, Inc. (Founded 2015)'], ['Headquarters', 'Victoria, BC (Canada)'], ['Satellite Offices', 'Tellwell International Inc., Cebu, Philippines (Founded 2018)'], ['Workforce', '60 full time and around 50 contractors'], ['Official Address', '2031 Store Street, Victoria, BC, V8T 5L9'], ['Market Presence', 'Canada, USA, Australia, UK and major EU countries'], ['Corporate Website', 'tellwellpublishing.com'], ['Toll-Free Numbers', '1-888-415-1541 (Canada) Â· 1 (800) 891-4160 (USA) Â· 61 (1800) 934-224 (Australia) Â· 44 0800 058 4645 (UKI)'], ['Email Contact', 'contact@tellwellpublishing.com'], ['Published Books', 'More than 4,000 titles from more than 1,500 authors across the globe'], ['Founder & CEO', 'Timothy Lindsay']
    ];
    const teamDirectory = [
      ['Core Group', 'Mitchel Anderson', '102', 'publisher@tellwell.ca', 'Canada', 'CA'], ['Core Group', 'Scott Lunn', '104', 'scott@tellwell.ca', 'Canada', 'CA'], ['Core Group', 'Jennifer Chapin', '105', 'jennifer@tellwell.ca', 'Canada', 'CA'], ['Core Group', 'Ben Tiso', '139', 'ben@tellwell.ca', 'Canada', 'CA'], ['International Team', 'Nelson Ty', '141', 'nelson@tellwellpublishing.com', 'Cebu', 'US'], ['International Team', 'Josephine Cataluna', '106', 'josephine@tellwell.com.au', 'Cebu', 'AU'], ['International Team', 'Melissa Barker', '149', 'melissa.barker@tellwell.com.au', 'Australia', 'AU'], ['International Team', 'Rubby Destura', '150', 'rubby@tellwellpublishing.com', 'Cebu', 'UK/EU'], ['International Team', 'Debbie Boy Sumagang', '153', 'debbieboy@tellwellpublishing.com', 'Cebu', 'UK/EU'], ['International Team', 'Marjorie Impas', '154', 'marjorie@tellwellpublishing.com', 'Cebu', 'UK/EU'], ['International Team', 'Kyle Villaceran', '151', 'kyle@tellwellpublishing.com', 'Cebu', 'UK/EU']
    ];
    const slackChannels = [
      ['#general', 'Company-wide announcements and work-based matters for all team members.'], ['#audiobooks', 'Audiobook questions, eligibility reviews, project concerns, and coordination with audiobook specialists.'], ['#bookmarketingexternal', 'Marketing service questions, deliverable clarifications, campaign inquiries, and Marketing Coordinator coordination.'], ['#consultants', 'Sales Team announcements, updates, discussions, celebrations, wins, feedback, and coaching.'], ['#design_requests / #designteam', 'Print-readiness reviews, design questions, cover inquiries, layout concerns, and clarification requests.'], ['#dev_communication', 'Octavo and internal-system bug reports, feature requests, technical concerns, and functionality questions.'], ['#digital-marketing-support', 'Lead feedback, appointment concerns, lead-quality questions, CRM clarifications, and digital marketing concerns.'], ['#location_log', 'Shift starts, late arrivals, early departures, breaks, remote-work updates, and internet or power issues.'], ['#photos', 'Team activities, office events, conferences, celebrations, travel photos, milestones, and fun moments.'], ['#printing-questions', 'Printing questions, service clarifications, advance book orders, and print quote requests.'], ['#production-questions', 'Production timelines, fulfillment questions, process clarifications, and service-related concerns.'], ['#payment_requests', 'Alternative payment arrangements, non-standard methods, payment processing assistance, and payment questions requiring review.']
    ];
    const portalDetail = {
      2: { label: 'Spiels', intro: 'Ready-to-use conversation guidance for publishing consultations.', groups: [['Opening / greeting spiels', ['Standard Inbound Greeting|Hi, thanks for calling Tellwell â€” this is [Name], one of our Publishing Consultants. I understand you are working on a book â€” congratulations! Do you have a few minutes so I can learn more about your project and how we can help?', 'Warm Callback (Web Form Lead)|Hi [Author Name], this is [Name] from Tellwell â€” you submitted a request about publishing your book, so I wanted to follow up personally. Is now still a good time to chat for about fifteen minutes?']], ['Objection handling spiels', ['Price Objection â€” Package Comparison|I hear you â€” investment is a big part of this decision. Can I walk you through what is included in each package so we can find the best fit for your budget and goals?', 'Let Me Think About It|Of course, this is an important decision and I want you to feel confident. What is the biggest question still on your mind â€” the investment, timeline, or process?', 'I Found It Cheaper Elsewhere|That is fair to compare. What is included in that quote â€” specifically editing rounds, distribution, and who owns the rights? I want to make sure it is an apples-to-apples comparison.']], ['Follow-up & closing spiels', ['3-Day Silent Follow-Up|Hi [Author Name], just following up after our conversation earlier this week. I know publishing a book is a big decision, so no pressure â€” I wanted to check whether any new questions came up.', 'Re-engagement After 30 Days|Hi [Author Name], it has been a little while since we connected about your book. Is this still something you are planning to move forward with this year?', 'Assumptive Close|Based on everything we discussed, the [Package Name] sounds like the right fit. Should we go ahead and get your project started today?', 'Timeline-Based Close|Since you mentioned wanting the book out before [target date], we would need to lock in the schedule this week. Would you like me to send the agreement?']], ['Refund / cancellation spiels', ['Cancellation Request â€” Early Stage|I am sorry to hear you are looking to step away from your project. Before we process anything, can you share what changed? I want to make sure we have done everything we can to support you first.', 'Refund Policy Explanation|I understand, and I want to be transparent. Per policy, deposits become non-refundable once production work has begun, but milestones not yet started may be eligible. Let me pull up your project file and walk through where things stand.']]] },
      3: { label: 'Billing & Invoicing', intro: 'Reference rules for payments, corrections, refunds, and account follow-up.', groups: [['Payment terms & methods', ['Accepted methods: credit card, e-transfer for CAD accounts, and wire transfer for international authors.', 'Installment plans are available on packages over $2,500 and require Team Lead approval.', 'Invoices are due within 7 days unless the agreement states otherwise.']], ['Payment, refund & overdue procedures', ['A 50% deposit is required before production begins on a publishing package.', 'Deposits are non-refundable once editorial or design work has begun.', 'Unused milestone payments may be refundable, minus a 5% processing fee.', 'Invoices unpaid after 7 days trigger reminders; work pauses when balances are more than 14 days overdue.', 'Accounts 30+ days overdue are escalated to Accounts for collections review.']], ['Invoice management rules', ['Do not edit a sent invoice directly â€” void it and issue a corrected version referencing the original.', 'Voided invoices need a one-line reason in internal notes.', 'Only Team Leads and Accounts staff may void invoices over $1,000.', 'Upgrades are billed as the package-price difference, prorated for work already completed.', 'Downgrades are permitted only before production begins and need Team Lead sign-off.']], ['Currency rules', ['CAN-market authors are invoiced in CAD; USA, AUS, and UKI authors are invoiced in local currency where supported.', 'The exchange rate is locked on the invoice issue date.', 'International wire transfers must cover sending-side bank fees.']]] },
      5: { label: 'Cadences / Workflows', intro: 'Step-by-step operational timelines from author onboarding through post-publication follow-up.', groups: [['New Author Onboarding Cadence', ['Day 1 â€” Welcome Call|Confirm the package, expectations, and next steps after the agreement is signed.', 'Day 1 â€” Welcome Email & Portal Access|Send author-portal credentials and an onboarding PDF.', 'Day 2 â€” Project Handoff to PM|Brief the assigned Project Manager on goals, timeline, and special notes.', 'Day 3â€“5 â€” Kickoff Call with PM|Confirm manuscript submission date and outline the production roadmap.', 'Week 2 â€” Manuscript Intake Reminder|Check in if the manuscript has not yet been received.', 'Week 3 â€” First Check-In Survey|Confirm the author feels supported and identify open questions.']], ['Manuscript-to-Production Workflow', ['Upon submission â€” Manuscript Received|Log the manuscript, check formatting, and confirm word count.', 'Within 2 business days â€” Assigned to Editorial|Route the manuscript to an editor based on genre and package tier.', '2â€“4 weeks â€” First Editing Pass|Complete the appropriate editing pass and return tracked changes.', '2 weeks â€” Author Review Window|Author reviews edits and returns approval or requested changes.', '2â€“3 weeks â€” Design & Typesetting|Produce interior layout and cover design.', '1 week â€” Proof Review|Author reviews the digital proof; the PM logs final corrections.', 'Upon approval â€” Final File Release|Release print-ready files to distribution partners.']], ['Post-Publication Follow-Up', ['Day of publication â€” Launch Congratulations Call|Celebrate the launch and confirm author copies are on order.', 'Week 1 â€” Marketing Services Check-In|Discuss press-release distribution and promotional add-ons.', 'Day 30 â€” Sales Snapshot|Share early sales/ranking data and discuss next marketing steps.', 'Day 45 â€” Review Request Nudge|Prompt the author to ask early readers for reviews.', 'Month 6 â€” Revisions Check-In|Discuss post-publication revisions and the second-edition process.']]] },
      6: { label: 'Learning & Resources', intro: 'Training references and videos for publishing consultants.', groups: [['Tutorial videos', ["The Evolution of Self-Publishing with Tellwell's Founder & CEO Tim Lindsay", "8 Tips for Choosing the Right Self-Publishing Company for Your Book", 'Debunking 15 Self-Publishing Myths with Tellwell Publishing Consultant Mitch Anderson', 'Is Self-Publishing Legitimate? The Case for Self-Publishing', 'Navigating Vulnerability in Memoir Writing with Self-Published Author Karen Harmon', 'Increase Your Amazon Ranking (And Book Sales!) With These Tips!', 'The Evolution of Book Promotion with Author Karen Cumming', '7 Marketing Tips to Get Your Childrenâ€™s Book Noticed!']], ['Quick reference links', ['Tellwell Size Matrix', 'Print Prices', 'Publishing Timeline / Turn-around-time', 'Production Process Overview', 'Manuscript Submission Guidelines']]] }
    };

    const trainingVideos = [
      ['Tagging and Converting a Lead in Zoho CRM', 'https://drive.google.com/file/d/1lgk4HIWD0PHIeXzixDRjlZWZ1vHb1dkJ/view?usp=share_link'],
      ['Invoicing a Client in Octavo', 'https://drive.google.com/file/d/12HWzN3biuRkwZjnlqOCExD6I6jscYVdj/view?usp=share_link'],
      ['Octavo Print Calculator', 'https://drive.google.com/drive/folders/1zr0-udaE20oX1Z2Fp96IXGql1ok7_axs'],
      ['Adding a Print Order into a Project', 'https://drive.google.com/file/d/1vfcLItfsAgxUIkHt1X-XkrwnvxpUrilH/view?usp=drive_link'],
      ['Steps to Create a Multi-Currency Price-List in Zoho CRM', 'https://docs.google.com/document/d/1Zg3CPkuaSXxNiLxtEC8XPKLgPsqamMiNFiPjDC7ATas/edit?tab=t.0'],
      ['Other Tutorial Videos', 'https://drive.google.com/drive/folders/1a5JA7cgMDzVEm6ffd560dCUnOHVTDg8w?usp=drive_link']
    ];
    const trainingPolicies = [
      ['Handling Upsells to Authors Across Teams', 'https://drive.google.com/file/d/1JSxaQAifrPquI-GMCzLAbKEorv-AnmWI/view?usp=sharing'],
      ['2026 Referral Program SOP', 'https://docs.google.com/document/d/1iFRFtcFDxoyRDT_u42Bp3kxMpAKHquTwxHFzE5-McfA/edit?usp=sharing'],
      ['Tellwell AI Quick Guide', 'https://docs.google.com/document/d/1SDBLea6jqR-CqhZ3n4zLZautYDSelk_3MBBISm72VjA/edit?tab=t.0']
    ];
    const leadTaggingGuide = [
      ['Attempted 1â€“7', 'You made your first to seventh attempt to contact the lead by phone, email, and text, with no response.'],
      ['Communicating', 'Carrie Sanchez'],
      ['Dead', 'The lead has permanently lost its value and has a 0% chance of becoming an opportunity.'],
      ['Low Value', 'The lead cannot currently qualify as an opportunity, but may have potential if circumstances change.'],
      ['Not Qualified', 'The lead is an opportunity but cannot be converted into a closed sale; converting it would misrepresent its value.']
    ];
    const reassignmentGuides = [
      { title: 'Leads created before April 1, 2022', rows: [['Uncontacted', '> 3 business days'], ['Attempted 1â€“7', 'Last activity/open task due date is > 30 days old'], ['Communicating', 'Last activity/open task due date is > 1 year old'], ['Regardless of status', 'Lead owner is no longer with Tellwell']] },
      { title: 'Leads created April 1, 2022 and after', rows: [['Uncontacted', '> 2 business days'], ['Attempted 1â€“7', '> 30 days old'], ['Communicating', '> 90 days old']], note: 'Recaptured leads are distributed evenly among PCs working in the same territory.' }
    ];
    const opportunityStages = [
      ['1', 'A core customer who shows great interest in working with us but requires a more thorough consultation.'],
      ['2', 'A core customer who is committed but not ready to start. Requires or has asked for constant follow-ups.'],
      ['3', 'A core customer who is eager to publish, may have asked for a quote, but is taking time to decide and check other options.'],
      ['4', 'A core customer who is ready to start within the month and is fine-tuning the offer.'],
      ['5', 'A core customer who has been sent a final proposal and is currently doing a final review.'],
      ['6', 'A core customer who has expressly accepted the offer and communicated readiness to pay. The deal is closed; payment is pending.'],
      ['7', 'A core customer whose payment has been processed in Octavo.']
    ];
    const inactiveOpportunityGuides = [
      ['D-Closed Lost', 'Potential core customers who decided not to work with us.', ['Lost to competitor', 'Bad Blog/Bad Review', 'Signed-up then cancelled', 'DNC Request (Do Not Contact)', 'Budget constraints', 'Changed requirements', 'Loss of interest', 'Not the right fit']],
      ['E-Low Value', 'Potential core customers unable to proceed now but who may do so in the future.', ['MIA/Unresponsive', 'Author not available to start in the next 90 days', 'Waiting for finances', 'Waiting on the true decision maker', 'Project put on hold indefinitely']]
    ];
    const dailyProductivity = ['Read and respond to unreplied emails and Slack/Teams messages from the previous day.', 'Identify your top 20 warmest leads of the day.', 'Proceed with your call attempts, one lead after the other.', 'Allocate the last 1â€“2 hours of your day for sending emails and/or other admin tasks.'];
    const callPriorities = ['Incoming calls', 'Calendly appointments', 'Uncontacted with complete or 1-month MS', 'Attempted with complete or 1-month MS'];
    const callFlows = [
      ['Routed to Voicemail Call Flow', ['Pre-call preparations', '1st call attempt', 'Leave voicemail', 'Send unresponsive-phone template', '2nd call attempt if needed', 'Tick off open call task; change lead status to Attempted; leave LVM or LMOM notes']],
      ['Invalid / #NIS / ADC / Ring Out / Hung Up on Intro & Bounce Email Call Flow', ['Pre-call preparations', '1st call attempt', 'Fast tone / could not be connected / NIS / hung up on intro', 'Send unresponsive-phone template', 'Tick off open call task; change lead status to Dead-spam; leave pertinent notes']],
      ['Callback Request Call Flow', ['Pre-call preparations', '1st call attempt', 'Call back request', 'Call back attempt', 'Proceed with consultation call flow', 'If unavailable, leave voicemail or send missed appointment / Calendly link template']],
      ['Wrong Number, Author Not Available, Child Author Call Flow', ['Pre-call preparations', '1st call attempt', 'Author not available', 'Child author / look for parent or guardian / wrong number', 'Proceed with consultation or send Calendly link / intro email', 'Update the lead status and leave pertinent notes']],
      ['Already Published Author Call Flow', ['Pre-call preparations', '1st call attempt', 'Already published, no other books / already published with other books', 'Offer stand-alone marketing services where relevant', 'Proceed with consultation or update lead status to low value / dead-lost to competition']],
      ['Incoming Call Queue Courtesy Workflow', ['Incoming call from the Tellwell Canada, USA, Australia, or UK call queue', 'Check CRM pop-up window / search for lead info', 'If owner is no longer active or there is no record: take the call and create lead / request reassignment', 'If owner is an active PC: refrain from answering; take a message and pass it to the assigned PC', 'Proceed with publishing consultation when applicable']],
      ['Publishing Consultation â€” Qualified Workflow', ['Introduction / build rapport', 'Must ask questions and confirm core-customer fit', 'Send welcome / opportunities email and estimate', 'Create estimate; update amount, closing date, stage, country, genre, publishing type, and currency', 'Convert lead to opportunity and account', 'Schedule closing / follow-up call, set stage 7, and close']],
      ['Publishing Consultation â€” Not Qualified Workflow', ['Introduction / build rapport', 'Must ask questions and assess the core-customer criteria', 'Use the appropriate outcome: foreign-language manuscript, cannot afford, printing only, already signed up, no manuscript / ghostwriting, 6- or 12-month lead, or technologically challenged', 'Update lead status to Low Value or Dead (reason code) and leave pertinent notes', 'Send the 6- or 12-month template when applicable']]
    ];

    let countryDirectory = null, countryDirectoryPromise = null, selectedCountry = null, selectedCountryZone = null, countryClockTimer = null;
    const countryDirectoryCacheKey = 'tellwell-country-directory-v1';
    const countryTimeZonePackageUrl = 'https://cdn.jsdelivr.net/npm/countries-and-timezones@3.10.0/+esm';
    const countryDataUrl = 'https://cdn.jsdelivr.net/npm/world-countries@5.1.0/countries.json';
    const preferredCountryTimeZones = { AR: 'America/Argentina/Buenos_Aires', AU: 'Australia/Sydney', BR: 'America/Sao_Paulo', CA: 'America/Toronto', GB: 'Europe/London', JP: 'Asia/Tokyo', MX: 'America/Mexico_City', PH: 'Asia/Manila', RU: 'Europe/Moscow', US: 'America/New_York' };
    function normalizeCountryQuery(value) { return String(value || '').trim().toLocaleLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '') }
    async function ensureCountryDirectory() {
      if (countryDirectory) return countryDirectory;
      if (!countryDirectoryPromise) countryDirectoryPromise = (async () => {
        const timeZoneData = await import(countryTimeZonePackageUrl);
        let countries = null;
        try { const saved = JSON.parse(localStorage.getItem(countryDirectoryCacheKey) || 'null'); if (saved && Date.now() - saved.savedAt < 30 * 24 * 60 * 60 * 1000 && Array.isArray(saved.countries)) countries = saved.countries; } catch (_) {}
        if (!countries) {
          const response = await fetch(countryDataUrl, { cache: 'force-cache' });
          if (!response.ok) throw new Error('Country data request failed.');
          const source = await response.json();
          countries = source.map(item => {
            const root = String(item.idd?.root || '').replace(/\D/g, '');
            const suffixes = Array.isArray(item.idd?.suffixes) ? item.idd.suffixes : [''];
            const rawCallingCodes = Array.isArray(item.callingCodes) && item.callingCodes.length ? item.callingCodes : suffixes.map(suffix => root + String(suffix || '').replace(/\D/g, '')); const callingCodes = [...new Set(rawCallingCodes.map(code => String(code).replace(/\D/g, '')).filter(Boolean))];
            return { name: item.name?.common || item.name?.official || '', iso2: item.cca2 || '', iso3: item.cca3 || '', callingCodes, aliases: item.altSpellings || [], flag: item.cca2 ? 'https://flagcdn.com/' + String(item.cca2).toLowerCase() + '.svg' : '' };
          }).filter(country => country.name && country.iso2 && country.callingCodes.length);
          try { localStorage.setItem(countryDirectoryCacheKey, JSON.stringify({ savedAt: Date.now(), countries })); } catch (_) {}
        }
        countryDirectory = countries.map(country => { let zones = []; try { zones = (timeZoneData.getTimezonesForCountry(country.iso2) || []).filter(zone => !zone.aliasOf && zone.name); } catch (_) {} return { ...country, timeZones: [...new Map(zones.map(zone => [zone.name, zone])).values()] }; });
        return countryDirectory;
      })().catch(error => { countryDirectoryPromise = null; throw error });
      return countryDirectoryPromise;
    }
    function countryResultMessage(message, isError = false) { const result = document.querySelector('#countryResult'); result.className = `mt-4 rounded-lg border px-4 py-3 text-sm ${isError ? 'border-amber-200 bg-amber-50 text-[#172B4D]' : 'border-[#E5E7EB] bg-[#F5F6F7] text-[#6B7280]'}`; result.textContent = message; }
    async function updateCountrySuggestions(value) {
      const list = document.querySelector('#countrySuggestions'); if (!list) return;
      const query = normalizeCountryQuery(value); list.replaceChildren(); if (!query) return;
      try { const countries = await ensureCountryDirectory(); if (normalizeCountryQuery(document.querySelector('#countryGuideSearch')?.value) !== query) return; const digits = /^\+?\d+$/.test(query) ? query.replace(/\D/g, '') : ''; const matches = countries.filter(country => digits ? country.callingCodes.some(code => code.startsWith(digits)) : normalizeCountryQuery(`${country.name} ${country.aliases.join(' ')}`).includes(query)).slice(0, 8); matches.forEach(country => { const option = document.createElement('option'); option.value = country.name; option.label = `${country.name} ${country.callingCodes.map(code => '+' + code).join(', ')}`; list.appendChild(option) }); if (digits) matches.forEach(country => country.callingCodes.filter(code => code.startsWith(digits)).forEach(code => { const option = document.createElement('option'); option.value = '+' + code; option.label = `${country.name} â€” +${code}`; list.appendChild(option) })); } catch (_) { /* Identify displays the loading error. */ }
    }
    function countryMatches(query, countries) {
      const normalized = normalizeCountryQuery(query), numeric = /^\+?\d+$/.test(normalized);
      if (numeric) { const digits = normalized.replace(/\D/g, ''); const exact = countries.filter(country => country.callingCodes.includes(digits)); if (exact.length) return exact; const prefixes = countries.flatMap(country => country.callingCodes.filter(code => digits.startsWith(code)).map(code => ({ country, code }))); if (!prefixes.length) return []; const longest = Math.max(...prefixes.map(match => match.code.length)); return [...new Map(prefixes.filter(match => match.code.length === longest).map(match => [match.country.iso2, match.country])).values()]; }
      return countries.filter(country => normalizeCountryQuery(`${country.name} ${country.aliases.join(' ')}`).includes(normalized)).sort((a, b) => Number(normalizeCountryQuery(a.name) !== normalized) - Number(normalizeCountryQuery(b.name) !== normalized));
    }
    function showCountryMatches(matches) {
      const result = document.querySelector('#countryResult'); result.className = 'mt-4 rounded-lg border border-[#E5E7EB] bg-white p-2';
      result.innerHTML = `<p class="px-3 py-2 text-sm font-semibold text-[#172B4D]">${matches.length > 1 ? 'Choose a matching country' : 'Country found'}</p>${matches.slice(0, 12).map(country => `<button type="button" class="countryCandidate flex w-full items-center gap-3 rounded-md px-3 py-2 text-left text-sm font-medium text-[#222222] hover:bg-[#F5F6F7]" data-country="${country.iso2}"><img src="${country.flag}" alt="" class="h-4 w-6 shrink-0 rounded-sm object-cover"><span class="min-w-0 flex-1">${country.name}</span><span class="text-xs text-[#6B7280]">${country.callingCodes.map(code => '+' + code).join(', ')}</span></button>`).join('')}`;
      if (matches.length === 1) showCountryDetails(matches[0]);
    }
    function countryOffset(timeZone) { try { const value = new Intl.DateTimeFormat('en', { timeZone, timeZoneName: 'longOffset' }).formatToParts(new Date()).find(part => part.type === 'timeZoneName')?.value || 'GMT'; return value === 'GMT' ? 'UTC+00:00' : value.replace(/^GMT/, 'UTC'); } catch (_) { return 'Unavailable'; } }
    function updateCountryClock() {
      if (!selectedCountry || !selectedCountryZone) return;
      const time = document.querySelector('#countryLocalTime'), offset = document.querySelector('#countryUtcOffset'); if (!time || !offset) return;
      try { time.textContent = new Intl.DateTimeFormat(undefined, { timeZone: selectedCountryZone, hour: 'numeric', minute: '2-digit', second: '2-digit' }).format(new Date()); offset.textContent = countryOffset(selectedCountryZone); } catch (_) { time.textContent = 'Unavailable'; offset.textContent = 'Unavailable'; }
    }
    function showCountryDetails(country) {
      selectedCountry = country; const zones = country.timeZones || []; const preferred = preferredCountryTimeZones[country.iso2]; selectedCountryZone = (zones.find(zone => zone.name === preferred) || zones[0])?.name || '';
      const result = document.querySelector('#countryResult'); result.className = 'mt-4 rounded-lg border border-[#E5E7EB] bg-white p-4'; const codeList = country.callingCodes.map(code => '+' + code).join(', ');
      result.innerHTML = `<div class="flex min-w-0 items-center gap-3 border-b border-[#E5E7EB] pb-3"><img src="${country.flag}" alt="Flag of ${country.name}" class="h-6 w-9 shrink-0 rounded-sm border border-[#E5E7EB] object-cover"><h3 class="min-w-0 break-words text-lg font-bold text-[#172B4D]">${country.name}</h3></div><div class="mt-4 grid gap-4 sm:grid-cols-2"><div><p class="text-xs font-semibold uppercase tracking-wide text-[#6B7280]">Country calling code</p><p class="mt-1 break-words text-base font-semibold text-[#222222]">${codeList}</p></div><div><p class="text-xs font-semibold uppercase tracking-wide text-[#6B7280]">Current local time</p><p id="countryLocalTime" class="mt-1 text-base font-semibold text-[#222222]">â€”</p></div><div class="min-w-0"><p class="text-xs font-semibold uppercase tracking-wide text-[#6B7280]">Time zone${zones.length > 1 ? 's' : ''}</p>${zones.length > 1 ? `<select id="countryTimezone" class="mt-1 max-w-full rounded border border-[#E5E7EB] bg-white px-2 py-1.5 text-sm text-[#222222]">${zones.map(zone => `<option value="${zone.name}" ${zone.name === selectedCountryZone ? 'selected' : ''}>${zone.name.replaceAll('&', '&amp;').replaceAll('<', '&lt;')}</option>`).join('')}</select>` : `<p class="mt-1 break-all text-sm font-medium text-[#222222]">${selectedCountryZone || 'Time zone unavailable'}</p>`}</div><div><p class="text-xs font-semibold uppercase tracking-wide text-[#6B7280]">UTC offset</p><p id="countryUtcOffset" class="mt-1 text-sm font-medium text-[#222222]">â€”</p></div></div>`;
      if (countryClockTimer) clearInterval(countryClockTimer); updateCountryClock(); countryClockTimer = setInterval(updateCountryClock, 15000);
    }
    async function lookupCountry() {
      const input = document.querySelector('#countryGuideSearch'), query = input?.value.trim();
      if (!query) { countryResultMessage('Please enter a country name or country code.', true); input?.focus(); return; }
      countryResultMessage('Searching countriesâ€¦');
      try { const countries = await ensureCountryDirectory(); const matches = countryMatches(query, countries); if (!matches.length) { countryResultMessage('No country found. Search using a country name or international calling code, such as Argentina or +54.', true); return; } showCountryMatches(matches); }
      catch (_) { countryResultMessage('Country data could not be loaded. Check your connection and try again.', true); }
    }

    function billingInvoicingPage() {
      const panel = (title, icon, body, extra = '') => `<section id="bill-${title.toLowerCase().replace(/[^a-z]+/g, '-') }" class="card rounded-lg bg-white p-3 ${extra}"><h2 class="mb-2 flex items-center gap-2 text-lg font-extrabold text-ink"><i data-lucide="${icon}" class="h-5 w-5 text-aus"></i>${title}</h2>${body}</section>`;
      const table = (heads, rows, widths = '') => `<div class="overflow-x-auto rounded-md border border-blue-100"><table class="w-full ${widths} text-left text-sm leading-5"><thead class="bg-[#F5F6F7] text-[11px] font-bold uppercase text-[#172B4D]"><tr>${heads.map(h => `<th class="px-3 py-2">${h}</th>`).join('')}</tr></thead><tbody>${rows.map(row => `<tr class="border-t border-blue-50">${row.map(cell => `<td class="px-3 py-2 align-top">${cell}</td>`).join('')}</tr>`).join('')}</tbody></table></div>`;
      const discountTable = `<div class="mb-2 flex items-center justify-between gap-2"><span class="text-xs font-semibold text-[#6B7280]">Country</span>${discountMarketPicker()}</div><div class="overflow-x-auto rounded-md border border-blue-100"><table class="w-full text-left text-sm leading-5"><thead class="bg-[#F5F6F7] text-[11px] font-bold uppercase text-[#172B4D]"><tr><th class="px-3 py-2">Invoice</th><th class="px-3 py-2">Cash Disc</th><th class="px-3 py-2">Max Worth of Free Services</th></tr></thead><tbody id="discountGuidelineRows"></tbody></table></div>`;
      const freeRows = [['Hardcover','Media Kit','Premium Cover Design Service'],['Enhanced Amazon','Expedited Editing','Author Website - Basic'],['Promotional','Editorial Evaluation','Upgrade to Author Website - Advanced'],['Book Back Cover','Book Marketing','eBook Distribution'],['Kindle eBook','Social Media','ARC Landing Page'],['Kobo eBook','Press Release','Print Ready Files'],['Activity Sheet','Coloring Sheet','Social Media Graphics - 5']];
      return `<div class="w-full space-y-2.5 text-[#172B4D]"><header class="app-hero rounded-2xl px-6 py-7 sm:px-8"><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">Billing reference</p><h1 class="mt-1 text-3xl font-extrabold text-ink">Billing &amp; Invoicing</h1><p class="mt-2 max-w-3xl text-sm leading-6 text-[#6B7280]">Reference rules for discounts, payments, free services, and closing.</p></header>
      <div class="grid grid-cols-2 gap-2 rounded-lg border border-blue-100 bg-[#F5F6F7] p-2 md:grid-cols-4">${[['percent','10% Cash Discount','(in selected invoice ranges)','bg-emerald-500'],['circle-dollar-sign','One Discount Type Only','Cash discount OR free services','bg-rose-500'],['calendar-days','Payment Plans','2â€“3 or 4â€“6 Months','bg-blue-600'],['move-horizontal','Non-card payments â†’','#payment_requests','bg-amber-500']].map(([ic,t,s,c])=>`<div class="flex items-center gap-2 border-r border-blue-100 px-2 last:border-0"><span class="grid h-7 w-7 shrink-0 place-items-center rounded-full ${c} text-white"><i data-lucide="${ic}" class="h-3.5 w-3.5"></i></span><div><p class="text-sm font-bold text-ink">${t}</p><p class="text-xs text-[#6B7280]">${s.startsWith('#')?`<a class="text-blue-700 underline" href="https://tellwell.slack.com/archives/${s.slice(1)}">${s}</a>`:s}</p></div></div>`).join('')}</div>
      <nav class="flex flex-wrap gap-1.5">${[['tag','Discounts','regular-discounting-guidelines'],['credit-card','Payments','payment-plans'],['gift','Free Services','free-services-guide'],['file-text','Closing','closing-guidelines']].map(([ic,t,id])=>`<a href="#bill-${id}" class="inline-flex items-center gap-2 rounded border border-blue-100 bg-white px-3 py-1.5 text-sm font-semibold text-[#172B4D] hover:bg-blue-50"><i data-lucide="${ic}" class="h-3 w-3"></i>${t}</a>`).join('')}</nav>
      <div class="grid gap-2.5 lg:grid-cols-2"><div class="space-y-2.5">${panel('Regular Discounting Guidelines','tag',discountTable)}${panel('Free Services Guide','gift',table(['Item (1)','Item (2)','Item (3)'],freeRows))}<section class="rounded-lg border border-rose-200 bg-rose-50 p-3"><h2 class="mb-1 flex items-center gap-2 text-sm font-extrabold text-rose-700"><i data-lucide="circle-alert" class="h-4 w-4"></i>Important Reminders</h2><ol class="list-decimal space-y-0.5 pl-5 text-xs leading-5 text-[#6B7280]"><li>Discounts in the table are the ones that can be given independently at your discretion.</li><li>You can only give one type of discount: cash discount OR free services. You CANNOT give your client 10% cash discount and at the same time give a number of services for FREE.</li><li>These discounts should NOT be used in conjunction with another promo/special deal.</li></ol></section></div><div class="space-y-2.5">${panel('Payment Plans','calendar-days',table(['Plan','Details'],[['FULL PAYMENT',''],['2â€“3 MONTH PAYMENT PLAN','With Admin Fee. Payments must be 30 days apart.'],['4â€“6 MONTH PAYMENT PLAN','With Admin Fee. Payments must be 30 days apart.']]))}${panel('Payment Methods','credit-card',table(['Method','Details'],[['Credit/Debit Card','Process in Octavo'],['E-transfer','Send to admin@tellwell.ca'],['PayPal','https://www.paypal.me/Tellwell or send to admin@tellwell.ca'],['Wire Transfer/Bank Transfer/Direct Bank Deposit','Bank accounts are set up in each of the markets. For the complete bank details, see Tellwell Multicurrency Account Details for Bank Transfers.'],['Check','Have the check written out to Tellwell Talent, Inc. and have the check sent to: 2031 Store Street, Victoria, BC V8T 5L9.']]))}${panel('Company Forms','file-text','<ol class="list-decimal space-y-1 pl-5 text-xs"><li>Fill-up details.</li><li>Forward to JH for signing.</li><li><a href="#" class="text-blue-700 underline">Void Check Sample</a></li></ol>')}
      <div class="rounded-lg border border-amber-200 bg-amber-50 p-3 text-xs leading-4 text-[#172B4D]"><h2 class="mb-1 flex items-center gap-2 text-sm font-bold"><i data-lucide="triangle-alert" class="h-4 w-4 text-amber-500"></i>For non-card payments, send a request to #payment_requests Slack channel so that payment can be processed. Template below:</h2><p class="rounded border border-amber-100 bg-white p-2">Hi @Mitch (JH), please confirm receipt of (PayPal/E-transfer/Wire Transfer/Bank Deposit) payment from (name of author) amount to expected amount. Please apply payment to project (insert Octavo project link). Thank you!</p></div></div></div>
      <section id="bill-closing-guidelines" class="card rounded-lg bg-white p-3"><h2 class="mb-2 flex items-center gap-2 text-lg font-extrabold text-ink"><i data-lucide="circle-dollar-sign" class="h-5 w-5 text-aus"></i>PR/PDF Drop Discounting and Closing Guidelines</h2><div class="grid gap-2 text-xs leading-4 md:grid-cols-2"><div class="rounded-md bg-[#F5F6F7] p-2"><p class="mb-1"><b>Note:</b> Please Log PDF Drop / Cover and/or PDF - Interior in the invoice</p><ol class="list-decimal space-y-0.5 pl-4"><li>Before closing the project, please make sure you have the file reviewed/verified by our design team.</li><li>Post request to design team to confirm file is print-ready; confirm trim size.</li><li>Provide quote for articles: <a class="text-blue-700 underline" href="#">I'm providing my own interior designâ€”what does it cost?</a></li><li><a class="text-blue-700 underline" href="#">I'm providing my own cover designâ€”what do I need to know?</a></li></ol></div><div class="rounded-md border border-blue-100 bg-[#F5F6F7] p-2"><b>â“˜ &nbsp;Other notes:</b><ol class="mt-1 list-[lower-alpha] space-y-1 pl-5"><li><b>Has editing:</b> The author must provide the Word document manuscript at start; then finalize the interior layout after edited files are fixed.</li><li><b>Has ebook:</b> Must provide properly packaged InDesign (.indd) files, otherwise the ebook will have to be fixed.</li></ol></div></div></section></div>`;
    }
    function spielsPage() {
      const styles = `<style>
    :root { --color-primary:#172B4D; --color-primary-blue:#00bfd3; --color-accent:#F4C542; --color-background:#FFFFFF; --color-surface:#F5F6F7; --color-text:#222222; --color-text-muted:#6B7280; --color-border:#E5E7EB; }
#spielPage{--navy-950:#172B4D;--navy-800:#172B4D;--blue-600:#00bfd3;--blue-500:#00bfd3;--blue-100:#F5F6F7;--blue-50:#F5F6F7;--ink-700:#6B7280;--ink-500:#6B7280;--ink-300:#E5E7EB;--line:#E5E7EB;--amber-bg:#FFF9E5;--green:#279d7d;--green-bg:#e0f5ee;--purple:var(--color-primary-blue);--purple-bg:var(--color-surface);--pink:var(--color-primary-blue);--pink-bg:var(--color-surface);--teal:var(--color-primary-blue);--teal-bg:var(--color-surface);--r-md:12px;--r-lg:18px;--shadow:0 7px 18px rgba(25,91,171,.08);color:#222222;font-family:'DM Sans',sans-serif}
#spielPage h1,#spielPage h2,#spielPage h3,#spielPage h4{font-family:Manrope,sans-serif;color:#172B4D}
#spielPage .hero{position:relative;overflow:hidden;margin-bottom:18px;border:1px solid #E5E7EB;border-radius:18px;padding:32px 24px;background:linear-gradient(135deg,#fff 0%,#F5F6F7 58%,#F5F6F7 100%);box-shadow:var(--shadow)}
#spielPage .hero-left{display:flex}#spielPage .hero-icon{width:48px;height:48px;display:grid;place-items:center;flex:none;border-radius:50%;background:#fff;box-shadow:var(--shadow)}
#spielPage .hero-icon svg{width:23px;height:23px;color:#00bfd3}#spielPage .hero h1{margin-top:4px;font-size:30px;font-weight:800;line-height:1.2}#spielPage .hero .hero-eyebrow{margin:0;color:#172B4D;font-size:12px;font-weight:700;letter-spacing:.18em;text-transform:uppercase}#spielPage .hero p{max-width:768px;margin-top:4px;color:#6B7280;font-size:14px;line-height:1.55}
#spielPage .subnav{position:sticky;top:69px;z-index:10;display:flex;flex-wrap:wrap;gap:7px;margin-bottom:22px;padding:8px 0 5px;background:#FFFFFF}
#spielPage .pill{display:inline-flex;align-items:center;border:1px solid #E5E7EB;border-radius:999px;background:#fff;padding:7px 12px;color:#6B7280;font-size:12px;font-weight:700;text-decoration:none}
#spielPage .pill:hover{border-color:#00bfd3;color:#00bfd3}
#spielPage section.block{margin-bottom:30px;scroll-margin-top:140px}#spielPage .block-head{display:flex;align-items:baseline;gap:10px;margin-bottom:12px}#spielPage .block-head h2{font-size:18px;font-weight:800}#spielPage .block-head .count{border-radius:999px;background:#F5F6F7;padding:2px 9px;color:#6B7280;font-size:12px}
#spielPage .block-desc{margin:-6px 0 15px;color:#6B7280;font-size:13px;line-height:1.55}
#spielPage .grid{display:grid;gap:14px}#spielPage .grid-4{grid-template-columns:repeat(4,minmax(0,1fr))}#spielPage .grid-2{grid-template-columns:repeat(2,minmax(0,1fr))}#spielPage .grid-5{grid-template-columns:repeat(5,minmax(0,1fr))}
#spielPage .card{border:1px solid #E5E7EB;border-radius:12px;background:#fff;box-shadow:var(--shadow)}#spielPage .tf-card{display:flex;flex-direction:column;gap:8px;padding:16px}
#spielPage .tf-grid{gap:16px}#spielPage .tf-card{position:relative;isolation:isolate;min-height:190px;justify-content:flex-end;gap:0;overflow:hidden;border:0;border-radius:22px;padding:24px 28px;background:#172B4D;color:#fff;box-shadow:0 12px 28px rgba(23,43,77,.2)}#spielPage .tf-card::before{position:absolute;z-index:-2;inset:0;background-image:var(--flag);background-position:center;background-size:cover;content:''}#spielPage .tf-card::after{position:absolute;z-index:-1;inset:0;background:linear-gradient(90deg,rgba(10,26,55,.42),rgba(10,26,55,.1) 65%),linear-gradient(0deg,rgba(10,26,55,.36),transparent 62%);content:''}#spielPage .tf-card .tf-flag{width:auto;height:auto;align-self:flex-start;margin-bottom:26px;border-radius:999px;background:rgba(255,255,255,.9)!important;padding:12px 19px;color:#172B4D!important;font-size:18px;box-shadow:0 4px 14px rgba(10,26,55,.16)}#spielPage .tf-card .market{margin-bottom:14px;color:#fff;font-size:22px;font-weight:800;letter-spacing:.02em}#spielPage .tf-card .number{display:flex;align-items:center;gap:13px;min-height:61px;border:1px solid rgba(255,255,255,.24);border-radius:22px;background:rgba(23,43,77,.58);padding:10px 18px;color:#fff;font-size:clamp(15px,1.55vw,24px);font-weight:800;white-space:nowrap;backdrop-filter:blur(8px)}#spielPage .tf-card .number::before{width:24px;height:24px;flex:none;background:currentColor;content:'';mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.84.58 2.8.7A2 2 0 0 1 22 16.92z'/%3E%3C/svg%3E") center/contain no-repeat}
#spielPage .tf-flag{display:grid;width:38px;height:38px;place-items:center;border-radius:10px;font-weight:800;font-size:12px}#spielPage .tf-card .market{color:#6B7280;font-size:11px;font-weight:700;letter-spacing:.04em}#spielPage .tf-card .number{color:#172B4D;font-size:16px;font-weight:800;overflow-wrap:anywhere}
#spielPage .tf-card{min-height:0;padding:16px}#spielPage .tf-card::before{background-size:cover}#spielPage .tf-card .tf-flag{margin-bottom:14px;padding:8px 14px;font-size:14px}#spielPage .tf-card .market{margin-bottom:8px;color:#fff;font-family:Manrope,sans-serif;font-size:16px;font-weight:800;letter-spacing:.02em}#spielPage .tf-card .number{min-height:46px;gap:9px;padding:8px 12px;color:#fff;font-family:'DM Sans',sans-serif;font-size:16px;font-weight:800;overflow-wrap:normal}#spielPage .tf-card .number::before{width:20px;height:20px}
#spielPage .tabbar{display:inline-flex;gap:4px;margin-bottom:14px;border-radius:10px;background:#F5F6F7;padding:4px}#spielPage .tabbtn{border-radius:8px;background:transparent;padding:7px 14px;color:#6B7280;font-size:12px;font-weight:700}#spielPage .tabbtn.active{background:#fff;color:#172B4D;box-shadow:var(--shadow)}#spielPage .tabpanel{display:none}#spielPage .tabpanel.active{display:block}
#spielPage .script-card{padding:17px 19px}#spielPage .script-card .tag{display:inline-flex;margin-bottom:9px;border-radius:999px;background:#F5F6F7;padding:4px 10px;color:#00bfd3;font-size:10px;font-weight:800}
#spielPage .script-card p{color:#6B7280;font-size:14px;line-height:1.65}#spielPage .script-card p+p{margin-top:9px}#spielPage .script-card i{color:#6B7280;font-size:13px}
#spielPage .branch{padding:16px 18px}#spielPage .branch-row{display:flex;gap:10px;margin-top:10px}#spielPage .branch-opt{flex:1;border:1px dashed #E5E7EB;border-radius:10px;padding:11px 12px}#spielPage .branch-opt .label{margin-bottom:4px;color:#279d7d;font-size:11px;font-weight:800}#spielPage .branch-opt.no .label{color:#c65b52}#spielPage .branch-opt p{color:#6B7280;font-size:13px;line-height:1.5}
#spielPage .quote{position:relative;margin-bottom:16px;border-radius:16px;background:#172B4D;padding:21px 24px;color:#F5F6F7}#spielPage .quote p{position:relative;font-size:13px;line-height:1.7}#spielPage .quote .who{margin-top:10px;color:#6B7280;font-size:11px;font-weight:700}
#spielPage .dept-card{display:flex;flex-direction:column;gap:10px;padding:15px}#spielPage .dept-icon{display:grid;width:32px;height:32px;place-items:center;border-radius:9px}#spielPage .dept-icon svg{width:17px;height:17px}#spielPage .dept-card h4{font-size:14px;font-weight:800}#spielPage .dept-card ul{display:flex;flex-direction:column;gap:7px;list-style:none}#spielPage .dept-card li{position:relative;padding-left:13px;color:#6B7280;font-size:13px;line-height:1.5}#spielPage .dept-card li::before{position:absolute;left:0;color:#6B7280;content:'â€”'}
#spielPage .accordion-item{overflow:hidden;margin-bottom:9px;border:1px solid #E5E7EB;border-radius:12px;background:#fff}#spielPage .accordion-trigger{display:flex;width:100%;align-items:center;justify-content:space-between;gap:12px;background:#fff;padding:14px 17px;text-align:left}#spielPage .accordion-trigger .q{color:#172B4D;font-size:14px;font-weight:700}#spielPage .accordion-trigger .chev{width:18px;height:18px;flex:none;color:#6B7280;transition:transform .2s}#spielPage .accordion-item.open .chev{transform:rotate(180deg)}#spielPage .accordion-panel{max-height:0;overflow:hidden;transition:max-height .25s ease}#spielPage .accordion-panel-inner{padding:0 17px 17px;color:#6B7280;font-size:14px;line-height:1.7}#spielPage .accordion-panel-inner p{margin-bottom:9px}#spielPage .accordion-panel-inner .sub-label{display:block;margin:12px 0 4px;color:#172B4D;font-size:12px;font-weight:800}#spielPage .accordion-panel-inner .sub-label:first-child{margin-top:0}
#spielPage .benefit-card{display:flex;flex-direction:column;gap:7px;padding:16px}#spielPage .benefit-card .b-icon{display:grid;width:31px;height:31px;place-items:center;margin-bottom:2px;border-radius:8px}#spielPage .benefit-card h4{font-size:14px;font-weight:800}#spielPage .benefit-card p{color:#6B7280;font-size:13px;line-height:1.6}
#spielPage .steps{display:flex;flex-direction:column}#spielPage .step{display:flex;gap:13px;border-bottom:1px solid #E5E7EB;padding:13px 0}#spielPage .step:last-child{border-bottom:0}#spielPage .step-num{display:grid;width:27px;height:27px;flex:none;place-items:center;border-radius:50%;background:#00bfd3;color:#fff;font-size:12px;font-weight:800}#spielPage .step h4{margin-bottom:3px;font-size:14px;font-weight:800}#spielPage .step p{color:#6B7280;font-size:14px;line-height:1.6}
#spielPage .callout{margin-top:14px;border:1px solid #fecdd3;border-radius:12px;background:#fff1f2;padding:16px 18px}#spielPage .callout .label{display:flex;align-items:center;gap:8px;margin-bottom:6px;color:#be123c;font-size:14px;font-weight:800;letter-spacing:0}#spielPage .callout .label svg{width:16px;height:16px;flex:none}#spielPage .callout p{color:#6B7280;font-size:14px;line-height:1.65}
#spielPage .close-table{width:100%;border:1px solid #E5E7EB;border-spacing:0;border-collapse:separate;border-radius:12px;background:#fff;overflow:hidden}#spielPage .close-table th{border-bottom:1px solid #E5E7EB;background:#F5F6F7;padding:10px 12px;color:#6B7280;font-size:12px;letter-spacing:.03em;text-align:left}#spielPage .close-table td{border-bottom:1px solid #E5E7EB;padding:12px;color:#6B7280;font-size:13px;line-height:1.6;vertical-align:top}#spielPage .close-table tr:last-child td{border-bottom:0}#spielPage .close-table .type-cell{color:#172B4D;font-size:13px;font-weight:800;white-space:nowrap}#spielPage .close-table .when-cell{width:26%;color:#6B7280}#spielPage .close-table .spiel-cell{width:44%}
@media(max-width:1100px){#spielPage .grid-4{grid-template-columns:repeat(2,minmax(0,1fr))}#spielPage .grid-5{grid-template-columns:repeat(3,minmax(0,1fr))}}
@media(max-width:700px){#spielPage .hero{padding:20px}#spielPage .subnav{top:64px}#spielPage .grid-2,#spielPage .grid-4,#spielPage .grid-5{grid-template-columns:1fr}#spielPage .branch-row{flex-direction:column}#spielPage .close-table{min-width:760px}}
    body { background: var(--color-background); color: var(--color-text); }
    .card, .app-metric { border-color: var(--color-border); }
    .app-hero { border-color: var(--color-border); background: linear-gradient(135deg,#fff 0%,#F5F6F7 100%); }
    .app-hero h1, h1, h2, h3 { color: var(--color-primary); }
    input, select, textarea { border-color: var(--color-border); color: var(--color-text); }
    input:focus, select:focus, textarea:focus, button:focus-visible, a:focus-visible { outline-color: var(--color-primary-blue); }
    [class~="bg-blue-50"], [class~="bg-blue-100"], [class~="bg-indigo-100"], [class~="bg-cyan-100"], [class~="bg-teal-100"], [class~="bg-violet-100"], [class~="bg-orange-100"] { background-color: var(--color-surface) !important; }
    [class~="bg-blue-600"], [class~="bg-blue-700"], [class~="bg-aus"] { background-color: var(--color-primary-blue) !important; }
    [class~="text-blue-100"], [class~="text-blue-200"] { color: var(--color-text-muted) !important; }
    .sidebar [class~="text-blue-100"], .sidebar [class~="text-blue-200"] { color: #FFFFFF !important; }
    [class~="text-blue-600"], [class~="text-blue-700"], [class~="text-cyan-600"], [class~="text-teal-600"], [class~="text-violet-600"], [class~="text-indigo-600"], [class~="text-orange-600"], [class~="text-aus"] { color: var(--color-primary-blue) !important; }
    [class~="border-blue-50"], [class~="border-blue-100"], [class~="border-blue-600"] { border-color: var(--color-border) !important; }
    [class~="hover:bg-blue-50"]:hover { background-color: var(--color-surface) !important; }
    [class~="hover:bg-blue-700"]:hover, [class~="hover:bg-blue-800"]:hover { background-color: var(--color-primary-blue) !important; }
    [class~="hover:text-blue-800"]:hover { color: var(--color-primary) !important; }
    [class~="text-amber-500"] { color: var(--color-accent) !important; }
    [class~="bg-amber-500"] { color: var(--color-primary) !important; }
    [class~="bg-amber-500"] { background-color: var(--color-accent) !important; }
    [class~="bg-amber-50"], [class~="bg-amber-100"] { background-color: #FFF9E5 !important; }
  </style>`;
      const content = `      <div class="hero">
        <div class="hero-left">

          <div>
            <p class="hero-eyebrow">Call toolkit</p>
            <h1>Spiels</h1>
            <p>Call scripts, must-ask questions, objection handling and closing techniques â€” everything a PC needs for a consultation call, in one place.</p>
          </div>
        </div>
      </div>

      <div class="subnav">
        <a class="pill" href="#s-tollfree">Toll-Free Numbers</a>
        <a class="pill" href="#s-open">Voicemail &amp; Introduction</a>
        <a class="pill" href="#s-mustask">Must-Ask Questions</a>
        <a class="pill" href="#s-faq">FAQs &amp; Objection Handling</a>
        <a class="pill" href="#s-reco">Recommendation Spiel</a>
        <a class="pill" href="#s-close">Wrap-Up &amp; Closing</a>
        <a class="pill" href="#s-types">Types of Closing</a>
      </div>

      <!-- Toll free -->
      <section class="block" id="s-tollfree">
        <div class="block-head"><h2>Toll-Free Numbers</h2><span class="count">4 markets</span></div>
        <p class="block-desc">Leave the toll-free number with your extension as the callback number.</p>
        <div class="grid grid-4 tf-grid">
          <div class="card tf-card" style="--flag:url('/flags/ca.webp')">
            <div class="tf-flag" style="background:var(--blue-50); color:var(--blue-600);">Canada</div>
            <div class="market">CANADA</div>
            <div class="number">1-888-415-1541</div>
          </div>
          <div class="card tf-card" style="--flag:url('/flags/us.webp')">
            <div class="tf-flag" style="background:var(--green-bg); color:var(--green);">United States</div>
            <div class="market">United States</div>
            <div class="number">1 (800) 891-4160</div>
          </div>
          <div class="card tf-card" style="--flag:url('/flags/au.webp')">
            <div class="tf-flag" style="background:var(--purple-bg); color:var(--purple);">Australia</div>
            <div class="market">AUSTRALIA</div>
            <div class="number">61 (1800) 934-224</div>
          </div>
          <div class="card tf-card" style="--flag:url('/flags/uk.webp')">
            <div class="tf-flag" style="background:var(--pink-bg); color:var(--pink);">United Kingdom</div>
            <div class="market">United Kingdom</div>
            <div class="number">0 (800) 058-4645</div>
          </div>
        </div>
      </section>

      <!-- Voicemail & Introduction -->
      <section class="block" id="s-open">
        <div class="block-head"><h2>Voicemail &amp; Introduction</h2></div>
        <p class="block-desc">Use the New Lead scripts for first-touch callbacks, and Older Lead scripts once an inquiry has gone quiet for a while.</p>

        <div class="tabbar" id="leadTabs">
          <button class="tabbtn active" data-tab="new">New Lead</button>
          <button class="tabbtn" data-tab="older">Older Lead</button>
        </div>

        <div class="tabpanel active" data-panel="new">
          <div class="grid grid-2">
            <div class="card script-card">
              <span class="tag">VOICEMAIL</span>
              <p>"Hi (author name), this is (PC name) from Tellwell Publishing. I'm getting back to you regarding your inquiry about publishing your (description of book). I've been trying to connect with you but seem to keep catching you at a bad time. I'd love to discuss this further so please give me a call at (Toll Free Number) ext (PC ext) when you have a moment. I also sent you an email and would appreciate your reply. Thanks, (author name), take care!"</p>
            </div>
            <div class="card script-card">
              <span class="tag">INTRODUCTION</span>
              <p>"Hi, good morning! I'm calling for (author name). My name is (PC name) and I am calling from Tellwell Talent. How are you today?" <i>[pause, let author respond]</i></p>
              <p>"That is great to hear! Now, I'm calling about the inquiry you submitted on publishing. You mentioned that you have a (genre/description of book). I would love to discuss this further with you." <i>[pause, let author respond]</i></p>
            </div>
          </div>
        </div>

        <div class="tabpanel" data-panel="older">
          <div class="grid grid-2">
            <div class="card script-card">
              <span class="tag">VOICEMAIL â€” OLDER LEADS</span>
              <p>"Hi (author name), this is (PC name) from Tellwell Publishing. I'm getting back to you regarding the inquiry you made some time ago about publishing your (description of book). We've been trying to connect with you since then but keep reaching you at a busy time. I'd really appreciate it if you could give me a call at (direct line) when you have a moment. I also sent you an email and would love to hear back from you. Thanks, (author name), take care!"</p>
            </div>
            <div class="card script-card">
              <span class="tag">INTRODUCTION â€” OLDER LEADS</span>
              <p>"Hi, good morning! I'm calling for (author name). My name is (PC name), calling from Tellwell Talent. How are you today?" <i>[pause]</i></p>
              <p>"Now, I'm calling about the inquiry you submitted sometime ago. You mentioned you had a (genre/description of book) you'd like to publish. How's that project coming along?" <i>[pause]</i> "I would love to discuss this further if you have the time."</p>
            </div>
          </div>
        </div>

        <div class="card branch" style="margin-top:16px;">
          <span class="tag" style="background:var(--amber-bg); color:#172B4D;">IF BOOK IS ALREADY PUBLISHED</span>
          <p style="font-size:13.5px; color:var(--ink-700); margin-top:8px;">"Well, congratulations! It takes a lot of courage and hard work to get a book done â€” I admire you for going through the process successfully! Do you happen to have another project in mind?" <i>[pause, let author respond]</i></p>
          <div class="branch-row">
            <div class="branch-opt"><div class="label">IF YES</div><p>"I would be happy to talk about that new project if now is a perfect time!"</p></div>
            <div class="branch-opt no"><div class="label">IF NO</div><p>"I see. Well, we'd be happy to keep your records in case you might find a need for our services in the future."</p></div>
          </div>
        </div>
      </section>

      <!-- Must-ask -->
      <section class="block" id="s-mustask">
        <div class="block-head"><h2>Must-Ask Questions</h2></div>
        <div class="quote" style="margin-bottom:18px;">
          <p>"Great! I must say, the short description you left along with the inquiry was informative, but getting a few more details is always best for me. I would love to recommend the best approach for you and your book, so knowing the specifics helps. This shouldn't take long â€” depending on how our conversation goes, 10â€“15 minutes may be enough. Sounds good? Great! So why don't we start off with you telling me what this book is all aboutâ€¦"</p>
          <div class="who">TRANSITION SPIEL</div>
        </div>

        <div class="grid grid-5">
          <div class="card dept-card">
            <div class="dept-icon" style="background:var(--blue-50);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--blue-600)" stroke-width="2"><path d="M12 20h9M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg></div>
            <h4>Writing</h4>
            <ul>
              <li>What is your book all about?</li>
              <li>What is the background of this project?</li>
              <li>What inspired you to write about this topic?</li>
              <li>Have you always been writing?</li>
              <li>Is the manuscript completed? If not, how far have you gone?</li>
              <li>Is your manuscript in MS Word format?</li>
            </ul>
          </div>
          <div class="card dept-card">
            <div class="dept-icon" style="background:var(--green-bg);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
            <h4>Editing</h4>
            <ul>
              <li>How many words is this manuscript?</li>
              <li>Has anyone reviewed the manuscript for feedback?</li>
              <li>Has a professional editor helped polish it?</li>
              <li>What are your thoughts on editing?</li>
            </ul>
          </div>
          <div class="card dept-card">
            <div class="dept-icon" style="background:var(--purple-bg);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--purple)" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M4 15l4-4 4 4 4-6 4 4"/></svg></div>
            <h4>Design</h4>
            <ul>
              <li>Have you envisioned a cover design for this book?</li>
              <li>Do you have a preferred size or dimension?</li>
              <li>Any photographs or graphics to insert?</li>
              <li>Any tables or lists to insert â€” can you describe them?</li>
              <li>Any special instructions for your designer?</li>
            </ul>
          </div>
          <div class="card dept-card">
            <div class="dept-icon" style="background:var(--teal-bg);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal)" stroke-width="2"><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/><circle cx="12" cy="12" r="9"/></svg></div>
            <h4>Distribution</h4>
            <ul>
              <li>What formats do you want? Paperback? Hardback? eBook? Audiobook?</li>
              <li>Is this for family/friends, or a broader audience?</li>
              <li>Do you have a timeline for publication?</li>
            </ul>
          </div>
          <div class="card dept-card">
            <div class="dept-icon" style="background:var(--pink-bg);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--pink)" stroke-width="2"><path d="M3 11l18-7-7 18-2-8-9-3Z"/></svg></div>
            <h4>Marketing</h4>
            <ul>
              <li>What is your ultimate goal for this book?</li>
              <li>Is this your first time publishing a book?</li>
            </ul>
          </div>
        </div>

        <div class="card script-card" style="margin-top:16px;">
          <span class="tag" style="background:var(--amber-bg); color:#172B4D;">FUNDING QUALIFYING QUESTIONS</span>
          <p>Is writing something you do full time? Â· Is this project related to what you do? Â· Are you planning to work on a second book?</p>
          <p><i>"So the total cost would be $11,999." [pause. remain silent until author reacts.]</i> Â· <i>"So the total cost is $11,999 â€” does that sound doable?"</i></p>
        </div>
      </section>

      <!-- FAQ -->
      <section class="block" id="s-faq">
        <div class="block-head"><h2>FAQs &amp; Objection Handling</h2><span class="count">7 topics</span></div>
        <p class="block-desc">When an author asks aboutâ€¦ tap a topic to see the full talking points.</p>
        <div id="accordionGroup">

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">What does Tellwell do?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>"We are a global assisted self-publishing company based in Victoria, Canada, with clients across the US/Canada region, Australia and, very recently, the UK and other European countries. Our services help authors navigate the overwhelming â€” at times daunting â€” process of self-publishing, guiding them in doing things the right way and creating a book whose quality is on par with industry standards."</p>
              <p>"We are a supported/assisted self-publishing company â€” we provide the skills and talents authors need to get through the entire publishing process. We're a team of editors, cover and interior designers, illustrators, book marketing experts and project managers. Authors often refer to us as a one-stop-shop for all their publishing needs."</p>
            </div></div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">Do you charge a fee?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>"Yes, we do charge a fee for our services, but what truly matters is the value you gain in return. Our publishing packages are designed to provide expert guidance, professional quality, and the best possible results for your book. We offer a range of options to suit different needs and available funds. I'd be happy to go over the details and find the best fit for your publishing goals!"</p>
            </div></div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">Why should I have my book edited?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>There is an unwritten contract between an author and their readers, founded on trust â€” a reader buys a book trusting it's worth its price. Typos, grammar errors and other editorial mishaps break that trust and can quickly dissolve an author's credibility, so professional editing protects both the reader relationship and any future marketing efforts.</p>
              <span class="sub-label">Editor's Feedback Report (EFR)</span>
              <p>One of the first steps once production begins. An editor reviews the manuscript and prepares a short report on clarity, structure, author voice, grammar and market-readiness, including a small sample edit â€” it's not a full edit yet, but helps determine what level of editing the manuscript may benefit from.</p>
              <span class="sub-label">Substantive Editing</span>
              <p>The most comprehensive service â€” first a developmental pass on structure, clarity and pacing, then a second technical pass on grammar, spelling and readability. Includes two rounds with a revision period in between (roughly two weeks per round for manuscripts up to 50,000 words). An optional one-on-one editing consultation can be added between rounds.</p>
              <span class="sub-label">Copyediting</span>
              <p>One full line-by-line editorial pass focused on grammar, spelling, punctuation and consistency â€” around two weeks for manuscripts up to 50,000 words. Considered the minimum level of professional editing most books should have.</p>
              <span class="sub-label">Proofreading</span>
              <p>The final quality check after the book is designed and formatted â€” catching any remaining typos or formatting issues introduced during layout. Typically about two weeks for manuscripts up to 50,000 words.</p>
            </div></div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">Distribution / Availability on Amazon &amp; in bookstores</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>"We take care of distributing your book to major online retailers like Amazon.com, Chapters.ca, Book Depository and others, and make it available for order by bookstores and libraries who wish to display copies on their shelves."</p>
              <span class="sub-label">Premium Distribution Support</span>
              <p>Included free for the first year â€” unlimited changes to pricing, discounting and metadata across retail channels. Auto-renews annually unless opted out; downgrading to Basic Support removes the annual fee but each change then costs $25.</p>
              <span class="sub-label">Enhanced Amazon Distribution</span>
              <p>Resolves enlistment issues on country-specific Amazon sites (inflated prices, "out of stock" notices) by setting the book up directly with Amazon, so paperback orders are printed and fulfilled by Amazon rather than a third-party distributor.</p>
              <span class="sub-label">Format guidance</span>
              <p>Recommend all formats appropriate to the book if budget allows â€” paperback, hardback, eBook and audiobook â€” since reader format preference varies and each format reaches a different segment of buyers.</p>
            </div></div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">Royalties â€” how much will I earn?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>Tellwell offers authors 100% of net royalties â€” once the retailer's distribution fee and print cost are covered, the remaining proceeds go directly to the author. Royalties accumulate quarterly and are paid out 45 days after each quarter ends, provided the balance is at least $100 (cheque within Canada, PayPal elsewhere). Sales reporting posts to Octavo 15 days after each month.</p>
              <span class="sub-label">Print royalty example</span>
              <p>Retail price minus the retailer's share minus print cost = net proceeds, which the author receives in full. E.g. a $10 book with a $3 retailer share and $2 print cost nets the author $5.</p>
              <span class="sub-label">eBook royalties</span>
              <p>For eBooks priced $2.99â€“$9.99, 70% of the retail price goes to the author and 30% to the eBook retailer.</p>
              <span class="sub-label">Audiobook royalties</span>
              <p>Platform sets the retail price automatically. Exclusive distribution pays 40% of retail price to the author; non-exclusive pays 25%.</p>
            </div></div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">Print-on-demand</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>"Print-on-demand is a manner of distribution where online retailers, like Amazon, print copies of your book as they are ordered. This allows one copy to be printed per purchase, saving you from printing in bulk â€” the retailer handles printing, binding and shipping to your readers."</p>
            </div></div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger"><span class="q">Marketing â€” how does Tellwell market books?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">
              <p>Marketing is offered as pre-bundled packages or Ã  la carte services. Most authors start with a Book Marketing Consultation and Strategy session â€” about an hour with a marketing consultant to cover the basics and build a plan tailored to the author's comfort level and goals. From there, the author can execute the plan independently or have the marketing team execute it for them.</p>
              <p>Important distinction to set with authors: distribution (getting the book listed) is not the same as marketing (generating awareness and visibility). As a self-published author, they remain the book's primary marketer â€” Tellwell's role is to educate on the fundamentals and provide supplemental marketing support.</p>
            </div></div>
          </div>

        </div>
      </section>

      <!-- Recommendation -->
      <section class="block" id="s-reco">
        <div class="block-head"><h2>Recommendation Spiel</h2></div>
        <div class="quote" style="margin-bottom:18px;">
          <p>"Alrighty, now thank you for answering all of the questions I had. I don't mean for us to have such a transactional conversation, but the more I know about you and your project, the better my understanding of your needs â€” and the better my recommendation becomes. Listening to you earlier made me appreciate your talent and your work even more. Completing a manuscript is an achievement, so always carry that with pride."</p>
          <div class="who">TRANSITION FROM MUST-ASK QUESTIONS</div>
        </div>
        <p class="block-desc" style="margin-top:-6px;">"So I took some notes as we were talking, and I already have the perfect package in mind. I'm confident this will give you a more wholistic publishing experience â€” here's why, service by service:"</p>
        <div class="grid grid-4">
          <div class="card benefit-card">
            <div class="b-icon" style="background:var(--green-bg);"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
            <h4>Editing</h4>
            <p>Substantive editing: two full rounds â€” big-picture structure first, then line-level grammar and spelling â€” with a revision period between, plus an editorial consultation call before revisions begin.</p>
          </div>
          <div class="card benefit-card">
            <div class="b-icon" style="background:var(--purple-bg);"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--purple)" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M4 15l4-4 4 4 4-6 4 4"/></svg></div>
            <h4>Design</h4>
            <p>Cover and interior layout design with 2 revision rounds each. Premium Cover Design delivers 3 cover concepts plus a dedicated design consultant to talk through direction.</p>
          </div>
          <div class="card benefit-card">
            <div class="b-icon" style="background:var(--teal-bg);"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--teal)" stroke-width="2"><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/><circle cx="12" cy="12" r="9"/></svg></div>
            <h4>Distribution</h4>
            <p>Paperback (and hardback) plus eBook release across 45,000+ global retailers via print-on-demand, with ISBN registration handled for each format.</p>
          </div>
          <div class="card benefit-card">
            <div class="b-icon" style="background:var(--pink-bg);"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--pink)" stroke-width="2"><path d="M3 11l18-7-7 18-2-8-9-3Z"/></svg></div>
            <h4>Marketing</h4>
            <p>A dedicated marketing consultant, a 1-hour strategy consult, a 2-page Book Backgrounder, an Author Website, plus classic marketing activities (press release, guaranteed interview, editorial review, ad support).</p>
          </div>
        </div>
      </section>

      <!-- Wrap up -->
      <section class="block" id="s-close">
        <div class="block-head"><h2>Wrap-Up &amp; One-Call Close</h2></div>
        <div class="card" style="padding:6px 22px;">
          <div class="steps">
            <div class="step"><div class="step-num">1</div><div><h4>Check for questions</h4><p>"Do you have any questions so far â€” maybe something wasn't very clear?" Wait, answer anything raised, then confirm the recommendation is the right fit.</p></div></div>
            <div class="step"><div class="step-num">2</div><div><h4>Introduce the Project Manager &amp; Octavo</h4><p>Every author is assigned a Project Manager who leads production. All work happens in Octavo, Tellwell's secure, email-based production portal â€” updates, tasks and info all live there.</p></div></div>
            <div class="step"><div class="step-num">3</div><div><h4>State the price and pause</h4><p>"The total cost of this offer is ______." Pause and wait for a reaction â€” even a full minute if needed. Their reaction tells you whether they can afford it.</p></div></div>
            <div class="step"><div class="step-num">4</div><div><h4>Offer payment plans</h4><p>Mention that payment plans of up to 6 months are available, though paying in full saves the payment-plan fee.</p></div></div>
            <div class="step"><div class="step-num">5</div><div><h4>Test close</h4><p>"Shall we go ahead with this, then? Will you be using a Visa or a MasterCard?"</p></div></div>
            <div class="step"><div class="step-num">6</div><div><h4>Second test close &amp; process payment</h4><p>Gather card details on a one-call close (write on a sticky note, never save, delete immediately after processing) â€” number, expiry, CVC, no repeating each back. Place the author on hold 1â€“2 minutes to create the invoice in Octavo and process payment.</p></div></div>
            <div class="step"><div class="step-num">7</div><div><h4>Welcome the author</h4><p>"So the payment has been processed successfully! Congratulations! Welcome to Tellwell!" â€” enthusiastic, warm tone, then reiterate the closing must-mentions below.</p></div></div>
          </div>
        </div>
        <div class="callout">
          <div class="label"><i data-lucide="circle-alert"></i>Closing Must-Mentions</div>
          <p>Payment plans: "Work begins immediately after the first payment and continues for as long as monthly payments are made. If a payment is missed, the account is placed on hold until the account is brought current. If the book is finished before the plan is complete, the author can settle the remaining balance early to release it to distribution immediately."</p>
          <p style="margin-top:8px;">Onboarding: once payment clears, the author receives a receipt by email, then Octavo login credentials shortly after (check spam if not visible). They log in, set a password, agree to terms, and complete their book profile â€” clicking "complete task" lets their Project Manager schedule the orientation call.</p>
        </div>
      </section>

      <!-- Types of closing -->
      <section class="block" id="s-types">
        <div class="block-head"><h2>Types of Closing</h2><span class="count">7 techniques</span></div>
        <div style="overflow-x:auto;">
        <table class="close-table">
          <thead><tr><th>Type</th><th class="when-cell">Applicable whenâ€¦</th><th class="spiel-cell">Sample spiel</th></tr></thead>
          <tbody>
            <tr>
              <td class="type-cell">Adjournment Close</td>
              <td class="when-cell">The author clearly needs more time and the relationship is worth protecting for a future decision.</td>
              <td class="spiel-cell">"I can tell this is one of the most important decisions of your life, so I want to make sure you have the resources you need. I'll send the estimate and a few resources by email, and call you back next week to see how you're progressing."</td>
            </tr>
            <tr>
              <td class="type-cell">Manager Close</td>
              <td class="when-cell">Trust is earned and the author would proceed if the price came down â€” confirm the exact amount first.</td>
              <td class="spiel-cell">"Let me see if I can pull some strings â€” I might be able to convince my manager for a discount. If approved, the total would come down to ______. Would that work? Give me 30 minutes to an hour and I'll call you back."</td>
            </tr>
            <tr>
              <td class="type-cell">Alternative Close</td>
              <td class="when-cell">Offering two clearly defined options, assuming the author has already decided to move forward.</td>
              <td class="spiel-cell">"You mentioned the Professional Package, but the All-Inclusive Package sounds more appropriate for your project's needs â€” don't you think?"</td>
            </tr>
            <tr>
              <td class="type-cell">Assumptive Close</td>
              <td class="when-cell">Acting as if the decision is already made â€” shift focus to logistics.</td>
              <td class="spiel-cell">"If you have no further questions, how would you like to process this â€” a 6-month payment plan, or paying in full?"</td>
            </tr>
            <tr>
              <td class="type-cell">Balance Sheet Close</td>
              <td class="when-cell">Weighing pros and cons side by side, with the pros clearly outweighing the cons.</td>
              <td class="spiel-cell">"With our Traditional Package, you get full support from a Project Manager, Editor, Design Team and Marketing team. It's on the higher end of the price range, but it gives you the highest value for what you're paying."</td>
            </tr>
            <tr>
              <td class="type-cell">Best Time Close</td>
              <td class="when-cell">The author is stalling â€” tie urgency to a season, holiday or personal milestone.</td>
              <td class="spiel-cell">"Our average turnaround is 4â€“6 months, so if you'd like your book done by Christmas, now is definitely the best time to get started."</td>
            </tr>
            <tr>
              <td class="type-cell">Calculator Close</td>
              <td class="when-cell">Applying a discount on a high-end package â€” narrate the math out loud for a sense of finality.</td>
              <td class="spiel-cell">"So the total cost is $11,999. Applying this month's promo, we can take 10% off as a cash discount â€” your updated total is $10,799.10. That's a savings of $1,199.10."</td>
            </tr>
          </tbody>
        </table>
        </div>
      </section>`;
      return `${styles}<section id="spielPage">${content}</section>`;
    }
    function countryCodePage() { return `<section class="w-full"><div class="app-hero rounded-2xl px-6 py-7 sm:px-8"><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">Phone utility</p><h1 class="mt-1 text-3xl font-extrabold text-ink">Country Code Guide</h1><p class="mt-2 max-w-3xl text-sm leading-6 text-[#6B7280]">Find a country by name or international calling code, then view its local time and time zones.</p></div><section class="mt-5 rounded-xl border border-[#E5E7EB] bg-white p-5"><h2 class="text-lg font-bold text-[#172B4D]">Identify a country</h2><form id="countryLookupForm" class="mt-4 flex flex-col gap-3 sm:flex-row" autocomplete="off"><input id="countryGuideSearch" list="countrySuggestions" type="search" placeholder="e.g. Argentina or +54" class="min-w-0 flex-1 rounded-lg border border-[#E5E7EB] px-3 py-2.5 text-[#222222] outline-none focus:ring-2 focus:ring-aus"><datalist id="countrySuggestions"></datalist><button id="countryDetect" type="submit" class="rounded-lg bg-aus px-5 py-2.5 font-semibold text-white hover:bg-blue-800">Identify</button></form><p class="mt-3 text-xs text-[#6B7280]">Search by country name or calling code, with or without +. Shared calling codes may match more than one country.</p><div id="countryResult" class="mt-4 hidden rounded-lg border border-[#E5E7EB] bg-[#F5F6F7] p-4" aria-live="polite"></div></section></section>` }
    function companyDirectoryPage() { let teamRows = teamDirectory.map(([group, name, ext, email, location, market]) => `<tr class="border-b border-blue-50"><td class="px-3 py-3 text-xs font-bold text-aus">${group}</td><td class="px-3 py-3 font-semibold text-ink">${name}</td><td class="px-3 py-3">${ext}</td><td class="px-3 py-3 text-[#00bfd3]">${email}</td><td class="px-3 py-3">${location}</td><td class="px-3 py-3">${market}</td></tr>`).join(''); return `<section><div class="app-hero rounded-2xl px-6 py-7 sm:px-8"><div class="relative z-10 flex flex-col gap-5 lg:flex-row lg:items-end"><div class="flex-1"><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">Internal directory</p><h1 class="mt-1 text-3xl font-extrabold text-ink">Directory & Company Info</h1><p class="mt-2 max-w-3xl text-sm leading-6 text-[#6B7280]">Teamwork makes the dream work. Find company details, the core and international teams, and the appropriate Slack channel.</p></div><div class="grid grid-cols-3 gap-2"><div class="app-metric rounded-xl px-3 py-2 text-center"><b class="block text-lg text-ink">${companyInfo.length}</b><span class="text-[10px] font-bold uppercase text-[#6B7280]">Company details</span></div><div class="app-metric rounded-xl px-3 py-2 text-center"><b class="block text-lg text-ink">${teamDirectory.length}</b><span class="text-[10px] font-bold uppercase text-[#6B7280]">Team contacts</span></div><div class="app-metric rounded-xl px-3 py-2 text-center"><b class="block text-lg text-ink">${slackChannels.length}</b><span class="text-[10px] font-bold uppercase text-[#6B7280]">Slack channels</span></div></div></div></div><div class="mt-5 grid gap-5 xl:grid-cols-[.9fr_1.4fr]"><section class="card rounded-xl bg-white p-5"><h2 class="text-lg font-extrabold text-ink">Basic company info</h2><dl class="mt-4 divide-y divide-blue-50">${companyInfo.map(([label, value]) => `<div class="grid gap-1 py-3 sm:grid-cols-[155px_1fr]"><dt class="text-sm font-bold text-ink">${label}</dt><dd class="text-sm leading-5 text-[#6B7280]">${value}</dd></div>`).join('')}</dl></section><section class="card overflow-hidden rounded-xl bg-white"><div class="border-b border-blue-100 p-5"><h2 class="text-lg font-extrabold text-ink">Team directory</h2><p class="mt-1 text-sm text-[#6B7280]">Core Group and International Team contact details.</p></div><div class="overflow-x-auto"><table class="w-full min-w-[720px] text-left text-sm"><thead class="bg-[#F5F6F7] text-xs uppercase tracking-wide text-[#6B7280]"><tr><th class="px-3 py-3">Team</th><th class="px-3 py-3">Name</th><th class="px-3 py-3">Ext.</th><th class="px-3 py-3">Email address</th><th class="px-3 py-3">Location</th><th class="px-3 py-3">Market</th></tr></thead><tbody>${teamRows}</tbody></table></div></section></div><section class="card mt-5 rounded-xl bg-white p-5"><h2 class="text-lg font-extrabold text-ink">Slack channel guide</h2><div class="mt-4 grid gap-3 lg:grid-cols-2">${slackChannels.map(([channel, purpose]) => `<article class="rounded-lg border border-blue-50 bg-[#F5F6F7] p-4"><h3 class="font-bold text-aus">${channel}</h3><p class="mt-1 text-sm leading-5 text-[#6B7280]">${purpose}</p></article>`).join('')}</div></section></section>` }
    function cadencesPage() {
      const productivity = dailyProductivity.map((item, index) => `<article class="flex min-h-36 items-center justify-center rounded-xl border border-blue-100 p-5 text-center text-sm font-bold leading-5 text-ink" style="background:${['#dcebd7','#fff3ca','#f2c8c8','#fce4c9'][index]}">${item}</article>`).join('');
      const priorities = callPriorities.map((item, index) => `<li class="grid grid-cols-[32px_1fr] items-center overflow-hidden border-b border-white/20 last:border-0"><span class="grid h-8 place-items-center text-xs font-extrabold text-[#172B4D]" style="background:${['#172B4D','#00bfd3','#F4C542','#172B4D'][index]}">${index + 1}</span><span class="px-3 py-1.5 text-right text-xs font-bold text-[#172B4D]">${item}</span></li>`).join('');
      const workflows = callFlows.map(([title, steps]) => `<article class="card app-workflow rounded-xl bg-white p-5"><div class="mb-4 flex items-center gap-3 border-b border-blue-100 pb-3"><span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-100 text-aus"><i data-lucide="git-branch" class="h-4 w-4"></i></span><h2 class="text-sm font-extrabold uppercase text-ink">${title}</h2></div><ol class="space-y-2">${steps.map((step, index) => `<li class="flex items-start gap-3"><span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-[#F5F6F7] text-xs font-extrabold text-aus">${index + 1}</span><span class="pt-0.5 text-sm leading-5 text-[#6B7280]">${step}</span></li>`).join('')}</ol></article>`).join('');
      return `<section class="app-page"><div class="app-hero rounded-2xl px-6 py-7 sm:px-8"><div class="relative z-10 flex flex-col gap-5 lg:flex-row lg:items-end"><div class="flex-1"><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">Daily operations</p><h1 class="mt-1 text-3xl font-extrabold text-ink">Cadences / Workflows</h1><p class="mt-2 max-w-3xl text-sm leading-6 text-[#6B7280]">Daily productivity, call priorities, and publishing-consultation workflows from the Cadences/Workflows spreadsheet.</p></div><div class="grid grid-cols-3 gap-2"><div class="app-metric rounded-xl px-3 py-2 text-center"><b class="block text-lg text-ink">4</b><span class="text-[10px] font-bold uppercase text-[#6B7280]">Priorities</span></div><div class="app-metric rounded-xl px-3 py-2 text-center"><b class="block text-lg text-ink">4</b><span class="text-[10px] font-bold uppercase text-[#6B7280]">Daily steps</span></div><div class="app-metric rounded-xl px-3 py-2 text-center"><b class="block text-lg text-ink">8</b><span class="text-[10px] font-bold uppercase text-[#6B7280]">Flows</span></div></div></div></div><div class="mt-5 grid gap-4 xl:grid-cols-[1fr_320px]"><section class="card rounded-xl bg-white p-5"><h2 class="app-section-title text-lg">Daily Productivity Guide</h2><div class="mt-5 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">${productivity}</div></section><section class="card overflow-hidden rounded-xl bg-white"><h2 class="app-section-title border-b border-blue-100 px-4 py-3 text-sm">Order of Call Priority</h2><ol>${priorities}</ol></section></div><section class="mt-7"><h2 class="app-section-title mb-4 text-xl">Call Flows / Workflows</h2><div class="grid gap-4 xl:grid-cols-2">${workflows}</div></section></section>`;
    }
    function portalDetailPage(page) { let detail = portalDetail[page]; return `<section><div class="app-hero rounded-2xl px-6 py-7 sm:px-8"><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">Tellwell PC Cheat Sheet</p><h1 class="mt-1 text-3xl font-extrabold text-ink">${detail.label}</h1><p class="mt-2 max-w-3xl text-sm leading-6 text-[#6B7280]">${detail.intro}</p></div><div class="mt-5 grid gap-4 lg:grid-cols-2">${detail.groups.map(([title, items]) => `<section class="card rounded-xl bg-white p-5"><h2 class="text-base font-extrabold text-ink">${title}</h2><div class="mt-4 space-y-3">${items.map(item => { let [heading, ...rest] = item.split('|'), body = rest.join('|'); return `<article class="rounded-lg border border-blue-50 bg-[#F5F6F7] p-4"><h3 class="text-sm font-bold text-[#00bfd3]">${heading}</h3>${body ? `<p class="mt-1 text-sm leading-5 text-[#6B7280]">${body}</p>` : ''}</article>` }).join('')}</div></section>`).join('')}</div></section>` }
    function trainingPage() {
      const leadTags = leadTaggingGuide.map(([tag, detail]) => `<div class="grid gap-2 border-b border-blue-50 py-3 last:border-0 sm:grid-cols-[130px_1fr]"><dt class="text-sm font-extrabold text-ink">${tag}</dt><dd class="text-sm leading-5 text-[#6B7280]">${detail}</dd></div>`).join('');
      const reassignment = reassignmentGuides.map(guide => `<article class="card rounded-xl bg-white p-5"><h2 class="text-base font-extrabold text-ink">Reassignment guide: ${guide.title}</h2><div class="mt-4 overflow-x-auto"><table class="w-full min-w-[390px] text-left text-sm"><thead class="bg-[#F5F6F7] text-xs uppercase text-[#6B7280]"><tr><th class="px-3 py-2">Lead status</th><th class="px-3 py-2">And the age is</th></tr></thead><tbody>${guide.rows.map(([status, age]) => `<tr class="border-b border-blue-50 last:border-0"><td class="px-3 py-2.5 font-semibold text-ink">${status}</td><td class="px-3 py-2.5 text-[#6B7280]">${age}</td></tr>`).join('')}</tbody></table></div>${guide.note ? `<p class="mt-3 text-xs leading-5 text-[#6B7280]">${guide.note}</p>` : ''}</article>`).join('');
      const stages = opportunityStages.map(([number, detail], index) => `<article class="flex gap-3 rounded-lg border border-blue-50 bg-[#F5F6F7] p-3"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg text-xl font-extrabold text-white" style="background:${['#172B4D','#00bfd3','#F4C542','#172B4D','#00bfd3','#F4C542','#172B4D'][index]}">${number}</span><p class="pt-0.5 text-sm leading-5 text-[#6B7280]">${detail}</p></article>`).join('');
      const inactive = inactiveOpportunityGuides.map(([label, intro, reasons], index) => `<article class="card rounded-xl bg-white p-5"><h2 class="inline-block rounded-xl px-4 py-2 text-xl font-extrabold text-white" style="background:${index ? '#00bfd3' : '#172B4D'}">${label}</h2><p class="mt-4 text-sm leading-5 text-[#6B7280]">${intro}</p><ul class="mt-3 list-disc space-y-1 pl-5 text-sm text-[#6B7280]">${reasons.map(reason => `<li>${reason}</li>`).join('')}</ul></article>`).join('');
      return `<section><div class="app-hero rounded-2xl px-6 py-7 sm:px-8"><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">Learning centre</p><h1 class="mt-1 text-3xl font-extrabold text-ink">Learning & Resources</h1><p class="mt-2 max-w-3xl text-sm leading-6 text-[#6B7280]">Training guides, tutorials, and policy documents from the Training/Memos/Tutorial Videos spreadsheet.</p></div><div class="mt-5 grid gap-4 xl:grid-cols-2"><section class="card rounded-xl bg-white p-5"><h2 class="text-base font-extrabold text-ink">A Quick Guide to Proper Lead Tagging</h2><dl class="mt-3">${leadTags}</dl></section><section class="card rounded-xl bg-white p-5"><h2 class="text-base font-extrabold text-ink">A Quick Guide to Proper Opportunity Stage Tagging</h2><div class="mt-4 space-y-2">${stages}</div></section></div><div class="mt-4 grid gap-4 xl:grid-cols-2">${reassignment}</div><section class="mt-4"><h2 class="mb-3 text-lg font-extrabold text-ink">A Quick Guide to Tagging Inactive/Lost Opportunities</h2><div class="grid gap-4 xl:grid-cols-2">${inactive}</div></section><section class="mt-6"><h2 class="mb-3 text-lg font-extrabold text-ink">Video &amp; Written Tutorials</h2><div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">${trainingVideos.map(([title, url]) => `<a href="${url}" target="_blank" rel="noopener noreferrer" class="card overflow-hidden rounded-xl bg-white transition hover:-translate-y-0.5 hover:shadow-soft"><div class="flex aspect-video items-center justify-center bg-gradient-to-br from-[#223343] to-[#16232e]"><span class="grid h-9 w-9 place-items-center rounded-full border-2 border-[#42657b] text-[#dce3e7]"><i data-lucide="play" class="ml-0.5 h-4 w-4 fill-current"></i></span></div><div class="p-4"><h3 class="text-sm font-bold leading-5 text-ink">${title}</h3><p class="mt-2 text-[11px] text-[#172B4D]">Open tutorial <i data-lucide="external-link" class="ml-1 inline h-3 w-3"></i></p></div></a>`).join('')}</div></section><section class="card mt-6 rounded-xl bg-white p-5"><h2 class="text-base font-extrabold text-ink">Policy Resource Documents</h2><div class="mt-4 grid gap-2 sm:grid-cols-2 lg:grid-cols-3">${trainingPolicies.map(([title, url]) => `<a href="${url}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between rounded-lg border border-blue-100 bg-[#F5F6F7] px-3 py-2.5 text-sm font-semibold text-[#000000] hover:bg-blue-50"><span>${title}</span><i data-lucide="external-link" class="h-4 w-4 shrink-0 text-aus"></i></a>`).join('')}</div></section></section>`;
    }
    const allItems = () => data.flatMap(c => [...c.items.map(n => ({ name: n, cat: c.id, title: c.title, type: c.type, url: consultationUrls[n] || 'https://www.tellwell.ca/' + n.toLowerCase().replace(/[^a-z0-9]+/g, '-') })), ...custom.filter(x => x.cat === c.id)].sort((a, b) => { let aRank = saved.indexOf(key(a)), bRank = saved.indexOf(key(b)); if (aRank === -1 && bRank === -1) return 0; if (aRank === -1) return 1; if (bRank === -1) return -1; return bRank - aRank })), key = x => x.cat + '|' + x.name;
    function tone(c) { return 'bg-blue-100 text-blue-600' }
    function linkRow(x, c) { let k = key(x), s = saved.includes(k); return `<div class="resource-row group flex items-center gap-2 px-1 py-2"><i data-lucide="file-text" class="h-3.5 w-3.5 shrink-0 ${tone(c).split(' ')[1]}"></i><button class="open min-w-0 flex-1 truncate text-left text-[11px] font-medium text-[#000000] hover:text-[#000000]" data-key="${k}">${x.name}</button><button class="save rounded p-1 ${s ? 'text-amber-500' : 'text-[#6B7280]'} hover:bg-blue-50" data-key="${k}" aria-label="Save resource"><i data-lucide="star" class="h-3.5 w-3.5" ${s ? 'fill=currentColor' : ''}></i></button><button class="copy rounded p-1 text-[#6B7280] opacity-0 group-hover:opacity-100" data-url="${x.url}"><i data-lucide="copy" class="h-3.5 w-3.5"></i></button><a href="${x.url}" target="_blank" rel="noopener noreferrer" class="rounded-full border border-[#E5E7EB] px-2 py-0.5 text-[10px] font-semibold text-[#000000] hover:bg-blue-50">View</a></div>` }
    function renderMarketLinks() { let grid = document.querySelector('#marketLinkGrid'); if (!grid) return; const markets = { AUS: { code: 'AU', flag: '/flags/au.webp' }, USA: { code: 'US', flag: '/flags/us.webp' }, CAN: { code: 'CA', flag: '/flags/ca.webp' }, UKI: { code: 'UK', flag: '/flags/uk.webp' }, EU: { code: 'EU', flag: '/flags/eu.jpg' } }; document.querySelector('#marketTabs').innerHTML = `<div id="marketDropdown" class="relative"><button id="marketSelect" type="button" aria-haspopup="true" aria-expanded="false" class="inline-flex items-center gap-2 rounded-md border border-[#E5E7EB] bg-white px-2.5 py-2 text-sm font-semibold text-[#172B4D] hover:bg-[#F5F6F7] focus:outline-none focus:ring-2 focus:ring-aus"><img src="${markets[activeMarket].flag}" alt="" class="h-4 w-6 object-cover"><span>${markets[activeMarket].code}</span><i data-lucide="chevron-down" class="h-4 w-4"></i></button><div id="marketOptions" role="menu" class="absolute right-0 top-full z-20 mt-1 hidden min-w-24 overflow-hidden rounded-md border border-[#E5E7EB] bg-white py-1 shadow-lg">${Object.keys(markets).map(m => `<button type="button" role="menuitem" class="marketOption flex w-full items-center gap-2 px-3 py-2 text-left text-sm font-medium ${m === activeMarket ? 'bg-aus text-white' : 'text-[#222222] hover:bg-[#F5F6F7]'}" data-market="${m}"><img src="${markets[m].flag}" alt="" class="h-4 w-6 object-cover"><span>${markets[m].code}</span></button>`).join('')}</div></div>`; grid.innerHTML = websiteLinksByMarket[activeMarket].map(([label, url]) => `<a href="${url}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between rounded-lg border border-[#E5E7EB] bg-white px-3 py-2.5 text-sm font-semibold text-[#000000] hover:bg-blue-50"><span>${label}</span><i data-lucide="external-link" class="h-4 w-4 text-aus"></i></a>`).join('') }
    function render() { if (activePage !== 0) return; let market = document.querySelector('#marketLinks'); if (!market) { document.querySelector('#popular').closest('section').insertAdjacentHTML('beforebegin', '<section id="marketLinks" class="card mb-4 rounded-xl bg-white p-4"><div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center"><div><h2 class="text-sm font-extrabold text-ink">Website Links by Market</h2><p class="mt-1 text-xs text-[#6B7280]">Official Tellwell pages from the Consultation Resources sheet.</p></div><div id="marketTabs" class="flex flex-wrap gap-2 sm:ml-auto"></div></div><div id="marketLinkGrid" class="grid gap-2 sm:grid-cols-2 xl:grid-cols-3"></div></section>'); } renderMarketLinks(); let q = (document.querySelector('#resourceSearch').value + ' ' + document.querySelector('#globalSearch').value).trim().toLowerCase(), count = 0; document.querySelector('#categoryGrid').innerHTML = data.map(c => { let list = allItems().filter(x => x.cat === c.id).filter(x => (!q || `${x.name} ${x.title} ${x.type} ${x.url}`.toLowerCase().includes(q)) && (filter === 'All' || x.type === filter) && (!savedMode || saved.includes(key(x)))); count += list.length; if (!list.length) return ''; let show = list.slice(0, 4), isForm = c.id === 'quote'; return `<article class="card flex min-h-[265px] flex-col rounded-xl bg-white p-4"><div class="mb-2 flex gap-3"><div class="icon-ball grid h-11 w-11 shrink-0 place-items-center rounded-full ${tone(c.color)}"><i data-lucide="${icons[c.id]}" class="h-5 w-5"></i></div><div><h3 class="text-[13px] font-extrabold leading-[1.2] text-[#172B4D]">${c.title}</h3><p class="mt-1 text-[11px] leading-[1.35] text-[#6B7280]">${c.desc}</p></div></div><div class="${isForm ? 'mt-[-4px]' : 'mt-auto'}">${show.map(x => linkRow(x, c.color)).join('')}${isForm ? '' : `<button class="listCategory mt-3 inline-flex items-center gap-2 text-[11px] font-bold text-[#000000]" data-category="${c.id}">View all ${list.length} resources <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i></button>`}</div></article>` }).join('') || '<div class="col-span-full rounded-xl bg-white p-12 text-center text-sm text-[#6B7280]">No resources match your search.</div>'; document.querySelector('#resultInfo').classList.toggle('hidden', !q && !savedMode && filter === 'All'); document.querySelector('#resultInfo').textContent = `${count} resource${count === 1 ? '' : 's'} found`; document.querySelector('#filters').innerHTML = ['All', 'Guides', 'Templates', 'Forms', 'Reference', 'Samples'].map(f => `<button data-filter="${f}" class="filter rounded-full border px-4 py-2 text-xs font-semibold ${filter === f ? 'border-aus bg-aus text-white' : 'border-[#E5E7EB] bg-white text-[#6B7280] hover:bg-blue-50'}">${f}</button>`).join(''); popular(); recents(); lucide.createIcons() }
    function popular() { let p = ['Publishing Guide', 'Production Process Overview', 'Interior Layout Samples', 'Print Prices', 'Tellwell Size Matrix']; document.querySelector('#popular').innerHTML = p.map(n => { let x = allItems().find(a => a.name === n); return `<button class="open rounded-lg border border-blue-50 p-2 text-left hover:bg-blue-50" data-key="${key(x)}"><i data-lucide="${icons[x.cat]}" class="mb-2 h-4 w-4 text-aus"></i><span class="block truncate text-[10px] font-semibold text-[#000000]">${n}</span><span class="mt-1 block text-[10px] text-[#000000]">View â†’</span></button>` }).join('') }
    function recents() { let a = recent.length ? recent : allItems().slice(0, 4).map((x, i) => ({ ...x, when: ['Viewed 2 hours ago', 'Viewed 4 hours ago', 'Opened yesterday', 'Viewed 2 days ago'][i] })); document.querySelector('#recent').innerHTML = a.slice(0, 3).map(x => `<button class="open flex w-full items-center gap-2 border-b border-blue-50 py-2 text-left last:border-0" data-key="${key(x)}"><i data-lucide="file-text" class="h-4 w-4 text-aus"></i><span class="min-w-0 flex-1 truncate text-[11px] font-medium text-[#000000]">${x.name}</span><span class="hidden text-[10px] text-[#6B7280] sm:block">${x.when}</span><i data-lucide="chevron-right" class="h-4 w-4 text-aus"></i></button>`).join('') }
    function toast(s) { let t = document.querySelector('#toast'); t.textContent = s; t.classList.remove('hidden'); clearTimeout(window.tt); window.tt = setTimeout(() => t.classList.add('hidden'), 1800) } function find(k) { return allItems().find(x => key(x) === k) }
    function showResource(x) { recent = [{ ...x, when: 'Opened just now' }, ...recent.filter(y => key(y) !== key(x))].slice(0, 8); localStorage.setItem('aus-recent', JSON.stringify(recent)); document.querySelector('#resourceModalLabel').textContent = x.title; document.querySelector('#resourceModalTitle').textContent = x.name; document.querySelector('#resourceModalBody').innerHTML = `<div class="rounded-xl bg-[#FFFFFF] p-4"><p class="text-sm leading-6 text-[#6B7280]">Open this resource in a new tab, copy its URL, or save it to your bookmarks for quick access.</p><p class="mt-3 break-all rounded-lg bg-white p-3 text-xs text-[#6B7280]">${x.url}</p></div><div class="mt-5 flex flex-wrap justify-end gap-2"><button class="modalCopy rounded-lg border border-blue-100 px-4 py-2 text-sm font-bold text-ink" data-url="${x.url}"><i data-lucide="copy" class="mr-1 inline h-4 w-4"></i> Copy URL</button><button class="launchURL rounded-lg bg-aus px-4 py-2 text-sm font-bold text-white" data-url="${x.url}">Open resource <i data-lucide="external-link" class="ml-1 inline h-4 w-4"></i></button></div>`; document.querySelector('#resourceModal').classList.remove('hidden'); document.querySelector('#resourceModal').classList.add('flex'); document.body.classList.add('modal-open'); lucide.createIcons(); render() }
    function showCategory(id) { let c = data.find(x => x.id === id), list = allItems().filter(x => x.cat === id); document.querySelector('#resourceModalLabel').textContent = 'All resources'; document.querySelector('#resourceModalTitle').textContent = c.title; document.querySelector('#resourceModalBody').innerHTML = `<p class="mb-4 text-sm text-[#6B7280]">${c.desc}</p><div class="space-y-2">${list.map(x => `<button class="open flex w-full items-center gap-3 rounded-lg border border-blue-100 p-3 text-left hover:bg-[#FFFFFF]" data-key="${key(x)}"><i data-lucide="file-text" class="h-4 w-4 text-aus"></i><span class="flex-1 text-sm font-semibold text-ink">${x.name}</span><i data-lucide="chevron-right" class="h-4 w-4 text-aus"></i></button>`).join('')}</div>`; document.querySelector('#resourceModal').classList.remove('hidden'); document.querySelector('#resourceModal').classList.add('flex'); document.body.classList.add('modal-open'); lucide.createIcons() }
    function open(k) { let x = find(k); if (x) showResource(x) }
    function navMarkup() { document.querySelector('#sideNav').innerHTML = nav.map((n, i) => `<button data-page="${i}" ${i === activePage ? 'aria-current="page"' : ''} class="nav-link ${i === activePage ? 'active' : ''}"><i data-lucide="${n[1]}" aria-hidden="true"></i><span>${n[0]}</span></button>`).join(''); lucide.createIcons() }
    function sectionPageMarkup(page) { let section = tabPages[page], [title, icon] = nav[page]; return `<section class="app-hero rounded-2xl px-6 py-7 sm:px-8"><div class="relative z-10 flex max-w-3xl items-start gap-4"><div class="icon-ball grid h-14 w-14 shrink-0 place-items-center rounded-full bg-[#F5F6F7] text-[#00bfd3]"><i data-lucide="${icon}" class="h-7 w-7"></i></div><div><p class="text-xs font-bold uppercase tracking-[.18em] text-aus">${section.eyebrow}</p><h1 class="mt-1 text-2xl font-extrabold tracking-tight text-ink sm:text-[32px]">${title}</h1><p class="mt-2 text-sm leading-6 text-[#6B7280] sm:text-base">${section.intro}</p></div></div><i data-lucide="${icon}" class="absolute right-7 top-5 hidden h-32 w-32 text-[#00bfd3] opacity-30 md:block"></i></section><section class="mt-5 grid gap-4 lg:grid-cols-2">${section.groups.map(group => `<article class="card rounded-xl bg-white p-5"><div class="mb-4 flex items-center gap-3"><div class="icon-ball grid h-10 w-10 place-items-center rounded-full bg-blue-100 text-aus"><i data-lucide="${group.icon}" class="h-5 w-5"></i></div><h2 class="text-base font-extrabold text-ink">${group.title}</h2></div><ul class="space-y-2">${group.items.map(item => `<li class="flex gap-3 rounded-lg bg-[#F5F6F7] px-3 py-2.5 text-sm leading-5 text-[#6B7280]"><i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 shrink-0 text-aus"></i><span>${item}</span></li>`).join('')}</ul></article>`).join('')}</section>` }
    function navigate(page) { activePage = page; if (page !== 1 && countryClockTimer) { clearInterval(countryClockTimer); countryClockTimer = null; } navMarkup(); document.querySelector('#pageContent').innerHTML = page === 0 ? consultationView : page === 1 ? countryCodePage() : page === 2 ? spielsPage() : page === 3 ? billingInvoicingPage() : page === 4 ? companyDirectoryPage() : page === 5 ? cadencesPage() : page === 6 ? trainingPage() : portalDetail[page] ? portalDetailPage(page) : sectionPageMarkup(page); if (page === 3) renderDiscountRows(); if (page === 0) render(); else { renderNavigationLinks(); lucide.createIcons() } document.querySelector('#globalSearch').value = ''; document.querySelector('#sidebar').classList.add('hidden'); document.querySelector('#sidebar').classList.remove('flex'); document.querySelector('#overlay').classList.add('hidden') }
    navMarkup(); document.querySelector('#categorySelect').innerHTML = data.map(c => `<option value="${c.id}">${c.title}</option>`).join(''); document.querySelector('#navigationSelect').innerHTML = nav.map((n, i) => `<option value="${i}">${n[0]}</option>`).join('');
    function syncAddForm() { let page = +document.querySelector('#navigationSelect').value, isConsultation = page === 0, existing = [...new Map(customNav.filter(x => +x.page === page && x.category).map(x => [x.category, x])).values()]; document.querySelector('#categoryField').classList.toggle('hidden', !isConsultation); document.querySelector('#existingCategoryField').classList.toggle('hidden', isConsultation || !existing.length); document.querySelector('#existingCategorySelect').innerHTML = existing.map(x => `<option value="${x.category}">${x.category}</option>`).join(''); let showNew = !isConsultation && !existing.length; document.querySelector('#newCategoryFields').classList.toggle('hidden', !showNew); document.querySelector('#navigationCategory').required = showNew }
    document.querySelector('#navigationSelect').addEventListener('change', syncAddForm); syncAddForm();
    function renderNavigationLinks() { if (activePage === 0) return; let links = customNav.filter(x => +x.page === activePage); if (!links.length) return; let groups = links.reduce((all, x) => { let category = x.category || 'General'; (all[category] ??= []).push(x); return all }, {}); document.querySelector('#pageContent').insertAdjacentHTML('beforeend', `<section class="mt-4 grid gap-4 md:grid-cols-2">${Object.entries(groups).map(([category, items]) => `<article class="card rounded-2xl bg-white p-5"><div class="mb-3 flex items-center gap-3"><div class="icon-ball grid h-10 w-10 place-items-center rounded-full bg-blue-100 text-aus"><i data-lucide="folder-open" class="h-5 w-5"></i></div><div><h2 class="text-sm font-extrabold text-ink">${category}</h2><p class="text-[11px] text-[#6B7280]">${items[0].categoryDescription || items.length + ' saved resource' + (items.length === 1 ? '' : 's')}</p></div></div><div>${items.map(x => `<a href="${x.url}" target="_blank" rel="noopener noreferrer" class="resource-row flex items-center gap-3 p-2 text-sm font-semibold text-[#000000] hover:bg-blue-50"><i data-lucide="file-text" class="h-4 w-4 text-aus"></i><span class="flex-1">${x.name}</span><span class="rounded-full border border-[#E5E7EB] px-2 py-0.5 text-[10px] font-semibold text-[#000000]">View</span></a>`).join('')}</div></article>`).join('')}</section>`); lucide.createIcons() }
    document.addEventListener('input', e => { if (activePage === 0 && e.target.matches('#resourceSearch,#globalSearch')) render(); if (activePage === 1 && e.target.matches('#countryGuideSearch')) updateCountrySuggestions(e.target.value) }); document.addEventListener('change', e => { if (activePage === 1 && e.target.matches('#countryTimezone')) { selectedCountryZone = e.target.value; updateCountryClock() } }); document.addEventListener('submit', e => { if (e.target.id === 'countryLookupForm') { e.preventDefault(); lookupCountry() } }); document.addEventListener('click', e => {
  const root = document.querySelector('#spielPage');
  if (!root) return;
  const tab = e.target.closest('#leadTabs .tabbtn');
  if (tab) {
    root.querySelectorAll('#leadTabs .tabbtn').forEach(button => button.classList.toggle('active', button === tab));
    root.querySelectorAll('.tabpanel').forEach(panel => panel.classList.toggle('active', panel.dataset.panel === tab.dataset.tab));
    return;
  }
  const trigger = e.target.closest('.accordion-trigger');
  if (trigger && root.contains(trigger)) {
    const item = trigger.closest('.accordion-item');
    const panel = item.querySelector('.accordion-panel');
    const inner = item.querySelector('.accordion-panel-inner');
    const open = item.classList.toggle('open');
    trigger.setAttribute('aria-expanded', String(open));
    panel.style.maxHeight = open ? `${inner.scrollHeight}px` : '0px';
  }
});
document.addEventListener('click', e => { let b = e.target.closest('button'); if (!b) return; if (b.classList.contains('countryCandidate')) { const country = countryDirectory?.find(item => item.iso2 === b.dataset.country); if (country) showCountryDetails(country); return } if (b.dataset.page !== undefined) { navigate(+b.dataset.page); return } if (b.classList.contains('filter')) { filter = b.dataset.filter; render() } if (b.id === 'favoritesOnly') { savedMode = !savedMode; b.classList.toggle('bg-amber-100', savedMode); render() } if (b.classList.contains('listCategory')) { showCategory(b.dataset.category) } if (b.classList.contains('save')) { let k = b.dataset.key; saved = saved.includes(k) ? saved.filter(x => x !== k) : [...saved, k]; localStorage.setItem('aus-saved', JSON.stringify(saved)); render(); toast(saved.includes(k) ? 'Saved to bookmarks' : 'Removed from bookmarks') } if (b.classList.contains('copy') || b.classList.contains('modalCopy')) navigator.clipboard.writeText(b.dataset.url).then(() => toast('URL copied to clipboard')); if (b.classList.contains('viewLink')) { let x = find(b.dataset.key); if (x) window.open(x.url, '_blank', 'noopener') } if (b.classList.contains('launchURL')) window.open(b.dataset.url, '_blank', 'noopener'); if (b.classList.contains('open')) open(b.dataset.key); if (b.id === 'addCategoryToggle') { let fields = document.querySelector('#newCategoryFields'), show = fields.classList.contains('hidden'); fields.classList.toggle('hidden', !show); document.querySelector('#navigationCategory').required = show; if (show) document.querySelector('#navigationCategory').focus() } if (b.id === 'addBtn') { document.querySelector('#navigationSelect').value = activePage; syncAddForm(); document.querySelector('#modal').classList.remove('hidden'); document.querySelector('#modal').classList.add('flex'); document.body.classList.add('modal-open') } if (b.classList.contains('closeModal')) { document.querySelector('#modal').classList.add('hidden'); document.querySelector('#modal').classList.remove('flex'); document.body.classList.remove('modal-open') } if (b.classList.contains('closeResourceModal')) { document.querySelector('#resourceModal').classList.add('hidden'); document.querySelector('#resourceModal').classList.remove('flex'); document.body.classList.remove('modal-open') } if (b.id === 'menuBtn') { document.querySelector('#sidebar').classList.toggle('hidden'); document.querySelector('#sidebar').classList.toggle('flex'); document.querySelector('#overlay').classList.toggle('hidden') } }); document.querySelector('#overlay').addEventListener('click', () => { document.querySelector('#sidebar').classList.add('hidden'); document.querySelector('#sidebar').classList.remove('flex'); document.querySelector('#overlay').classList.add('hidden') }); document.querySelector('#linkForm').addEventListener('submit', e => { e.preventDefault(); let d = Object.fromEntries(new FormData(e.target)), c = data.find(x => x.id === d.category); let page = +d.page; if (page === 0) { custom.push({ name: d.title, url: d.url, cat: c.id, title: c.title, type: c.type }); localStorage.setItem('aus-custom', JSON.stringify(custom)) } else { let selected = customNav.find(x => +x.page === page && x.category === d.existingCategory), category = d.navigationCategory || d.existingCategory, categoryDescription = d.navigationCategoryDescription || (selected && selected.categoryDescription) || ''; customNav.push({ name: d.title, url: d.url, page, category, categoryDescription }); localStorage.setItem('aus-navigation-links', JSON.stringify(customNav)) } e.target.reset(); document.querySelector('.closeModal').click(); navigate(page); toast('Custom link added') }); render();
    document.addEventListener('click', e => { const option = e.target.closest('.marketOption'); if (option) { activeMarket = option.dataset.market; renderMarketLinks(); renderDiscountRows(); document.querySelector('#marketOptions')?.classList.add('hidden'); document.querySelector('#marketSelect')?.setAttribute('aria-expanded', 'false'); lucide.createIcons(); return } const trigger = e.target.closest('#marketSelect'); const dropdown = document.querySelector('#marketDropdown'); if (trigger) { const menu = document.querySelector('#marketOptions'); const isOpen = !menu.classList.contains('hidden'); menu.classList.toggle('hidden', isOpen); trigger.setAttribute('aria-expanded', String(!isOpen)); return } if (dropdown && !dropdown.contains(e.target)) { document.querySelector('#marketOptions')?.classList.add('hidden'); document.querySelector('#marketSelect')?.setAttribute('aria-expanded', 'false') } });
  </script>
</body>

</html>

@endverbatim
