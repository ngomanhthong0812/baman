const code = document.getElementById("code").dataset.value;
const total = document.getElementById("total").dataset.value;

const bankId = "MB";
const accountNo = "1025693979";
const template = "default";
const amount = total;
const description = code;
const accountName = encodeURIComponent("HOANG MINH HUY");

const qrUrl = `https://img.vietqr.io/image/${bankId}-${accountNo}-${template}.png?amount=${amount}&addInfo=${description}&accountName=${accountName}`;
document.getElementById("qrCode").src = qrUrl;

const intervalId = setInterval(() => {
  checkPaid();
}, 1000);

async function checkPaid() {
  try {
    const res = await fetch(
      "https://script.google.com/macros/s/AKfycbydGHIi-GkE8gfE6yKIDMj074SdPa3hVFyTo-JvrRwfaXJ67lfpZ6SxhKvd9pyC8ziNJw/exec"
    );
    const data = await res.json();
    const result = data.data;
    const matched = result.find(
      (item) =>
        String(item["Mô tả"] || "").includes(code) &&
        parseInt(item["Giá trị"]) === parseInt(total)
    );
    if (matched) {
      fetch("/baman-v2/api/update-payment-status.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          code: code,
          payment_status: "paid",
        }),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.success) {
            clearInterval(intervalId);

            alert("Thanh toán thành công! Cảm ơn bạn.");
            window.location.href = "/baman-v2/index.php";
          } else {
            console.error("❌ Lỗi khi cập nhật:", data.error);
          }
        });
    } else {
      console.log("⏳ Đang chờ thanh toán...");
    }
  } catch (error) {
    console.error("Lỗi khi fetch dữ liệu:", error);
  }
}
