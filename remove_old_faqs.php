<?php
$file = 'c:/xampp/htdocs/novoflex/faqs.php';
$content = file_get_contents($file);

// All
$content = preg_replace('/<div class="accordion-item">\s*<h2 class="accordion-header">\s*<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#all-q1".*?<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q11" aria-expanded="false">/s', '<div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#all-q11" aria-expanded="true">', $content);
$content = str_replace('<div id="all-q11" class="accordion-collapse collapse" data-bs-parent="#accordionAll">', '<div id="all-q11" class="accordion-collapse collapse show" data-bs-parent="#accordionAll">', $content);

// Applications
$content = preg_replace('/<div class="accordion-item">\s*<h2 class="accordion-header">\s*<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#app-q1".*?<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q3" aria-expanded="false">/s', '<div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#app-q3" aria-expanded="true">', $content);
$content = str_replace('<div id="app-q3" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">', '<div id="app-q3" class="accordion-collapse collapse show" data-bs-parent="#accordionApplications">', $content);

// Orders
$content = preg_replace('/<div class="accordion-item">\s*<h2 class="accordion-header">\s*<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q1".*?<\/div>\s*<\/div>\s*<\/div>/s', '<div class="p-4 text-center">
                  <p style="color: #52637a;">More FAQs for this category are being updated.</p>
                </div>', $content, 1);

// Quality
$content = preg_replace('/<div class="accordion-item">\s*<h2 class="accordion-header">\s*<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q1".*?<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q3" aria-expanded="false">/s', '<div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q3" aria-expanded="true">', $content);
$content = str_replace('<div id="qual-q3" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">', '<div id="qual-q3" class="accordion-collapse collapse show" data-bs-parent="#accordionQuality">', $content);

// Tech
$content = preg_replace('/<div class="accordion-item">\s*<h2 class="accordion-header">\s*<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q1".*?<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q4" aria-expanded="false">/s', '<div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q4" aria-expanded="true">', $content);
$content = str_replace('<div id="tech-q4" class="accordion-collapse collapse" data-bs-parent="#accordionTech">', '<div id="tech-q4" class="accordion-collapse collapse show" data-bs-parent="#accordionTech">', $content);

// Products
$content = preg_replace('/<div class="accordion-item">\s*<h2 class="accordion-header">\s*<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q1".*?<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q2" aria-expanded="false">.*?<\/div>\s*<\/div>\s*<\/div>/s', '<div class="p-4 text-center">
                  <p style="color: #52637a;">More FAQs for this category are being updated.</p>
                </div>', $content, 1);

file_put_contents($file, $content);
echo "Old FAQs removed successfully.";
