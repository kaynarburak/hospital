--
-- PostgreSQL database dump
--

-- Dumped from database version 15.1
-- Dumped by pg_dump version 15.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: public; Type: SCHEMA; Schema: -; Owner: pg_database_owner
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO pg_database_owner;

--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: pg_database_owner
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: doktor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doktor (
    doktor_id integer NOT NULL,
    d_adi character varying(50) NOT NULL,
    d_soyadi character varying(50) NOT NULL,
    d_tcno numeric(11,0) NOT NULL,
    d_dtarihi date,
    d_ana_adi character varying(50),
    d_baba_adi character varying(50),
    d_cep_numara numeric(10,0),
    bolum character varying(30) NOT NULL
);


ALTER TABLE public.doktor OWNER TO postgres;

--
-- Name: doktor_doktor_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.doktor_doktor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.doktor_doktor_id_seq OWNER TO postgres;

--
-- Name: doktor_doktor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.doktor_doktor_id_seq OWNED BY public.doktor.doktor_id;


--
-- Name: hasta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hasta (
    hasta_id integer NOT NULL,
    adi character varying(50) NOT NULL,
    soyadi character varying(50) NOT NULL,
    tcno numeric(11,0) NOT NULL,
    d_yeri character varying(50) NOT NULL,
    d_tarihi date NOT NULL,
    ana_adi character varying(50),
    baba_adi character varying(50),
    cep_numarasi numeric(11,0)
);


ALTER TABLE public.hasta OWNER TO postgres;

--
-- Name: hasta_hasta_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hasta_hasta_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hasta_hasta_id_seq OWNER TO postgres;

--
-- Name: hasta_hasta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hasta_hasta_id_seq OWNED BY public.hasta.hasta_id;


--
-- Name: kullanici; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.kullanici (
    kullanici_id integer NOT NULL,
    kullanici_adi character varying(50) NOT NULL,
    kullanici_sifre character varying(50) NOT NULL,
    kullanici_yetki boolean NOT NULL
);


ALTER TABLE public.kullanici OWNER TO postgres;

--
-- Name: kullanici_kullanici_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kullanici_kullanici_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kullanici_kullanici_id_seq OWNER TO postgres;

--
-- Name: kullanici_kullanici_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kullanici_kullanici_id_seq OWNED BY public.kullanici.kullanici_id;


--
-- Name: muayene; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.muayene (
    muayene_id integer NOT NULL,
    doktor_id integer NOT NULL,
    hasta_id integer NOT NULL,
    tarih date NOT NULL,
    saat time without time zone
);


ALTER TABLE public.muayene OWNER TO postgres;

--
-- Name: muayene_muayene_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.muayene_muayene_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.muayene_muayene_id_seq OWNER TO postgres;

--
-- Name: muayene_muayene_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.muayene_muayene_id_seq OWNED BY public.muayene.muayene_id;


--
-- Name: randevu; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.randevu (
    randevu_id integer NOT NULL,
    tarih date NOT NULL,
    saat time without time zone NOT NULL,
    doktor_id integer,
    durum boolean,
    hasta_id integer
);


ALTER TABLE public.randevu OWNER TO postgres;

--
-- Name: randevu_randevu_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.randevu_randevu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.randevu_randevu_id_seq OWNER TO postgres;

--
-- Name: randevu_randevu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.randevu_randevu_id_seq OWNED BY public.randevu.randevu_id;


--
-- Name: recete; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.recete (
    recete_id integer NOT NULL,
    hasta_id integer NOT NULL,
    doktor_id integer NOT NULL,
    recete_kodu text NOT NULL
);


ALTER TABLE public.recete OWNER TO postgres;

--
-- Name: recete_recete_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.recete_recete_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.recete_recete_id_seq OWNER TO postgres;

--
-- Name: recete_recete_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.recete_recete_id_seq OWNED BY public.recete.recete_id;


--
-- Name: doktor doktor_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doktor ALTER COLUMN doktor_id SET DEFAULT nextval('public.doktor_doktor_id_seq'::regclass);


--
-- Name: hasta hasta_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hasta ALTER COLUMN hasta_id SET DEFAULT nextval('public.hasta_hasta_id_seq'::regclass);


--
-- Name: kullanici kullanici_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kullanici ALTER COLUMN kullanici_id SET DEFAULT nextval('public.kullanici_kullanici_id_seq'::regclass);


--
-- Name: muayene muayene_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.muayene ALTER COLUMN muayene_id SET DEFAULT nextval('public.muayene_muayene_id_seq'::regclass);


