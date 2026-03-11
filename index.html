<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ITACHI VIP STORE</title>
    <style>
        :root { --pink: #ff0055; --blue: #00f2ff; --yt-black: #0f0f0f; --card-bg: #1a1a1a; --green: #00ff88; --gold: #ffcc00; }
        body { background-color: var(--yt-black); color: white; font-family: 'Segoe UI', sans-serif; margin: 0; scroll-behavior: smooth; overflow-x: hidden; }

        /* --- Header & Top Bar --- */
        .top-bar { background: linear-gradient(90deg, var(--pink), var(--gold), var(--pink)); background-size: 200% auto; animation: shine 2s linear infinite; color: black; text-align: center; padding: 10px; font-size: 11px; font-weight: 900; position: fixed; top: 0; width: 100%; z-index: 2000; box-shadow: 0 0 15px var(--pink); }
        @keyframes shine { to { background-position: 200% center; } }

        header { position: fixed; top: 38px; width: 100%; background: rgba(15,15,15,0.98); z-index: 1000; border-bottom: 2px solid var(--pink); padding: 12px 20px; display: flex; align-items: center; box-sizing: border-box; justify-content: space-between; }
        .menu-btn { font-size: 24px; cursor: pointer; color: var(--pink); }
        .logo { font-weight: 900; letter-spacing: 1px; font-size: 18px; }

        /* --- Mega Combo Button --- */
        .mega-combo-wrapper { padding: 15px; margin-top: 100px; }
        .mega-btn { display: block; background: linear-gradient(45deg, #ff0055, #ffcc00); color: #000; text-decoration: none; padding: 20px; border-radius: 15px; text-align: center; font-weight: 900; font-size: 16px; animation: pulse-glow 1.5s infinite; box-shadow: 0 0 20px rgba(255, 0, 85, 0.4); }
        @keyframes pulse-glow { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.02); } }

        /* --- Live Notification --- */
        #live-notif { position: fixed; bottom: 85px; left: 15px; background: rgba(0,0,0,0.95); color: white; padding: 12px 18px; border-radius: 12px; border-left: 4px solid var(--green); font-size: 11px; z-index: 5000; transition: 0.5s; transform: translateX(-160%); box-shadow: 0 5px 20px rgba(0,0,0,0.8); }
        #live-notif.show { transform: translateX(0); }

        /* --- Sidebar --- */
        .sidebar { position: fixed; top: 0; left: -280px; width: 260px; height: 100%; background: #111; z-index: 3000; transition: 0.4s; padding: 25px; border-right: 2px solid var(--pink); box-sizing: border-box; }
        .sidebar.active { left: 0; }
        .cat-item { display: block; padding: 15px; color: #ccc; text-decoration: none; font-weight: bold; background: #1a1a1a; margin-bottom: 10px; border-radius: 8px; border-left: 3px solid var(--pink); }
        .overlay { position: fixed; display: none; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 2500; }
        .overlay.active { display: block; }

        /* --- Content Sections --- */
        .content-wrapper { padding: 10px; padding-bottom: 120px; }
        .page-section { display: none; }
        .active-section { display: block; animation: fadeIn 0.4s ease; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        /* --- Video Cards --- */
        .yt-item { background: var(--card-bg); margin-bottom: 25px; border-radius: 15px; overflow: hidden; border: 1px solid #333; position: relative; }
        .popular-tag { position: absolute; top: 10px; left: 10px; background: var(--gold); color: #000; padding: 4px 10px; font-weight: 900; font-size: 10px; border-radius: 4px; z-index: 5; }
        .img-box { width: 100%; aspect-ratio: 16/9; position: relative; }
        .img-box img { width: 100%; height: 100%; object-fit: cover; }
        .qty-tag { position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.85); color: #fff; padding: 4px 10px; font-size: 11px; border-radius: 6px; font-weight: bold; border: 1px solid #444; }

        .info { padding: 18px; }
        .v-title { font-size: 18px; font-weight: bold; margin-bottom: 6px; display: block; color: #fff; }
        .v-desc { font-size: 12px; color: #aaa; margin-bottom: 15px; display: block; line-height: 1.4; }

        /* --- Buttons with Price Logic --- */
        .pay-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .btn { text-align: center; padding: 14px 5px; border-radius: 10px; text-decoration: none; font-weight: 900; font-size: 11px; text-transform: uppercase; transition: 0.3s; }
        .btn-half { background: #222; color: var(--blue); border: 1px solid var(--blue); }
        .btn-full { background: #fff; color: #000; border: none; box-shadow: 0 4px 15px rgba(255,255,255,0.1); }
        .btn:active { transform: scale(0.95); }

        /* --- Nav Bar --- */
        .bottom-nav { position: fixed; bottom: 0; width: 100%; background: #000; display: flex; justify-content: space-around; padding: 18px 0; border-top: 1px solid #222; z-index: 2000; }
        .nav-tab { color: #555; font-size: 10px; text-align: center; cursor: pointer; font-weight: bold; }
        .nav-tab.active { color: var(--pink); text-shadow: 0 0 10px var(--pink); }

        .tc-tag { text-align: center; padding: 25px; font-size: 10px; color: #444; border-top: 1px solid #222; margin-top: 30px; }
    </style>
</head>
<body>

<div id="live-notif">✅ Checking new orders...</div>

<div class="top-bar">🔥 MEGA OFFER: 50% OFF FOR NEXT <span id="timer">04:59</span> MINS! 🔥</div>
<div class="overlay" id="overlay" onclick="toggleM()"></div>

<header>
    <div class="menu-btn" onclick="toggleM()">☰</div>
    <div class="logo">ITACHI <span style="color:var(--pink)">STORE</span></div>
    <div style="font-size: 20px;">🛡️</div>
</header>

<div class="sidebar" id="sidebar">
    <h3 style="color:var(--pink); margin-bottom:20px;">VIP CATEGORIES</h3>
    <a href="javascript:void(0)" class="cat-item" onclick="scrollToCat('all')">🌐 All Collections</a>
    <a href="javascript:void(0)" class="cat-item" onclick="scrollToCat('indian')">🇮🇳 Indian VIP</a>
    <a href="javascript:void(0)" class="cat-item" onclick="scrollToCat('russian')">🇷🇺 Russian VIP</a>
    <a href="javascript:void(0)" class="cat-item" onclick="scrollToCat('cctv')">📹 CCTV Leaks</a>
</div>

<div class="mega-combo-wrapper">
    <a href="order.html?p=199&type=mega" class="mega-btn">
        👑 ALL GROUPS IN ONE PACK (Hinglish) 👑<br>
        <span style="font-size: 24px;">₹199 ONLY</span><br>
        <small style="font-size: 10px; font-weight: normal; opacity: 0.9;">Includes: All VIP Channels + Daily Updates + Support</small>
    </a>
</div>

<div class="content-wrapper">
    <div id="home-sec" class="page-section active-section">
                <div class="yt-item" data-cat="indian">
            <div class="popular-tag">MOST POPULAR 🔥</div>            <div class="img-box">
                <img src="main3.jpg" onerror="this.src='https://picsum.photos/600/338?random=0'">
                <div class="qty-tag">1250 Videos | 1080p HD</div>
            </div>
            <div class="info">
                <span class="v-title">INDIAN CHILD PREMIUM PACK</span>
                <span class="v-desc">Full access to CHILD Indian cloud storage. High-speed servers, no buffering, and lifetime validity with daily updates.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=99&type=full" class="btn btn-full">Full Pay (₹99)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="russian">
            <div class="popular-tag">MOST POPULAR 🔥</div>            <div class="img-box">
                <img src="main10.jpg" onerror="this.src='https://picsum.photos/600/338?random=1'">
                <div class="qty-tag">850 Videos | 4K UHD</div>
            </div>
            <div class="info">
                <span class="v-title">HINDI PREMIUM COLLECTION</span>
                <span class="v-desc">Hindi Indian CHILD access. Crystal clear 4K quality content with instant download support. Best in market.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=79&type=full" class="btn btn-full">Full Pay (₹79)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="cctv">
                        <div class="img-box">
                <img src="main1.jpg" onerror="this.src='https://picsum.photos/600/338?random=2'">
                <div class="qty-tag">450 Videos | 720p HD</div>
            </div>
            <div class="info">
                <span class="v-title">MOM AND SON</span>
                <span class="v-desc">Uncut MOM AND SON from various private locations. Real-time footage captured in high definition. Limited time access.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=89&type=full" class="btn btn-full">Full Pay (₹89)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="indian">
                        <div class="img-box">
                <img src="main4.jpg" onerror="this.src='https://picsum.photos/600/338?random=3'">
                <div class="qty-tag">1100 Videos | 1080p</div>
            </div>
            <div class="info">
                <span class="v-title">FOREST LEAK VIDEOS </span>
                <span class="v-desc">Exclusive home-made collections from private sources. Guaranteed original quality with smooth streaming links.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=79&type=full" class="btn btn-full">Full Pay (₹79)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="russian">
                        <div class="img-box">
                <img src="main5.jpg" onerror="this.src='https://picsum.photos/600/338?random=4'">
                <div class="qty-tag">1500 Videos | 4K HD</div>
            </div>
            <div class="info">
                <span class="v-title">SISTER AND BRO </span>
                <span class="v-desc">High-end Russian model shoots and private clips. Premium server links for ultra-fast downloading experience.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=69&type=full" class="btn btn-full">Full Pay (₹69)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="cctv">
                        <div class="img-box">
                <img src="main6.jpg" onerror="this.src='https://picsum.photos/600/338?random=5'">
                <div class="qty-tag">600 Videos | 1080p</div>
            </div>
            <div class="info">
                <span class="v-title">ONLY GIRLS FINGERING</span>
                <span class="v-desc">Private hotel room footage leaks. High quality 1080p resolution. Secure and encrypted cloud storage links.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=70&type=full" class="btn btn-full">Full Pay (₹70)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="indian">
                        <div class="img-box">
                <img src="main1.jpg" onerror="this.src='https://picsum.photos/600/338?random=6'">
                <div class="qty-tag">2000 Videos | 720p HD</div>
            </div>
            <div class="info">
                <span class="v-title">GIRLFRIEND AND BOYFRIEND</span>
                <span class="v-desc">Trending viral clips of college groups. Full HD quality with non-buffering player support. Instant access after pay.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=89&type=full" class="btn btn-full">Full Pay (₹89)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="indian">
                        <div class="img-box">
                <img src="main8.jpg" onerror="this.src='https://picsum.photos/600/338?random=7'">
                <div class="qty-tag">5000 Videos | Mixed HD</div>
            </div>
            <div class="info">
                <span class="v-title">PRIVATE CLOUD MEGA DRIVE</span>
                <span class="v-desc">Mega drive access with 500GB+ content. Mixed categories with premium sorting. No dead links policy.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=99&type=full" class="btn btn-full">Full Pay (₹99)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="russian">
                        <div class="img-box">
                <img src="main9.jpg" onerror="this.src='https://picsum.photos/600/338?random=8'">
                <div class="qty-tag">700 Videos | 1080p HD</div>
            </div>
            <div class="info">
                <span class="v-title">CCTV PREMIUM LEAKS</span>
                <span class="v-desc">The best of Moscow's private collection. Rare footage with high-definition audio and video sync. Verified links.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=99&type=full" class="btn btn-full">Full Pay (₹99)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
                <div class="yt-item" data-cat="cctv">
                        <div class="img-box">
                <img src="main2.jpg" onerror="this.src='https://picsum.photos/600/338?random=9'">
                <div class="qty-tag">300 Videos | HD Ready</div>
            </div>
            <div class="info">
                <span class="v-title">STREET CAMERA LEAKS</span>
                <span class="v-desc">Hidden camera and street surveillance leaks. Raw footage directly from the source servers. Daily new uploads.</span>
                <div class="pay-grid">
                    <a href="order.html?p=49&type=half" class="btn btn-half">Half Pay (₹49)<br><small>Get 50% Video</small></a>
                    <a href="order.html?p=100&type=full" class="btn btn-full">Full Pay (₹100)<br><small>Instant Access</small></a>
                </div>
            </div>
        </div>
            </div>

    <div id="feedback-sec" class="page-section">
        <h2 style="color:var(--blue); padding: 15px;">User Feedbacks (150+)</h2>
        <div style="padding:10px;">
            <div style="background:#111; padding:15px; border-radius:12px; margin-bottom:12px; border-left:4px solid var(--green);">
                <b>@Rahul_01:</b> Bhai mast content hai, half pay kiya tha turant link mil gaya! ⭐⭐⭐⭐⭐
            </div>
            <div style="background:#111; padding:15px; border-radius:12px; margin-bottom:12px; border-left:4px solid var(--green);">
                <b>@Vicky_VIP:</b> Best quality 1080p content. Trusted admin.
            </div>
        </div>
    </div>

    <div id="profile-sec" class="page-section">
        <div style="text-align: center; padding: 40px 20px; background: #111; border-radius: 25px; border: 1px solid var(--pink);">
            <div style="font-size: 50px;">👺</div>
            <h2 style="margin: 15px 0;">ITACHI ADMIN</h2>
            <p style="color:#888; font-size: 14px;">Verified Provider | 5.2k+ Satisfied Buyers</p>
            <a href="https://t.me/PremiumSingh" style="display:block; background:var(--pink); color:white; padding:18px; border-radius:15px; text-decoration:none; font-weight:900; margin-top:20px;">MESSAGE ON TELEGRAM</a>
        </div>
    </div>

    <div class="tc-tag">
        <p>© 2026 ITACHI STORE. All Rights Reserved.</p>
        <p>18+ Only | Digital items are non-refundable.</p>
    </div>
</div>

<nav class="bottom-nav">
    <div class="nav-tab active" onclick="showT('home-sec', this)"><span>🏠</span><br>HOME</div>
    <div class="nav-tab" onclick="showT('feedback-sec', this)"><span>💬</span><br>FEEDBACK</div>
    <div class="nav-tab" onclick="showT('profile-sec', this)"><span>👤</span><br>SUPPORT</div>
</nav>

<script>
    // --- LIVE NOTIFICATIONS LOGIC ---
    const names = ["Anshul", "Rohan", "Sandeep", "Vikas", "Kabir", "Arjun", "Deepak"];
    const cities = ["Delhi", "Mumbai", "Lucknow", "Patna", "Indore", "Jaipur"];
    const packs = ["Mega Combo Pack", "Indian VIP Pack", "Russian Pack", "Half Video Pack"];

    function showLiveNotif() {
        const notif = document.getElementById('live-notif');
        const name = names[Math.floor(Math.random()*names.length)];
        const city = cities[Math.floor(Math.random()*cities.length)];
        const pack = packs[Math.floor(Math.random()*packs.length)];
        
        notif.innerHTML = `✅ <b>${name}</b> from ${city} just bought <b>${pack}</b>`;
        notif.classList.add('show');
        setTimeout(() => notif.classList.remove('show'), 3500);
    }
    setInterval(showLiveNotif, 8000);

    // --- TIMER LOGIC ---
    let time = 300;
    setInterval(() => {
        let m = Math.floor(time/60); let s = time%60;
        document.getElementById('timer').innerHTML = `0${m}:${s<10?'0':''}${s}`;
        if(time>0) time--;
    }, 1000);

    // --- NAVIGATION ---
    function toggleM() {
        document.getElementById('sidebar').classList.toggle('active');
        document.getElementById('overlay').classList.toggle('active');
    }

    function showT(id, el) {
        document.querySelectorAll('.page-section').forEach(s => s.classList.remove('active-section'));
        document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
        document.getElementById(id).classList.add('active-section');
        el.classList.add('active');
        window.scrollTo(0,0);
    }

    function scrollToCat(cat) {
        showT('home-sec', document.querySelector('.nav-tab'));
        toggleM();
        if(cat !== 'all') {
            const el = document.querySelector(`.yt-item[data-cat="${cat}"]`);
            if(el) window.scrollTo({ top: el.offsetTop - 100, behavior: "smooth" });
        }
    }
</script>

</body>
</html>
