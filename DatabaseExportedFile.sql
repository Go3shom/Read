-- ************************************************************************************************************************ --
                                                -- Exported File
-- ************************************************************************************************************************ --

-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `CustomerAddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `CustomerID`, `CustomerName`, `CustomerAddress`) VALUES
(1, 139, 'Ana Trujillo', 'Obere Str. 57'),
(2, 465, 'Antonio Moreno', 'Avda. de la Constitución 2222'),
(3, 765, 'Thomas Hardy', 'Mataderos 2312'),
(4, 231, 'Christina Berglund', '120 Hanover Sq.'),
(5, 468, 'Hanna Moos', 'Berguvsvägen 8'),
(6, 978, 'Francisco Chang', 'Sierras de Granada 9993'),
(7, 487, 'Yang Wang', 'Hauptstr. 29'),
(8, 981, 'Laurence Lebihans', '12, rue des Bouchers'),
(9, 667, 'Elizabeth Lincoln', '23 Tsawassen Blvd.'),
(10, 239, 'Victoria Ashworth', 'Fauntleroy Circus'),
(11, 87, 'Maria Anders', 'Obere Str. 57'),
(12, 932, 'Ana Trujillo', 'Avda. de la Constitución 2222'),
(13, 123, 'Antonio Moreno', 'Mataderos 2312'),
(14, 222, 'Hanna Moos', 'Forsterstr. 57'),
(15, 240, 'Martín Sommer', 'C/ Araquil, 67'),
(16, 987, 'Patricio Simpson', 'Cerrito 333'),
(17, 299, 'Francisco Chang', 'Sierras de Granada 9993'),
(18, 293, 'Yang Wang', 'Hauptstr. 29'),
(19, 888, 'Pedro Afonso', 'Av. dos Lusíadas, 23'),
(20, 777, 'Elizabeth Brown', 'Berkeley Gardens 12 Brewery');

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CustomerID` (`CustomerID`),

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Database: `targetdb`
--
CREATE DATABASE IF NOT EXISTS `targetdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `targetdb`;

-- --------------------------------------------------------
--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `ClientName` varchar(50) NOT NULL,
  `ClientAddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `CustomerAddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ClientID` (`ClientID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--

--
-- Miinus Query on `targetdb`
--
DROP
PROCEDURE `MinusQuery`;
CREATE DEFINER = `root`@`localhost` PROCEDURE `MinusQuery`() NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
SELECT
    `CustomerID`, `CustomerName`, `CustomerAddress`
FROM
    `sourcedb`.`Customers`
WHERE
    (`CustomerID`) AND `CustomerID` NOT IN(
    SELECT
        `ClientID`
    FROM
        `targetdb`.`Clients`
    WHERE
        (`ClientID`)
)