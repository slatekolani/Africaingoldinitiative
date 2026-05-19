import React, { FormEvent, useEffect, useMemo, useRef, useState } from 'react';
import { createRoot } from 'react-dom/client';
import {
    ArrowRight,
    ChevronDown,
    Globe2,
    HandHeart,
    Leaf,
    Mail,
    MapPin,
    Menu,
    MessageCircle,
    Phone,
    Sprout,
    Target,
    Users,
    X,
    Zap,
} from 'lucide-react';
import '../css/app.css';

type Routes = {
    home: string;
    aboutUs: string;
    programs: string;
    team: string;
    impact: string;
    gallery: string;
    contactUs: string;
    contactSubmit: string;
    langEn: string;
    langSw: string;
};

type Bootstrap = {
    locale: 'en' | 'sw';
    path: string;
    messages: Record<string, string>;
    routes: Routes;
};

declare global {
    interface Window {
        __AIG__: Bootstrap;
    }
}

const boot = window.__AIG__;
const asset = (path: string) => `/${path.replace(/^\/+/, '')}`;
const t = (key: string, fallback = key) => boot.messages[key] || fallback;
const csrfToken = () => document.querySelector<HTMLMetaElement>('meta[name="csrf-token"]')?.content ?? '';

const navItems = [
    ['home', 'home'],
    ['aboutUs', 'about'],
    ['programs', 'programs'],
    ['team', 'team'],
    ['impact', 'impact'],
    ['gallery', 'gallery'],
    ['contactUs', 'contact'],
] as const;
type PageKey = (typeof navItems)[number][0];

const heroImages = [
    ['Web Images/Together with impact.png', 'gallery_image1_title', 'gallery_image1_desc', 'gallery_image1_alt'],
    ['Web Images/Team showcasing stuff.jpeg', 'gallery_image3_title', 'gallery_image3_desc', 'gallery_image3_alt'],
    ['Web Images/Team planting stuff.jpeg', 'gallery_image5_title', 'gallery_image5_desc', 'gallery_image5_alt'],
] as const;

const heroSlides = [
    ['empowering_youth', 'empowering_youth_desc'],
    ['environmental_conservation', 'environmental_conservation_desc'],
    ['building_leaders', 'building_leaders_desc'],
    ['join_initiative', 'join_initiative_desc'],
] as const;

const gallery = [
    ['Web Images/Together with impact.png', 'gallery_image1_title', 'gallery_image1_desc', 'gallery_image1_alt'],
    ['Web Images/Team with dustbins.jpeg', 'gallery_image2_title', 'gallery_image2_desc', 'gallery_image2_alt'],
    ['Web Images/Team showcasing stuff.jpeg', 'gallery_image3_title', 'gallery_image3_desc', 'gallery_image3_alt'],
    ['Web Images/Team having fun.jpeg', 'gallery_image4_title', 'gallery_image4_desc', 'gallery_image4_alt'],
    ['Web Images/Team planting stuff.jpeg', 'gallery_image5_title', 'gallery_image5_desc', 'gallery_image5_alt'],
    ['Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg', 'gallery_image7_title', 'gallery_image7_desc', 'gallery_image7_title'],
    ['Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.49.jpeg', 'spotlight_title1', 'spotlight_desc1', 'spotlight_alt1'],
    ['Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.51.jpeg', 'spotlight_title2', 'spotlight_desc2', 'spotlight_alt2'],
    ['Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.32.jpeg', 'spotlight_title3', 'spotlight_desc3', 'spotlight_alt3'],
    ['Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33.jpeg', 'venture_tech_title', 'venture_tech_desc', 'venture_tech_alt'],
    ['Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33 (1).jpeg', 'entrepreneurship_bootcamp_title', 'entrepreneurship_bootcamp_desc', 'entrepreneurship_bootcamp_alt'],
    ['Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg', 'tech_workshops_title', 'tech_workshops_desc', 'tech_workshops_alt'],
] as const;

const teamMembers = [
    ['img/Team/Mathew Mwalongo.jpeg', 'team_member1_name', 'team_member1_role', 'team_member1_alt'],
    ['img/Team/Kelvin Chami.jpeg', 'team_member2_name', 'team_member2_role', 'team_member2_alt'],
    ['img/Team/Augustino Armando.jpeg', 'team_member3_name', 'team_member3_role', 'team_member3_alt'],
    ['img/Team/Brayson Nziku.jpeg', 'team_member4_name', 'team_member4_role', 'team_member4_alt'],
    ['img/Team/Athuman Salmin.jpeg', 'team_member5_name', 'team_member5_role', 'team_member5_alt'],
    ['img/Team/Emmanuel Ntandu.svg', 'team_member6_name', 'team_member6_role', 'team_member6_alt'],
    ['img/Team/Agnes Mangi.jpeg', 'team_member7_name', 'team_member7_role', 'team_member7_alt'],
    ['img/Team/Michael Sita.svg', 'team_member8_name', 'team_member8_role', 'team_member8_alt'],
    ['img/Team/Pauline Tete.svg', 'team_member9_name', 'team_member9_role', 'team_member9_alt'],
] as const;