--
-- Name: randevu randevu_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.randevu ALTER COLUMN randevu_id SET DEFAULT nextval('public.randevu_randevu_id_seq'::regclass);


--
-- Name: recete recete_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recete ALTER COLUMN recete_id SET DEFAULT nextval('public.recete_recete_id_seq'::regclass);


--
-- Data for Name: doktor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doktor (doktor_id, d_adi, d_soyadi, d_tcno, d_dtarihi, d_ana_adi, d_baba_adi, d_cep_numara, bolum) FROM stdin;
5	Burak	Kaynar	123456789	1998-06-27	Akkadın	Turhan	5523883898	GENEL
9	Nur	Aslan	142561	1998-11-07	Akkadın	Turhan	5555555555	Acil
\.


--
-- Data for Name: hasta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hasta (hasta_id, adi, soyadi, tcno, d_yeri, d_tarihi, ana_adi, baba_adi, cep_numarasi) FROM stdin;
1	Cevdet	Aslan	15978978971	Ankara	1998-02-05	Aslı	Baki	5555555555
3	Hande	Yener	22225555544	Muğla	1966-07-23	Elif	Tahsin	11111112222
4	burak	kaynar	11111111111	ankara	1998-06-06	aaa	aaa	12121212121
5	aaa	aaaa	121212	anaa	1998-06-06	aaa	aaa	44545454
\.


--
-- Data for Name: kullanici; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kullanici (kullanici_id, kullanici_adi, kullanici_sifre, kullanici_yetki) FROM stdin;
15	Burak	123456	t
\.


--
-- Data for Name: muayene; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.muayene (muayene_id, doktor_id, hasta_id, tarih, saat) FROM stdin;
2	5	1	2022-12-28	13:00:00
3	5	3	2022-12-28	13:00:00
\.


--
-- Data for Name: randevu; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.randevu (randevu_id, tarih, saat, doktor_id, durum, hasta_id) FROM stdin;
4	2022-12-27	13:00:00	5	t	1
7	2022-12-27	13:30:00	9	t	1
6	2022-12-28	13:30:00	9	t	1
5	2022-12-28	13:00:00	5	t	1
\.


--
-- Data for Name: recete; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.recete (recete_id, hasta_id, doktor_id, recete_kodu) FROM stdin;
1	3	9	TEST123
\.


--
-- Name: doktor_doktor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.doktor_doktor_id_seq', 9, true);


--
-- Name: hasta_hasta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hasta_hasta_id_seq', 5, true);


--
-- Name: kullanici_kullanici_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kullanici_kullanici_id_seq', 15, true);


--
-- Name: muayene_muayene_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.muayene_muayene_id_seq', 3, true);


--
-- Name: randevu_randevu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.randevu_randevu_id_seq', 7, true);


--
-- Name: recete_recete_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.recete_recete_id_seq', 1, true);


--
-- Name: doktor doktor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doktor
    ADD CONSTRAINT doktor_pkey PRIMARY KEY (doktor_id);


--
-- Name: hasta hasta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hasta
    ADD CONSTRAINT hasta_pkey PRIMARY KEY (hasta_id);


--
-- Name: muayene muayene_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.muayene
    ADD CONSTRAINT muayene_pkey PRIMARY KEY (muayene_id);


--
-- Name: randevu randevu_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.randevu
    ADD CONSTRAINT randevu_pkey PRIMARY KEY (randevu_id);


--
-- Name: recete recete_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recete
    ADD CONSTRAINT recete_pkey PRIMARY KEY (recete_id);


--
-- Name: muayene muayene_doktor_doktor_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.muayene
    ADD CONSTRAINT muayene_doktor_doktor_id_fk FOREIGN KEY (doktor_id) REFERENCES public.doktor(doktor_id);


--
-- Name: muayene muayene_hasta_hasta_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.muayene
    ADD CONSTRAINT muayene_hasta_hasta_id_fk FOREIGN KEY (hasta_id) REFERENCES public.hasta(hasta_id);


--
-- Name: randevu randevu_doktor_doktor_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.randevu
    ADD CONSTRAINT randevu_doktor_doktor_id_fk FOREIGN KEY (doktor_id) REFERENCES public.doktor(doktor_id);


--
-- Name: recete recete_doktor_doktor_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recete
    ADD CONSTRAINT recete_doktor_doktor_id_fk FOREIGN KEY (doktor_id) REFERENCES public.doktor(doktor_id);


--
-- Name: recete recete_hasta_hasta_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recete
    ADD CONSTRAINT recete_hasta_hasta_id_fk FOREIGN KEY (hasta_id) REFERENCES public.hasta(hasta_id);


--
-- PostgreSQL database dump complete
--

