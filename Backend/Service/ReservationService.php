<?php



class ReservationService{

    private $em;


    public function __construct() {
        $this->em = Bootstrap::getEntityManager();
    }


    public function consultarDisponibilidad(string $roomType, \DateTime $checkIn, \DateTime $checkOut): array {
        $qb = $this->em->createQueryBuilder();
    
        // Subconsulta para encontrar las habitaciones ocupadas en el rango de fechas
        $subQuery = $this->em->createQueryBuilder()
            ->select('r.id')
            ->from(Reservation::class, 'res')
            ->join('res.room', 'r')
            ->where('r.type = :roomType')
            ->andWhere('res.checkInDate < :checkOut')
            ->andWhere('res.checkOutDate > :checkIn')
            ->getDQL();
    
        // Consulta principal para obtener las habitaciones disponibles
        $qb->select('room')
            ->from(Room::class, 'room')
            ->where('room.type = :roomType')
            ->andWhere($qb->expr()->notIn('room.id', $subQuery)) // Excluye las habitaciones ocupadas
            ->setParameter('roomType', $roomType)
            ->setParameter('checkIn', $checkIn, \Doctrine\DBAL\Types\Types::DATETIME_MUTABLE)
            ->setParameter('checkOut', $checkOut, \Doctrine\DBAL\Types\Types::DATETIME_MUTABLE);
    
        // Devolver la lista de objetos Room disponibles
        return $qb->getQuery()->getResult();
    }
    
}