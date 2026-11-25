<?php

$foundCourses = [];

$students = [
    [
        "name" => "Stina",
        "age" => 18,
        "courses" => [
            "programming" => "A",
            "webdevelopment" => "C",
            "test" => "F"
        ]
    ],
    [
        "name" => "Pelle",
        "age" => 17,
        "courses" => [
            "programming" => "B",
            "webdevelopment" => "A"
        ]
    ]
];

foreach ($students as $key => $student) {
    foreach ($student["courses"] as $course => $value) {
        if (!isset($foundCourses[$course])) {
            $foundCourses[$course] = true;
        }
    }
}

?>

<table>
    <tr>
        <th>Person</th>
        <?php foreach ($foundCourses as $key => $value): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?= $student["name"]; ?></td>
            <?php foreach ($foundCourses as $course => $_): ?>
                <?php if(!isset($student["courses"][$course])): ?>
                    <td></td>
                <?php else: ?>
                <td><?= $student["courses"][$course] ?></td>
                <?php endif; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>