function currentPage(): PageKey {
    const path = window.location.pathname.replace(/\/+$/g, '') || '/';
    if (path === '/' || path === '/.') return 'home';
    return (
        navItems.find(([route]) => {
            const routePath = new URL(boot.routes[route], window.location.origin).pathname.replace(/\/+$/g, '') || '/';
            return routePath === path;
        })?.[0] ?? 'home'
    );
}

function ButtonLink({ href, children, variant = 'primary' }: { href: string; children: React.ReactNode; variant?: 'primary' | 'secondary' }) {
    const styles =
        variant === 'primary'
            ? 'bg-amber-500 text-stone-950 hover:bg-amber-400'
            : 'border border-emerald-800/20 bg-white/80 text-emerald-950 hover:bg-emerald-50';

    return (
        <a href={href} className={`focus-ring inline-flex min-h-11 items-center gap-2 rounded-md px-5 py-3 text-sm font-bold transition ${styles}`}>
            {children}
            <ArrowRight size={18} />
        </a>
    );
}

function useRotatingIndex(length: number, delay = 4200) {
    const [index, setIndex] = useState(0);

    useEffect(() => {
        const timer = window.setInterval(() => {
            setIndex((value) => (value + 1) % length);
        }, delay);

        return () => window.clearInterval(timer);
    }, [delay, length]);

    return index;
}

function useInView<T extends HTMLElement>(options?: IntersectionObserverInit) {
    const ref = useRef<T | null>(null);
    const [isInView, setIsInView] = useState(false);

    useEffect(() => {
        if (!ref.current || isInView) return;

        const observer = new IntersectionObserver(([entry]) => {
            if (entry.isIntersecting) {
                setIsInView(true);
                observer.disconnect();
            }
        }, options);

        observer.observe(ref.current);

        return () => observer.disconnect();
    }, [isInView, options]);

    return [ref, isInView] as const;
}

function CountUp({ value, active }: { value: string; active: boolean }) {
    const numericValue = Number(value.replace(/[^\d]/g, ''));
    const suffix = value.replace(/[\d,\s]/g, '');
    const [count, setCount] = useState(0);

    useEffect(() => {
        if (!numericValue || !active) return;

        let frame = 0;
        const totalFrames = 52;
        const timer = window.setInterval(() => {
            frame += 1;
            const progress = 1 - Math.pow(1 - frame / totalFrames, 3);
            setCount(Math.round(numericValue * progress));

            if (frame >= totalFrames) {
                window.clearInterval(timer);
                setCount(numericValue);
            }
        }, 24);

        return () => window.clearInterval(timer);
    }, [active, numericValue]);

    return (
        <>
            {count.toLocaleString()}
            {suffix}
        </>
    );
}

function HeroImageCard({ image, title, desc, alt, featured = false }: { image: string; title: string; desc: string; alt: string; featured?: boolean }) {
    return (
        <figure className={`group relative overflow-hidden rounded-md shadow-xl ${featured ? 'sm:col-span-2' : ''}`}>
            <img src={asset(image)} alt={t(alt)} className={`w-full object-cover transition duration-700 group-hover:scale-105 ${featured ? 'h-80' : 'h-64'}`} />
            <figcaption className="absolute inset-x-0 bottom-0 translate-y-2 bg-gradient-to-t from-emerald-950 via-emerald-950/75 to-transparent p-5 pt-16 opacity-0 transition duration-300 group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:translate-y-0 group-focus-within:opacity-100">
                <h3 className="text-lg font-extrabold text-amber-200">{t(title)}</h3>
                <p className="mt-2 text-sm leading-6 text-white">{t(desc)}</p>
            </figcaption>
        </figure>
    );
}

