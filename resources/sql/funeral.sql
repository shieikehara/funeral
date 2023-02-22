
CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `tel` varchar(11) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `funeral_id` int(11) NOT NULL,
    `admin` int(11) NOT NULL DEFAULT 0   
);

CREATE TABLE `funerals` (
    `id` int(11) NOT NULL,
    `family_name` varchar(50) NOT NULL,
    `deceased` varchar(50) NOT NULL,
    `name` varchar(50) NOT NULL,
    `day1` varchar(50),
    `day2` varchar(50),
    `dinner` int(11),
    `lunch` int(11),
    `funeral_style` varchar(50) NOT NULL,
    `created_at` datetime,
    `updated_at` datetime
);

INSERT INTO `funeral` (`id`, `family_name`, `deceased`, `name`, `day1`, `day2`, `dinner`, `lunch`, `funeral_style`, `created_at`, `updated_at`) VALUES
(1, '山田家', '山田太郎', '山田次郎', '2023-01-01', '202301-02', '10', '10', '2日間仏式', now(), now());

CREATE TABLE `flowers` (
    `id` int(11) NOT NULL,
    `name`varchar(50) NOT NULL,
    `tel` varchar(11) NOT NULL,
    `nameplate` varchar(100) NOT NULL,
    `flower` varchar(50) NOT NULL,
    `volume` int(11) NOT NULL,
    `funeral_id` int(11) NOT NULL,
    `created_at` datetime
);

CREATE TABLE `u_flowers` (
    `id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `flower_id` int(11) NOT NULL,
    `created_at` datetime
);

CREATE TABLE `forms` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `tel` varchar(11),
    `mail` varchar(100) NOT NULL,
    `body` varchar(500) NOT NULL,
    `created_at` datetime,
    `updated_at` datetime
);

ALTER TABLE `users` ADD PRIMARY KEY (`id`);

ALTER TABLE `funerals` ADD PRIMARY KEY (`id`);

ALTER TABLE `flowers` ADD PRIMARY KEY (`id`);

ALTER TABLE `u_flowers` ADD PRIMARY KEY (`id`);

ALTER TABLE `forms` ADD PRIMARY KEY (`id`);
