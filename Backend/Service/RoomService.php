<?php
use Doctrine\ORM\EntityManagerInterface;

class RoomService
{
public function getAvailableRoomsByType(
    string $roomType,
    \DateTime $checkIn,
    \DateTime $checkOut,
    EntityManagerInterface $em
): int {
    $qb = $em->createQueryBuilder();

    // Subconsulta para encontrar las habitaciones ocupadas en el rango de fechas
    $subQuery = $em->createQueryBuilder()
        ->select('r.id')
        ->from(Reservation::class, 'res')
        ->join('res.room', 'r')
        ->where('r.type = :roomType')
        ->andWhere('res.checkInDate < :checkOut')
        ->andWhere('res.checkOutDate > :checkIn')
        ->getDQL();

    // Consulta principal para contar las habitaciones disponibles
    $qb->select('COUNT(room.id)')
        ->from(Room::class, 'room')
        ->where('room.type = :roomType')
        ->andWhere($qb->expr()->notIn('room.id', $subQuery)); // Excluye las habitaciones ocupadas
        $qb->setParameter('roomType', $roomType);
        $qb->setParameter('checkIn', $checkIn, \Doctrine\DBAL\Types\Types::DATETIME_MUTABLE);
        $qb->setParameter('checkOut', $checkOut, \Doctrine\DBAL\Types\Types::DATETIME_MUTABLE);
        

    // Devolver el número de habitaciones disponibles
    return (int) $qb->getQuery()->getSingleScalarResult(); 
}

}

// Configuración
$roomType = 'Deluxe';
$checkIn = new \DateTime('2024-12-02');
$checkOut = new \DateTime('2024-12-04');

$roomService = new RoomService();
$availableRooms = $roomService->getAvailableRoomsByType($roomType, $checkIn, $checkOut, $em);

echo "Habitaciones disponibles de tipo $roomType: $availableRooms";