function Header({ page }: { page: PageKey }) {
    const [open, setOpen] = useState(false);
    const [langOpen, setLangOpen] = useState(false);

    return (
        <header className="sticky top-0 z-50 border-b border-amber-900/10 bg-white/90 backdrop-blur">
            <nav className="section-shell flex min-h-20 items-center justify-between gap-4">
                <a href={boot.routes.home} className="focus-ring flex min-w-0 items-center gap-3 rounded-md">
                    <img className="h-12 w-12 shrink-0 object-contain" src={asset('Logo/Africa_in_Gold_Initiative_Logo2.png')} alt="Africa In Gold Logo" />
                    <span className="max-w-44 text-sm font-extrabold uppercase leading-tight tracking-normal text-emerald-950 sm:max-w-none">
                        {t('logo_text')}
                    </span>
                </a>

                <div className="hidden items-center gap-1 lg:flex">
                    {navItems.map(([route, label]) => (
                        <a
                            key={route}
                            href={boot.routes[route]}
                            className={`focus-ring rounded-md px-3 py-2 text-sm font-semibold transition ${
                                page === route ? 'bg-amber-100 text-emerald-950' : 'text-stone-700 hover:bg-emerald-50 hover:text-emerald-950'
                            }`}
                        >
                            {t(label)}
                        </a>
                    ))}
                </div>

                <div className="hidden items-center gap-2 lg:flex">
                    <div className="relative">
                        <button
                            type="button"
                            onClick={() => setLangOpen((value) => !value)}
                            className="focus-ring inline-flex h-11 items-center gap-2 rounded-md border border-emerald-900/15 bg-white px-3 text-sm font-semibold text-emerald-950"
                        >
                            <Globe2 size={17} />
                            {boot.locale === 'en' ? 'English' : 'Kiswahili'}
                            <ChevronDown size={16} />
                        </button>
                        {langOpen && <LanguageMenu />}
                    </div>
                </div>

                <button
                    type="button"
                    aria-label="Open navigation"
                    onClick={() => setOpen(true)}
                    className="focus-ring inline-flex h-11 w-11 items-center justify-center rounded-md border border-emerald-900/15 bg-white text-emerald-950 lg:hidden"
                >
                    <Menu size={22} />
                </button>
            </nav>

            {open && (
                <div className="fixed inset-0 z-50 bg-emerald-950/40 lg:hidden">
                    <div className="ml-auto flex min-h-screen w-full max-w-sm flex-col bg-white p-5 shadow-2xl">
                        <div className="flex items-center justify-between">
                            <span className="text-sm font-extrabold uppercase text-emerald-950">{t('logo_text')}</span>
                            <button className="focus-ring rounded-md p-2" type="button" aria-label="Close navigation" onClick={() => setOpen(false)}>
                                <X />
                            </button>
                        </div>
                        <div className="mt-8 grid gap-2">
                            {navItems.map(([route, label]) => (
                                <a key={route} href={boot.routes[route]} className="rounded-md px-3 py-3 text-base font-bold text-stone-800 hover:bg-amber-50">
                                    {t(label)}
                                </a>
                            ))}
                        </div>
                        <div className="mt-8 grid grid-cols-2 gap-3">
                            <a className="rounded-md bg-emerald-950 px-4 py-3 text-center text-sm font-bold text-white" href={boot.routes.langEn}>
                                English
                            </a>
                            <a className="rounded-md bg-amber-500 px-4 py-3 text-center text-sm font-bold text-stone-950" href={boot.routes.langSw}>
                                Kiswahili
                            </a>
                        </div>
                    </div>
                </div>
            )}
        </header>
    );
}

function LanguageMenu() {
    return (
        <div className="absolute right-0 top-12 w-44 overflow-hidden rounded-md border border-emerald-900/10 bg-white shadow-xl">
            <a className="block px-4 py-3 text-sm font-semibold text-stone-700 hover:bg-amber-50" href={boot.routes.langEn}>
                English
            </a>
            <a className="block px-4 py-3 text-sm font-semibold text-stone-700 hover:bg-amber-50" href={boot.routes.langSw}>
                Kiswahili
            </a>
        </div>
    );
}

function Hero() {
    const activeSlide = useRotatingIndex(heroSlides.length);
    const [headline, description] = heroSlides[activeSlide];

    return (
        <section className="gold-gradient">
            <div className="section-shell grid min-h-[calc(100vh-5rem)] items-center gap-10 py-14 lg:grid-cols-[1fr_0.9fr] lg:py-20">
                <div>
                    <p className="mb-4 inline-flex rounded-md bg-emerald-950 px-3 py-2 text-sm font-bold text-amber-100">{t('logo_text')}</p>
                    <h1 key={headline} className="hero-copy max-w-3xl text-5xl font-extrabold leading-tight tracking-normal text-emerald-950 sm:text-6xl">
                        {t(headline)}
                    </h1>
                    <p key={description} className="hero-copy hero-copy-delay mt-6 max-w-2xl text-lg leading-8 text-stone-700">{t(description)}</p>
                    <div className="mt-6 flex gap-2" aria-label="Hero slides">
                        {heroSlides.map(([key], index) => (
                            <span key={key} className={`h-2 rounded-full transition-all ${index === activeSlide ? 'w-10 bg-amber-500' : 'w-2 bg-emerald-950/25'}`} />
                        ))}
                    </div>
                    <div className="mt-8 flex flex-wrap gap-3">
                        <ButtonLink href={boot.routes.programs}>{t('our_programs')}</ButtonLink>
                        <ButtonLink href={boot.routes.aboutUs} variant="secondary">
                            {t('learn_more')}
                        </ButtonLink>
                    </div>
                </div>
                <div className="grid gap-4 sm:grid-cols-2">
                    {heroImages.map(([image, title, desc, alt], index) => (
                        <HeroImageCard key={image} image={image} title={title} desc={desc} alt={alt} featured={index === 0} />
                    ))}
                </div>
            </div>
        </section>
    );
}

