<?php
include 'view/header.php';
 // Include header

// Include your database connection or initialization file here

// Function to get the most recent cart data from the database
function get_recent_cart_data() {
    // Modify this according to your database connection method
    $db = new PDO('mysql:host=localhost;dbname=datanhom11', 'root', '');
    $query = 'SELECT * FROM cart ORDER BY ThoiGian DESC LIMIT 1'; // Fetch the most recent entry
    $stmt = $db->query($query);
    return $stmt->fetch(PDO::FETCH_ASSOC); // Use fetch instead of fetchAll to get only one row
}

// Get the most recent cart data
$recent_cart_data = get_recent_cart_data();
?>

<!-- Display the most recent cart data -->
<?php if ($recent_cart_data): ?>
    <h2 style="margin-bottom: 20px;">Recent Purchase Details</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">User ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Details</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Status</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Date</th>
                <th style="border: 1px solid #ddd; padding: 8px;">shipping_address</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['IdUser']; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['ChiTiet']; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['GiaTien']; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['TrangThai']; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['ThoiGian']; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['shipping_address']; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $recent_cart_data['Phone']; ?></td>
            </tr>
        </tbody>
    </table>
<?php else: ?>
    <p>No recent purchases found.</p>
<?php endif; ?>

<?php include 'view/footer.php'; ?>
