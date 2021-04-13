-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourlover`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(2, '4b05a09c-ea0f-447d-90c9-4ed08e9ae2b2', 'database', 'default', '{\"uuid\":\"4b05a09c-ea0f-447d-90c9-4ed08e9ae2b2\",\"displayName\":\"App\\\\Jobs\\\\SendMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMailJob\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMailJob\\\":10:{s:7:\\\"message\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Message\\\";s:2:\\\"id\\\";i:21;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2020-11-09 16:45:59.235828\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_RfcComplianceException: Address in mailbox given [ahmedsalah20103020@gmail.com,ahmedconan17@yahoo.com] does not comply with RFC 2822, 3.6.2. in C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php:355\nStack trace:\n#0 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(272): Swift_Mime_Headers_MailboxHeader->assertValidAddress(\'ahmedsalah20103...\')\n#1 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(117): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)\n#2 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(74): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)\n#3 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleHeaderFactory.php(61): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)\n#4 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleHeaderSet.php(71): Swift_Mime_SimpleHeaderFactory->createMailboxHeader(\'To\', Array)\n#5 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader(\'To\', Array)\n#6 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleMessage.php(299): Swift_Mime_SimpleMessage->setTo(Array)\n#7 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Message.php(164): Swift_Mime_SimpleMessage->addTo(\'ahmedsalah20103...\', NULL)\n#8 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Message.php(98): Illuminate\\Mail\\Message->addAddresses(\'ahmedsalah20103...\', NULL, \'To\')\n#9 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(362): Illuminate\\Mail\\Message->to(\'ahmedsalah20103...\', NULL)\n#10 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(173): Illuminate\\Mail\\Mailable->buildRecipients(Object(Illuminate\\Mail\\Message))\n#11 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(271): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}(Object(Illuminate\\Mail\\Message))\n#12 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(177): Illuminate\\Mail\\Mailer->send(\'backend.message...\', Array, Object(Closure))\n#13 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(178): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactMail))\n#17 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(122): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactMail))\n#18 C:\\xampp\\htdocs\\TOURLOVER\\app\\Listeners\\sendMailListener.php(30): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactMail))\n#19 [internal function]: App\\Listeners\\sendMailListener->handle(Object(App\\Events\\SendMail))\n#20 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\Dispatcher.php(410): call_user_func_array(Array, Array)\n#21 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\Dispatcher.php(236): Illuminate\\Events\\Dispatcher->Illuminate\\Events\\{closure}(\'App\\\\Events\\\\Send...\', Array)\n#22 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php(432): Illuminate\\Events\\Dispatcher->dispatch(\'App\\\\Events\\\\Send...\')\n#23 C:\\xampp\\htdocs\\TOURLOVER\\app\\Jobs\\SendMailJob.php(39): event(Object(App\\Events\\SendMail))\n#24 [internal function]: App\\Jobs\\SendMailJob->handle()\n#25 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): call_user_func_array(Array, Array)\n#26 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(95): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(39): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMailJob))\n#32 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMailJob))\n#33 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#34 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(85): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMailJob), false)\n#35 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMailJob))\n#36 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMailJob))\n#37 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(87): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMailJob))\n#39 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#40 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#41 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#42 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#43 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#44 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#45 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()\n#46 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): call_user_func_array(Array, Array)\n#47 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#48 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(95): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#49 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(39): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#50 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#51 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#52 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Command\\Command.php(258): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#53 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#54 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(920): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#55 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(266): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#56 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(142): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#57 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#58 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#59 C:\\xampp\\htdocs\\TOURLOVER\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#60 {main}', '2020-11-09 14:45:59'),
(3, '50e9884f-4c9e-4eec-a540-3f5d6f5bf126', 'database', 'default', '{\"uuid\":\"50e9884f-4c9e-4eec-a540-3f5d6f5bf126\",\"displayName\":\"App\\\\Jobs\\\\SendMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMailJob\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMailJob\\\":10:{s:7:\\\"message\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Message\\\";s:2:\\\"id\\\";i:22;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2020-11-09 16:48:32.828013\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_RfcComplianceException: Address in mailbox given [ahmedsalah20103020@gmail.com,ahmedconan17@yahoo.com] does not comply with RFC 2822, 3.6.2. in C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php:355\nStack trace:\n#0 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(272): Swift_Mime_Headers_MailboxHeader->assertValidAddress(\'ahmedsalah20103...\')\n#1 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(117): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)\n#2 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(74): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)\n#3 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleHeaderFactory.php(61): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)\n#4 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleHeaderSet.php(71): Swift_Mime_SimpleHeaderFactory->createMailboxHeader(\'To\', Array)\n#5 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader(\'To\', Array)\n#6 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleMessage.php(299): Swift_Mime_SimpleMessage->setTo(Array)\n#7 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Message.php(164): Swift_Mime_SimpleMessage->addTo(\'ahmedsalah20103...\', NULL)\n#8 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Message.php(98): Illuminate\\Mail\\Message->addAddresses(\'ahmedsalah20103...\', NULL, \'To\')\n#9 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(362): Illuminate\\Mail\\Message->to(\'ahmedsalah20103...\', NULL)\n#10 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(173): Illuminate\\Mail\\Mailable->buildRecipients(Object(Illuminate\\Mail\\Message))\n#11 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(271): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}(Object(Illuminate\\Mail\\Message))\n#12 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(177): Illuminate\\Mail\\Mailer->send(\'backend.message...\', Array, Object(Closure))\n#13 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(178): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactMail))\n#17 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(122): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactMail))\n#18 C:\\xampp\\htdocs\\TOURLOVER\\app\\Listeners\\sendMailListener.php(30): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactMail))\n#19 [internal function]: App\\Listeners\\sendMailListener->handle(Object(App\\Events\\SendMail))\n#20 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\Dispatcher.php(410): call_user_func_array(Array, Array)\n#21 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\Dispatcher.php(236): Illuminate\\Events\\Dispatcher->Illuminate\\Events\\{closure}(\'App\\\\Events\\\\Send...\', Array)\n#22 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php(432): Illuminate\\Events\\Dispatcher->dispatch(\'App\\\\Events\\\\Send...\')\n#23 C:\\xampp\\htdocs\\TOURLOVER\\app\\Jobs\\SendMailJob.php(39): event(Object(App\\Events\\SendMail))\n#24 [internal function]: App\\Jobs\\SendMailJob->handle()\n#25 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): call_user_func_array(Array, Array)\n#26 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(95): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(39): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMailJob))\n#32 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMailJob))\n#33 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#34 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(85): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMailJob), false)\n#35 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMailJob))\n#36 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMailJob))\n#37 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(87): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMailJob))\n#39 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#40 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#41 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#42 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#43 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#44 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#45 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()\n#46 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): call_user_func_array(Array, Array)\n#47 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#48 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(95): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#49 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(39): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#50 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#51 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#52 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Command\\Command.php(258): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#53 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#54 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(920): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#55 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(266): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#56 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(142): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#57 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#58 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#59 C:\\xampp\\htdocs\\TOURLOVER\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#60 {main}', '2020-11-09 14:48:32'),
(4, 'f4c55c79-c1bb-4015-a044-7b8e46b2409f', 'database', 'default', '{\"uuid\":\"f4c55c79-c1bb-4015-a044-7b8e46b2409f\",\"displayName\":\"App\\\\Jobs\\\\SendMailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMailJob\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMailJob\\\":10:{s:7:\\\"message\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Message\\\";s:2:\\\"id\\\";i:23;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2020-11-09 16:51:47.405778\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_RfcComplianceException: Address in mailbox given [ahmedsalah20103020@gmail.com,ahmedconan17@yahoo.com] does not comply with RFC 2822, 3.6.2. in C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php:355\nStack trace:\n#0 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(272): Swift_Mime_Headers_MailboxHeader->assertValidAddress(\'ahmedsalah20103...\')\n#1 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(117): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)\n#2 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\Headers\\MailboxHeader.php(74): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)\n#3 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleHeaderFactory.php(61): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)\n#4 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleHeaderSet.php(71): Swift_Mime_SimpleHeaderFactory->createMailboxHeader(\'To\', Array)\n#5 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader(\'To\', Array)\n#6 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mime\\SimpleMessage.php(299): Swift_Mime_SimpleMessage->setTo(Array)\n#7 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Message.php(164): Swift_Mime_SimpleMessage->addTo(\'ahmedsalah20103...\', NULL)\n#8 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Message.php(98): Illuminate\\Mail\\Message->addAddresses(\'ahmedsalah20103...\', NULL, \'To\')\n#9 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(362): Illuminate\\Mail\\Message->to(\'ahmedsalah20103...\', NULL)\n#10 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(173): Illuminate\\Mail\\Mailable->buildRecipients(Object(Illuminate\\Mail\\Message))\n#11 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(271): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}(Object(Illuminate\\Mail\\Message))\n#12 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(177): Illuminate\\Mail\\Mailer->send(\'backend.message...\', Array, Object(Closure))\n#13 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(178): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactMail))\n#17 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(122): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactMail))\n#18 C:\\xampp\\htdocs\\TOURLOVER\\app\\Listeners\\sendMailListener.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactMail))\n#19 [internal function]: App\\Listeners\\sendMailListener->handle(Object(App\\Events\\SendMail))\n#20 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\Dispatcher.php(410): call_user_func_array(Array, Array)\n#21 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\Dispatcher.php(236): Illuminate\\Events\\Dispatcher->Illuminate\\Events\\{closure}(\'App\\\\Events\\\\Send...\', Array)\n#22 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php(432): Illuminate\\Events\\Dispatcher->dispatch(\'App\\\\Events\\\\Send...\')\n#23 C:\\xampp\\htdocs\\TOURLOVER\\app\\Jobs\\SendMailJob.php(39): event(Object(App\\Events\\SendMail))\n#24 [internal function]: App\\Jobs\\SendMailJob->handle()\n#25 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): call_user_func_array(Array, Array)\n#26 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(95): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(39): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMailJob))\n#32 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMailJob))\n#33 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#34 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(85): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMailJob), false)\n#35 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMailJob))\n#36 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMailJob))\n#37 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(87): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#38 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMailJob))\n#39 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#40 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#41 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#42 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#43 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#44 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#45 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()\n#46 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): call_user_func_array(Array, Array)\n#47 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#48 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(95): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#49 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(39): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#50 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#51 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#52 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Command\\Command.php(258): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#53 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#54 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(920): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#55 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(266): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#56 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\symfony\\console\\Application.php(142): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#57 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#58 C:\\xampp\\htdocs\\TOURLOVER\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#59 C:\\xampp\\htdocs\\TOURLOVER\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#60 {main}', '2020-11-09 14:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utm_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`, `phone`, `utm_source`, `utm_medium`) VALUES
(28, 'ahmed salah', 'ahmedconan17@yahoo.com', 'send message', 'unread', '2020-11-17 08:47:36', '2020-11-17 08:47:36', '01025894984', 'fb', 'plexus'),
(29, 'ahmed salah', 'ahmedconan17@yahoo.com', 'رسالة', 'unread', '2020-11-17 09:06:33', '2020-11-17 09:06:33', '01025894984', 'fb', 'plexus'),
(30, 'ahmed salah', 'ahmedconan17@yahoo.com', 'شيسشيس', 'unread', '2020-11-17 09:07:06', '2020-11-17 09:07:06', '01025894984', 'fb', 'plexus'),
(31, 'ahmed salah', 'ahmedconan17@yahoo.com', 'fds', 'unread', '2020-11-17 09:07:31', '2020-11-17 09:07:31', '01025894984', 'fb', 'plexus'),
(32, 'ahmed salah', 'ahmedconan17@yahoo.com', 'adsdsa', 'unread', '2020-11-17 09:29:38', '2020-11-17 09:29:38', '01025894984', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2020_11_08_124201_create_messages_table', 1),
(45, '2020_11_08_125209_create_settings_table', 1),
(46, '2020_11_08_132011_create_jobs_table', 1),
(47, '2020_11_09_003746_add_phone_to_messages_table', 2),
(48, '2020_11_17_102055_add_utm_source_to_messages', 3),
(49, '2020_11_17_102129_add_utm_medium_to_messages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_name`, `setting_value`, `created_at`, `updated_at`) VALUES
(1, 'email', 'ahmedconan17@yahoo.com', NULL, '2020-11-08 14:14:34'),
(2, 'address', 'cairo', NULL, '2020-11-08 14:14:34'),
(3, 'phone', '01025894984', NULL, '2020-11-08 14:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifyMail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ahmedconan17@yahoo.com',
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'AhmedSalah20103020@gmail.com',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `notifyMail`, `from_email`, `phone`, `email_verified_at`, `password`, `rule`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'mharisa40@gmail.com,yehia_younis@hotmail.com', 'AhmedSalah20103020@gmail.com', '010258949846', NULL, '$2y$10$rx1TVGZDSOJof6Smjrh3OOeBe54aJsZMqpcBwwei5XxoB4jhTq1.2', 'admin', 'D661lYYx2I1rrhFdydOpiAXE3OtUmNJLUn7Au9UzvOmC77wyDAL8j56jHKrO', '2020-11-08 14:06:26', '2020-11-09 14:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_setting_name_unique` (`setting_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