function StatBand() {
    const [sectionRef, isInView] = useInView<HTMLElement>({ threshold: 0.35 });
    const stats = [
        ['500+', 'stat_youth_trained'],
        ['1,000+', 'stat_trees_planted'],
        ['6', 'stat_tech_teams'],
        ['22', 'venture_innovators'],
    ];

    return (
        <section ref={sectionRef} className="bg-emerald-950 py-8 text-white">
            <div className="section-shell grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                {stats.map(([value, label]) => (
                    <div key={label} className="stat-card rounded-md border border-white/10 p-5">
                        <p className="text-3xl font-extrabold text-amber-300">
                            <CountUp value={value} active={isInView} />
                        </p>
                        <p className="mt-1 text-sm font-semibold text-emerald-50">{t(label)}</p>
                    </div>
                ))}
            </div>
        </section>
    );
}

function FeatureGrid() {
    const features = [
        [Users, 'entrepreneurship', 'entrepreneurship_desc'],
        [Target, 'leadership', 'leadership_desc'],
        [Zap, 'digital_innovation', 'digital_innovation_desc'],
        [HandHeart, 'community_engagement', 'community_engagement_desc'],
    ] as const;

    return (
        <section className="bg-white py-20">
            <div className="section-shell">
                <SectionTitle eyebrow={t('focus_areas')} title={t('building_leaders')} text={t('building_leaders_desc')} />
                <div className="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                    {features.map(([Icon, title, desc]) => (
                        <article key={title} className="rounded-md border border-stone-200 bg-white p-6 shadow-sm">
                            <div className="flex h-12 w-12 items-center justify-center rounded-md bg-amber-100 text-emerald-950">
                                <Icon size={24} />
                            </div>
                            <h3 className="mt-5 text-xl font-extrabold text-emerald-950">{t(title)}</h3>
                            <p className="mt-3 text-sm leading-6 text-stone-600">{t(desc)}</p>
                        </article>
                    ))}
                </div>
            </div>
        </section>
    );
}

function SectionTitle({ eyebrow, title, text }: { eyebrow?: string; title: string; text?: string }) {
    return (
        <div className="max-w-3xl">
            {eyebrow && <p className="text-sm font-extrabold uppercase tracking-normal text-amber-600">{eyebrow}</p>}
            <h2 className="mt-2 text-3xl font-extrabold leading-tight text-emerald-950 sm:text-4xl">{title}</h2>
            {text && <p className="mt-4 text-base leading-7 text-stone-600">{text}</p>}
        </div>
    );
}

function HomePage() {
    return (
        <>
            <Hero />
            <StatBand />
            <FeatureGrid />
            <ProgramPreview />
            <Cta />
        </>
    );
}

function ProgramPreview() {
    return (
        <section className="bg-amber-50 py-20">
            <div className="section-shell grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
                <img className="h-[38rem] w-full rounded-md bg-white object-contain p-2 shadow-lg" src={asset('Web Images/Team showcasing stuff.jpeg')} alt={t('venture_tech_alt')} />
                <div>
                    <SectionTitle eyebrow={t('our_programs')} title={t('venture_tech_title')} text={t('venture_tech_desc')} />
                    <p className="mt-5 leading-7 text-stone-700">{t('venture_tech_more')}</p>
                    <div className="mt-8">
                        <ButtonLink href={boot.routes.programs}>{t('see_all_programs')}</ButtonLink>
                    </div>
                </div>
            </div>
        </section>
    );
}

function AboutPage() {
    const sections = [
        ['Web Images/Together with impact.png', 'about_who_we_are', 'about_who_we_are_desc', 'about_who_we_are_alt'],
        ['Web Images/Team having fun.jpeg', 'about_our_why', 'about_our_why_desc', 'about_our_why_alt'],
        ['Web Images/Team planting stuff.jpeg', 'about_why_name', 'about_why_name_desc', 'about_why_name_alt'],
    ] as const;

    return (
        <>
            <PageHero title={t('about_hero_title')} text={t('about_hero_desc')} image="Web Images/Together with impact.png" />
            <section className="bg-white py-20">
                <div className="section-shell grid gap-8">
                    {sections.map(([image, title, desc, alt], index) => (
                        <article key={title} className={`grid gap-8 lg:grid-cols-2 lg:items-center ${index % 2 ? '' : 'lg:[&>img]:order-2'}`}>
                            <img src={asset(image)} alt={t(alt)} className="h-80 w-full rounded-md object-cover shadow-md" />
                            <div>
                                <h2 className="text-3xl font-extrabold text-emerald-950">{t(title)}</h2>
                                <p className="mt-4 leading-8 text-stone-700">{t(desc)}</p>
                            </div>
                        </article>
                    ))}
                </div>
            </section>
            <section className="bg-emerald-950 py-20 text-white">
                <div className="section-shell grid gap-6 md:grid-cols-2">
                    <MissionCard title={t('mission')} text={t('mission_desc')} />
                    <MissionCard title={t('vision')} text={t('vision_desc')} />
                </div>
            </section>
            <Cta />
        </>
    );
}

