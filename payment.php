<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Secure Payment - VIP STORE</title>
    <style>
        :root { --pink: #ff0055; --blue: #00f2ff; --yt-black: #0f0f0f; --card-bg: #1a1a1a; --green: #00ff88; --gold: #ffcc00; }
        
        body { background-color: var(--yt-black); color: white; font-family: 'Segoe UI', sans-serif; margin: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; overflow-x: hidden; }

        /* --- Top Bar --- */
        .top-bar { background: linear-gradient(90deg, var(--pink), var(--gold), var(--pink)); background-size: 200% auto; animation: shine 2s linear infinite; color: black; text-align: center; padding: 10px; font-size: 11px; font-weight: 900; position: fixed; top: 0; width: 100%; z-index: 2000; box-shadow: 0 2px 15px var(--pink); }
        @keyframes shine { to { background-position: 200% center; } }

        /* --- Payment Card --- */
        .payment-card { width: 92%; max-width: 400px; background: var(--card-bg); border-radius: 25px; padding: 25px; border: 1px solid #333; box-shadow: 0 15px 50px rgba(0,0,0,0.8); text-align: center; margin-top: 50px; box-sizing: border-box; }

        .timer-box { font-size: 11px; background: rgba(255,204,0,0.1); color: var(--gold); padding: 8px; border-radius: 12px; margin-bottom: 20px; border: 1px solid rgba(255,204,0,0.2); font-weight: bold; }

        .price-tag { font-size: 38px; font-weight: 900; color: var(--green); margin: 10px 0; text-shadow: 0 0 15px rgba(0,255,136,0.3); }

        /* --- QR Section --- */
        .qr-wrapper { background: white; padding: 12px; border-radius: 20px; display: inline-block; margin: 15px 0; box-shadow: 0 0 20px rgba(255,255,255,0.1); }
        .qr-wrapper img { width: 180px; height: 180px; border-radius: 10px; display: block; }

        /* --- UPI Box --- */
        .upi-box { background: #000; border: 1px dashed var(--blue); padding: 15px; border-radius: 15px; margin: 15px 0; cursor: pointer; transition: 0.3s; }
        .upi-box:active { transform: scale(0.97); }
        .upi-box small { color: #666; font-size: 10px; display: block; margin-bottom: 5px; letter-spacing: 1px; }
        .upi-box b { color: var(--blue); font-size: 13px; word-break: break-all; }

        /* --- Inputs --- */
        .input-group { text-align: left; margin-bottom: 15px; }
        label { font-size: 10px; color: var(--pink); text-transform: uppercase; font-weight: bold; margin-bottom: 6px; display: block; }
        input { width: 100%; padding: 15px; background: #000; border: 1px solid #333; border-radius: 12px; color: #fff; font-size: 15px; outline: none; box-sizing: border-box; transition: 0.3s; }
        input:focus { border-color: var(--green); }

        /* --- Verify Button --- */
        .verify-btn { width: 100%; background: linear-gradient(45deg, var(--green), #00cc6e); color: #000; padding: 18px; border-radius: 15px; font-weight: 900; border: none; cursor: pointer; font-size: 16px; margin-top: 10px; text-transform: uppercase; box-shadow: 0 5px 20px rgba(0, 255, 136, 0.3); }
        .verify-btn:active { transform: scale(0.96); }

        #error-msg { color: #ff4444; font-size: 11px; margin-top: 10px; display: none; font-weight: bold; }

        .security-footer { font-size: 10px; color: #555; margin-top: 20px; display: flex; justify-content: center; gap: 15px; }
    </style>
</head>
<body>

<div class="top-bar">🔒 SECURE ENCRYPTED PAYMENT GATEWAY | ITACHI STORE 🔒</div>

<div class="payment-card">
    <div class="timer-box">⚠️ PAYMENT SESSION EXPIRES IN: <span id="timer">05:00</span></div>
    
    <span style="font-size: 12px; color: #aaa; text-transform: uppercase;">Amount to Pay</span>
    <div class="price-tag">₹199</div>
    
    <div class="qr-wrapper">
        <img src="qr.jpg" alt="Scan QR to Pay">
    </div>

    <div class="upi-box" onclick="copyUpi()">
        <small>TAP TO COPY UPI ID 👇</small>
        <b id="upi-text">ramchandrasalvi@yapl</b>
    </div>

    <div class="input-group">
        <label>Transaction ID (Txn ID)</label>
        <input type="text" id="txn_id" placeholder="Enter Transaction ID" autocomplete="off">
    </div>

    <div class="input-group">
        <label>12-Digit UTR Number</label>
        <input type="number" id="utr_no" placeholder="Enter UTR Number" autocomplete="off">
    </div>

    <p id="error-msg">❌ Invalid Details! Please check Txn ID & UTR.</p>

    <button class="verify-btn" onclick="saveAndVerify()">VERIFY & GET ACCESS</button>

    <div class="security-footer">
        <span>🛡️ Secured</span>
        <span>⚡ Instant</span>
        <span>💎 VIP</span>
    </div>
</div>

<script>

const params = new URLSearchParams(window.location.search);

const price = params.get("p") || "99";
const telegram = params.get("telegram") || "unknown";
const whatsapp = params.get("whatsapp") || "unknown";
const type = params.get("type") || "full";

const priceTag = document.querySelector(".price-tag");
if(priceTag){
    priceTag.innerText = "₹" + price;
}

let time = 300;
setInterval(() => {
    let m = Math.floor(time / 60);
    let s = time % 60;

    document.getElementById("timer").innerHTML =
        `0${m}:${s < 10 ? "0" : ""}${s}`;

    if(time > 0) time--;
}, 1000);


function copyUpi() {

    const upi = document.getElementById("upi-text").innerText;

    navigator.clipboard.writeText(upi).then(() => {
        alert("✅ UPI ID Copied! Pay ₹" + price + " now.");
    });
}


function saveAndVerify() {

    const txn = document.getElementById("txn_id").value.trim();
    const utr = document.getElementById("utr_no").value.trim();

    if(txn.length >= 4 && utr.length >= 12){

        const admin = "PremiumSingh";

        const msg =
`🚀 *NEW VIP ORDER*

📱 *WhatsApp:* ${whatsapp}
👤 *Telegram:* ${telegram}
📦 *Plan:* ${type}
💰 *Amount:* ₹${price}

🆔 *Txn ID:* ${txn}
🔢 *UTR No:* ${utr}

✅ Payment Done. Send Access!`;

        const encoded = encodeURIComponent(msg);

        window.location.href = `https://t.me/${admin}?text=${encoded}`;

    } else {

        document.getElementById("error-msg").style.display = "block";

    }

}

</script>

</body>
</html>
