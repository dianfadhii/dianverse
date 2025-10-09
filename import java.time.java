import java.time.Instant;
import java.util.UUID;

/**
 * Representasi pembayaran iuran keanggotaan (simulasi sederhana).
 */
public class Payment {
    private final String paymentId;
    private final String memberId;
    private final double amount;
    private final Instant timestamp;

    public Payment(String memberId, double amount) {
        this.paymentId = UUID.randomUUID().toString();
        this.memberId = memberId;
        this.amount = amount;
        this.timestamp = Instant.now();
    }

    public String getPaymentId() { return paymentId; }
    public String getMemberId() { return memberId; }
    public double getAmount() { return amount; }
    public Instant getTimestamp() { return timestamp; }

    @Override
    public String toString() {
        return "Payment{" +
                "paymentId='" + paymentId + '\'' +
                ", memberId='" + memberId + '\'' +
                ", amount=" + amount +
                ", timestamp=" + timestamp +
                '}';
    }
}