function MissionCard({ title, text }: { title: string; text: string }) {
    return (
        <article className="rounded-md border border-white/10 bg-white/5 p-7">
            <h3 className="text-2xl font-extrabold text-amber-200">{title}</h3>
            <p className="mt-4 leading-7 text-emerald-50">{text}</p>
        </article>
    );
}

function ProgramsPage() {
    const programs = [
        ['Web Images/Team showcasing stuff.jpeg', 'venture_tech_title', 'venture_tech_desc', 'venture_tech_more', Zap],
        ['Web Images/Team making impact 2.png', 'youth_empowerment_title', 'youth_empowerment_desc', 'youth_empowerment_caption', HandHeart],
        ['Web Images/Team planting stuff.jpeg', 'environmental_initiatives_title', 'environmental_initiatives_desc', 'environmental_initiatives_caption', Leaf],
        ['Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg', 'entrepreneurship_bootcamp_title2', 'entrepreneurship_bootcamp_desc2', 'entrepreneurship_bootcamp_caption2', Sprout],
    ] as const;

    return (
        <>
            <PageHero title={t('programs_hero_title')} text={t('programs_hero_desc')} image="Web Images/Team showcasing stuff.jpeg" />
            <section className="bg-white py-20">
                <div className="section-shell">
                    <SectionTitle eyebrow={t('our_programs')} title={t('explore_programs')} />
                    <div className="mt-10 grid gap-6 md:grid-cols-2">
                        {programs.map(([image, title, desc, caption, Icon]) => (
                            <article key={title} className="overflow-hidden rounded-md border border-stone-200 bg-white shadow-sm">
                                <img src={asset(image)} alt={t(title)} className="h-[28rem] w-full bg-stone-100 object-contain p-2" />
                                <div className="p-6">
                                    <div className="mb-4 flex h-11 w-11 items-center justify-center rounded-md bg-emerald-950 text-amber-200">
                                        <Icon size={22} />
                                    </div>
                                    <h3 className="text-2xl font-extrabold text-emerald-950">{t(title)}</h3>
                                    <p className="mt-3 leading-7 text-stone-700">{t(desc)}</p>
                                    <p className="mt-4 text-sm font-bold text-amber-700">{t(caption)}</p>
                                </div>
                            </article>
                        ))}
                    </div>
                </div>
            </section>
            <StatBand />
            <Cta title={t('programs_cta_title')} text={t('programs_cta_desc')} />
        </>
    );
}

function TeamPage() {
    return (
        <>
            <PageHero title={`${t('team_hero_title1')} ${t('team_hero_title2')}`} text={t('team_hero_desc')} image="Web Images/Team having fun.jpeg" />
            <section className="bg-white py-20">
                <div className="section-shell">
                    <SectionTitle eyebrow={t('team_title')} title={t('team_section_title')} />
                    <div className="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        {teamMembers.map(([image, name, role, alt]) => (
                            <article key={name} className="rounded-md border border-stone-200 bg-white p-4 shadow-sm">
                                <img src={asset(image)} alt={t(alt)} className="h-80 w-full rounded-md bg-amber-50 object-cover object-top" />
                                <h3 className="mt-5 text-xl font-extrabold text-emerald-950">{t(name)}</h3>
                                <p className="mt-2 text-sm font-bold text-amber-700">{t(role)}</p>
                            </article>
                        ))}
                    </div>
                </div>
            </section>
            <Cta title={t('team_cta_title')} text={t('team_cta_desc')} />
        </>
    );
}

function ImpactPage() {
    const impacts = [
        ['Web Images/Team making impact 2.png', 'youth_impact_title', 'youth_impact_desc', '500+', 'youth_impact_stat1'],
        ['Web Images/Team planting stuff.jpeg', 'env_impact_title', 'env_impact_desc', '1,000+', 'env_impact_stat1'],
        ['Web Images/Team showcasing stuff.jpeg', 'tech_impact_title', 'tech_impact_desc', '6', 'tech_impact_stat1'],
        ['Web Images/Team with dustbins.jpeg', 'comm_impact_title', 'comm_impact_desc', '12+', 'comm_impact_stat1'],
    ] as const;

    return (
        <>
            <PageHero title={`${t('impact_hero_title1')} ${t('impact_hero_title2')}`} text={t('impact_hero_desc')} image="Web Images/Team planting stuff.jpeg" />
            <section className="bg-white py-20">
                <div className="section-shell">
                    <SectionTitle eyebrow={t('impact_title')} title={t('impact_section_title')} />
                    <div className="mt-10 grid gap-6 md:grid-cols-2">
                        {impacts.map(([image, title, desc, value, label]) => (
                            <article key={title} className="grid overflow-hidden rounded-md border border-stone-200 bg-white shadow-sm sm:grid-cols-[0.9fr_1.1fr]">
                                <img src={asset(image)} alt={t(title)} className="h-full min-h-[28rem] w-full bg-amber-50 object-contain p-2" />
                                <div className="p-6">
                                    <h3 className="text-2xl font-extrabold text-emerald-950">{t(title)}</h3>
                                    <p className="mt-3 leading-7 text-stone-700">{t(desc)}</p>
                                    <p className="mt-6 text-4xl font-extrabold text-amber-600">{value}</p>
                                    <p className="text-sm font-bold uppercase tracking-normal text-stone-500">{t(label)}</p>
                                </div>
                            </article>
                        ))}
                    </div>
                </div>
            </section>
            <Cta />
        </>
    );
}

function GalleryPage() {
    return (
        <>
            <PageHero title={t('gallery_title')} text={t('join_initiative_desc')} image="Web Images/Together with impact.png" />
            <section className="bg-white py-20">
                <div className="section-shell grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    {gallery.map(([image, title, desc, alt]) => (
                        <article key={image} className="overflow-hidden rounded-md border border-stone-200 bg-white shadow-sm">
                            <img src={asset(image)} alt={t(alt)} className="h-80 w-full object-cover" />
                            <div className="p-5">
                                <h3 className="text-xl font-extrabold text-emerald-950">{t(title)}</h3>
                                <p className="mt-2 text-sm leading-6 text-stone-600">{t(desc)}</p>
                            </div>
                        </article>
                    ))}
                </div>
            </section>
        </>
    );
}

function ContactPage() {
    const [form, setForm] = useState({
        name: '',
        email: '',
        phone: '',
        country: '',
        message: '',
    });
    const [status, setStatus] = useState<'idle' | 'sending' | 'sent' | 'error'>('idle');
    const [feedback, setFeedback] = useState('');

    const updateField = (field: keyof typeof form, value: string) => {
        setForm((current) => ({ ...current, [field]: value }));
    };

    const submitContact = async (event: FormEvent<HTMLFormElement>) => {
        event.preventDefault();
        setStatus('sending');
        setFeedback('');

        try {
            const response = await fetch(boot.routes.contactSubmit, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Accept: 'application/json',
                    'X-CSRF-TOKEN': csrfToken(),
                },
                body: JSON.stringify(form),
            });

            const payload = await response.json().catch(() => ({}));

            if (!response.ok) {
                const errors = payload.errors ? Object.values(payload.errors).flat().join(' ') : t('form_error', 'An error occurred. Please try again.');
                throw new Error(errors);
            }

            setStatus('sent');
            setFeedback(payload.message || t('message_sent'));
            setForm({ name: '', email: '', phone: '', country: '', message: '' });
        } catch (error) {
            setStatus('error');
            setFeedback(error instanceof Error ? error.message : t('form_error', 'An error occurred. Please try again.'));
        }
    };

    return (
        <>
            <PageHero title={t('contact_title')} text={t('join_initiative_desc')} image="Web Images/Team making impact 2.png" />
            <section className="bg-white py-20">
                <div className="section-shell grid gap-10 lg:grid-cols-[0.85fr_1.15fr]">
                    <div className="grid gap-4">
                        <ContactCard icon={<Mail />} label={t('contact_email')} value="info@africaingoldinitiative.or.tz" href="mailto:info@africaingoldinitiative.or.tz" />
                        <ContactCard icon={<Phone />} label={t('contact_phone')} value="+255 745 654 722" href="tel:+255745654722" />
                        <ContactCard icon={<MapPin />} label={t('contact_location')} value="Dar es Salaam, Tanzania" />
                        <article className="rounded-md border border-amber-200 bg-amber-50 p-5 shadow-sm">
                            <h2 className="text-xl font-extrabold text-emerald-950">{t('donation_title')}</h2>
                            <p className="mt-2 text-sm leading-6 text-stone-700">{t('donation_desc')}</p>
                            <div className="mt-4 grid gap-2 text-sm text-stone-700">
                                <p>
                                    <strong>{t('account_name')}:</strong> AFRICA IN GOLD INITIATIVE
                                </p>
                                <p>
                                    <strong>{t('account_number')}:</strong> 20910033908
                                </p>
                                <p>
                                    <strong>{t('bank')}:</strong> NMB
                                </p>
                            </div>
                        </article>
                        <a
                            className="focus-ring inline-flex items-center justify-center gap-2 rounded-md bg-emerald-950 px-5 py-4 text-sm font-bold text-white hover:bg-emerald-900"
                            href="https://chat.whatsapp.com/IJtstakHP7TJX0dPFR9v5V"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <MessageCircle size={18} />
                            {t('join_group')}
                        </a>
                    </div>
                    <form onSubmit={submitContact} className="rounded-md border border-stone-200 bg-amber-50 p-6">
                        <div className="grid gap-5 sm:grid-cols-2">
                            <Field label={t('name_label')} value={form.name} onChange={(value) => updateField('name', value)} required />
                            <Field label={t('email_label')} type="email" value={form.email} onChange={(value) => updateField('email', value)} required />
                            <Field label={t('phone_label')} value={form.phone} onChange={(value) => updateField('phone', value)} />
                            <Field label={t('country_label')} value={form.country} onChange={(value) => updateField('country', value)} />
                        </div>
                        <label className="mt-5 block text-sm font-bold text-emerald-950">
                            {t('message_label')}
                            <textarea
                                required
                                value={form.message}
                                onChange={(event) => updateField('message', event.target.value)}
                                className="mt-2 min-h-36 w-full rounded-md border border-stone-300 bg-white px-3 py-3 focus:border-amber-500 focus:outline-none"
                            />
                        </label>
                        {feedback && (
                            <p className={`mt-4 rounded-md px-4 py-3 text-sm font-semibold ${status === 'sent' ? 'bg-emerald-100 text-emerald-950' : 'bg-red-100 text-red-900'}`}>
                                {feedback}
                            </p>
                        )}
                        <button
                            type="submit"
                            disabled={status === 'sending'}
                            className="mt-6 inline-flex rounded-md bg-amber-500 px-6 py-3 text-sm font-extrabold text-stone-950 hover:bg-amber-400 disabled:cursor-not-allowed disabled:opacity-60"
                        >
                            {status === 'sending' ? 'Sending...' : t('submit')}
                        </button>
                    </form>
                </div>
            </section>
        </>
    );
}

function ContactCard({ icon, label, value, href }: { icon: React.ReactNode; label: string; value: string; href?: string }) {
    const body = (
        <article className="flex gap-4 rounded-md border border-stone-200 bg-white p-5 shadow-sm">
            <div className="flex h-11 w-11 shrink-0 items-center justify-center rounded-md bg-amber-100 text-emerald-950">{icon}</div>
            <div>
                <p className="text-sm font-bold uppercase tracking-normal text-stone-500">{label}</p>
                <p className="mt-1 font-semibold text-emerald-950">{value}</p>
            </div>
        </article>
    );

    return href ? (
        <a className="focus-ring block rounded-md" href={href}>
            {body}
        </a>
    ) : (
        body
    );
}

function Field({ label, type = 'text', value, onChange, required = false }: { label: string; type?: string; value: string; onChange: (value: string) => void; required?: boolean }) {
    return (
        <label className="block text-sm font-bold text-emerald-950">
            {label}
            <input
                required={required}
                type={type}
                value={value}
                onChange={(event) => onChange(event.target.value)}
                className="mt-2 h-12 w-full rounded-md border border-stone-300 bg-white px-3 focus:border-amber-500 focus:outline-none"
            />
        </label>
    );
}

function PageHero({ title, text, image }: { title: string; text: string; image: string }) {
    return (
        <section className="gold-gradient">
            <div className="section-shell grid min-h-[28rem] gap-10 py-16 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
                <div>
                    <h1 className="max-w-3xl text-4xl font-extrabold leading-tight text-emerald-950 sm:text-6xl">{title}</h1>
                    <p className="mt-5 max-w-2xl text-lg leading-8 text-stone-700">{text}</p>
                </div>
                <img src={asset(image)} alt={title} className="h-[26rem] w-full rounded-md bg-white/70 object-contain p-2 shadow-xl lg:h-[32rem]" />
            </div>
        </section>
    );
}

function Cta({ title = t('cta_title'), text = t('cta_desc') }: { title?: string; text?: string }) {
    return (
        <section className="bg-amber-500 py-14">
            <div className="section-shell flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 className="text-3xl font-extrabold text-emerald-950">{title}</h2>
                    <p className="mt-3 max-w-2xl leading-7 text-stone-800">{text}</p>
                </div>
                <ButtonLink href={boot.routes.contactUs} variant="secondary">
                    {t('join_now')}
                </ButtonLink>
            </div>
        </section>
    );
}

function currentCopyright() {
    const year = new Date().getFullYear().toString();
    return t('footer_copyright').replace(/©\s*\d{4}/, `© ${year}`).replace(/\b\d{4}\b/, year);
}

function BrandIcon({ name }: { name: 'x' | 'instagram' | 'linkedin' | 'youtube' }) {
    const common = 'h-5 w-5';

    if (name === 'x') {
        return (
            <svg className={common} viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M18.9 2h3.3l-7.2 8.2L23.5 22h-6.7l-5.2-6.8L5.7 22H2.4l7.7-8.8L2 2h6.8l4.7 6.2L18.9 2Zm-1.2 18h1.8L7.8 3.9H5.9L17.7 20Z" />
            </svg>
        );
    }

    if (name === 'instagram') {
        return (
            <svg className={common} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" aria-hidden="true">
                <rect x="3" y="3" width="18" height="18" rx="5" />
                <circle cx="12" cy="12" r="4" />
                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
            </svg>
        );
    }

    if (name === 'linkedin') {
        return (
            <svg className={common} viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M5.4 8.9H2.2V22h3.2V8.9ZM3.8 2.5a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8ZM22 14.8c0-3.7-2-6.2-5.2-6.2-1.8 0-3 .9-3.6 1.8V8.9H10V22h3.2v-7.1c0-2 .9-3.3 2.7-3.3 1.7 0 2.7 1.2 2.7 3.4v7H22v-7.2Z" />
            </svg>
        );
    }

    return (
        <svg className={common} viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M23 7.1a3 3 0 0 0-2.1-2.1C19 4.5 12 4.5 12 4.5S5 4.5 3.1 5A3 3 0 0 0 1 7.1 31.2 31.2 0 0 0 .5 12 31.2 31.2 0 0 0 1 16.9 3 3 0 0 0 3.1 19C5 19.5 12 19.5 12 19.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1 31.2 31.2 0 0 0 .5-4.9 31.2 31.2 0 0 0-.5-4.9ZM9.8 15.2V8.8l5.8 3.2-5.8 3.2Z" />
        </svg>
    );
}

function Footer() {
    const socials = [
        ['https://x.com/Africa_inGold', 'X', 'x'],
        ['https://www.instagram.com/africaingoldinitiative?igsh=MThlc282dmV6NWp6aA==', 'Instagram', 'instagram'],
        ['https://www.linkedin.com/company/africa-in-gold-initiative/', 'LinkedIn', 'linkedin'],
        ['https://youtube.com/@aig7187?si=MxIYgeqKsfqPFUAg', 'YouTube', 'youtube'],
    ] as const;

    return (
        <footer className="bg-stone-950 py-12 text-white">
            <div className="section-shell grid gap-8 md:grid-cols-[1.2fr_0.8fr_0.8fr]">
                <div>
                    <h2 className="text-xl font-extrabold text-amber-200">{t('footer_about')}</h2>
                    <p className="mt-3 max-w-md leading-7 text-stone-300">{t('footer_about_desc')}</p>
                </div>
                <div>
                    <h2 className="text-xl font-extrabold text-amber-200">{t('footer_quick_links')}</h2>
                    <div className="mt-3 grid gap-2">
                        {navItems.map(([route, label]) => (
                            <a key={route} className="text-sm font-semibold text-stone-300 hover:text-amber-200" href={boot.routes[route]}>
                                {t(label)}
                            </a>
                        ))}
                    </div>
                </div>
                <div>
                    <h2 className="text-xl font-extrabold text-amber-200">{t('footer_connect')}</h2>
                    <div className="mt-4 flex flex-wrap gap-3">
                        {socials.map(([href, label, icon]) => (
                            <a
                                key={label}
                                href={href}
                                target="_blank"
                                rel="noreferrer"
                                aria-label={label}
                                title={label}
                                className="focus-ring inline-flex h-11 w-11 items-center justify-center rounded-md border border-white/10 bg-white/5 text-stone-200 transition hover:bg-amber-400 hover:text-stone-950"
                            >
                                <BrandIcon name={icon} />
                            </a>
                        ))}
                    </div>
                </div>
            </div>
            <div className="section-shell mt-10 border-t border-white/10 pt-6 text-sm text-stone-400">{currentCopyright()}</div>
        </footer>
    );
}

function App() {
    const page = useMemo(() => currentPage(), []);
    const pages: Record<PageKey, () => React.JSX.Element> = {
        home: HomePage,
        aboutUs: AboutPage,
        programs: ProgramsPage,
        team: TeamPage,
        impact: ImpactPage,
        gallery: GalleryPage,
        contactUs: ContactPage,
    };
    const Page = pages[page];

    return (
        <main>
            <Header page={page} />
            <Page />
            <Footer />
        </main>
    );
}

createRoot(document.getElementById('root') as HTMLElement).render(
    <React.StrictMode>
        <App />
    </React.StrictMode>,
);
